<?php
echo ("Задание 8.1 лаб №5<br>");
$a=555;
echo "$a<br>";
$b=sqrt($a);
echo "$b<br>";
$b2=ceil(sqrt($a));
echo "$b2<br>";
$b3=floor(sqrt($a));
echo "$b3<br>";
$array=[];
$array['первое число']="$a";
$array['второе число']="$b";
$array['третье число']="$b2";
$array['четвёртое число']="$b3";
foreach($array as $item=>$item_count){
    echo "<br>Номер числа: ".$item."<br>Значение: ".$item_count;
}
echo ("<br>Задание 8.2 лаб №5<br>");
$a1=321;
$b1=10;
$r=fmod($a1, $b1);
echo "$r";
echo ("<br>Задание 8.3 лаб №5<br>");
$a=1;
$b=10;
$n=1;
while ($n<=5){
    echo "<br>номер числа: ";
    echo $n;
    echo "<br>число: ";
    echo mt_rand($a, $b);
    $n++;
}
echo ("<br>Задание 8.4 лаб №5<br>");
$arr=["21","4","623","564","51","1"];
print_r ($arr);
echo "<br>Максимальное значение: ";
echo max($arr);
echo ("<br>Задание 8.5 лаб №5<br>");
$s=null;
$v=null;
$t=null;
$format='Определим <b>путь</b>, если <b>время=%1$d</b>, а <b>скорость=%2$d</b>. <b>Путь=%3$d</b></br>';
$t1=15;
$v1=2;
$s1=$v1*$t1;
echo sprintf($format, $t1, $v1, $s1);
$format2='Определим <b>скорость</b>, если <b>путь=%1$d</b>, а <b>время=%2$d</b>. <b>Скорость=%3$d</b></br>';
$t2=10;
$s2=100;
$v2=$s2/$t2;
echo sprintf($format2, $s2, $t2, $v2);
$format2='Определим <b>время</b>, если <b>путь=%1$d</b>, а <b>скорость=%2$d</b>. <b>Время=%3$d</b></br>';
$v3=15;
$s3=75;
$t3=$s3/$v3;
echo sprintf($format2, $s3, $v3, $t3);
?>