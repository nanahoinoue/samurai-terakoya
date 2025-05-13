<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP課題</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($array,$order){
            if($order === "asc"){
                sort($array);
                echo"昇順にソートします。<br>";
            }else if ($order == "desc"){
                rsort($array);
                echo"降順にソートします。<br>";
            }

            foreach ($array as $num){
                echo$num."<br>";
            }
        }
        //配列
        $nums = [15,4,18,23,10];
        //昇順
        sort_2way($nums,"asc");

        //降順
        sort_2way($nums,"desc");
        

        ?>
    </P>
</body>

</html>