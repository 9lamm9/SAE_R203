<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$route = $_GET['route'] ?? null;

switch ($route) {
    case null:
        require('controllers/auth_ctrl.php');
        login_ctrl();
        break;

    case 'auth':
        require('controllers/auth_ctrl.php');
        auth_ctrl();
        break;

    default:
        echo "404 - Page non trouvée";
        break;
}
