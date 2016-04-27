<?
$str = 'ddddHello, my name is Evgeniy... Evgeniy, EvgeniyHello';

$pattern = '/hello/';
echo $str, "<br>";
echo preg_replace($pattern, 'HI', $str);
echo '<br><hr><br>';

$strNumb = "dgh435 hlkd sf2./7&$ @34j67 ваа8";

$numb = preg_replace('/[а-яёЁa-z0-9]*/i', '', $strNumb);
echo $numb, "<br>";
//$pattern = '/[+-]?\d+\.?\d*/';
echo '<br><hr><br>';
$subject = "defabcdefrdtdrtdrdefwerwerdefwetet4e3t43defserwerwe";
$pattern = '/def/';
echo $subject, "<br>";
preg_match_all($pattern, $subject, $matches);
var_dump($matches);
echo '<hr>';

$html = "ssfdsdf<br>sdfsdf<br> esfsefsef<br>";
$html = "ssfdsdf<p>sdfsdf</p> esfsefsef";
$pattern = '/<br>/';
if(preg_match($pattern, $html)){
    echo  'Error <br>';
}else{
    echo 'Okay  <br>';
}

echo '<hr>';

$html = '<table border="1"><tr><td class="head">Article</td><td class="head">Name</td></tr><tr><td class="val">erte45455</td><td class="val">IPhone 4</td></tr></table>';
$matches = [];
$pattern = '/<td class="head">([a-z]+)<\/td>/i';
preg_match_all($pattern, $html, $matches);

$pattern1 = '/<td class="val">([a-z0-9 ]+)<\/td>/i';
$matches2 = [];
preg_match_all($pattern1, $html, $matches2);

$arProps = [];

foreach($matches[1] as $key => $name){
    $arProps[] = [
        'NAME' => $name,
        'VALUE' => $matches2[1][$key]
    ];
}

/*var_dump($matches);
var_dump($matches2);*/

var_dump($arProps);
?>
<table border="1">
    <tr>
        <td class="head">Article</td>
        <td class="head">Name</td>
    </tr>
    <tr>
        <td class="val">erte45455</td>
        <td class="val">IPhone 4</td>
    </tr>
</table>
