<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0c670639a1adc7b10f2357a199fc2037
{
    public static $prefixLengthsPsr4 = array (
        'o' => 
        array (
            'oliveready7\\LaravelSes\\Tests\\' => 29,
            'oliveready7\\LaravelSes\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'oliveready7\\LaravelSes\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'oliveready7\\LaravelSes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0c670639a1adc7b10f2357a199fc2037::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0c670639a1adc7b10f2357a199fc2037::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
