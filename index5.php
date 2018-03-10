<?php
require 'Worker5.php';
require 'Students5.php';

$worker1 = new Worker5;
$worker1->setName('Иван');
$worker1->setAge(26);
$worker1->setSalary(1000);

$worker2 = new Worker5;
$worker2->setName('Вася');
$worker2->setAge(25);
$worker2->setSalary(2000);
echo 'Сумма зарплат '.$worker1->getName().' и '.$worker2->getName().' = '.($worker1->getSalary() + $worker2->getSalary().'<br>');

$student = new Students5;
$student->setName('Сергей');
$student->setAge(20);
$student->setClass(3);
$student->setDozenendiya(2500);
echo 'Студент '.$student->getName().'<br>';
echo 'Учиться на  '.$student->getClass().' курсе <br>';
echo 'Возраст '.$student->getAge().' лет <br>';
echo 'Стипендия  '.$student->getDozenendiya();