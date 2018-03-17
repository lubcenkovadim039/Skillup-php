<p>Сделайте поле ввода, в которое пользователь вводит год (4 цифры), а скрипт определяет високосный ли год. </p>
<form action="task3.php" method="get">
    <input type="text" placeholder="Введите год " name="data"><br>
    <input type="submit" value=" Год высокосный?" name="button">
</form>

<?php
if(!empty($_GET['data'])) {
    $years = $_GET['data'];
    if (date('L', mktime(0, 0, 0, 1, 1, $years)) == 1) {
        echo 'Год високосный';
    } else {
        echo 'Год НЕ високосный';
    }
} else {
    echo 'Год НЕ  введен!';
}