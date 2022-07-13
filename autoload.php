<?php

define("WWW", dirname(__DIR__) . '/oop/');
spl_autoload_register(function ($className) {
    $file = WWW . str_replace('\\', '/', $className) . '.php';
    if (is_file($file)) {
        require_once $file;
    }
});