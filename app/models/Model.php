<?php
require_once __DIR__ . '/../../config/Database.php';
class Model
{
    protected PDO $db;
    public function __construct()
    {
        $this->db = Database::getInstance();
    }
}
