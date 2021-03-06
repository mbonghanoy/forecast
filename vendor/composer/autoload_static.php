<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0fcca8980848fb5bf93a1f6e89f5b188
{
    public static $classMap = array (
        'ApixuProvider' => __DIR__ . '/../..' . '/src/ApixuProvider.php',
        'Forecaster' => __DIR__ . '/../..' . '/src/index.php',
        'OpenWeatherMapProvider' => __DIR__ . '/../..' . '/src/OpenWeatherMapProvider.php',
        'WeatherProvider' => __DIR__ . '/../..' . '/src/WeatherProvider.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit0fcca8980848fb5bf93a1f6e89f5b188::$classMap;

        }, null, ClassLoader::class);
    }
}
