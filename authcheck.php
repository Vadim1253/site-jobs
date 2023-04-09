<?php 
$login=filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING); //проебразование в понятный текст без пробелов
$pass=filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING); //проебразование в понятный текст без пробелов
$pass=md5($pass."kryu"); //кодировка с добавлением слова kryu
$mysqli=new mysqli("localhost","root","root","jobsv"); //вкл бд
$result=$mysqli->query("SELECT * FROM `users` WHERE `login`='$login' AND `pass`='$pass'"); //поиск в бд
$user=$result->fetch_assoc(); //преобразование в массив
if(count($user)==0){
    echo "Такого пользователя нет";
    exit();
}//если в массиве 0 элементов то пользователя нет
setcookie('user',$user['name'],time()+3600,"/"); //поддержка куков на 3600сек
$mysqli->close();
header('Location: index.php'); //возврат на главную
?>
