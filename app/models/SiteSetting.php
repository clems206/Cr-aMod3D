<?php
// AUCUNE IMAGE/BINAIRE GÉNÉRÉE
class SiteSetting extends Model
{
    protected $table = 'site_settings';
    public function all()
    {
        return $this->db->query('SELECT * FROM site_settings')->fetchAll();
    }
    public function updateSetting(string $key, string $value)
    {
        $stmt = $this->db->prepare('UPDATE site_settings SET value=? WHERE `key`=?');
        return $stmt->execute([$value, $key]);
    }
}
