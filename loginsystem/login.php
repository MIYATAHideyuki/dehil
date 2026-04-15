<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>ログイン</title>
</head>
<body>
  <h2>ログインフォーム</h2>
  <form action="login.php" method="post">
    <input type="email" name="email" placeholder="メールアドレス" required><br>
    <input type="password" name="password" placeholder="パスワード" required><br>
    <button type="submit">ログイン</button>
  </form>
</body>
</html>