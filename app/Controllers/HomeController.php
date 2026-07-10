<?php

namespace App\Controllers;

class HomeController
{
    public function onIndex()
    {
        require __DIR__ . '/../../public/pages/main/index.php';
    }

    public function onProducts()
    {
        require __DIR__ . '/../../public/pages/products/index.php';
    }

    public function onAbout()
    {
        require __DIR__ . '/../../public/pages/about/index.php';
    }

    public function onBeforeAfter()
    {
        require __DIR__ . '/../../public/pages/before-after/index.php';
    }

    public function onContacts()
    {
        require __DIR__ . '/../../public/pages/contacts/index.php';
    }

    public function onOrder()
    {
        require __DIR__ . '/../../public/pages/order/index.php';
    }

    public function onPrivacy()
    {
        require __DIR__ . '/../../public/pages/privacy-policy/index.php';
    }

    public function onCart()
    {
        require __DIR__ . '/../../public/pages/cart/index.php';
    }

    public function onFranchise()
    {
        require __DIR__ . '/../../public/pages/franchise/index.php';
    }

    public function onFranchiseSubmit()
    {
        $name = trim($_POST['name'] ?? '');
        $city = trim($_POST['city'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $phone = trim($_POST['phone'] ?? '');

        if (!$name || !$city || !$email || !$phone) {
            http_response_code(400);
            echo 'Заполните все поля';
            exit;
        }

        $subject = 'Заявка на франшизу MANDO MEMORI';
        $body = "
            <h2>Новая заявка на франшизу</h2>
            <table style='border-collapse:collapse;width:100%'>
                <tr><td style='padding:8px;font-weight:600'>Имя</td><td style='padding:8px'>" . htmlspecialchars($name) . "</td></tr>
                <tr><td style='padding:8px;font-weight:600'>Город</td><td style='padding:8px'>" . htmlspecialchars($city) . "</td></tr>
                <tr><td style='padding:8px;font-weight:600'>Email</td><td style='padding:8px'>" . htmlspecialchars($email) . "</td></tr>
                <tr><td style='padding:8px;font-weight:600'>Телефон</td><td style='padding:8px'>" . htmlspecialchars($phone) . "</td></tr>
            </table>";

        try {
            $mailer = new MailController();
            $mailer->onMail('info@mmclean.ru', $subject, $body);
        } catch (\Exception $e) {
            http_response_code(500);
            echo 'Ошибка отправки';
            exit;
        }

        header('Content-Type: application/json');
        echo json_encode(['success' => true]);
        exit;
    }

    public function onRequisites()
    {
        require __DIR__ . '/../../public/pages/requisites/index.php';
    }

    public function onBlog()
    {
        require __DIR__ . '/../../public/pages/blog/index.php';
    }

    public function onBlogArticle(...$args)
    {
        $slug = $args['slug'] ?? ($args[1] ?? '');
        require __DIR__ . '/../../public/pages/blog/article/index.php';
    }

    public function onProductDetail(...$args)
    {
        $slug = $args['slug'] ?? ($args[1] ?? '');
        $path = __DIR__ . '/../../public/pages/product/' . strtolower($slug) . '/index.php';
        if (file_exists($path)) {
            require $path;
        } else {
            http_response_code(404);
            echo '404 — товар не найден';
        }
    }
}
