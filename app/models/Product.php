<?php
// AUCUNE IMAGE/BINAIRE GÉNÉRÉE
class Product extends Model
{
    public function all()
    {
        return $this->db->query('SELECT * FROM products')->fetchAll();
    }
    public function find(int $id)
    {
        $stmt = $this->db->prepare('SELECT * FROM products WHERE id=?');
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}
