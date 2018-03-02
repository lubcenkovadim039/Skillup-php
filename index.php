<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
$errorMessege = '';
if(isset($_POST['user'])){
    if (empty($_POST['user'])||empty($_POST['password'])){
        $errorMessege ='Введите имя пользователя и пароль';
    };
    $file = fopen('user.txt','a+');
    fwrite($file,$_POST['user']."\t".$_POST['password'].PHP_EOL);
    fclose($file);
    header('Location: success.php');
    exit();
};
if ($errorMessege){
    echo $errorMessege;
};
?>

<form action="" method="POST">
    User: <input type="text" name="user" value="<?= isset($_POST['user']) ? $_POST['user']:'' ?>" > <br><br>

    Password:<input  type="password" name="password" > </input><br><br>
    <input type="submit" value="Register">
</form>