<?php
require_once 'Model.php';
class Address extends Model
{
    public function getByUser(int $userId)
    {
        $stmt = $this->db->prepare('SELECT * FROM addresses WHERE user_id = ?');
        $stmt->execute([$userId]);
        return $stmt->fetchAll();
    }

    public function save(array $data)
    {
        $stmt = $this->db->prepare('REPLACE INTO addresses (id, user_id, type, street, city, zip, country) VALUES (?, ?, ?, ?, ?, ?, ?)');
        $stmt->execute([
            $data['id'] ?? null,
            $data['user_id'],
            $data['type'],
            $data['street'],
            $data['city'],
            $data['zip'],
            $data['country'],
        ]);
    }
}
