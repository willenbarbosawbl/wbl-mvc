<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6a6a424f52fbe0b8701d4bbc1f974902
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6a6a424f52fbe0b8701d4bbc1f974902::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6a6a424f52fbe0b8701d4bbc1f974902::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}