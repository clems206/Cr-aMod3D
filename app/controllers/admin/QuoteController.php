<?php
// AUCUNE IMAGE/BINAIRE GÉNÉRÉE
require_once __DIR__.'/../../models/Quote.php';
class QuoteController
{
    public function index()
    {
        $quotes = (new Quote())->all();
        require __DIR__ . '/../../views/admin/quotes/index.php';
    }
}
