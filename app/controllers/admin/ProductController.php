<?php
// AUCUNE IMAGE/BINAIRE GÉNÉRÉE
require_once __DIR__.'/../../models/Product.php';
class ProductController
{
    private $model;
    public function __construct()
    {
        $this->model = new Product();
    }
    public function index()
    {
        $products = $this->model->all();
        require __DIR__ . '/../../views/admin/products/index.php';
    }
    public function edit()
    {
        $id = (int)($_GET['id'] ?? 0);
        $product = $this->model->find($id);
        require __DIR__ . '/../../views/admin/products/edit.php';
    }
}
