<?php

namespace Setting\Route\Function;

use App\Models\Router\Routes;
use App\Controllers\MailController;

class Functions
{
    public static function seo()
    {
        if (class_exists('App\Services\Seo\SeoService')) {
            return new \App\Services\Seo\SeoService();
        }
        return null;
    }

    public static function notify()
    {
        if (class_exists('App\Models\Network\Message')) {
            return \App\Models\Network\Message::control();
        }
        return ['message' => '', 'type' => ''];
    }

    public static function getServices(): array
    {
        return [
            1  => ['slug' => 'cleaning', 'title' => 'Чистка', 'price' => 5990, 'price_formatted' => '5 990', 'img' => 'чистка.jpg', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'Комплексная чистка обуви снаружи и внутри, восстановление формы, устранение потёртостей, цвета и запаха, водоотталкивающая пропитка.', 'duration' => '1-6 дней'],
            2  => ['slug' => 'prevention', 'title' => 'Профилактика', 'price' => 3490, 'price_formatted' => '3 490', 'img' => 'подклдаки.jpg', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'Установка фактурной или гелевой профилактики на подошву для защиты от износа.', 'duration' => '1-2 дней'],
            3  => ['slug' => 'loro-piana-sole', 'title' => 'Чистка и замена подошвы Loro Piana', 'price' => 23990, 'price_formatted' => '23 990', 'img' => 'прей3.jpg', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'Комплексная чистка лоферов Loro Piana, отбеливание подошвы и её замена.', 'duration' => '3-7 дней'],
            4  => ['slug' => 'restoration', 'title' => 'Реставрация', 'price' => 6490, 'price_formatted' => '6 490', 'img' => 'починка.jpg', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'Восстановление от царапин, потёртостей, заломов, швов, молний, фурнитуры и цвета.', 'duration' => '3-7 дней'],
            5  => ['slug' => 'loro-piana-clean', 'title' => 'Чистка Loro Piana', 'price' => 6490, 'price_formatted' => '6 490', 'img' => 'чистка3.jpg', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'Комплексная чистка обуви Loro Piana с особым подходом к премиальным материалам.', 'duration' => '1-6 дней'],
            6  => ['slug' => 'loro-piana-whiten', 'title' => 'Чистка и отбеливание Loro Piana', 'price' => 10990, 'price_formatted' => '10 990', 'img' => 'отбеливание.jpg', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'Чистка обуви Loro Piana с отбеливанием оригинальной подошвы.', 'duration' => '3-7 дней'],
            7  => ['slug' => 'loro-piana-sole-replace', 'title' => 'Замена подошвы Loro Piana', 'price' => 18990, 'price_formatted' => '18 990', 'img' => 'набор2.jpg', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'Замена оригинальной подошвы на новую для обуви Loro Piana.', 'duration' => '3-7 дней'],
            8  => ['slug' => 'heel-taps-rubber', 'title' => 'Набойки мужские (резина)', 'price' => 1990, 'price_formatted' => '1 990', 'img' => 'пенка.jpg', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'Установка резиновых набоек на мужскую обувь.', 'duration' => '1 дней'],
            9  => ['slug' => 'heel-taps-combined', 'title' => 'Набойки мужские комбинированные', 'price' => 2990, 'price_formatted' => '2 990', 'img' => 'спрей5.webp', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'Установка комбинированных набоек на мужскую обувь.', 'duration' => '1 дней'],
            10 => ['slug' => 'heel-taps-stiletto', 'title' => 'Набойки женские (шпильки)', 'price' => 1490, 'price_formatted' => '1 490', 'img' => 'пенка.jpg', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'Установка набоек на женские туфли на шпильке.', 'duration' => '1 дней'],
            11 => ['slug' => 'heel-counters', 'title' => 'Задники', 'price' => 3490, 'price_formatted' => '3 490', 'img' => 'набор2.png', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'Замена твёрдых или мягких задников обуви.', 'duration' => '2-4 дней'],
            12 => ['slug' => 'bag-restoration', 'title' => 'Реставрация сумок', 'price' => 7990, 'price_formatted' => '7 990', 'img' => 'починка.jpg', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'Восстановление сумок: царапины, потёртости, швы, молнии, фурнитура, цвет.', 'duration' => '3-10 дней'],
            13 => ['slug' => 'leather-painting', 'title' => 'Ручная роспись на коже', 'price' => 49900, 'price_formatted' => '49 900', 'img' => 'спрей.jpg', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'Уникальная ручная роспись на коже — дизайн выбираете вы, получаете единственную в мире вещь.', 'duration' => '5-14 дней'],
        ];
    }

    public static function onMail(): void
    {
        $input = json_decode(file_get_contents('php://input'), true) ?? $_POST;
        $to = trim($input['to_email'] ?? '');
        $subject = trim($input['subject'] ?? '');
        $body = trim($input['body'] ?? '');

        if (!$to || !$subject || !$body) {
            http_response_code(400);
            echo json_encode(['ok' => false, 'error' => 'Заполните to_email, subject и body'], JSON_UNESCAPED_UNICODE);
            return;
        }

        $mailer = new MailController();
        $result = $mailer->onMail($to, $subject, $body);

        header('Content-Type: application/json; charset=utf-8');
        if ($result) {
            echo json_encode(['ok' => true, 'message' => 'Письмо отправлено'], JSON_UNESCAPED_UNICODE);
        } else {
            http_response_code(500);
            echo json_encode(['ok' => false, 'error' => 'Ошибка отправки письма'], JSON_UNESCAPED_UNICODE);
        }
    }
}
