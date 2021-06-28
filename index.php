<?php
    require_once('utils/uri_parser.php');
    $uri = $_SERVER['REQUEST_URI'];
    // echo getPath($uri);
    switch (getPath($uri)) {
        case "todo":
            require_once('src/todo/index.php');
            break;
        default:
            require_once('src/error_page/page_404.php');
    }