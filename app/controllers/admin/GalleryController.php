<?php
// AUCUNE IMAGE/BINAIRE GÉNÉRÉE
require_once __DIR__.'/../../models/GalleryImage.php';
class GalleryController
{
    public function index()
    {
        $images = (new GalleryImage())->all();
        require __DIR__ . '/../../views/admin/gallery/index.php';
    }
}
