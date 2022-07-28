<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit85dae9287c31a0cca5f86f2f1be472d8
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Rubia\\SOLID\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Rubia\\SOLID\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit85dae9287c31a0cca5f86f2f1be472d8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit85dae9287c31a0cca5f86f2f1be472d8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit85dae9287c31a0cca5f86f2f1be472d8::$classMap;

        }, null, ClassLoader::class);
    }
}
