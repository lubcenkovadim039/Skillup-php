<p>Спросите у пользователя email с помощью формы. Затем сделайте так, чтобы в
    другой форме (поля: имя, фамилия, пароль, email) при ее открытии поле email
    было автоматически заполнено.</p>
<form action="" method="post">
    <input type="email" placeholder="Введите email" name="email">
    <input type="submit">
</form>
<?php
session_start();
if(!empty($_POST['email'])){
    $_SESSION['email'] = $_POST['email'];
}
?>
<a href="task1form2.php">Перейди на другую страницу</a>
