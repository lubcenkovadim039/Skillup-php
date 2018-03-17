<p> Дана строка 'aba aca aea abba adca abea'. Напишите регулярку, которая
    найдет строки abba adca abea по шаблону: буква 'a', 2 любых символа, буква 'a'. </p>
<?php
echo  preg_replace('#a..a#','!','aba aca aea abba adca abea');