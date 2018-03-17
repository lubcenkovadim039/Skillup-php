<p>Создайте массив дней недели $week. Выведите на экран название
    текущего дня недели с помощью массива $week и функции date.
    Узнайте какой день недели был 06.06.2006, в ваш день рождения. </p>

<?php
 $week = [0 =>'Sunday',
          1 =>'Monday',
          2 =>'Tuesday',
          3 =>'Wednesday',
          4 =>'Thursday',
          5 =>'Friday',
          6 =>'Saturday'];
 echo $week[date('w')].'<br>';
 echo $week[date('w',mktime(0,0,0,6,6,2006))].' 06.06.2006<br>';
 echo $week[date('w',mktime(0,0,0,6,29,1984))].' Мой день рождения<br>';