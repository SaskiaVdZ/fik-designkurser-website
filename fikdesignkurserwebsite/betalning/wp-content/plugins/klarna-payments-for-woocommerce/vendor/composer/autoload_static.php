<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitadeb5e3e18d5a018e906cf8a573804e7
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Krokedil\\WpApi\\' => 15,
            'Krokedil\\WooCommerce\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Krokedil\\WpApi\\' => 
        array (
            0 => __DIR__ . '/..' . '/krokedil/wp-api/src',
        ),
        'Krokedil\\WooCommerce\\' => 
        array (
            0 => __DIR__ . '/..' . '/krokedil/woocommerce/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitadeb5e3e18d5a018e906cf8a573804e7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitadeb5e3e18d5a018e906cf8a573804e7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitadeb5e3e18d5a018e906cf8a573804e7::$classMap;

        }, null, ClassLoader::class);
    }
}
