<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5613edefb7c8dc7eac0aa0259bcc53c8
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sam\\Gemini\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sam\\Gemini\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5613edefb7c8dc7eac0aa0259bcc53c8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5613edefb7c8dc7eac0aa0259bcc53c8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5613edefb7c8dc7eac0aa0259bcc53c8::$classMap;

        }, null, ClassLoader::class);
    }
}
