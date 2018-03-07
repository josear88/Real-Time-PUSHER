<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2239b403c1e4419cec856437b20bd724
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pusher\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pusher\\' => 
        array (
            0 => __DIR__ . '/..' . '/pusher/pusher-php-server/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2239b403c1e4419cec856437b20bd724::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2239b403c1e4419cec856437b20bd724::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
