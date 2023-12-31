<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit80b3cf5bd6dfff8226ad62822ea4b8dd
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

        spl_autoload_register(array('ComposerAutoloaderInit80b3cf5bd6dfff8226ad62822ea4b8dd', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit80b3cf5bd6dfff8226ad62822ea4b8dd', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        \Composer\Autoload\ComposerStaticInit80b3cf5bd6dfff8226ad62822ea4b8dd::getInitializer($loader)();

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit80b3cf5bd6dfff8226ad62822ea4b8dd::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire80b3cf5bd6dfff8226ad62822ea4b8dd($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire80b3cf5bd6dfff8226ad62822ea4b8dd($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
