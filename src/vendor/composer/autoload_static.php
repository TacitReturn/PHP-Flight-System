<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5ffdad5c55bc94dbc049fab3cbfccead
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'FlightSystem\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'FlightSystem\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5ffdad5c55bc94dbc049fab3cbfccead::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5ffdad5c55bc94dbc049fab3cbfccead::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5ffdad5c55bc94dbc049fab3cbfccead::$classMap;

        }, null, ClassLoader::class);
    }
}
