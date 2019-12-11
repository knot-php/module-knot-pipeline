<?php
require_once dirname(__DIR__) . '/vendor/autoload.php';

spl_autoload_register(function ($class)
{
    if (strpos($class, 'Calgamo\\Module\\Guzzle\\') === 0) {
        $name = substr($class, strlen('Calgamo\\Module\\Guzzle'));
        $name = array_filter(explode('\\',$name));
        $file = dirname(__DIR__) . '/src/' . implode('/',$name) . '.php';
        /** @noinspection PhpIncludeInspection */
        require_once $file;
    }
});