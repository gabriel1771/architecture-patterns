<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7479b7bdf42ce04928ba7f0f2237ba1f
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit7479b7bdf42ce04928ba7f0f2237ba1f::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit7479b7bdf42ce04928ba7f0f2237ba1f::$classMap;

        }, null, ClassLoader::class);
    }
}
