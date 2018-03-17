<?php
session_start();
?>
<form action="" method="post">
    <input type="text" placeholder="Введите имя"><br>
    <input type="text" placeholder="Введите фамилию"><br>
    <input type="password" placeholder="Введите пароль"><br>
    <input type="email" value="<?= $_SESSION['email']?>"><br>`
    <input type="submit">

</form>
