<p>Дана строка '2+3 223 2223'. Напишите регулярку, которая найдет строку 2+3, не захватив остальные.</p>
<?php
echo preg_replace('#2\+3#','!','2+3 223 2223');