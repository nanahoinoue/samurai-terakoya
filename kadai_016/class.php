<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP</title> 
</head>

<body>
    <p>
       

            public function show_price(){
                echo $this->price . '<br>';
            } <?php
        //クラスを定義
        class Food {
            //プロパティを定義する
            private $name;
            private $price;

            //コンストラスト定義
            public function __construct(string $name, int $price){
                $this->name = $name;
                $this->price = $price;
            }
            //メソッドを追加
            public function show_price(){
                echo "The price is: " . $this->price;
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
            public function __construct(string $name, int $height, int $weight){
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