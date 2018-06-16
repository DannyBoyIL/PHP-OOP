<?php

spl_autoload_register(function ($class) {

    $file = '../bootstrap/class.' . $class . '.php';

    if (file_exists($file)) {
        include_once $file;
    }

    $file = '../vendor/system/class.' . $class . '.php';

    if (file_exists($file)) {
        include_once $file;
    }
});

$application = new Bootstrap();
