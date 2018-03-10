<?php
require 'Worker2-3.php';

$worker1 = new Worker2;
$worker1->setName('Иван');
$worker1->setAge(25);
$worker1->setSalary(1000);
$worker2 = new Worker2;
$worker2->setName('Вася');
$worker2->setAge(26);
$worker2->setSalary(2000);
echo 'Сумма зарплат = '.($worker1->getSalary() + $worker2->getSalary().'<br>');
echo 'Сумма возрастов = '.($worker1->getAge() + $worker2->getAge());