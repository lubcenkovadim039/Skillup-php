<?php
require 'TagA.php';
require 'TagUl.php';
echo Tag::getClassDescription().'<br>';
$gogle = new TagA();
$gogle
    ->setText('В гугл')
    ->setHref('https://google.com')
    ->setTargetBlank();

echo $gogle->show();

$list = new TagUl();
$list
     ->addItem('Первый элемент списка')
     ->addItem('Второй элемент списка')
     ->addItem('Третий элемент списка')
     ->addItem('Четвертый элемент списка')
     ->addItem('Пятый элемент списка')
     ->addItem('Шестой элемент списка');
echo $list->show();