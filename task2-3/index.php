
<h3>Задание 2</h3>
<p> Сделайте класс Worker, в котором будут следующие private поля - name (имя), age (возраст),
    salary (зарплата) и следующие public методы setName, getName, setAge, getAge, setSalary, getSalary.
    Создайте 2 объекта этого класса: 'Иван', возраст 25, зарплата 1000 и 'Вася', возраст 26, зарплата 2000.</p>
  <p>  Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.</p>
<h3>Задание 3</h3>
<p>    Дополните класс Worker из предыдущей задачи private методом checkAge, который будет проверять возраст
    на корректность (от 1 до 100 лет). Этот метод должен использовать метод setAge перед установкой нового
    возраста (если возраст не корректный - он не должен меняться).
</p>
<h4>Решение</h4>
<?php
require 'Worker.php';

$worker1 = new Worker;
$worker1->setName('Иван');
$worker1->setAge(25);
$worker1->setSalary(1000);
$worker2 = new Worker;
$worker2->setName('Вася');
$worker2->setAge(26);
$worker2->setSalary(2000);
echo 'Сумма зарплат = '.($worker1->getSalary() + $worker2->getSalary().'<br>');
echo 'Сумма возрастов = '.($worker1->getAge() + $worker2->getAge());