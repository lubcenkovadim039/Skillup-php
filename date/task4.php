<p>В переменной $date лежит дата в формате '2025-12-31'.
    Прибавьте к этой дате 2 дня, 1 месяц и 3 дня, 1 год.
    Отнимите от этой даты 3 дня.</p>
<?php
$date = date_create('2025-12-31');
$date = date_modify($date,'2 day');
echo date_format($date,'d.m.Y').'  Прибавили 2 дня <br>';
$date = date_create('2025-12-31');
$date = date_modify($date,'3 day,1 month');
echo date_format($date,'d.m.Y').'  Прибавили 1 месяц и 3 дня <br>';
$date = date_create('2025-12-31');
$date = date_modify($date,'1 year');
echo date_format($date,'d.m.Y').'  Прибавили 1 год <br>';
$date = date_create('2025-12-31');
$date = date_modify($date,'-3 day');
echo date_format($date,'d.m.Y').'  Отняли 3 дня <br>';