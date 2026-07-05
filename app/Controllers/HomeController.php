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

    public function onVacancies()
    {
        require __DIR__ . '/../../public/pages/vacancies/index.php';
    }

    public function onRequisites()
    {
        require __DIR__ . '/../../public/pages/requisites/index.php';
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
