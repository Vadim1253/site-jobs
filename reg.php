<!DOCTYPE html>
<html lang="ru">
<head>
    <?php 
     require_once "functions/connect.php";
    $title = "Регистрация";
    require_once "./blocks/head.php";
    ?></head>
<body><?php require_once "blocks/header.php" ?>
<div id="wrapper">
        <div id="leftCol">
<h1 class=rg>Регистрация</h1>
<form action="check.php" method="post"><?php //результат передается файлу?>
    <input type="text" name="login" id="login" placeholder="Введите логин">
    <input type="text" name="name" id="name" placeholder="Введите имя">
    <input type="password" name="pass" id="pass" placeholder="Введите пароль"><br>
    <button type="submit" class="butclass">ГОТОВО!</button>
</form></div>
</div>
<?php require_once "./blocks/rightCol.php"?>
<?php require_once "./blocks/footer.php" ?>
</body>
</html>