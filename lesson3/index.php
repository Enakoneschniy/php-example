<?
$a = 19;
$b = 11;

if($a == $b){
    echo "$a == $b";
}else{
    echo "$a != $b";
}

echo "<br>-------------------------------------------------<br>";
$a = 19;
$b = 11;
if($a == $b){
    echo "$a == $b";
}elseif($a > $b){
    echo "$a > $b";
}elseif($a < $b){
    echo "$a < $b";
}else{
    echo "$a != $b";
}

echo "<br>-------------------------------------------------<br>";

$a = 23;
$b = 55;
$c = 5;

$res = $a / $b;

echo $res, '<br>';

$res = $res + $c;

echo $res, '<br>';

echo "<br>-------------------------------------------------<br>";

$a = 23;
$b = 55;
$c = 5;

$res = $a / $b;

echo $res, '<br>';

$res *= $c;

echo $res, '<br>';

echo "<br>-------------------------------------------------<br>";

$a = 23;
$b = 55;
$c = 5;

$res = $a / $b;
$res = round($res, 2);
echo $res, '<br>';

$res *= $c;

echo $res, '<br>';

echo "<br>-------------------------------------------------<br>";

$a = 23;
$b = 55;
$c = 5;

$res = $a / $b;
$res = floor($res);
echo $res, '<br>';

$res *= $c;

echo $res, '<br>';

echo "<br>-------------------------------------------------<br>";

$a = 2;

$res = pow($a, 2);

echo $res;

echo "<br>-------------------------------------------------<br>";

$res = sqrt($res);

echo $res;

echo "<br>-------------------------------------------------<br>";

$res = 333/"4sd";

echo $res;

echo "<br>-------------------------------------------------<br>";

$a = 3;
$b = 4;
$c = 10;

if($a < $b && $a < $c){
    echo 'Hello';
}else{
    echo 'World';
}

echo "<br>-------------------------------------------------<br>";

$a = 3;
$b = 4;
$c = 10;

if($a > $b || $a > $c || $c = -4){
    echo 'Hello';
}else{
    echo 'World';
}

echo "<br>-------------------------------------------------<br>";

$switch = 'print';

switch($switch){
    case 'print':
        echo $switch, "<br>";
        break;
    case 'echo':
        echo $switch, " 2<br>";
        break;

    default:
        echo 'default: ', $switch, '<br>';
}

echo "<br>-------------------------------------------------<br>";

switch(true){
    case $a == $b:
        echo " $a < $b<br>";
        break;
    case $a > $b:
        echo $switch," 2<br>";
        break;

    default:
        echo 'default: ', $switch, '<br>';
}

echo "<br>-------------------------------------------------<br>";

$arNumbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

var_dump($arNumbers);

echo sizeof($arNumbers),"<br>";

echo $arNumbers[5];

echo "<br>-------------------------------------------------<br>";

$arStrings = array('ddd', 'ffff', $switch);
var_dump($arStrings);

echo "<br>-------------------------------------------------<br>";
$arStrings[] = "sds";
var_dump($arStrings);

unset($arStrings[1]);
var_dump($arStrings);

echo "<br>-------------------------------------------------<br>";

$arStrings = array('name' => 'vasya', 'age' => 22);
var_dump($arStrings);

echo $arStrings['name'];

$arStrings['name'] = "fff";

var_dump($arStrings);

$arStrings[] = "lflflf";
$arStrings[555] = "lflflf";
$arStrings[] = "lflflf";
$arStrings[] = "lflflf";


var_dump($arStrings);