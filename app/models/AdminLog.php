<?php
// AUCUNE IMAGE/BINAIRE GÉNÉRÉE
class AdminLog extends Model
{
    public function record(int $adminId, string $action)
    {
        $stmt = $this->db->prepare('INSERT INTO admin_logs(admin_id, action) VALUES(?, ?)');
        $stmt->execute([$adminId, $action]);
    }
}
