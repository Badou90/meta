<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitccb1292965bfd55dfe7435ec61fbeac5
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Badou\\MetaTags\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Badou\\MetaTags\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Badou\\MetaTags\\Facades\\MetaTags' => __DIR__ . '/../..' . '/src/Facades/MetaTags.php',
        'Badou\\MetaTags\\MetaTags' => __DIR__ . '/../..' . '/src/MetaTags.php',
        'Badou\\MetaTags\\MetaTagsServiceProvider' => __DIR__ . '/../..' . '/src/MetaTagsServiceProvider.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitccb1292965bfd55dfe7435ec61fbeac5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitccb1292965bfd55dfe7435ec61fbeac5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitccb1292965bfd55dfe7435ec61fbeac5::$classMap;

        }, null, ClassLoader::class);
    }
}