<!DOCTYPE html>
<html lang="ru">
<head>
    <?php 
    
     $news=getVakans(1);
     //require_once "functions/functions.php";$news=getNews(8,$_GET["id"]);//генерация 8 записей
    $title = "Жаркие вакансии";
    require_once "./blocks/head.php";
    ?>
</head>
<body>
<?php require_once "./blocks/header.php" ?>
    <div id="wrapper">           
        <div id="leftCol">
        <?php 
            for($i = 0; $i < count($news); $i++){//вывод 8 записей
            echo "<div class=\"article\">";
            echo '<img src="./img/'.$news[$i]["id"].'.jpg" alt="Статья '.$news[$i]["id"].'" title="Статья '.$news[$i]["id"]/*подключение 
            картинки из папки imgdis по номеру*/.'">
            <h2>'.$news[$i]["name"].'</h2><br><h3>'.$news[$i]["zp"].'Р</h3>

            <p>'.$news[$i]["itext"].'</p>
            <a href="./article3.php?id='.$news[$i]["id"]/*переход на определенную подномерную запись */.'"><div class="more">Далее</div></a>
            </div>';}//данные из столбцов отображаются
    ?>
            </div>
<?php require_once "./blocks/rightCol.php"?>
<?php require_once "./blocks/footer.php" ?>
</body>
</html>