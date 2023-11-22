<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit643bfa296cbf650cfcb130694aaed88e
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Views\\' => 6,
        ),
        'R' => 
        array (
            'Routes\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
            'Api\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Views\\' => 
        array (
            0 => __DIR__ . '/../..' . '/views',
        ),
        'Routes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/routes',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Api\\' => 
        array (
            0 => __DIR__ . '/../..' . '/api',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit643bfa296cbf650cfcb130694aaed88e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit643bfa296cbf650cfcb130694aaed88e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit643bfa296cbf650cfcb130694aaed88e::$classMap;

        }, null, ClassLoader::class);
    }
}
