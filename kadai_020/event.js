//btnというidを取得し定数に代入
const btn = document.getElementById('btn');

//html要素がクリックされたときにイベント処理を実行
btn.addEventListener('click',() => {
    console.log('クリックされました！');
});