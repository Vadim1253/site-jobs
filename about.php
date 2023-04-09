<!DOCTYPE html>
<html lang="ru">
<head>
    <?php 
    $title = "Информация о нас";
    require_once "./blocks/head.php";
    ?></head>
<body>
    <?php require_once "./blocks/header.php" ?>
    <div id="wrapper">
        <div id="leftCol">
            <div id="about_us">
                <h2 class="rg">Информация о нас</h2>
            <p> Каждый день на сайте можно найти массу свежих предложений по работе во всех регионах России. 
                Подходящие предложения здесь может найти практически каждый человек, 
                независимо от того, какова его специализация – работа есть для всех, от 
                разнорабочих и домохозяек до руководителей и специалистов. Кроме того, 
                нет вероятности попать на моженников, так как каждая вакансия точечно прорабатывается.</p>
            </div>
        </div>
<?php require_once "./blocks/rightCol.php"?>
    </div>
<?php require_once "./blocks/footer.php" ?>
</body>
</html>