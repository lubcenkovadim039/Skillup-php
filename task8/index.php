<h2>Задание 8</h2>
<p>Создайте класс SmartForm, который будет наследовать от Form из предыдущей
    задачи и сохранять значения инпутов и textarea после отправки.</p>
<p>То есть если мы сделали форму, нажали на кнопку отправки - то значения
    из инпутов не должны пропасть. Мало ли что-то пойдет не так, например,
    форма некорректно заполнена, а введенные данные из нее пропали и их следует
    вводить заново. Этого следует избегать.</p>


<?php
require_once 'SmartForm.php';

$form = new SmartForm;
echo $form->open(['action'=>'index.php', 'method'=>'POST']);
echo $form->input(['type'=>'text', 'placeholder'=>'Ваше имя', 'name'=>'name']);
echo $form->password(['placeholder'=>'Ваш пароль', 'name'=>'pass']);
echo $form->textarea([ 'name'=>'textarea','class'=>'area','value'=>'Lorem' ]);
echo $form->submit(['value'=>'Отправить','name'=>'button']);
echo $form->close();
