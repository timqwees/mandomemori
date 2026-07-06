<?php

namespace App\Controllers;

use App\Config\Session;
use Dompdf\Dompdf;

class CourierController
{
    public function onRequest(): void
    {
        header('Content-Type: application/json');

        $input = json_decode(file_get_contents('php://input'), true);

        $name = trim($input['name'] ?? '');
        $phone = trim($input['phone'] ?? '');
        $address = trim($input['address'] ?? '');
        $email = trim($input['email'] ?? '');
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

        $pdfSent = true;
        $pdfPath = null;
        if ($orderNum) {
            $orderData = Session::init('sf_order_data');
            if ($orderData && !empty($orderData['items'])) {
                $pdfPath = $this->generatePdf($orderNum, $orderData);
            }
        }

        try {
            $mailer = new MailController();
            $sent = $mailer->onMail('artemnersisyan777@gmail.com', $subject, $body, $pdfPath);
        } catch (\Exception $e) {
            $sent = false;
        }

        if ($pdfPath) {
            if ($email) {
                try {
                    $mailer = new MailController();
                    $mailer->onMail($email, 'Ваш чек заказа ' . $orderNum . ' — MANDO MEMORI', 'Здравствуйте! Спасибо за заказ. Во вложении PDF-чек с деталями.', $pdfPath);
                } catch (\Exception $e) {
                }
            }
            unlink($pdfPath);
        }

        if ($sent && $pdfSent) {
            echo json_encode(['success' => true, 'message' => 'Заявка отправлена']);
        } elseif ($sent) {
            echo json_encode(['success' => true, 'message' => 'Заявка отправлена']);
        } else {
            http_response_code(500);
            echo json_encode(['success' => false, 'message' => 'Ошибка отправки. Попробуйте позже.']);
        }
    }

    private function generatePdf(string $orderNum, array $orderData): ?string
    {
        $resolvedItems = $orderData['items'] ?? [];
        $totalSum = $orderData['total'] ?? 0;
        $phone = $orderData['phone'] ?? '';
        $comment = $orderData['comment'] ?? '';
        $dateRu = $orderData['date'] ?? date('d.m.Y H:i');

        $rowsHtml = '';
        foreach ($resolvedItems as $ri) {
            $rowsHtml .= '<tr>
                <td>' . htmlspecialchars($ri['title']) . '</td>
                <td style="text-align:center">' . $ri['qty'] . '</td>
                <td style="text-align:right">' . number_format($ri['price'], 0, '', ' ') . ' ₽</td>
                <td style="text-align:right">' . number_format($ri['total'], 0, '', ' ') . ' ₽</td>
            </tr>';
        }

        $html = '<!DOCTYPE html>
<html lang="ru">
<head><meta charset="UTF-8">
<style>
  @page { margin: 20mm; }
  body { font-family: DejaVu Sans, sans-serif; font-size: 12pt; color: #222; }
  .header { text-align: center; margin-bottom: 24px; }
  .header h1 { font-size: 18pt; margin: 0 0 4px; text-transform: uppercase; letter-spacing: 2px; }
  .header p { margin: 0; color: #666; font-size: 10pt; }
  .order-meta { margin-bottom: 20px; }
  .order-meta td { padding: 2px 0; font-size: 10pt; }
  table.items { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
  table.items th { background: #1C1512; color: #fff; padding: 8px 10px; font-size: 10pt; text-align:left; }
  table.items td { padding: 8px 10px; border-bottom: 1px solid #ddd; font-size: 10pt; }
  .total-row td { font-weight: bold; font-size: 12pt; border-top: 2px solid #1C1512; }
  .footer { text-align: center; font-size: 9pt; color: #999; margin-top: 30px; }
</style>
</head>
<body>
<div class="header">
  <h1>MANDO MEMORI</h1>
  <p>Чистка обуви в Москве</p>
</div>
<table class="order-meta">
  <tr><td><strong>Заказ:</strong> ' . $orderNum . '</td></tr>
  <tr><td><strong>Дата:</strong> ' . $dateRu . '</td></tr>
  ' . ($phone ? '<tr><td><strong>Телефон:</strong> ' . htmlspecialchars($phone) . '</td></tr>' : '') . '
</table>
<table class="items">
  <thead>
    <tr>
      <th>Услуга</th>
      <th style="text-align:center">Кол-во</th>
      <th style="text-align:right">Цена</th>
      <th style="text-align:right">Сумма</th>
    </tr>
  </thead>
  <tbody>
    ' . $rowsHtml . '
    <tr class="total-row">
      <td colspan="3" style="text-align:right">Итого:</td>
      <td style="text-align:right">' . number_format($totalSum, 0, '', ' ') . ' ₽</td>
    </tr>
  </tbody>
</table>
<p style="font-size:10pt;color:#666">Спасибо, что выбираете MANDO MEMORI!</p>
' . ($comment ? '<p style="font-size:10pt;color:#333"><strong>Комментарий:</strong><br>' . strip_tags($comment, '<strong><em><b><i><u><s><ol><ul><li><br><p><span>') . '</p>' : '') . '
<div class="footer">Данный чек является подтверждением заказа.</div>
</body>
</html>';

        try {
            $dompdf = new Dompdf();
            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();

            $tmpPath = sys_get_temp_dir() . '/check-' . $orderNum . '.pdf';
            file_put_contents($tmpPath, $dompdf->output());
            return $tmpPath;
        } catch (\Exception $e) {
            return null;
        }
    }
}
