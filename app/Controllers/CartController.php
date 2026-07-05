<?php

namespace App\Controllers;

use App\Config\Session;

class CartController
{
  private const PRODUCTS = [
    1  => ['title' => 'Базовая химчистка', 'price' => 3490, 'image_url' => '/public/assets/images/solefresh/1771325109170-5912.jpg', 'bg_color' => '#1C1512'],
    2  => ['title' => 'Водоотталкивающая пропитка', 'price' => 1990, 'image_url' => '/public/assets/images/solefresh/1771675668922-443.jpg', 'bg_color' => '#1C1512'],
    3  => ['title' => 'Экспресс-чистка', 'price' => 1990, 'image_url' => '/public/assets/images/solefresh/1771014250625-3789.webp', 'bg_color' => '#1C1512'],
    4  => ['title' => 'Питание и кондиционирование кожи', 'price' => 1990, 'image_url' => '/public/assets/images/solefresh/1771326480456-1968.jpg', 'bg_color' => '#1C1512'],
    5  => ['title' => 'Растяжка обуви', 'price' => 1490, 'image_url' => '/public/assets/images/solefresh/1771327434678-8059.jpg', 'bg_color' => '#1C1512'],
    6  => ['title' => 'Восстановление формы обуви', 'price' => 1490, 'image_url' => '/public/assets/images/solefresh/1771329486969-2642.jpg', 'bg_color' => '#1C1512'],
    7  => ['title' => 'Чистка спортивной обуви', 'price' => 2990, 'image_url' => '/public/assets/images/solefresh/1771329597854-9744.jpg', 'bg_color' => '#1C1512'],
    8  => ['title' => 'Отбеливание подошвы', 'price' => 1490, 'image_url' => '/public/assets/images/solefresh/1771329753698-5386.jpg', 'bg_color' => '#1C1512'],
    9  => ['title' => 'Глубокая чистка микрофиброй', 'price' => 2490, 'image_url' => '/public/assets/images/solefresh/1771329961198-4780.jpg', 'bg_color' => '#1C1512'],
    10 => ['title' => 'Защитная пропитка и вощение', 'price' => 1990, 'image_url' => '/public/assets/images/solefresh/1771334464237-4257.png', 'bg_color' => '#1C1512'],
    11 => ['title' => 'Дезодорация и свежесть', 'price' => 990, 'image_url' => '/public/assets/images/solefresh/1771334546823-1997.jpg', 'bg_color' => '#1C1512'],
    12 => ['title' => 'Покраска и реставрация цвета', 'price' => 3990, 'image_url' => '/public/assets/images/solefresh/1771334585255-3781.jpg', 'bg_color' => '#1C1512'],
    13 => ['title' => 'Премиум-чистка', 'price' => 5990, 'image_url' => '/public/assets/images/solefresh/1771579097991-627.jpg', 'bg_color' => '#1C1512'],
    14 => ['title' => 'Чистка замши и нубука', 'price' => 4490, 'image_url' => '/public/assets/images/solefresh/1771578995760-1226.png', 'bg_color' => '#1C1512'],
    15 => ['title' => 'Полный комплекс ухода', 'price' => 8990, 'image_url' => '/public/assets/images/solefresh/1771334763273-3808.jpg', 'bg_color' => '#1C1512'],
    16 => ['title' => 'Химчистка экипировки', 'price' => 4990, 'image_url' => '/public/assets/images/solefresh/1771334893250-1313.jpg', 'bg_color' => '#1C1512'],
  ];

  private function readCart(): array
  {
    $data = Session::init();
    return $data['sf_cart'] ?? [];
  }

  private function writeCart(array $items): void
  {
    Session::init('sf_cart', $items);
  }

  private function json(array $data, int $code = 200): string
  {
    http_response_code($code);
    header('Content-Type: application/json; charset=utf-8');
    $json = json_encode($data, JSON_UNESCAPED_UNICODE);
    echo $json;
    return $json;
  }

  public function onAdd(): void
  {
    $input = json_decode(file_get_contents('php://input'), true);
    $productId = (int)($input['product_id'] ?? 0);
    $qty = max(1, (int)($input['qty'] ?? 1));
    if ($productId < 1 || !isset(self::PRODUCTS[$productId])) {
      $this->json(['ok' => false, 'error' => 'Товар не найден'], 400);
      return;
    }
    $items = $this->readCart();
    $found = false;
    foreach ($items as &$item) {
      if ((int)$item['product_id'] === $productId) {
        $item['qty'] += $qty;
        $found = true;
        break;
      }
    }
    if (!$found) {
      $items[] = ['product_id' => $productId, 'qty' => $qty];
    }
    $this->writeCart($items);
    $totalQty = array_sum(array_column($items, 'qty'));
    $product = self::PRODUCTS[$productId];
    $this->json([
      'ok' => true,
      'count' => $totalQty,
      'added' => $product,
    ]);
  }

  public function onUpdate(): void
  {
    $input = json_decode(file_get_contents('php://input'), true);
    $productId = (int)($input['product_id'] ?? 0);
    $qty = max(0, (int)($input['qty'] ?? 0));
    if ($productId < 1) {
      $this->json(['ok' => false, 'error' => 'Неверный ID товара'], 400);
      return;
    }
    $items = $this->readCart();
    foreach ($items as $k => $item) {
      if ((int)$item['product_id'] === $productId) {
        if ($qty < 1) {
          unset($items[$k]);
        } else {
          $items[$k]['qty'] = $qty;
        }
        break;
      }
    }
    $items = array_values($items);
    $this->writeCart($items);
    $totalQty = array_sum(array_column($items, 'qty'));
    $this->json(['ok' => true, 'count' => $totalQty]);
  }

  public function onRemove(): void
  {
    $input = json_decode(file_get_contents('php://input'), true);
    $productId = (int)($input['product_id'] ?? 0);
    if ($productId < 1) {
      $this->json(['ok' => false, 'error' => 'Неверный ID товара'], 400);
      return;
    }
    $items = $this->readCart();
    foreach ($items as $k => $item) {
      if ((int)$item['product_id'] === $productId) {
        unset($items[$k]);
        break;
      }
    }
    $items = array_values($items);
    $this->writeCart($items);
    $totalQty = array_sum(array_column($items, 'qty'));
    $this->json(['ok' => true, 'count' => $totalQty]);
  }

  public function onGet(): void
  {
    $items = $this->readCart();
    $totalQty = array_sum(array_column($items, 'qty'));
    $formatted = [];
    foreach ($items as $item) {
      $pid = (int)$item['product_id'];
      $product = self::PRODUCTS[$pid] ?? null;
      if (!$product) continue;
      $formatted[] = [
        'product_id' => $pid,
        'qty' => $item['qty'],
        'title' => $product['title'],
        'image_url' => $product['image_url'],
        'bg_color' => $product['bg_color'],
        'item_total' => $item['qty'],
        'price' => $product['price'],
      ];
    }
    $this->json([
      'ok' => true,
      'count' => $totalQty,
      'items' => $formatted,
      'subtotal_rub' => 0,
    ]);
  }

  public function onComment(): void
  {
    $input = json_decode(file_get_contents('php://input'), true);
    $comment = trim($input['comment'] ?? '');
    $phone = trim($input['phone'] ?? '');
    Session::init('sf_comment', $comment);
    Session::init('sf_phone', $phone);
    $this->json(['ok' => true]);
  }
}
