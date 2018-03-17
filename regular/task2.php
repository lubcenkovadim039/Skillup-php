<p>Дана строка 'aa aba abba abbba abca abea'. Напишите регулярку, которая
    найдет строки aa, aba, abba, abbba по шаблону: буква 'a', буква 'b'
    любое количество раз (в том числе ниодного раза), буква 'a'.</p>
<?php
echo preg_replace('#ab*a#','!','aa aba abba abbba abca abea');