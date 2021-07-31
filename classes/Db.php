<?php 
    class DB extends PDO{
        
        protected $dbuser,$dbpass,$dbhost,$dbname,$dbprefix,$db;
        protected $msg = "Error Updating information";

        public function __construct(){
            $this->getCon();
        }

        public function getCon(){
            $this->setConProp();
            try{
                $con = new PDO("mysql:host=". $this->dbhost . ";dbname=". $this->dbname, $this->dbuser, $this->dbpass);
                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->db = $con;
            }catch(PDOException $e){
                return $this->getresp(1,"Error connecting database");
            }
        }

        public function setConProp(){
            $db_config = require_once __DIR__   . "/../config/config.php";
            foreach($db_config as $k=> $v)  $this->$k = $v;
        }

        public function get_query($sql, $params = []){
            try{
                $query = $this->db->prepare($sql);
                $query->execute($params);
                return $query; 
            }catch(PDOException $e){
            return $this->getresp(1, $this->msg);
            }
        }

        public function getData($sql,$params = []){
            $data = (object) ['data' => ''];
            $query = $this->get_query($sql,$params);
            $data->cnt = $query->rowCount();
            if($data->cnt == 0)  $this->getresp(1,"No data found");
            if($query){
                $data->data  = $query->fetchAll(PDO::FETCH_OBJ);
            }
            return $data;
        }

        public function getresp($code,$msg){
            $obj = new stdclass();
            $obj->err = $code;
            $obj->msg = $msg;
            return $obj;
        }
    }
?>