<?php

// scoper-autoload.php @generated by PhpScoper

$loader = require_once __DIR__.'/autoload.php';

// Exposed classes. For more information see:
// https://github.com/humbug/php-scoper/blob/master/docs/configuration.md#exposing-classes
if (!class_exists('ComposerAutoloaderInitaf5425847cb1e99405731ed312d931d8', false) && !interface_exists('ComposerAutoloaderInitaf5425847cb1e99405731ed312d931d8', false) && !trait_exists('ComposerAutoloaderInitaf5425847cb1e99405731ed312d931d8', false)) {
    spl_autoload_call('SSFV\ComposerAutoloaderInitaf5425847cb1e99405731ed312d931d8');
}

// Exposed functions. For more information see:
// https://github.com/humbug/php-scoper/blob/master/docs/configuration.md#exposing-functions
if (!function_exists('dot')) {
    function dot() {
        return \SSFV\dot(...func_get_args());
    }
}

return $loader;