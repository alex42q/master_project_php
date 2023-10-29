<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit734bb2f0116bdef34dec8703509777ad
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

        spl_autoload_register(array('ComposerAutoloaderInit734bb2f0116bdef34dec8703509777ad', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit734bb2f0116bdef34dec8703509777ad', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit734bb2f0116bdef34dec8703509777ad::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
