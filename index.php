<!DOCTYPE html>
<html lang="ru">
<head><?php 
require_once "./func/func.php";
$news=getVakans(3,$_GET["id"]);
    //require_once "functions/functionssr.php";$news=getNews(3,$_GET["id"]);//генерация 3 записей
    $title = "Главная";
    require_once "./blocks/head.php";
    ?>
</head>
<body>
<?php require_once "blocks/header.php" ?>
    <div id="wrapper">
        <div id="leftCol">
        <?php 
            for($i = 0; $i < count($news); $i++){//вывод 3 записей
                echo "<div class=\"article\">";
            if($i == 0){echo "<div id=\"bigArticle\">";}
            else{echo "<div class=\"article\">";}
            echo '<img src="./img/'.$news[$i]["id"].'.jpg" alt="Статья '.$news[$i]["id"].'" title="Статья '.$news[$i]["id"]/*подключение 
            картинки из папки imgdis по номеру*/.'">
            <h2>'.$news[$i]["name"].'</h2>
            <p>'.$news[$i]["itext"].'</p>
            <a href="./article.php?id='.$news[$i]["id"]/*переход на определенную подномерную запись */.'"><div class="more">Далее</div></a>
            </div>';//данные из столбцов отображаются
            if($i == 0){echo "<div class=\"clear\"><br></div>";}}
    ?> </div>
<?php require_once "./blocks/rightCol.php"?>
    </div>
<?php require_once "./blocks/footer.php" ?>
</body>
</html>