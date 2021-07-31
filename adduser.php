<?php
require_once __DIR__ . '/header.php'; ?>


<div class="container">
    <form>
        <div class="mb-3 row">
            <label for="user_id" class="form-label col-sm-2">User Id</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="user_id" required name="user_id">

            </div>
        </div>
        <div class="mb-3 row">
            <label for="user_name" class="form-label col-sm-2">User Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="user_name" required name="user_name">

            </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="form-label col-sm-2">Email address</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" required name="email">

            </div>
        </div>
        <div class="mb-3 row">
            <label for="mobile" class="form-label col-sm-2">Mobile</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="mobile" required name="mobile">

            </div>
        </div>

        <div class="mb-3 row">
            <label for="role" class="form-label col-sm-2">Role</label>
            <div class="col-sm-10">
                <select name="role" id="role" required class="form-control">
                    <option></option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="password " class="form-label col-sm-2">Password</label>
            <div class="col-sm-10 "> <input type="password" class="form-control " id="password" name="password" required></div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php
require_once __DIR__ . '/footer.php';
