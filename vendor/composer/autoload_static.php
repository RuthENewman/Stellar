<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit772ff2ef7ce3322a1ba787b62d1e17b8
{
    public static $classMap = array (
        'Database' => __DIR__ . '/../..' . '/www/database.php',
        'Favourite' => __DIR__ . '/../..' . '/www/favourite.php',
        'Model' => __DIR__ . '/../..' . '/www/model.php',
        'Session' => __DIR__ . '/../..' . '/www/session.php',
        'Star' => __DIR__ . '/../..' . '/www/star.php',
        'Userlogin' => __DIR__ . '/../..' . '/www/userlogin.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit772ff2ef7ce3322a1ba787b62d1e17b8::$classMap;

        }, null, ClassLoader::class);
    }
}
