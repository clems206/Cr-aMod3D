<?php
// AUCUNE IMAGE/BINAIRE GÉNÉRÉE
class NewsletterSubscriber extends Model
{
    public function all()
    {
        return $this->db->query('SELECT * FROM newsletter_subscribers')->fetchAll();
    }
}
