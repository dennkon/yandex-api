<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit859415f425879b30710b7a1bcfb7416d
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Predis\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Predis\\' => 
        array (
            0 => __DIR__ . '/..' . '/predis/predis/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit859415f425879b30710b7a1bcfb7416d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit859415f425879b30710b7a1bcfb7416d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}