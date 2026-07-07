<?php
use Setting\Route\Function\Functions;
$seo = Functions::seo();
$notify = Functions::notify();

$siteINFO = ['canonical' => '/requisites', 'priority' => '0.5', 'changefreq' => 'monthly', 'index' => 'main'];

$pageTitle = 'Реквизиты — MANDO MEMORI';
$pageDesc = 'Реквизиты компании MANDO MEMORI.';
$pageKeywords = 'реквизиты MANDO MEMORI';
$canonical = $_SERVER['REQUEST_URI'] ?? '/requisites';
require __DIR__ . '/../../partials/header.php';
?>


<main class="page-content">
  <div class="container">
    <h1 class="page-title">Реквизиты</h1>
    <div class="page-body" id="page-body">
      <p><strong style="color: rgb(0, 0, 0);">Общество с ограниченной ответственностью MANDO MEMORI</strong></p><p><span style="color: rgb(0, 0, 0);">Юридический адрес: 127051, Москва г., Переулок Колобовский 2-й, дом 9/2, строение 1, этаж 3, ком. Г, пом. I, комната 15</span></p><p><span style="color: rgb(0, 0, 0);">ИНН 7723432492, ОГРН 1167746184110</span></p><p><span style="color: rgb(0, 0, 0);">+7 (915) 252-75-75</span></p><p><a href="mailto:MandoMemori@list.ru" rel="noopener noreferrer" target="_blank" style="color: rgb(0, 0, 0);">MandoMemori@list.ru</a></p><p><br></p>
    </div>
  </div>
</main>
<script>
  (function() {
    var body = document.getElementById('page-body');
    if (!body) return;
    var siteUrl = location.origin;
    body.innerHTML = body.innerHTML.replace(/\[website\]/gi, siteUrl);
  })();
</script>
  <?php require __DIR__ . '/../../partials/footer.php'; ?>