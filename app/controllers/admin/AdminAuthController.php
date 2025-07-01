<?php
// AUCUNE IMAGE/BINAIRE GÉNÉRÉE
require_once __DIR__.'/../../models/AdminUser.php';
class AdminAuthController
{
    private $model;
    public function __construct()
    {
        $this->model = new AdminUser();
    }
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $pass = $_POST['password'] ?? '';
            $admin = $this->model->findByEmail($email);
            if ($admin && password_verify($pass, $admin['password'])) {
                $_SESSION['admin_id'] = $admin['id'];
                header('Location: ?action=dashboard');
                exit;
            }
            $error = 'Identifiants invalides';
        }
        require __DIR__ . '/../../views/admin/login.php';
    }
    public function logout()
    {
        session_destroy();
        header('Location: ?action=login');
    }
}
