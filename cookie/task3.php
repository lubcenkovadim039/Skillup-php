<p>Покажите пользователю баннер с кнопкой 'Не показывать больше!'.
    Если он нажмет на эту кнопку - не показывайте ему баннер в течении месяца.</p>
<?php
if(!isset($_COOKIE['banneroff'])){
?>
<a href="http://google.com" target="_blank"><img src="http://gif.hi-cd.ru/images/ludi/searching_1.gif"
                                                 border="0" title="Сайт" width="300"
                                                height="300" alt="Баннер"></a><br>
    <form action="" method="post">
    <input type="submit" value=" Не показывать больше!" name="button">
    </form>
<?php
if (!isset($_POST['button'])){
    setcookie('banneroff','off',time() + 3600*24*30);
}
}
