<?php

class Bootstrap {

    function __construct() {

        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        if (empty($url[0])) {

            require '../app/Http/Controllers/index.php';
            $controller = new Index();
            $controller->home();
            return;
        }

        $file = 'app/Http/Controllers/' . $url[0] . '.php';

        if (file_exists($file)) {
            require $file;
        } else {
            return;
        }

        $controller = new $url[0];

        if (isset($url[2])) {

            $method = $url[1];
            $arg = $url[2];
            $controller->$method($arg);
        } else if (isset($url[1])) {

            $method = $url[1];
            $controller->$method();
        } else {

            $controller->home();
        }
    }

}
