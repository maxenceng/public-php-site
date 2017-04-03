<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0fa2cdb4a6df49ca556c7dce35d46a89
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0fa2cdb4a6df49ca556c7dce35d46a89::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0fa2cdb4a6df49ca556c7dce35d46a89::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
