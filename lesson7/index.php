<script type="text/javascript">
    function sum(){
        var sum = 0;
        for (var i = 0; i < arguments.length; i++){
            sum += arguments[i];
        }
        return sum;
    }
    //alert(sum(1,3,1));
</script>
<?

function sum($a, $b, $c){
    return $a + $b + $c;
}
echo sum(1, 2, 3), "<br>";

$arNumb = [1, 2, 3, 4];

echo sum(...$arNumb), "<br>";

function foo(...$arguments){
    $sum = 0;
    foreach ($arguments as $argument) {
        $sum += $argument;
    }
    return $sum;
}

echo foo(2, 1);
echo "<br>----------------------<br>";

$str = 'Hello, my name is Evgeniy... Evgeniy, Evgeniy';

echo $str[0], "<br>";
//$str[0] = 'K';



echo strlen($str), "<br>";

$search = 'Evgeniy';

$len = strlen($search);

$index = strpos($str, $search);


echo $str, "<br>";
//$str = str_replace($search, 'Vasya', $str);

$start = strpos($str, $search);
$len = strlen($search);
$strLeft = substr($str, 0, $start);
$strRight = substr($str, $start + $len);
$str = $strLeft."Vasya".$strRight;
echo $strLeft, "<br>";
echo $strRight, "<br>";
echo $str, "<br>";

echo "<br>----------------------<br>";
$str = 'Hello, my name is Evgeniy... Evgeniy, Evgeniy';
$first = strpos($str, $search);
$two = strpos($str, $search, $first + 1);
$len = strlen($search);
$strLeft = substr($str, 0, $two);
$strRight = substr($str, $two + $len);
$str = $strLeft."Vasya".$strRight;

echo $strLeft, "<br>";
echo $strRight, "<br>";
echo $str, "<br>";

echo "<br>----------------------<br>";

$str = 'foof';

function palindrom($str){
    $str = strtolower($str);
    $str = str_replace(' ','',$str);
    $str_reverse = strrev($str);
    if($str == $str_reverse){
        return true;
    }else{
        return false;
    }
}

$str = 'Fooof';

if(palindrom($str)){
    echo 'Ok','<br>';
}else{
    echo 'No','<br>';
}
list($a, $b, $c)  = $info;


