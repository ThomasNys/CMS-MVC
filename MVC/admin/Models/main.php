<?php

$action = isset($_GET['action']) ? htmlentities($_GET['action']) : 'default';
$controller = '';
    switch ($action) {
        case 'webdev':
            require_once(CONTROLLER . 'webdev.php');
            $controller = new webdev();
            break;
        case 'company':
            require_once(CONTROLLER . 'company.php');
            $controller = new company();
            break;
        case 'interview':
            require_once(CONTROLLER . 'interview.php');
            $controller = new interview();
            break;
        case 'conclusion':
            require_once(CONTROLLER . 'conclusion.php');
            $controller = new conclusion();
            break;
        default:
            require_once(CONTROLLER . 'home.php');
            $controller = new home();
            break;
    }
    $controller->run();
?>
