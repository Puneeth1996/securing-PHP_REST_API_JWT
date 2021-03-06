<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite8890d7c707b9c66fd65ad2f00868461
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite8890d7c707b9c66fd65ad2f00868461::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite8890d7c707b9c66fd65ad2f00868461::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
