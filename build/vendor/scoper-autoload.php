<?php

// scoper-autoload.php @generated by PhpScoper

$loader = require_once __DIR__.'/autoload.php';

// Aliases for the whitelisted classes. For more information see:
// https://github.com/humbug/php-scoper/blob/master/README.md#class-whitelisting
if (!class_exists('ComposerAutoloaderInit3b508e0144f82248261a35ed0054f065', false) && !interface_exists('ComposerAutoloaderInit3b508e0144f82248261a35ed0054f065', false) && !trait_exists('ComposerAutoloaderInit3b508e0144f82248261a35ed0054f065', false)) {
    spl_autoload_call('SMTP2GOWPPlugin\ComposerAutoloaderInit3b508e0144f82248261a35ed0054f065');
}
if (!class_exists('SendSettersTest', false) && !interface_exists('SendSettersTest', false) && !trait_exists('SendSettersTest', false)) {
    spl_autoload_call('SMTP2GOWPPlugin\SendSettersTest');
}
if (!class_exists('MockApiTest', false) && !interface_exists('MockApiTest', false) && !trait_exists('MockApiTest', false)) {
    spl_autoload_call('SMTP2GOWPPlugin\MockApiTest');
}
if (!class_exists('SendGettersTest', false) && !interface_exists('SendGettersTest', false) && !trait_exists('SendGettersTest', false)) {
    spl_autoload_call('SMTP2GOWPPlugin\SendGettersTest');
}
if (!class_exists('SendServiceTest', false) && !interface_exists('SendServiceTest', false) && !trait_exists('SendServiceTest', false)) {
    spl_autoload_call('SMTP2GOWPPlugin\SendServiceTest');
}

// Functions whitelisting. For more information see:
// https://github.com/humbug/php-scoper/blob/master/README.md#functions-whitelisting
if (!function_exists('composerRequire3b508e0144f82248261a35ed0054f065')) {
    function composerRequire3b508e0144f82248261a35ed0054f065() {
        return \SMTP2GOWPPlugin\composerRequire3b508e0144f82248261a35ed0054f065(...func_get_args());
    }
}
if (!function_exists('trigger_deprecation')) {
    function trigger_deprecation() {
        return \SMTP2GOWPPlugin\trigger_deprecation(...func_get_args());
    }
}

return $loader;
