//変数numに整数を代入する
let num =Math.floor(Math.random() * 20);

//変数numの値が3の倍数の場合"3の倍数です"と出力されている
if (num % 3 === 0){
    console.log("3の倍数です");
}

//変数numの値が5の倍数の場合"5の倍数です"と出力されている
else if (num % 5 === 0){
    console.log("5の倍数です");
}

//変数numの値が3と5の倍数の場合、"3と5の倍数です"のみ出力されている
else if (num % 3 === 0 && num % 5 === 0){
    console.log("3と5の倍数です");
}

//上記のいずれでもない場合、変数numの値が出力されている
else {
    console.log(num);
}