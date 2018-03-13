<h2>Задание 7</h2>
<p>Создайте класс Form - оболочку для создания форм. Он должен иметь методы input, submit,
    password, textarea, open, close. Каждый метод принимает массив атрибутов.

</p>
<?php
require 'Form.php';

$form = new Form;
echo $form->open(['action'=>'....', 'method'=>'POST']);
echo $form->input(['type'=>'text', 'placeholder'=>'Ваше имя', 'name'=>'name']);
echo $form->password(['placeholder'=>'Ваш пароль', 'name'=>'pass']);
echo $form->textarea([ 'name'=>'pass','class'=>'area','value'=>'Lorem']);
echo $form->submit(['value'=>'Отправить']);
echo $form->close();

?>

