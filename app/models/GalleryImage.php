<?php
// AUCUNE IMAGE/BINAIRE GÉNÉRÉE
class GalleryImage extends Model
{
    public function all()
    {
        return $this->db->query('SELECT * FROM gallery_images')->fetchAll();
    }
}
