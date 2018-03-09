<!--
Сделать вывод пользователей из файла users.txt
 (который создали на уроке) в виде “красивой” HTML-таблицы

-->
<?php
$erorrMesege = '';
if (!file_exists('users.txt')){
    $erorrMesege = 'Файла не существует!';
    echo $erorrMesege;
}
if (!$erorrMesege){
    $users = explode("\n",file_get_contents('users.txt'));
    $users = array_filter($users);
   $users = array_map(function ($item){
       return explode("\t",$item);
   },$users);
   ?>
<table border="1">
    <tr >
        <th width = "180px">User</th>
        <th width = "180px">Password</th>
    </tr>
    <?php
    foreach ($users as $key=>$uspass) {

        ?>
        <tr>
            <td align="center">
                <?php print_r($uspass[0])?>
            </td>
            <td align="center">
                <?php print_r($uspass[1])?>
            </td>
        </tr> <?php
    }}; ?>
</table>
