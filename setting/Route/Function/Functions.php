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
        $brands = 'Работаем с любыми брендами: Loro Piana, Gucci, Prada, Louis Vuitton, Hermès, Balenciaga и другими.';
        return [
            1  => ['slug' => 'cleaning', 'title' => 'Чистка', 'price' => 5990, 'price_formatted' => '5 990', 'img' => 'services/чистка.png', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'Комплексная чистка обуви снаружи и внутри, восстановление формы, устранение потёртостей, цвета и запаха, водоотталкивающая пропитка. ' . $brands, 'duration' => '1-6 дней'],
            2  => ['slug' => 'prevention', 'title' => 'Профилактика', 'price' => 3490, 'price_formatted' => '3 490', 'img' => 'services/профилактика.png', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'Установка фактурной или гелевой профилактики на подошву для защиты от износа. ' . $brands, 'duration' => '1-2 дней'],
            3  => ['slug' => 'whitening', 'title' => 'Отбеливание подошвы Loro Piana', 'price' => 10990, 'price_formatted' => '10 990', 'img' => 'services/Отбеливание подошвы.png', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'Профессиональное отбеливание подошвы на обуви Loro Piana с удалением желтизны и возвращением белоснежного вида. ' . $brands, 'duration' => '3-7 дней'],
            4  => ['slug' => 'replacement', 'title' => 'Замена подошвы Loro Piana', 'price' => 18990, 'price_formatted' => '18 990', 'img' => 'services/Замена подошвы.png', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'Профессиональная замена подошвы на обуви Loro Piana с восстановлением оригинального вида и комфорта. ' . $brands, 'duration' => '3-7 дней'],
            5  => ['slug' => 'restoration', 'title' => 'Реставрация', 'price' => 6490, 'price_formatted' => '6 490', 'img' => 'services/реставрация.png', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'Восстановление от царапин, потёртостей, заломов, швов, молний, фурнитуры и цвета. ' . $brands, 'duration' => '3-7 дней'],
            6  => ['slug' => 'heel-taps-rubber', 'title' => 'Набойки (резина)', 'price' => 1990, 'price_formatted' => '1 990', 'img' => 'services/Набойки.png', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'Установка резиновых набоек на мужскую обувь. ' . $brands, 'duration' => '1 дней'],
            7  => ['slug' => 'heel-taps-combined', 'title' => 'Набойки комбинированные', 'price' => 2990, 'price_formatted' => '2 990', 'img' => 'services/Набойки комбинированные.png', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'Установка комбинированных набоек на мужскую обувь. ' . $brands, 'duration' => '1 дней'],
8  => ['slug' => 'heel-taps-stiletto', 'title' => 'Набойки (шпильки)', 'price' => 1490, 'price_formatted' => '1 490', 'img' => 'services/Набойки (шпильки).png', 'bg' => '#ffffff', 'dark' => false, 'desc' => 'Установка набоек на женские туфли на шпильке. ' . $brands, 'duration' => '1 дней'],
9  => ['slug' => 'heel-counters', 'title' => 'Задники', 'price' => 3490, 'price_formatted' => '3 490', 'img' => 'services/Задники.png', 'bg' => '#ffffff', 'dark' => false, 'desc' => 'Замена твёрдых или мягких задников обуви. ' . $brands, 'duration' => '2-4 дней'],
10 => ['slug' => 'bag-restoration', 'title' => 'Реставрация сумок', 'price' => 7990, 'price_formatted' => '7 990', 'img' => 'services/Реставрация сумок.png', 'bg' => '#dc5400', 'dark' => true, 'desc' => 'Восстановление сумок: царапины, потёртости, швы, молнии, фурнитура, цвет. ' . $brands, 'duration' => '3-10 дней'],
11 => ['slug' => 'leather-painting', 'title' => 'Ручная роспись на коже', 'price' => 49900, 'price_formatted' => '49 900', 'img' => 'services/ручная роспись.png', 'bg' => '#fdf7e1', 'dark' => false, 'desc' => 'Уникальная ручная роспись на коже — дизайн выбираете вы, получаете единственную в мире вещь. ' . $brands, 'duration' => '5-14 дней'],
        ];
    }

    public static function onMail(): void
    {
        $input = json_decode(file_get_contents('php://input'), true) ?? $_POST;
        $to = "info@mmclean.ru";
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
