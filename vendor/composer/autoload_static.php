<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita3a3cb4279ce2dfd080c849fae6f4f3d
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'E' => 
        array (
            'Eloma\\Html5\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Eloma\\Html5\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita3a3cb4279ce2dfd080c849fae6f4f3d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita3a3cb4279ce2dfd080c849fae6f4f3d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita3a3cb4279ce2dfd080c849fae6f4f3d::$classMap;

        }, null, ClassLoader::class);
    }
}
