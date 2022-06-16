<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2d690c4c67503117663aece8cd9b9ad4
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jamaal\\Firstplugin\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jamaal\\Firstplugin\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2d690c4c67503117663aece8cd9b9ad4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2d690c4c67503117663aece8cd9b9ad4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2d690c4c67503117663aece8cd9b9ad4::$classMap;

        }, null, ClassLoader::class);
    }
}