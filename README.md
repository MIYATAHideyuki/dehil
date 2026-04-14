# webserver
const gasUrl = "https://script.google.com/macros/s/AKfycbzSg-Ago1Nr-DQGgTIo_fd_hkbEQMwmC2rCvplw9O0jeUNCcFoqdBtmbK8s4rF6CCe7YA/exec";

// 送信ボタンが押された時の処理
fetch(gasUrl, {
    method: "POST",
    body: new URLSearchParams(new FormData(document.getElementById("contact-form"))),
    mode: "no-cors" // 異なるドメイン間でのエラーを防ぐおまじない
}).then(() => {
    alert("送信完了！自分のGmailを確認してみてね。");
});