<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitfd45aa548eb2282ebc9a7d3c76f2e557
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitfd45aa548eb2282ebc9a7d3c76f2e557', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitfd45aa548eb2282ebc9a7d3c76f2e557', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitfd45aa548eb2282ebc9a7d3c76f2e557::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}