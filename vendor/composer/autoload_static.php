<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb7ece59c6f95ef01c0dac0d70b449c00
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb7ece59c6f95ef01c0dac0d70b449c00::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb7ece59c6f95ef01c0dac0d70b449c00::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb7ece59c6f95ef01c0dac0d70b449c00::$classMap;

        }, null, ClassLoader::class);
    }
}
