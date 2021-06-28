<?php
require_once('utils/uri_parser.php');
switch ($_SERVER['REQUEST_METHOD']) {
    case "GET":
        if (getMethod($uri)) {
            require_once('src/error_page/page_404.php');
        } else {
            require_once('get_todo.php');
        }
        break;
    case "POST":
        echo getMethod($uri);
        
        break;
    // case "PUT":
    //     require_once('get_todo.php');
    //     break;
    // case "DELETE":
    //     require_once('get_todo.php');
    //     break;
    default:
        require_once('src/error_page/page_404.php');
}