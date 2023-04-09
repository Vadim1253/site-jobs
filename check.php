<?php
$login=filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);//проебразование в понятный текст без пробелов
$name=filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);//проебразование в понятный текст без пробелов
$pass=filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);//проебразование в понятный текст без пробелов
if(mb_strlen($login)<5||mb_strlen($login)>90){ //проверка логина
    echo "Недупустимая длина логина";
    exit();}
elseif(mb_strlen($name)<3||mb_strlen($name)>50){//проверка имени
    echo "Недупустимая длина имени";
    exit();}
elseif(mb_strlen($pass)<5||mb_strlen($pass)>20){//проверка пароля
    echo "Недупустимая длина пароля";
    exit();}
$pass=md5($pass."kryu");//кодирование + слово kryu
$mysqli=new mysqli("localhost","root","root","jobsv");//вкл бд
$mysqli->query("INSERT INTO `users` (`login`, `pass`, `name`) VALUES('$login','$pass','$name')");//добавление в бд
$mysqli->close();//откл бд
header('Location: index.php');//переадресация на главную
?>
