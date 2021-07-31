<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit15d7147fc0bb4f6d09c77ecbfd024593
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit15d7147fc0bb4f6d09c77ecbfd024593::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit15d7147fc0bb4f6d09c77ecbfd024593::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit15d7147fc0bb4f6d09c77ecbfd024593::$classMap;

        }, null, ClassLoader::class);
    }
}