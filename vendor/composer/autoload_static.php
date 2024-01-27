<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteac3d9a0e45c4a03a05bfdd1c1be1293
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Phama\\Showerman\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Phama\\Showerman\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticIniteac3d9a0e45c4a03a05bfdd1c1be1293::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteac3d9a0e45c4a03a05bfdd1c1be1293::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticIniteac3d9a0e45c4a03a05bfdd1c1be1293::$classMap;

        }, null, ClassLoader::class);
    }
}
