<?php

namespace App\Controllers;

use App\Config\Session;
use Dompdf\Dompdf;

class CheckoutController
{
  private const PRODUCTS = [
    1  => ['title' => 'Базовая химчистка', 'price' => 3490],
    2  => ['title' => 'Водоотталкивающая пропитка', 'price' => 1990],
    3  => ['title' => 'Экспресс-чистка', 'price' => 1990],
    4  => ['title' => 'Питание и кондиционирование кожи', 'price' => 1990],
    5  => ['title' => 'Растяжка обуви', 'price' => 1490],
    6  => ['title' => 'Восстановление формы обуви', 'price' => 1490],
    7  => ['title' => 'Чистка спортивной обуви', 'price' => 2990],
    8  => ['title' => 'Отбеливание подошвы', 'price' => 1490],
    9  => ['title' => 'Глубокая чистка микрофиброй', 'price' => 2490],
    10 => ['title' => 'Защитная пропитка и вощение', 'price' => 1990],
    11 => ['title' => 'Дезодорация и свежесть', 'price' => 990],
    12 => ['title' => 'Покраска и реставрация цвета', 'price' => 3990],
    13 => ['title' => 'Премиум-чистка', 'price' => 5990],
    14 => ['title' => 'Чистка замши и нубука', 'price' => 4490],
    15 => ['title' => 'Полный комплекс ухода', 'price' => 8990],
    16 => ['title' => 'Химчистка экипировки', 'price' => 4990],
  ];

  public function onGenerate(): void
  {
    $data = Session::init();
    $cartItems = $data['sf_cart'] ?? [];

    $resolvedItems = [];
    $totalSum = 0;
    foreach ($cartItems as $item) {
      $pid = (int)($item['product_id'] ?? 0);
      $qty = (int)($item['qty'] ?? 0);
      if ($pid < 1 || $qty < 1 || !isset(self::PRODUCTS[$pid])) continue;
      $p = self::PRODUCTS[$pid];
      $resolvedItems[] = [
        'title' => $p['title'],
        'price' => $p['price'],
        'qty' => $qty,
        'total' => $p['price'] * $qty,
      ];
      $totalSum += $p['price'] * $qty;
    }

    if (empty($resolvedItems)) {
      http_response_code(400);
      echo 'Корзина пуста';
      return;
    }

    $orderNum = $data['sf_order_num'] ?? ('MM-' . date('ymd') . '-' . strtoupper(substr(md5(uniqid()), 0, 6)));
    $dateRu = date('d.m.Y H:i');

    $comment = trim($data['sf_comment'] ?? '');
    $phone = trim($data['sf_phone'] ?? '');

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
<head>
<meta charset="UTF-8">
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
<p style="font-size:10pt;color:#666">Спасибо, что выбираете MANDO MEMORI!<br>По всем вопросам: @mandomemori (Telegram) или +7 495 198-04-95</p>
' . ($comment ? '<p style="font-size:10pt;color:#333;border-top:1px solid #ddd;padding-top:12px"><strong>Комментарий к заказу:</strong></p><div style="font-size:10pt;color:#333;line-height:1.5">' . strip_tags($comment, '<strong><em><b><i><u><s><ol><ul><li><br><p><span>') . '</div>' : '') . '
<div class="footer">Данный чек является подтверждением бронирования услуг.</div>
</body>
</html>';

    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();

    $filename = 'check-' . $orderNum . '.pdf';

    Session::init('sf_cart', []);
    Session::init('sf_comment', null);
    Session::init('sf_phone', null);

    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    echo $dompdf->output();
  }
}
