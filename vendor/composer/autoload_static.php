<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc79f086501abc7d0b3cfa39fbd3e985a
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hesam\\ShamsiDate\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hesam\\ShamsiDate\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc79f086501abc7d0b3cfa39fbd3e985a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc79f086501abc7d0b3cfa39fbd3e985a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
