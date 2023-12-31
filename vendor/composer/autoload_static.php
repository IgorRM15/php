<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf010419eff08b0912a0c40c55b9820d1
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Admin\\Php\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Admin\\Php\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf010419eff08b0912a0c40c55b9820d1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf010419eff08b0912a0c40c55b9820d1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf010419eff08b0912a0c40c55b9820d1::$classMap;

        }, null, ClassLoader::class);
    }
}
