<?php
function greatCombination($array)
{
    for ($i =0; $i < 6; $i++) {
        $array[$i] = mt_rand(1, 52);
    }
    sort($array);
    return $array;
}
function coincidence($array)
{
    for ($i = 0; $i < 6; $i++) {
        for ($j =0 ; $j < 6; $j++) {
            if ($i != $j) {
                if ($array[$i] == $array[$j]) {
                    unset($array[$j]);
                    $array[$j] = mt_rand(1, 52);
                    sort($array);
                }
            }
        }
    }
    return $array;
}
$array = [];

$array = greatCombination($array);
$array = coincidence($array);
$string = implode("\t",$array);
$string .= "\n";
$file = fopen('loto.txt','a+');
$test = fwrite($file,$string);
fclose($file);
