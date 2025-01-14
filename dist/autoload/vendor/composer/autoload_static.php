<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaf5425847cb1e99405731ed312d931d8
{
    public static $files = array (
        'd767e4fc2dc52fe66584ab8c6684783e' => __DIR__ . '/..' . '/adbario/php-dot-notation/src/helpers.php',
        '09f6b20656683369174dd6fa83b7e5fb' => __DIR__ . '/..' . '/symfony/polyfill-uuid/bootstrap.php',
        'eb560206789347e97657831079c94e47' => __DIR__ . '/..' . '/syntatis/codex-settings-provider/inc/utils.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Syntatis\\FeatureFlipper\\' => 24,
            'SSFV\\Symfony\\Polyfill\\Uuid\\' => 27,
            'SSFV\\Symfony\\Component\\Uid\\' => 27,
            'SSFV\\Psr\\Container\\' => 19,
            'SSFV\\Pimple\\' => 12,
            'SSFV\\Codex\\Settings\\' => 20,
            'SSFV\\Codex\\' => 11,
            'SSFV\\Adbar\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Syntatis\\FeatureFlipper\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../../app',
        ),
        'SSFV\\Symfony\\Polyfill\\Uuid\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-uuid',
        ),
        'SSFV\\Symfony\\Component\\Uid\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/uid',
        ),
        'SSFV\\Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'SSFV\\Pimple\\' => 
        array (
            0 => __DIR__ . '/..' . '/pimple/pimple/src/Pimple',
        ),
        'SSFV\\Codex\\Settings\\' => 
        array (
            0 => __DIR__ . '/..' . '/syntatis/codex-settings-provider/app',
        ),
        'SSFV\\Codex\\' => 
        array (
            0 => __DIR__ . '/..' . '/syntatis/codex/app',
        ),
        'SSFV\\Adbar\\' => 
        array (
            0 => __DIR__ . '/..' . '/adbario/php-dot-notation/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaf5425847cb1e99405731ed312d931d8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaf5425847cb1e99405731ed312d931d8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaf5425847cb1e99405731ed312d931d8::$classMap;

        }, null, ClassLoader::class);
    }
}
