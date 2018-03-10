<?php
require 'Worker4.php';
$worker = new Worker4('Дима',25,2000);
echo 'Произведение возраста = '.($worker->getAge()*$worker->getAge().'<br>');
echo 'Произведение зарплаты = '.($worker->getSalary()*$worker->getSalary());