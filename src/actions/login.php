<?php

require_once __DIR__ . '/../helpers.php';

$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    setOldValue('email', $email);
    setValidationError('email', 'Неверный формат электронной почты');
    setMessage('error', 'Введён не коррентный адрес электронной почты. Пожалуйста, провертье данные пользователя.');
    redirect('/login.php');
}

$user = findUser($email);

if (!$user) {
    setMessage('error', "Пользователь: $email не зарегестрирован. Пожалуйста, проверьте на корректность данных.");
    redirect('/login.php');
}

if (!password_verify($password, $user['password'])) {
    setMessage('error', 'Указан неверный пароль от профиля! Убедитесь, что все данные соотведствуют профилю!');
    redirect('/login.php');
}

$_SESSION['user']['id'] = $user['id'];

redirect('/profile.php');