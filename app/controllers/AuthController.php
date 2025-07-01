<?php
require_once __DIR__ . '/../models/User.php';
class AuthController
{
    private User $userModel;
    public function __construct()
    {
        $this->userModel = new User();
        session_start();
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';
            $user = $this->userModel->findByEmail($email);
            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                header('Location: index.php');
                exit;
            }
            $error = 'Identifiants invalides';
        }
        include __DIR__ . '/../views/auth/login.php';
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'name' => $_POST['name'] ?? '',
                'email' => $_POST['email'] ?? '',
                'password' => $_POST['password'] ?? ''
            ];
            $this->userModel->create($data);
            header('Location: index.php?action=login');
            exit;
        }
        include __DIR__ . '/../views/auth/register.php';
    }

    public function logout()
    {
        session_destroy();
        header('Location: index.php?action=login');
    }

    public function forgot()
    {
        include __DIR__ . '/../views/auth/forgot.php';
    }
}
