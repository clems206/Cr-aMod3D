<?php
// AUCUNE IMAGE/BINAIRE GÉNÉRÉE
require_once __DIR__.'/../../models/Order.php';
require_once __DIR__.'/../../models/Product.php';
class AdminDashboardController
{
    public function index()
    {
        $orders = (new Order())->all();
        $products = (new Product())->all();
        require __DIR__ . '/../../views/admin/dashboard.php';
    }
}
