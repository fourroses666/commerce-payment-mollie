<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9dcef4bd9d90bd3c685473968a85fc1c
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mollie\\Api\\' => 11,
        ),
        'C' => 
        array (
            'Composer\\CaBundle\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mollie\\Api\\' => 
        array (
            0 => __DIR__ . '/..' . '/mollie/mollie-api-php/src',
        ),
        'Composer\\CaBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/ca-bundle/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9dcef4bd9d90bd3c685473968a85fc1c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9dcef4bd9d90bd3c685473968a85fc1c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9dcef4bd9d90bd3c685473968a85fc1c::$classMap;

        }, null, ClassLoader::class);
    }
}
