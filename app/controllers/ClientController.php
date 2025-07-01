<?php
require_once __DIR__ . '/../models/Order.php';
require_once __DIR__ . '/../models/Quote.php';
require_once __DIR__ . '/../models/Address.php';
require_once __DIR__ . '/../models/Message.php';
class ClientController
{
    private Order $orderModel;
    private Quote $quoteModel;
    private Address $addressModel;
    private Message $messageModel;
    public function __construct()
    {
        session_start();
        $this->orderModel = new Order();
        $this->quoteModel = new Quote();
        $this->addressModel = new Address();
        $this->messageModel = new Message();
        if (!isset($_SESSION['user_id'])) {
            header('Location: index.php?action=login');
            exit;
        }
        $this->userId = $_SESSION['user_id'];
    }

    public function dashboard()
    {
        include __DIR__ . '/../views/client/dashboard.php';
    }

    public function profile()
    {
        include __DIR__ . '/../views/client/profile.php';
    }

    public function addresses()
    {
        $addresses = $this->addressModel->getByUser($this->userId);
        include __DIR__ . '/../views/client/addresses.php';
    }

    public function orders()
    {
        $orders = $this->orderModel->getByUser($this->userId);
        include __DIR__ . '/../views/client/orders.php';
    }

    public function orderDetail()
    {
        $id = (int)($_GET['id'] ?? 0);
        $order = $this->orderModel->getDetail($id);
        include __DIR__ . '/../views/client/order_detail.php';
    }

    public function quotes()
    {
        $quotes = $this->quoteModel->getByUser($this->userId);
        include __DIR__ . '/../views/client/quotes.php';
    }

    public function messages()
    {
        $messages = $this->messageModel->getByUser($this->userId);
        include __DIR__ . '/../views/client/messages.php';
    }
}
