<?php
    $mysqli=false;
    function connectDB(){
        global $mysqli;
        //$mysqli= new mysqli("localhost","root","root","jobsv");
       // mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost","root","root","jobsv"); // коннект с сервером бд
//$mysqli->set_charset("utf8mb4"); //надо ввести имя базы. и если на хост кидать поменять инфу
        $mysqli->query("SET NAMES 'utf-8'");//кодировка
    }//подключение бд
    function closeDB(){
        global $mysqli;
        $mysqli->close();
    }//отключение бд
    mysqli_query($mysqli, 'SET NAMES utf8');
?>