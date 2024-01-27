<?php
    session_start();

    require('db/db_init.php');

    if ($_GET['url']) {
        $url = explode('/', $_GET['url']);
        $page = $url[0] . '.php';
        if (file_exists($page)) {
            require($page);
        } else {
            require('404.php');
        }
    } else {
        require('home.php');
    }
