<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>課題</title>
</head>

<body>
    <p>
        <?php
        //配列
        $array_data = ['名前'=>'玉ねぎ','値段'=>200, '産地'=>'北海道'];
        //出力
        foreach ($array_data as $key => $value){
            echo "{$key}:{$value} <br>";
        }
        ?>
    </p>
</body>
</html>