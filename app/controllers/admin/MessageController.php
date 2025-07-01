<?php
// AUCUNE IMAGE/BINAIRE GÉNÉRÉE
require_once __DIR__.'/../../models/Message.php';
class MessageController
{
    public function index()
    {
        $messages = (new Message())->all();
        require __DIR__ . '/../../views/admin/messages/index.php';
    }
}
