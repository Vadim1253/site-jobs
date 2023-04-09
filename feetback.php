<!DOCTYPE html><html lang="ru"><head><?php $title = "Обратная связь"; require_once "./blocks/head.php";?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script><?php //подключаем jquery?>
    <script>$(document).ready(function(){
            $("#done").click(function(){
                $('#massageShow').hide();
                var name=$("#name").val();var email=$("#email").val();var subject=$("#subject").val();var massage=$("#massage").val();var fail="";
                if(name.length<3) fail="Имя не меньше 3 символов";//проверка
                else if(email.split('@').length-1==0||email.split('.').length-1==0) fail="Вы ввели некорректный EMAIL";//проверка
                else if(subject.length<5) fail="Тема сообщения не менее 5 символов";//проверка
                else if(massage.length<20) fail="Сообщение не менее 20 символов";//проверка
                if(fail!=""){
                    $('#massageShow').html(fail+"<div class='clear'><br></div>");
                    $('#massageShow').show();
                    return false;
                }
                $.ajax({
                    url: './ajax/feedback.php',
                    type: 'POST',
                    cache: false,
                    data: {'name':name, 'email':email, 'subject':subject, 'massage':massage},
                    dataType: 'html',
                    success:function(data){
                        $('#massageShow').html(data+"<div class='clear'><br></div>");
                        $('#massageShow').show();
                    }});});});</script></head>
<body><?php require_once "./blocks/header.php"; ?>
    <div id="wrapper"><div id="leftCol"><h2 class="rg">Ваши вакансии и предложения присылайте на почту</h2>
            <input tupe="text" placeholder="Имя" id="name" name="name"><br />
            <input tupe="text" placeholder="Email" id="email" name="email"><br />
            <input tupe="text" placeholder="Тема сообщения" id="subject" name="subject"><br />
            <textarea name="massage" id="massage" placeholder="Введите сообщение"></textarea><br /><div id="massageShow"></div>
            <input type="button" name="done" id="done" value="Отправить Администратору"></div></div>
<?php require_once "./blocks/rightCol.php"?></div> <?php require_once "./blocks/footer.php" ?></body></html>