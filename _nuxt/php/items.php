<?php

require_once __DIR__ . '/../../src/helpers.php';

$user = currentUser();

// установимчасовой пояс по умолчанию
date_default_timezone_set('UTC');

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["type-form"])) {

    //В переменную $token нужно вставить токен, который нам прислал @botFather
    $token = "7816735597:AAG-N7iqSod7Gqk8V-wcfaF6KqUXYW9mXLc";

    //Сюда вставляем chat_id
    $chat_id = "7446712718";

    //one
    if ($_POST['type-form'] == 'one') {
        $username = $_POST['username'] ?? "Отсутствуют данные";
        $userphone = $_POST['userphone'] ?? "Не указано";
        $type_message = $_POST['type-message'] ?? null;
        $us_id = $user['id'] ?? "Отсутствуют данные";

        // Собираем в массив то, что будет передаваться боту
        $arr = [
            'Услуга:' => 'Оформить заказ',
            'От:' => $username,
            'Тип связи:' => $type_message,
            'Номер телефона:' => $userphone . ' ID: ' . $us_id,
            'Дата заказа:' => date('d.m.Y') . " Время: " . date('H:i:s')
        ];

        // Форматируем сообщение
        $message = implode('%0A', array_map(
            function ($key, $value) {
                return "<b>{$key}</b> {$value}";
            },
            array_keys($arr),
            $arr
        ));
        $message_photo = implode("\n", array_map(
            function ($key, $value) {
                return "<b>{$key}</b> {$value}";
            },
            array_keys($arr),
            $arr
        ));

        // Проверка на наличие файла для отправки
        if (isset($_FILES['uploadfiles']) && $_FILES['uploadfiles']['error'] == UPLOAD_ERR_OK) {
            $fileTmpPath = $_FILES['uploadfiles']['tmp_name'];
            $fileName = $_FILES['uploadfiles']['name'];
            $fileSize = $_FILES['uploadfiles']['size'];
            $fileType = $_FILES['uploadfiles']['type'];

            // Проверка, что файл является изображением
            $allowedTypes = ['image/png', 'image/jpeg', 'image/jpg'];
            if (in_array($fileType, $allowedTypes)) {
                // Отправка изображения в Telegram
                $file = new CURLFile($fileTmpPath);
                $data = [
                    'chat_id' => $chat_id,
                    'caption' => $message_photo,
                    'parse_mode' => 'html',
                    'photo' => $file,
                ];

                // Инициализация cURL
                $ch = curl_init("https://api.telegram.org/bot{$token}/sendPhoto");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                $response = curl_exec($ch);
                curl_close($ch);

                if ($response !== false) {
                    echo "<script>
                    alert('Спасибо! Вы успешно оформили заказ, с вами свяжеться консультант!');
                    window.location.href = '/../../index.php';
                    </script>";
                } else {
                    echo "<script>
                    alert('Ошибка при отправке файла. Пожалуйста, попробуйте еще раз.');
                    window.location.href = '/../../index.php';
                    </script>";
                }
            } else {
                echo "<script>
                alert('Неверный формат изображения. Пожалуйста, выберите другое изображение.');
                window.location.href = '/../../index.php';
                </script>";
            }
        } else {
            $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$message}", "r");
            echo "<script>
            alert('Спасибо! Вы успешно оформили заказ, с вами свяжеться консультант!');
            window.location.href = '/../../index.php';
            </script>";
        }
    }
    //two
    if ($_POST['type-form'] == 'two') {
        $username = $_POST['username'] ?? "Отсувстуют даные";
        $userphone = $_POST['userphone'] ?? "Не указано";
        $messengers = $_POST['messengers'] ?? null;
        $us_id = $user['id'] ?? "Отсувстуют даные";
        //checkbox
        $checkboxes = [
            'Обувь' => isset($_POST['checkbox_one_1']),
            'Сумки' => isset($_POST['checkbox_one_2']),
            'Одежда' => isset($_POST['checkbox_one_3']),
            'Рюкзаки, клатчи, портмоне и другое' => isset($_POST['checkbox_one_4'])
        ];
        $checkboxes2 = [
            'Чистка' => isset($_POST['checkbox_two_1']),
            'Реставрация' => isset($_POST['checkbox_two_2']),
            'Ремонт' => isset($_POST['checkbox_two_3']),
            'Другое' => isset($_POST['checkbox_two_4'])
        ];

        $selected_categories = [];
        foreach ($checkboxes as $category => $isChecked) {
            if ($isChecked) {
                $selected_categories[] = $category;
            }
        }

        $selected_categories2 = [];
        foreach ($checkboxes2 as $category => $isChecked) {
            if ($isChecked) {
                $selected_categories2[] = $category;
            }
        }

        $num = !empty($selected_categories) ? implode(' и ', $selected_categories) : 'нет';
        $num2 = !empty($selected_categories2) ? implode(' и ', $selected_categories2) : 'нет';

        $arr = [
            'Услуга:' => 'Почитать стоимость',
            'Какую вещь нужно восстановить?' => $num,
            'Выбрать услуги' => $num2,
            'От:' => $username,
            'Тип связи:' => $messengers,
            'Номер телефона:' => $userphone . ' ID: ' . $us_id,
            'Дата заказа:' => date('d.m.Y') . " Время: " . date('H:i:s')
        ];

        // Форматируем сообщение для Telegram
        $message = implode('%0A', array_map(
            function ($key, $value) {
                return "<b>{$key}</b> {$value}";
            },
            array_keys($arr),
            $arr
        ));
        $message_photo = implode("\n", array_map(
            function ($key, $value) {
                return "<b>{$key}</b> {$value}";
            },
            array_keys($arr),
            $arr
        ));

        // Проверка на наличие файла для отправки
        if (isset($_FILES['uploadfiles']) && $_FILES['uploadfiles']['error'] == UPLOAD_ERR_OK) {
            $fileTmpPath = $_FILES['uploadfiles']['tmp_name'];
            $fileName = $_FILES['uploadfiles']['name'];
            $fileSize = $_FILES['uploadfiles']['size'];
            $fileType = $_FILES['uploadfiles']['type'];

            // Проверка, что файл является изображением
            $allowedTypes = ['image/png', 'image/jpeg', 'image/jpg'];
            if (in_array($fileType, $allowedTypes)) {
                // Отправка изображения в Telegram
                $file = new CURLFile($fileTmpPath);
                $data = [
                    'chat_id' => $chat_id,
                    'caption' => $message_photo,
                    'parse_mode' => 'html',
                    'photo' => $file,
                ];

                // Инициализация cURL
                $ch = curl_init("https://api.telegram.org/bot{$token}/sendPhoto");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                $response = curl_exec($ch);
                curl_close($ch);

                if ($response !== false) {
                    echo "<script>
                    alert('Спасибо! Вы успешно оформили заказ, с вами свяжеться консультант!');
                    window.location.href = '/../../index.php';
                    </script>";
                } else {
                    echo "<script>
                    alert('Ошибка при отправке файла. Пожалуйста, попробуйте еще раз.');
                    window.location.href = '/../../index.php';
                    </script>";
                }
            } else {
                echo "<script>
                alert('Неверный формат изображения. Пожалуйста, выберите другое изображение.');
                window.location.href = '/../../index.php';
                </script>";
            }
        } else {
            $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$message}", "r");
            echo "<script>
            alert('Спасибо! Вы успешно оформили заказ, с вами свяжеться консультант!');
            window.location.href = '/../../index.php';
            </script>";
        }
    }
}

?>