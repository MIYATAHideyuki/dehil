<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  require 'config.php'; // DB接続用ファイル

  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

  $stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
  $stmt->execute([$name, $email, $password]);

  echo "登録が完了しました！<br>";
  echo '<a href="login.php">ログインはこちら</a>';
}
?>