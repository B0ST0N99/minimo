<?php

session_start();
require 'auth.php';
require 'subscription.php';

// Авторизуємо користувача, якщо в запиті є логін і пароль
if (isset($_POST['login']) && isset($_POST['password'])) {
    login($_POST['login'], $_POST['password']);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign in</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<header class="header">
    <div class="container">
        <div class="header-content">
            <div class="header-content__logo">
                <a href="/">minimø</a>
            </div>
            <nav class="header-content__nav">
                <ul class="nav__list">
                    <li><a href="#">lifestyle</a></li>
                    <li><a href="#">photodiary</a></li>
                    <li><a href="#">about</a></li>
                    <li><a href="/src/login.php">login</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<?php if (isAuthorized()): ?>
    <?php require '../views/adminView.php' ?>
<?php else: ?>
    <?php require '../views/loginView.php' ?>
<?php endif; ?>
</body>
</html>