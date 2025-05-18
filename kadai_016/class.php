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
            public function _construct(string $name, int $price){
                $this->name = $name;
                $this->price = $price;
            }
                    //メソッド定義
        public function show_price(){
            echo $this->price .'<br>';
            }
        }

        //
        class Animal {
            //プロパティ
            private $name;
            private $height;
            private $weight;

            //コンストラスト
            public function _construct(string $name, int $height, $weight){
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;

                }
                public function show_height(){
                    echo $this->height .'<br>';
            }
        
        
    }
        
        ?>
        </p>
    </body>