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

    /** Бесплатная доставка курьером — только при заказе от этой суммы (₽) */
    public const FREE_DELIVERY_FROM = 10000;

    public static function deliveryNote(): string
    {
        return 'Бесплатная доставка курьером — при заказе от ' . number_format(self::FREE_DELIVERY_FROM, 0, '', ' ') . ' ₽';
    }

    public static function getServices(): array
    {
        $brands = 'Работаем с любыми брендами: Loro Piana, Gucci, Prada, Louis Vuitton, Hermès, Balenciaga и другими.';
        return [
            // ── ХИТЫ ПРОДАЖ: замена + отбеливание подошвы Loro Piana, реставрация ──
            4  => ['slug' => 'replacement', 'title' => 'Замена подошвы Loro Piana', 'price' => 18990, 'price_formatted' => '18 990', 'img' => 'services/Замена подошвы.png', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'ХИТ! Профессиональная замена подошвы Loro Piana в Москве — восстановление оригинального вида и комфорта. ' . $brands, 'duration' => '3-7 дней', 'badge' => '🔥 ХИТ ПРОДАЖ', 'is_hit' => true, 'hit_order' => 1],
            3  => ['slug' => 'whitening', 'title' => 'Отбеливание подошвы Loro Piana', 'price' => 10990, 'price_formatted' => '10 990', 'img' => 'services/Отбеливание подошвы.png', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'ХИТ! Отбеливание пожелтевшей подошвы Loro Piana в Москве — возвращаем белоснежный вид за 3-7 дней. ' . $brands, 'duration' => '3-7 дней', 'badge' => '🔥 ХИТ ПРОДАЖ', 'is_hit' => true, 'hit_order' => 2],
            10 => ['slug' => 'bag-restoration', 'title' => 'Реставрация сумок', 'price' => 7990, 'price_formatted' => '7 990', 'img' => 'services/Реставрация сумок.png', 'bg' => '#dc5400', 'dark' => true, 'desc' => 'ХИТ! Реставрация сумок Hermès, Chanel, Louis Vuitton, Loro Piana в Москве: царапины, потёртости, швы, молнии, фурнитура, цвет. ' . $brands, 'duration' => '3-10 дней', 'badge' => '🔥 ХИТ ПРОДАЖ', 'is_hit' => true, 'hit_order' => 3],
            5  => ['slug' => 'restoration', 'title' => 'Реставрация премиальной обуви', 'price' => 6490, 'price_formatted' => '6 490', 'img' => 'services/реставрация.png', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'Реставрация обуви Loro Piana, Hermès, Berluti, John Lobb, Gucci, Louis Vuitton в Москве: царапины, потёртости, заломы, швы, молнии, фурнитура и цвет. ' . $brands, 'duration' => '3-7 дней', 'badge' => 'ХИТ ПРОДАЖ', 'is_hit' => true, 'hit_order' => 4],
            1  => ['slug' => 'cleaning', 'title' => 'Чистка премиальной обуви', 'price' => 5990, 'price_formatted' => '5 990', 'img' => 'services/чистка.png', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'Чистка премиальной обуви Loro Piana, Hermès, Berluti, Gucci, Prada, Louis Vuitton в Москве. Комплексная чистка снаружи и внутри, восстановление формы, цвета, пропитка. ' . $brands, 'duration' => '1-6 дней'],
            2  => ['slug' => 'prevention', 'title' => 'Профилактика подошвы обуви', 'price' => 3490, 'price_formatted' => '3 490', 'img' => 'services/профилактика.png', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'Установка фактурной или гелевой профилактики на подошву для защиты от износа. Продлевает срок службы обуви. ' . $brands, 'duration' => '1-2 дней'],
            6  => ['slug' => 'heel-taps-rubber', 'title' => 'Набойки (резина)', 'price' => 1990, 'price_formatted' => '1 990', 'img' => 'services/Набойки.png', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'Установка резиновых набоек на мужскую обувь. ' . $brands, 'duration' => '1 дней'],
            7  => ['slug' => 'heel-taps-combined', 'title' => 'Набойки комбинированные', 'price' => 2990, 'price_formatted' => '2 990', 'img' => 'services/Набойки комбинированные.png', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'Установка комбинированных набоек на мужскую обувь. ' . $brands, 'duration' => '1 дней'],
            8  => ['slug' => 'heel-taps-stiletto', 'title' => 'Набойки (шпильки)', 'price' => 1490, 'price_formatted' => '1 490', 'img' => 'services/Набойки (шпильки).png', 'bg' => '#ffffff', 'dark' => false, 'desc' => 'Установка набоек на женские туфли на шпильке. ' . $brands, 'duration' => '1 дней'],
            9  => ['slug' => 'heel-counters', 'title' => 'Замена задников обуви', 'price' => 3490, 'price_formatted' => '3 490', 'img' => 'services/Задники.png', 'bg' => '#ffffff', 'dark' => false, 'desc' => 'Замена твёрдых или мягких задников обуви. Восстановление формы и фиксации стопы. ' . $brands, 'duration' => '2-4 дней'],
            11 => ['slug' => 'leather-painting', 'title' => 'Ручная роспись на коже', 'price' => 49900, 'price_formatted' => '49 900', 'img' => 'services/ручная роспись.png', 'bg' => '#fdf7e1', 'dark' => false, 'desc' => 'Уникальная ручная роспись на коже — дизайн выбираете вы, получаете единственную в мире вещь. ' . $brands, 'duration' => '5-14 дней'],
        ];
    }

    /** Хиты продаж — для акцента на главной и в каталоге (замена/отбеливание Loro Piana, реставрация сумок и обуви) */
    public static function getHits(): array
    {
        return array_filter(self::getServices(), fn($s) => !empty($s['is_hit']));
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
