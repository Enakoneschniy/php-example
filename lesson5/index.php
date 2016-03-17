<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lesson 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?
        error_reporting(E_ALL);
        $arCountries = [0 => 'Турция', 1 =>'США', 2 =>'Россия', 3 =>'Белорусь', 4 =>'Польша'];
    ?>
    <form id="feedback" method="post" class="my-form">
        <p>
            <label for="name">Имя</label>
            <input type="text" name="name" id="name" placeholder="Как вас зовут?" value="<?=isset($_REQUEST['name']) ? $_REQUEST['name'] : ''?>" >
        </p>
        <p>
            <label for="country">Страна</label>
            <select name="country" id="country">
                <?foreach($arCountries as $key => $country):?>
                    <?if($key == $_REQUEST['country']):?>
                        <option selected="selected" value="<?=$key?>"><?=$country?></option>
                    <?else:?>
                        <option value="<?=$key?>"><?=$country?></option>
                    <?endif?>
                <?endforeach?>
            </select>
        </p>
        <p>
            <label for="message">Сообщение</label>
            <textarea placeholder="Текст сообщения?" name="message" id="message" rows="5"><?=isset($_REQUEST['message']) ? $_REQUEST['message'] : ''?></textarea>
        </p>
        <p>
            <input type="submit" name="submit" value="Отправить">
        </p>
    </form>

    <?
        if(isset($_REQUEST['submit'])){
            var_dump($_REQUEST);
            ?>
            <div>
                <h3><?=$_REQUEST['name']?>: <i><?=$arCountries[$_REQUEST['country']]?></i></h3>
                <hr>
                <p><?=$_REQUEST['message']?></p>
            </div>
            <?
        }

        $price = 4000;
        $percent = 10;
        $res = $price*($percent/100);
        echo $res;
    ?>
</body>
</html>
