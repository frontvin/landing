<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbadc355ecd2daa4ce91f45042eb877e0
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbadc355ecd2daa4ce91f45042eb877e0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbadc355ecd2daa4ce91f45042eb877e0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
