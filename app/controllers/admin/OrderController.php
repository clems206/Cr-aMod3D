<?php
// AUCUNE IMAGE/BINAIRE GÉNÉRÉE
require_once __DIR__.'/../../models/Order.php';
class OrderController
{
    public function index()
    {
        $orders = (new Order())->all();
        require __DIR__ . '/../../views/admin/orders/index.php';
    }
}
