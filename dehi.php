<?php
mb_language("Japanese");
mb_internal_encoding("UTF-8");

$to = "camiyata.com@gmail.com"; // 自分のメールアドレス
$subject = "フォームからの問い合わせ";
$body = "名前: " . $_POST['name'] . "\n" . "内容: " . $_POST['comments'];
$headers = "From: webmaster@example.com";

if (mb_send_mail($to, $subject, $body, $headers)) {
    echo "メールを送信しました。";
} else {
    echo "送信に失敗しました。";
}
?>