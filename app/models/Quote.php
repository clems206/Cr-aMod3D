<?php
require_once 'Model.php';
class Quote extends Model
{
    public function getByUser(int $userId)
    {
        $stmt = $this->db->prepare('SELECT * FROM quotes WHERE user_id = ? ORDER BY created_at DESC');
        $stmt->execute([$userId]);
        return $stmt->fetchAll();
    }
}
