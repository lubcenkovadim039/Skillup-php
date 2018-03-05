<!--
Сделать форму подписки. Пользователь должен ввести свой email.
Если пользователь отправить пустой email - он должен получить
сообщение об ошибке. Email’ы пользователей должны сохраняться в
файле subscribers.txt. Каждый email в новой строке.

-->
<?php
$errorMessege = '';
if (isset($_POST['email'])) {
    if (empty($_POST['email'])) {
        $errorMessege = '<h1 >Адрес не введен</h1>';
    }
    if (!$errorMessege) {
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $file = fopen('subscribers.txt', 'a+');
            fwrite($file, $_POST['email'] . "\n");
            fclose($file);

            header('Location:registoff.php');
            exit();
        }
            else {
            $errorMessege = '<h1>email адрес -->'.$_POST['email'] .'<-- указан не верно</h1>';
            }

    }
        if ($errorMessege){
            echo $errorMessege;

    }
}
?>
<style>
    h1 {
        color: red;
    }
</style>
<form method="post">
    <h3>Подпишптесь на наш сайт</h3>
    <input type="text" name="email"  placeholder="Укажите Ваш адрес" ><br><br>
    <input type="submit" value="Регистрация">
</form>
