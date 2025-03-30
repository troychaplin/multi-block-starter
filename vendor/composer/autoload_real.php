<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite6297ad6a53537abcba068c1ef052801
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

        spl_autoload_register(array('ComposerAutoloaderInite6297ad6a53537abcba068c1ef052801', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite6297ad6a53537abcba068c1ef052801', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite6297ad6a53537abcba068c1ef052801::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
