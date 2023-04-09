
<header><div >
    <div id="logo">
        <a href="about.php" title="Главная страница"><div>JUICY WORK</div></a>
    </div><div class="colmenu">
    <div id="menuHead">
    <a href="./index.php"><div style="margin-right: 1%">Главная</div></a>
        <a href="./srvakans.php"><div style="margin-right: 1%">Срочный набор</div></a>
        <a href="./vakans.php"><div style="margin-right: 1%">Вакансии</div></a>
        <a href="./odnvakans.php"><div style="margin-right: 1%">Одноразовая работа</div></a>

        <a href="./disvakans.php"><div style="margin-right: 1%">Удаленная работа</div></a>
        <a href="./kontakt.php"><div style="margin-right: 1%">Контакты</div></a>
        <a href="./feetback.php"><div style="margin-right: 1%">Обратная связь</div></a>

        <a href="./about.php"><div>О нас</div></a>
    </div>
    <?php
if($_COOKIE['user']==''):
?>
    <div id="regAuth"> 
        <a href="./reg.php" id="authcol">Регистрация</a> | <a href="./auth.php" id="authcol">Авторизация</a>
    </div>
    <?php else: ?><div id="regAuth"> 
        <p>  <?=$_COOKIE['user']?>.Чтобы выйти <a href="./exit.php">нажмите</a>.</p>
        </div>
        <?php endif; ?> 
</div></div>
</header>