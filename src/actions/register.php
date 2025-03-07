<?php

require_once __DIR__ . '/../helpers.php';

// Выносим данных из $_POST в отдельные переменные

$avatarPath = null;
$firstname = $_POST['firstname'] ?? null;
$lastname = $_POST['lastname'] ?? null;
$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;
$passwordConfirmation = $_POST['password_confirmation'] ?? null;
$avatar = $_FILES['avatar'] ?? null;

// Выполняем валидацию полученных данных с формы

if (empty($firstname)) {
    setValidationError('name', 'Неверное имя пользователя. Провертье на корректность введённых данных!');
}

if (empty($lastname)) {
    setValidationError('name', 'Неверная фамилия пользователя. Провертье на корректность введённых данных!');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    setValidationError('email', 'Указанная почта не соответствует стандарту! Провертье, чтобы в нём был элемент => @');
}

if (empty($password)) {
    setValidationError('password', 'Пожалуйста, заполните поле пароля!');
}

if ($password !== $passwordConfirmation) {
    setValidationError('password', 'Пароли не совпадают');
}

if (!empty($avatar)) {
    $types = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif'];

    if (!in_array($avatar['type'], $types)) {
        setValidationError('avatar', 'Изображение профиля имеет неверный тип');
    }

    if (($avatar['size'] / 5000000) >= 5) {
        setValidationError('avatar', 'Изображение должно быть меньше 5 мб');
    }
}

// Если список с ошибками валидации не пустой, то производим редирект обратно на форму

if (!empty($_SESSION['validation'])) {
    setOldValue('firstname', $firstname);
    setOldValue('lastname', $lastname);
    setOldValue('email', $email);
    redirect('/register.php');
}

//  Загружаем аватарку, если она была отправлена в форме

if (!empty($avatar)) {
    $avatarPath = uploadFile($avatar, 'avatar');
}

$pdo = getPDO();

$query = "INSERT INTO users (lastname, firstname, email, avatar, password, points) VALUES (:firstname, :lastname, :email, :avatar, :password, :points)";

$zero = 0; // 0 баллов

$params = [
    'firstname' => $lastname,
    'lastname' => $firstname,
    'email' => $email,
    'avatar' => $avatarPath,
    'points' => $zero,
    'password' => password_hash($password, PASSWORD_DEFAULT)
];

$stmt = $pdo->prepare($query);

try {
    $stmt->execute($params);
} catch (\Exception $e) {
    die($e->getMessage());
}

redirect('/login.php');
