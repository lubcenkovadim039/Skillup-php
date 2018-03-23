<?php


try {
    $pdo = new PDO('mysql:host=localhost;dbname=vad;charset=utf8','vad','root');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo 'Подключение успешною';
}
catch(PDOException $e) {
echo $e->getMessage();
}
$users = ['user13','user14','user15'];

$sql = "INSERT INTO slim_users (username) VALUES (:user)";
$query = $pdo->prepare($sql);

foreach ($users as $user){
    $query->bindParam('user',$user);
    $query->execute();
    $lastId = $pdo->lastInsertId();
    echo "пользователь ".$user." Вставлен с id ".$lastId."<br>";

}
