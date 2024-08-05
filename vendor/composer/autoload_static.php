<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit32620077439ba94d8bbff823c78b7221
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit32620077439ba94d8bbff823c78b7221::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit32620077439ba94d8bbff823c78b7221::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit32620077439ba94d8bbff823c78b7221::$classMap;

        }, null, ClassLoader::class);
    }
}
