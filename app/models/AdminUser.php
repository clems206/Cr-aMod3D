<?php
// AUCUNE IMAGE/BINAIRE GÉNÉRÉE
class AdminUser extends Model
{
    public function findByEmail(string $email)
    {
        $stmt = $this->db->prepare('SELECT * FROM admin_users WHERE email = ?');
        $stmt->execute([$email]);
        return $stmt->fetch();
    }
}
