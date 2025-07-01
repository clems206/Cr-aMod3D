<?php
// AUCUNE IMAGE/BINAIRE GÉNÉRÉE
require_once __DIR__.'/../../models/SiteSetting.php';
class SettingsController
{
    public function index()
    {
        $settings = (new SiteSetting())->all();
        require __DIR__ . '/../../views/admin/settings/index.php';
    }
}
