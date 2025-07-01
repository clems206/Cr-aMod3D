<?php
// AUCUNE IMAGE/BINAIRE GÉNÉRÉE
session_start();
require_once __DIR__ . '/../../app/controllers/admin/AdminAuthController.php';
require_once __DIR__ . '/../../app/controllers/admin/AdminDashboardController.php';
require_once __DIR__ . '/../../app/controllers/admin/ProductController.php';
require_once __DIR__ . '/../../app/controllers/admin/OrderController.php';
require_once __DIR__ . '/../../app/controllers/admin/QuoteController.php';
require_once __DIR__ . '/../../app/controllers/admin/UserController.php';
require_once __DIR__ . '/../../app/controllers/admin/MessageController.php';
require_once __DIR__ . '/../../app/controllers/admin/NewsletterController.php';
require_once __DIR__ . '/../../app/controllers/admin/GalleryController.php';
require_once __DIR__ . '/../../app/controllers/admin/SettingsController.php';
require_once __DIR__ . '/../../app/controllers/admin/StatsController.php';
$action = $_GET['action'] ?? 'dashboard';
if(!isset($_SESSION['admin_id']) && $action !== 'login') {
    header('Location: ?action=login');
    exit;
}
switch ($action) {
    case 'login':
        (new AdminAuthController())->login();
        break;
    case 'logout':
        (new AdminAuthController())->logout();
        break;
    case 'products':
        (new ProductController())->index();
        break;
    case 'editProduct':
        (new ProductController())->edit();
        break;
    case 'orders':
        (new OrderController())->index();
        break;
    case 'quotes':
        (new QuoteController())->index();
        break;
    case 'users':
        (new UserController())->index();
        break;
    case 'messages':
        (new MessageController())->index();
        break;
    case 'newsletter':
        (new NewsletterController())->index();
        break;
    case 'gallery':
        (new GalleryController())->index();
        break;
    case 'settings':
        (new SettingsController())->index();
        break;
    case 'stats':
        (new StatsController())->index();
        break;
    case 'dashboard':
    default:
        (new AdminDashboardController())->index();
        break;
}
