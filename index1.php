<?php
require 'Worker1.php';
$worker1 = new Worker1;
$worker1->name = 'Иван';
$worker1->age = 25;
$worker1->salary = 1000;
$worker2 = new Worker1;
$worker2->name = 'Вася';
$worker2->age = 26;
$worker2->salary = 2000;
echo 'Сумма возрастов = '.($worker1->age + $worker2->age.'<br>');
echo 'Сумма зарплат = '.($worker1->salary + $worker2->salary);