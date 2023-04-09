<?php
    $name=htmlspacialchars($_POST['name'])
    $email=htmlspacialchars($_POST['email'])
    $subject=htmlspacialchars($_POST['subject'])
    $massage=htmlspacialchars($_POST['massage'])
    if($name==''||$email==''||$subject==''||$massage==''){//проверка
        echo 'Заполните все поля'; exit;}
        
        $subject="=?utf-8?B?".base64_encode($subject)."?=";
        $headers="From:$email\r\nReply-to:$email\r\nContent-type:text/html; charset=utf-8\r\n";
        if(mail("kryu.ezik@mail.ru", $subject, $massage, $headers))
            echo "Сообщение отправлено";
        else 
            echo "Сообщение не было отправлено";//Отправка
?>