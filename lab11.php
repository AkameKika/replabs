<?php
echo ("Вариант 2.<br>");
echo ("Задание 1.<br>");
$array=array(
    'Россия'=>'Москва',
    'Япония'=>'Токио',
    'Китай'=>'Пекин',
    'ОАЭ'=>'Абу-Даби',
    'Греция'=>'Афины',
    'Египет'=>'Каир'
);
foreach($array as $item=>$item_count){
    echo $item_count.'<br>';
}
echo ("<br>Задание 2.<br>");
echo '<label>Года:</label><br>';
echo '<select>';
function GData(){
    $a=[];
    for($i=2000;$i>=1990;$i--){
        echo '<option>'.$a[]=$i;
    }
}
GData();
echo '</select>';

echo ("<br>Задание 3.<br>");
function proizv(){
    $pr=1;
    $p=[];
    for($n=99;$n<=199;$n++){
        if(($n%2)==0){
            $pr*=$n;
        }
    }
    echo ("$pr<br>");
}
proizv();
?>