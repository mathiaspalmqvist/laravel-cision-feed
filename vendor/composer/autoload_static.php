<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita551a78ff0c5533943a66fc25192491f
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mathiaspalmqvist\\LaravelCisionFeed\\' => 35,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mathiaspalmqvist\\LaravelCisionFeed\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita551a78ff0c5533943a66fc25192491f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita551a78ff0c5533943a66fc25192491f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita551a78ff0c5533943a66fc25192491f::$classMap;

        }, null, ClassLoader::class);
    }
}
