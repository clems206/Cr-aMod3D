<?php
// AUCUNE IMAGE/BINAIRE GÉNÉRÉE
require_once __DIR__.'/../../models/AdminLog.php';
class StatsController
{
    public function index()
    {
        $logs = (new AdminLog())->db->query('SELECT COUNT(*) as count FROM admin_logs')->fetch();
        require __DIR__ . '/../../views/admin/stats/index.php';
    }
}
