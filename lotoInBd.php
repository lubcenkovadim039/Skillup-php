
<?php
function greatCombination()
{
    for ($i =0; $i < 6; $i++) {
        $array[$i] = mt_rand(1, 52);
    }
    sort($array);
    return $array;
}
try {
$pdo = new PDO('mysql:host=localhost;dbname=homebd;charset=utf8','homebd','homebd');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Соединение успешно!";
}
catch(PDOException $e) {
echo $e->getMessage();
}

if(isset($_GET['button'])) {
    if (isset($_GET['comb'])) {
        for ($i = 1; $i < $_GET['comb']; $i++) {
            $array = greatCombination();
            $sql = "INSERT INTO loto (number1, number2, number3, number4, number5, number6) VALUES ($array[0],$array[1],$array[2],$array[3],$array[4],$array[5])";
            $pdo->query($sql);
        }
    }
}
if(isset($_GET['button2'])){
    $a = 0;
    while($a != 1){
        $array = greatCombination();
        $sql = "SELECT number1, number2, number3, number4, number5, number6 FROM loto WHERE ";
    }
}
?>
<form action="" method="get">
    <p>Заполнить БД!!!</p>
    <p>Сколько комнинаций нужно занести в базу</p>
    <input type="text" name="comb" placeholder="Ведите целое число">
    <input type="submit" value="Загрузить в бд" name="button">
    <p>Искать совпадения</p>
    <input type="submit" name="button2">
</form>
