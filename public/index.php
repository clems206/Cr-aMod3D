<?php
require_once __DIR__ . '/../app/controllers/AuthController.php';
require_once __DIR__ . '/../app/controllers/ClientController.php';
$action = $_GET['action'] ?? 'dashboard';

switch ($action) {
    case 'login':
        (new AuthController())->login();
        break;
    case 'register':
        (new AuthController())->register();
        break;
    case 'logout':
        (new AuthController())->logout();
        break;
    case 'forgot':
        (new AuthController())->forgot();
        break;
    case 'profile':
        (new ClientController())->profile();
        break;
    case 'addresses':
        (new ClientController())->addresses();
        break;
    case 'orders':
        (new ClientController())->orders();
        break;
    case 'orderDetail':
        (new ClientController())->orderDetail();
        break;
    case 'quotes':
        (new ClientController())->quotes();
        break;
    case 'messages':
        (new ClientController())->messages();
        break;
    case 'dashboard':
    default:
        (new ClientController())->dashboard();
        break;
}
