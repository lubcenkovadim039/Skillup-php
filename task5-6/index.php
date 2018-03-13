<h2>Задание 5</h2>
<h3>Наследование</h3>
<p>Сделайте класс User, в котором будут следующие protected поля - name (имя), age (возраст),
    public методы setName, getName, setAge, getAge.</p>

<p>Сделайте класс Worker, который наследует от класса User и вносит дополнительное private поле
    salary (зарплата), а также методы public getSalary и setSalary.
</p>
<p>Создайте объект этого класса 'Иван', возраст 25, зарплата 1000. Создайте второй объект
    этого класса 'Вася', возраст 26, зарплата 2000. Найдите сумму зарплата Ивана и Васи.</p>

<p>Сделайте класс Student, который наследует от класса User и вносит дополнительные private поля стипендия,
    курс, а также геттеры и сеттеры для них.</p>
<h2>Задание 6</h2>
<p>Сделайте класс Driver (Водитель), который будет наследоваться от класса Worker из предыдущей задачи.
    Этот метод должен вносить следующие private поля: водительский стаж, категория вождения (A, B, C).</p>
<h4>Решение</h4>
<?php
require 'Worker.php';
require 'Students.php';

$worker1 = new Worker;
$worker1->setName('Иван');
$worker1->setAge(26);
$worker1->setSalary(1000);

$worker2 = new Worker;
$worker2->setName('Вася');
$worker2->setAge(25);
$worker2->setSalary(2000);
echo 'Сумма зарплат '.$worker1->getName().' и '.$worker2->getName().' = '.($worker1->getSalary() + $worker2->getSalary().'<br>');

$student = new Students;
$student->setName('Сергей');
$student->setAge(20);
$student->setClass(3);
$student->setDozenendiya(2500);
echo 'Студент '.$student->getName().'<br>';
echo 'Учиться на  '.$student->getClass().' курсе <br>';
echo 'Возраст '.$student->getAge().' лет <br>';
echo 'Стипендия  '.$student->getDozenendiya();