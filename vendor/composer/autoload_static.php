<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb0481226f1065a0d3d9cac201429e676
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pointenv\\' => 9,
            'Path\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pointenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/shahzadamodassir/pointenv/src',
        ),
        'Path\\' => 
        array (
            0 => __DIR__ . '/..' . '/shahzadamodassir/path/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb0481226f1065a0d3d9cac201429e676::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb0481226f1065a0d3d9cac201429e676::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb0481226f1065a0d3d9cac201429e676::$classMap;

        }, null, ClassLoader::class);
    }
}