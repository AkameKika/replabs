<?php
echo ("Вариант 2.<br>");
echo ("Задание 1.<br>");
function ShowOdd(){
    $a=[];
    for($i=1;$i<=100;$i++){
        if($i%2){
            $a[]=$i;
        }
    }
    foreach(array($a) as $b){
        echo implode(" ", $b)."\n<br>";
    }
}
ShowOdd();

echo ("Задание 2.<br>");
function sum(){
    $sum=0;
    for($n=101;$n<=1051;$n++){
        if(($n%11)==0){
            $sum+=$n;
            continue;
        }
    }
    echo ("$sum<br>");
    }
sum();


$t=3;
$j=6;
echo '<table border="1">';
for ($tr=1; $tr<=10;$tr++){
    echo '<tr>';
    for($td=1;$td<=1;$td++){
        echo '<td>'."$t*$tr=".$t*$tr.'</td>';
        echo '<td>'."$j*$tr=".$j*$tr.'</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>