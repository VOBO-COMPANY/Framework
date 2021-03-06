<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit303d8c125a9f6f97356d2fdd3e794c74
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Vobo\\' => 4,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vobo\\' =>
        array (
            0 => __DIR__ . '/../../..' . '/Fix',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../../..' . '/App',
        ),
    );

    public static $classMap = array (
        'App\\www\\Controllers\\__class' => __DIR__ . '/../../..' . '/App/www/Controllers/__class.php',
        'Vobo\\Exception\\Error' => __DIR__ . '/../../..' . '/Vobo/Exception/Error.php',
        'Vobo\\Internal\\Assets\\Pages' => __DIR__ . '/../../..' . '/Vobo/Internal/Assets/Pages.php',
        'Vobo\\Internal\\Database\\Pdo' => __DIR__ . '/../../..' . '/Vobo/Internal/Database/Pdo.php',
        'Vobo\\Internal\\Model\\Model' => __DIR__ . '/../../..' . '/Vobo/Internal/Model/Model.php',
        'Vobo\\Kernel\\Filter' => __DIR__ . '/../../..' . '/Vobo/Kernel/Filter.php',
        'Vobo\\Kernel\\Kernel' => __DIR__ . '/../../..' . '/Vobo/Kernel/Kernel.php',
        'Vobo\\Kernel\\Url' => __DIR__ . '/../../..' . '/Vobo/Kernel/Url.php',
        'Vobo\\Middleware\\Middleware' => __DIR__ . '/../../..' . '/Vobo/Middleware/Middleware.php',
        'Vobo\\Mode\\Request' => __DIR__ . '/../../..' . '/Vobo/Mode/Request.php',
        'Vobo\\Router\\Router' => __DIR__ . '/../../..' . '/Vobo/Router/Router.php',
        'Vobo\\Settings\\App' => __DIR__ . '/../../..' . '/Vobo/Settings/App.php',
        'Vobo\\Settings\\Kernel' => __DIR__ . '/../../..' . '/Vobo/Settings/Kernel.php',
        'Vobo\\Support\\Header' => __DIR__ . '/../../..' . '/Vobo/Support/Header.php',
        'Vobo\\Support\\Json' => __DIR__ . '/../../..' . '/Vobo/Support/Json.php',
        'Vobo\\Support\\Support' => __DIR__ . '/../../..' . '/Vobo/Support/Support.php',
        'Vobo\\Support\\Translate' => __DIR__ . '/../../..' . '/Vobo/Support/Translate.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit303d8c125a9f6f97356d2fdd3e794c74::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit303d8c125a9f6f97356d2fdd3e794c74::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit303d8c125a9f6f97356d2fdd3e794c74::$classMap;

        }, null, ClassLoader::class);
    }
}
