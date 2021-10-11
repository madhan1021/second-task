<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4c4a1d99ce988a635a62e54b465b3f2a
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'ThalukName\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ThalukName\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'ThalukName\\Common\\GeneralFunctions' => __DIR__ . '/../..' . '/src/Common/GeneralFunctions.php',
        'ThalukName\\Common\\MyConfig' => __DIR__ . '/../..' . '/src/Common/MyConfig.php',
        'ThalukName\\Common\\PostgreDB' => __DIR__ . '/../..' . '/src/Common/PostgreDB.php',
        'ThalukName\\Master\\User' => __DIR__ . '/../..' . '/src/Master/User.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4c4a1d99ce988a635a62e54b465b3f2a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4c4a1d99ce988a635a62e54b465b3f2a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4c4a1d99ce988a635a62e54b465b3f2a::$classMap;

        }, null, ClassLoader::class);
    }
}
