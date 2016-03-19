<?

function my_print(){
    echo 'hello world';
}

my_print();

echo "<br>---------------------<br>";
function sum($a, $b){
    echo $a + $b, '<br>';
}

sum(2, 3);
sum(2, 2);


$a = 3;
$b = 4;
sum(2, 3);

echo "<br>---------------------<br>";

function sum1($a, $b){
    return $a + $b;
}

echo sum1(2, 3);

echo "<br>---------------------<br>";

function percent($price, $percent){
    return $price * ($percent/100);
}

echo percent(200, 10);

echo "<br>---------------------<br>";

function my_pow($val, $pow = 2){
    return pow($val, $pow);
}
echo my_pow(2, 3);

echo "<br>---------------------<br>";

function foo(&$a, $b){
    $a += $b;
}

$a = 2;
$b = 3;

echo $a, "<br>";

foo($a, $b);

echo $a;

echo "<br>---------------------<br>";

$func = function(){
  echo 'Anonim';
};

$func();

$fun = 'sum';

echo '<br>';

echo $fun(2, 3);

$fun = 'func';

$$fun();

$var = 45;

$a = 'var';

echo '<br>', $$a; //$var

echo "<br>---------------------<br>";

function walk($array, $func){
    foreach($array as $item){
        $func($item);
    }
}
$arNumb = [1, 2, 3, 4, 5];

walk($arNumb, function($item){
    echo $item, '<br>';
});

function arr($item){
    echo $item, ' : +<br>';
}

walk($arNumb,'arr');

echo "<br>---------------------<br>";

$arNumb = [1, 2, 3, 4, 5];

function map($array, $func){
    foreach($array as &$item){
        $item = $func($item);
    }
    return $array;
}

$newArray = map($arNumb, function($item){
    return pow($item, 2);
});

var_dump($arNumb);
var_dump($newArray);

$newArray = map($newArray, function($item){
    return $item/2;
});

var_dump($newArray);

echo "<br>---------------------<br>";

$arNumb = [1, 2, 3, 4, 5];

$pow = 3;
$devider = 2;
$newArray = map($arNumb, function($item) use($pow, $devider){
    $pow = 2;
    return pow($item, $pow)/$devider;
});
var_dump($newArray);
var_dump($pow);

echo "<br>---------------------<br>";
global $b;
$b = 2;
function bar($a){
    global $b;
    return $a/$b;
}

bar(4);