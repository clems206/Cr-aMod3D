<?php
// AUCUNE IMAGE/BINAIRE GÉNÉRÉE
require_once __DIR__.'/../../models/User.php';
class UserController
{
    public function index()
    {
        $users = (new User())->all();
        require __DIR__ . '/../../views/admin/users/index.php';
    }
}
