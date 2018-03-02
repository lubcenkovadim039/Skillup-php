<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
$errorMessege = '';
if(isset($_POST['user'])){
    if (empty($_POST['user'])||empty($_POST['password'])){
        $errorMessege ='Введите имя пользователя и пароль';
    };
    if (!$errorMessege) {
        if (file_exists('users.txt')) {
            $users = explode("\n",file_get_contents('users.txt'));
            $users = array_filter($users);
        } else {
            $users = [];
        };

        $users = array_map(function ($item) {
            return explode("\t", $item);
        }, $users);

        $userExists = false;
        foreach ($users as $userData) {
            if ($_POST['user'] == $userData[0]) {
                $userExists = true;
                break;
            }
        }
        if ($userExists) {
            $errorMessege = 'Пользователь "' . $_POST['user'] . '" уже зарегестрирован';
        }
    }
   if (!$errorMessege) {
       $users[] = [$_POST['user'], $_POST['password']];
       $users = array_map(function ($item) {
           return implode("\t", $item);
       }, $users);
       file_put_contents('users.txt', implode("\n", $users));

       header('Location: success.php');
       exit();
   };
};
if ($errorMessege){
    echo $errorMessege;
};
?>

<form action="" method="POST">
    User: <input type="text" name="user" value="<?= isset($_POST['user']) ? $_POST['user']:''  ?>"required > <br><br>

    Password:<input  type="password" name="password" required> </input><br><br>
    <input type="submit" value="Register">
</form>