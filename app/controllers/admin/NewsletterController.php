<?php
// AUCUNE IMAGE/BINAIRE GÉNÉRÉE
require_once __DIR__.'/../../models/NewsletterSubscriber.php';
class NewsletterController
{
    public function index()
    {
        $subs = (new NewsletterSubscriber())->all();
        require __DIR__ . '/../../views/admin/newsletter/index.php';
    }
}
