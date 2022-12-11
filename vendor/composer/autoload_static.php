<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfcf06b297ac2c1df84e562cab6c1e1e3
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfcf06b297ac2c1df84e562cab6c1e1e3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfcf06b297ac2c1df84e562cab6c1e1e3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfcf06b297ac2c1df84e562cab6c1e1e3::$classMap;

        }, null, ClassLoader::class);
    }
}
