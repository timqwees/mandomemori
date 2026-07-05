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
            1  => ['slug' => 'sole-fresh', 'title' => 'Базовая химчистка', 'price' => 3490, 'price_formatted' => '3 490', 'img' => '1771325109170-5912.jpg', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'Чистка повседневной обуви из гладкой кожи, замши, нубука и текстиля. С защитной пропиткой.', 'duration' => '1-6 дней'],
            2  => ['slug' => 'repel', 'title' => 'Водоотталкивающая пропитка', 'price' => 1990, 'price_formatted' => '1 990', 'img' => '1771675668922-443.jpg', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'Профессиональная водоотталкивающая пропитка для обуви из кожи, замши и нубука.', 'duration' => '1-3 дней'],
            3  => ['slug' => 'foam', 'title' => 'Экспресс-чистка', 'price' => 1990, 'price_formatted' => '1 990', 'img' => '1771014250625-3789.webp', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'Быстрая очистка обуви от лёгких загрязнений с деликатным уходом за материалом.', 'duration' => '1-2 дней'],
            4  => ['slug' => 'oil', 'title' => 'Питание и кондиционирование кожи', 'price' => 1990, 'price_formatted' => '1 990', 'img' => '1771326480456-1968.jpg', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'Питание и восстановление эластичности гладкой кожи с кондиционированием.', 'duration' => '1-3 дней'],
            5  => ['slug' => 'resize', 'title' => 'Растяжка обуви', 'price' => 1490, 'price_formatted' => '1 490', 'img' => '1771327434678-8059.jpg', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'Профессиональная растяжка обуви на 0,5–1 размер в ширину.', 'duration' => '1-2 дней'],
            6  => ['slug' => 'trees', 'title' => 'Восстановление формы обуви', 'price' => 1490, 'price_formatted' => '1 490', 'img' => '1771329486969-2642.jpg', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'Восстановление формы обуви после носки, удаление заломов и складок.', 'duration' => '1-3 дней'],
            7  => ['slug' => 'brushes', 'title' => 'Чистка спортивной обуви', 'price' => 2990, 'price_formatted' => '2 990', 'img' => '1771329597854-9744.jpg', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'Профессиональная чистка кроссовок, кед и спортивной обуви с учётом материалов.', 'duration' => '1-6 дней'],
            8  => ['slug' => 'wipes', 'title' => 'Отбеливание подошвы', 'price' => 1490, 'price_formatted' => '1 490', 'img' => '1771329753698-5386.jpg', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'Вернём белизну пожелтевшей подошве кроссовок и туфель профессиональными составами.', 'duration' => '1-3 дней'],
            9  => ['slug' => 'towel', 'title' => 'Глубокая чистка микрофиброй', 'price' => 2490, 'price_formatted' => '2 490', 'img' => '1771329961198-4780.jpg', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'Глубокая очистка обуви микрофиброй с удалением стойких загрязнений.', 'duration' => '1-4 дней'],
            10 => ['slug' => 'wax', 'title' => 'Защитная пропитка и вощение', 'price' => 1990, 'price_formatted' => '1 990', 'img' => '1771334464237-4257.png', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'Вощение и защитная обработка обуви для долговременной защиты от влаги и грязи.', 'duration' => '1-3 дней'],
            11 => ['slug' => 'fresh', 'title' => 'Дезодорация и свежесть', 'price' => 990, 'price_formatted' => '990', 'img' => '1771334546823-1997.jpg', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'Удаление запахов и дезодорация обуви с профессиональными составами.', 'duration' => '1 дней'],
            12 => ['slug' => 'paint', 'title' => 'Покраска и реставрация цвета', 'price' => 3990, 'price_formatted' => '3 990', 'img' => '1771334585255-3781.jpg', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'Реставрация цвета, маскировка потёртостей и царапин, полная покраска обуви.', 'duration' => '1-6 дней'],
            13 => ['slug' => 'premium', 'title' => 'Премиум-чистка', 'price' => 5990, 'price_formatted' => '5 990', 'img' => '1771579097991-627.jpg', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'Глубокая очистка обуви люксовых брендов (Loro Piana, Gucci, Prada). Особый подход.', 'duration' => '1-6 дней'],
            14 => ['slug' => 'soft', 'title' => 'Чистка замши и нубука', 'price' => 4490, 'price_formatted' => '4 490', 'img' => '1771578995760-1226.png', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'Деликатная чистка замшевой обуви, восстановление ворса и цвета, защита от влаги.', 'duration' => '1-6 дней'],
            15 => ['slug' => 'standard', 'title' => 'Полный комплекс ухода', 'price' => 8990, 'price_formatted' => '8 990', 'img' => '1771334763273-3808.jpg', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'Максимальный уход: химчистка, пропитка, покраска, растяжка, восстановление формы.', 'duration' => '1-6 дней'],
            16 => ['slug' => 'travel', 'title' => 'Химчистка экипировки', 'price' => 4990, 'price_formatted' => '4 990', 'img' => '1771334893250-1313.jpg', 'bg' => '#1C1512', 'dark' => true, 'desc' => 'Чистка туристической и спортивной экипировки, рюкзаков, сумок.', 'duration' => '1-6 дней'],
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
