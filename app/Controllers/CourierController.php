<?php

namespace App\Controllers;

use App\Models\Network\Network;

class CourierController
{
    public function onRequest(): void
    {
        header('Content-Type: application/json');

        $input = json_decode(file_get_contents('php://input'), true);

        $name = trim($input['name'] ?? '');
        $phone = trim($input['phone'] ?? '');
        $address = trim($input['address'] ?? '');
        $orderNum = trim($input['order_num'] ?? '');

        if (!$name || !$phone || !$address) {
            http_response_code(400);
            echo json_encode(['success' => false, 'message' => 'Заполните все обязательные поля']);
            return;
        }

        $subject = 'Новая заявка на вызов курьера — MANDO MEMORI';

        $body = '<h2>Новая заявка на вызов курьера</h2>'
            . '<table style="border-collapse:collapse;width:100%;max-width:600px;font-family:sans-serif">'
            . '<tr><td style="padding:8px 12px;background:#f5f5f5;font-weight:600;border:1px solid #ddd">Имя</td><td style="padding:8px 12px;border:1px solid #ddd">' . htmlspecialchars($name) . '</td></tr>'
            . '<tr><td style="padding:8px 12px;background:#f5f5f5;font-weight:600;border:1px solid #ddd">Телефон</td><td style="padding:8px 12px;border:1px solid #ddd">' . htmlspecialchars($phone) . '</td></tr>'
            . '<tr><td style="padding:8px 12px;background:#f5f5f5;font-weight:600;border:1px solid #ddd">Адрес</td><td style="padding:8px 12px;border:1px solid #ddd">' . htmlspecialchars($address) . '</td></tr>';

        if ($orderNum) {
            $body .= '<tr><td style="padding:8px 12px;background:#f5f5f5;font-weight:600;border:1px solid #ddd">Номер заказа</td><td style="padding:8px 12px;border:1px solid #ddd">' . htmlspecialchars($orderNum) . '</td></tr>';
        }

        $body .= '</table>';

        try {
            $mailer = new MailController();
            $sent = $mailer->onMail('artemnersisyan777@gmail.com', $subject, $body);
        } catch (\Exception $e) {
            $sent = false;
        }

        if ($sent) {
            echo json_encode(['success' => true, 'message' => 'Заявка отправлена']);
        } else {
            http_response_code(500);
            echo json_encode(['success' => false, 'message' => 'Ошибка отправки. Попробуйте позже.']);
        }
    }
}
