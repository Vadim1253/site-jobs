<!DOCTYPE html>
<html lang="ru">
<head>
    <?php 
    require_once "./func/func.php";
    $news=getVakans(1,$_GET["id"]);

    $title = $news["model"];//название из столбца модель в бд
    require_once "blocks/head.php";
    ?>
</head>
<body>
<?php require_once "blocks/header.php" ?>
    <div id="wrapper">
        <div id="leftCol">
        <?php 
            echo '<div id=\"bigArticle\"><img src="./imgv/'.$news["id"].'.jpg" alt="Статья '.
            $news["id"].'" title="Статья '.$news["id"]/*подключение картинки из папки по номеру*/.'">
            <h2>'.$news["name"].'</h2><br>
            <h3>'.$news["zp"].'Р</h3><br>
            <p>'.$news["ftext"].'</p>
            </div>';//данные из столбцов отображаются
    ?></div>
<?php require_once "./blocks/rightCol.php"?></div>
<?php require_once "./blocks/footer.php" ?>
</body>
</html>