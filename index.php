<?php
session_start()
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма</title>
</head>
<body>
    <form action="sendler.php" method="POST">
        <input type="text" name="login" placeholder="Введите ваш Логин">
        <input type="password" name="psw" placeholder="Введите ваш пароль">
        <input type="password" name="phone" placeholder="Введите ваш телефон">
        <button type="submite">Отправить</button>
    </form>

    <?php
    if(!empty($_SESSION['alert'])){
        echo $_SESSION['alert'];
        unset($_SESSION['alert']);
    }
    ?>
</body>
</html>