<?php
/**
Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а русские - в массив $ru.
$arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];

 */
$arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
$arrEn = [];
$arrRu = [];
foreach ($arr as $key => $elem){
    $arrEn[] = $key;
    $arrRu[] = $elem;
};
var_dump( $arrEn);
echo ('<br>');
var_dump($arrRu);