<?php
$arExapmle = array(
    1 => 23, 49, 80
);

var_dump($arExapmle);

echo "<br>-------------------------------------------------<br>";

$num = 1;
while($num <= 10){
    echo $num++, ", ";
}

echo "<br>===================<br>";

do{
    echo $num++, ", ";
}while($num <= 1);

echo "<br>-------------------------------------------------<br>";

$num = 1;
while($num <= 20){
    if($num%2 != 0){
        $num++;
        continue;
    }
    echo $num++, ", ";
}

echo "<br>-------------------------------------------------<br>";

for($i = 1; $i <= 30; $i++){
    echo "$i, ";
}

echo "<br>-------------------------------------------------<br>";

$arNum = array();

for($i = 1; $i <= 10; $i++){
    $arNum[$i] = rand(-100, 100);
}

var_dump($arNum);

echo "<br>-------------------------------------------------<br>";

$arPeople = array(
    array(
        'NAME' => 'Vasya',
        'AGE' => 23,
        'FRIENDS' => array(
            array('NAME' => 'Oleg', 'AGE' => 20),
            array('NAME' => 'Anna', 'AGE' => 18)
        )
    ),
    array(
        'NAME' => 'Petya',
        'AGE' => 20,
        'FRIENDS' => array()
    ),
    array(
        'NAME' => 'Olya',
        'AGE' => 18,
        'FRIENDS' => array()
    )
);
echo '<pre>';
print_r($arPeople);

foreach($arPeople as $key => $arPerson){

    echo $arPerson['NAME'],": ",$arPerson['AGE'],'<br>';

    if(!empty($arPerson['FRIENDS'])){
        foreach($arPerson['FRIENDS'] as $arFriend){
            echo "---",$arFriend['NAME'],": ",$arFriend['AGE'],'<br>';
        }

    }
}

echo "<br>-------------------------------------------------<br>";

foreach($arPeople as $key => $arPerson){
    if($arPerson['NAME'] == 'Petya'){
        $arPeople[$key]['AGE'] = 21;
    }
}
echo '<pre>';
print_r($arPeople);

echo "<br>-------------------------------------------------<br>";

foreach($arPeople as $key => &$arPerson){
    if($arPerson['NAME'] == 'Petya'){
        $arPerson['AGE'] = 22;
    }
}
echo '<pre>';
print_r($arPeople);

echo "<br>-------------------------------------------------<br>";

$a = 10;

$c = &$a;

var_dump($a);
var_dump($c);

$c = 44;

var_dump($a);
var_dump($c);

$a = 45;

var_dump($a);
var_dump($c);