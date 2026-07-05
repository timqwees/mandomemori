<?php
/**
 *
 *  _____                                                                                _____
 * ( ___ )                                                                              ( ___ )
 *  |   |~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~|   |
 *  |   |                                                                                |   |
 *  |   |                                                                                |   |
 *  |   |    ________  ___       __   _______   _______   ________                       |   |
 *  |   |   |\   __  \|\  \     |\  \|\  ___ \ |\  ___ \ |\   ____\                      |   |
 *  |   |   \ \  \|\  \ \  \    \ \  \ \   __/|\ \   __/|\ \  \___|_                     |   |
 *  |   |    \ \  \\\  \ \  \  __\ \  \ \  \_|/_\ \  \_|/_\ \_____  \                    |   |
 *  |   |     \ \  \\\  \ \  \|\__\_\  \ \  \_|\ \ \  \_|\ \|____|\  \                   |   |
 *  |   |      \ \_____  \ \____________\ \_______\ \_______\____\_\  \                  |   |
 *  |   |       \|___| \__\|____________|\|_______|\|_______|\_________\                 |   |
 *  |   |             \|__|                                 \|_________|                 |   |
 *  |   |    ________  ________  ________  _______   ________  ________  ________        |   |
 *  |   |   |\   ____\|\   __  \|\   __  \|\  ___ \ |\   __  \|\   __  \|\   __  \       |   |
 *  |   |   \ \  \___|\ \  \|\  \ \  \|\  \ \   __/|\ \  \|\  \ \  \|\  \ \  \|\  \      |   |
 *  |   |    \ \  \    \ \  \\\  \ \   _  _\ \  \_|/_\ \   ____\ \   _  _\ \  \\\  \     |   |
 *  |   |     \ \  \____\ \  \\\  \ \  \\  \\ \  \_|\ \ \  \___|\ \  \\  \\ \  \\\  \    |   |
 *  |   |      \ \_______\ \_______\ \__\\ _\\ \_______\ \__\    \ \__\\ _\\ \_______\   |   |
 *  |   |       \|_______|\|_______|\|__|\|__|\|_______|\|__|     \|__|\|__|\|_______|   |   |
 *  |   |                                                                                |   |
 *  |   |                                                                                |   |
 *  |___|~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~|___|
 * (_____)                                                                              (_____)
 *
 * Эта программа является свободным программным обеспечением: вы можете распространять ее и/или модифицировать
 * в соответствии с условиями GNU General Public License, опубликованными
 * Фондом свободного программного обеспечения (Free Software Foundation), либо в версии 3 Лицензии, либо (по вашему выбору) в любой более поздней версии.
 *
 *
 * @license GPL-3.0-or-later (см. файл LICENSE.txt)
 * @author TimQwees
 * @link https://github.com/TimQwees/Qwees_CorePro
 *
 *
 */

namespace App\Config;

class Session
{
  private static $cookieName = "__qweescore_cookie";
  private static $data = null;
  private static $lifetime = 86400; // 1 day
  private static string $secret = '';

  private static function getSecret(): string
  {
    if (self::$secret === '') {
      self::$secret = $_ENV['SESSION_SECRET'] ?? 'changeme_qweescore_insecure';
    }
    return self::$secret;
  }

  private static function sign(array $data): string
  {
    $payload = json_encode($data, JSON_UNESCAPED_UNICODE);
    $hmac = hash_hmac('sha256', $payload, self::getSecret());
    return base64_encode($hmac) . '.' . base64_encode($payload);
  }

  private static function verify(string $cookie): ?array
  {
    $parts = explode('.', $cookie, 2);
    if (count($parts) !== 2) {
      return null;
    }
    $hmac = base64_decode($parts[0], true);
    $payload = base64_decode($parts[1], true);
    if ($hmac === false || $payload === false) {
      return null;
    }
    $expected = hash_hmac('sha256', $payload, self::getSecret());
    if (!hash_equals($expected, $hmac)) {
      return null;
    }
    $decoded = json_decode($payload, true);
    return is_array($decoded) ? $decoded : null;
  }

  /**
   * Универсальный метод для управления cookie-сессией.
   * ---
   * ### Все варианты использования:
   * 1. Получить все значения:                   *```Session::init()```*
   * 2. Получить значение по ключу:              *```Session::init('key')```*
   * 3. Получить значения по нескольким ключам:  *```Session::init(['key1', 'key2'])```*
   * 4. Установить значение:                     *```Session::init('key', 'value')```*
   * 5. Установить несколько значений:           *```foreach ($arr as $k=>$v) Session::init($k, $v)```*
   * 6. Удалить ключ:                            *```Session::init('key', null)```*
   * 7. Удалить несколько ключей:                *```Session::init(['key1', 'key2'], null)```*
   * 8. Очистить всю сессию:                     *```Session::init(null)```*
   *---
   * @param null|string|array $name Ключ, массив ключей или null для полной очистки
   * @param mixed $value Значение при установке; null — удаление ключа только при 2 аргументах
   * @return mixed
   */
  public static function init($name = '', $value = null)
  {
    // Загружаем данные из cookie (с проверкой подписи)
    if (self::$data === null) {
      self::$data = [];
      if (!empty($_COOKIE[self::$cookieName])) {
        $tmp = self::verify($_COOKIE[self::$cookieName]);
        if (is_array($tmp)) {
          self::$data = $tmp;
        }
      }
    }

    $argCount = func_num_args();

    // === Удаление всей сессии ===
    if ($argCount === 1 && $name === null) {
      self::$data = [];
      self::rewrite(true);
      return true;
    }

    // === Получение всех данных ===
    if ($name === '' || $name === false) {
      return self::$data;
    }

    // === Массовые операции с массивами ===
    if (is_array($name)) {
      if ($argCount === 1) {
        // Получение нескольких значений: Session::init(['key1', 'key2'])
        $result = [];
        foreach ($name as $key) {
          $result[$key] = self::$data[$key] ?? null;
        }
        return $result;
      }
      // Удаление нескольких ключей: Session::init(['key1', 'key2'], null)
      foreach ($name as $key) {
        unset(self::$data[$key]);
      }
      self::rewrite();
      return true;
    }

    // === GET: Session::init('key') — 1 аргумент ===
    if ($argCount === 1) {
      return self::$data[$name] ?? null;
    }

    // === DELETE: Session::init('key', null) — 2 аргумента, value === null ===
    if ($value === null) {
      unset(self::$data[$name]);
      self::rewrite();
      return true;
    }

    // === SET: Session::init('key', 'value') ===
    self::$data[$name] = $value;
    self::rewrite();
    return true;
  }

  /**
   * Записывает cookie
   * @param bool $remove удалить cookie
   */
  private static function rewrite($all_remove = false)
  {
    $secure = !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off';

    if ($all_remove) {
      setcookie(
        self::$cookieName,
        '',
        time() - 3600,
        '/',
        '',
        $secure,
        true
      );
      return true;
    }

    setcookie(
      self::$cookieName,
      self::sign(self::$data),
      time() + self::$lifetime,
      '/',
      '',
      $secure,
      true
    );

    return true;
  }
}
