<p>Сделайте счетчик посещения сайта посетителем. Каждый раз, заходя на сайт,
    он должен видеть надпись: 'Вы посетили наш сайт % раз!'.</p>
<?php
if(!isset($_COOKIE['count'])) {
    setcookie("count", 1, time() + 3600 * 24 * 60);
} else {
    $cookie = $_COOKIE['count'];
    $cookie ++;
    setcookie("count",$cookie,time() + 3600*24*60);
}
echo 'Вы посетили сайт '.$_COOKIE['count'].' раз';