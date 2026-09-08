<?php
// Telegram CRO widget — floating + inline banners
$tgBase = 'https://t.me/maksim1144';
function tg_link($src) {
  global $tgBase;
  return $tgBase . '?utm_source=site&utm_medium=telegram&utm_campaign=' . urlencode($src);
}
?>
<!-- Floating Telegram CRO -->
<div class="tg-float" id="tg-float" aria-label="Telegram">
  <a href="<?= tg_link('float') ?>" target="_blank" rel="noopener" class="tg-float__btn" data-tg="float" aria-label="Написать в Telegram — оценим за 5 минут">
    <span class="tg-float__pulse"></span>
    <svg width="28" height="28" viewBox="0 0 24 24" fill="white"><path d="M20.665 3.717l-17.73 6.837c-1.21.486-1.203 1.161-.222 1.462l4.552 1.42 10.532-6.645c.498-.303.953-.14.579.192l-8.533 7.701h-.002l.002.001-.314 4.692c.46 0 .663-.211.921-.46l2.211-2.15 4.599 3.397c.848.467 1.457.227 1.668-.785l3.019-14.228c.309-1.239-.473-1.8-1.282-1.434z"/></svg>
  </a>
  <div class="tg-float__bubble" id="tg-bubble">
    <a href="<?= tg_link('float_bubble') ?>" target="_blank" rel="noopener" class="tg-float__bubble-link" data-tg="float_bubble">
      <span class="tg-float__bubble-title">Оценим стоимость работы</span>
      <span class="tg-float__bubble-sub">по фото за 5 мин · Бесплатно →</span>
    </a>
    <button class="tg-float__close" id="tg-float-close" aria-label="Закрыть сообщение">×</button>
  </div>
</div>
