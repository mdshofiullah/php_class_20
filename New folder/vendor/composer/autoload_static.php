<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit281b1c12ed275994835f6efddb933bf5
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit281b1c12ed275994835f6efddb933bf5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit281b1c12ed275994835f6efddb933bf5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit281b1c12ed275994835f6efddb933bf5::$classMap;

        }, null, ClassLoader::class);
    }
}
