<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita236d8489c18247d58d416a67bf5ec82
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Study\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Study\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita236d8489c18247d58d416a67bf5ec82::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita236d8489c18247d58d416a67bf5ec82::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
