<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP</title> 
</head>

<body>
    <p>
        <?php
        //クラスを定義
        class Food {
            //プロパティを定義する
            private $name;
            private $price;

            //コンストラスト定義
            public function ＿_construct(string $name, int $price){
                $this->name = $name;
                $this->price = $price;
            }

            public function show_price(){
                echo $this->price . '<br>';
            }
        }
        //インスタンス化
        $food = new Food('potato', 250);

        print_r($food);
        echo'<br>';

        $food->show_price();

        ?>
        <br>
        <?php
        class Animal {
            //プロパティ
            private $name;
            private $height;
            private $weight;

            //コンストラスト
            public function _＿construct(string $name, int $height, int $weight){
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
                }
            }
    
        //インスタンス化
        $animal = new Animal('dog', 60, 5000);

        print_r($animal);
        echo'<br>';


        ?>
        </p>
    </body>
    </html>