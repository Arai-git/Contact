<?php
$db_username = 'root';
$db_password = 'password';
$pdo = new pdo(
    'mysql:host=mysql; dbname=contactform; charset=utf8',
    $db_username,
    $db_password
);

$title = $_POST['title'];
$email = $_POST['email'];
$content = $_POST['content'];

// データの追加
$sql =
    'INSERT INTO contacts(title, email, content) VALUES(:title, :email, :content)';
$stmt = $pdo->prepare($sql);

// 挿入する値を配列に格納する
$params = [':title' => $title, ':email' => $email, ':content' => $content];
$stmt->execute($params);
?>

<!DOCTYPE html>
  <html>
    <head>
      <meta charset="UTF-8">
      <title>送信完了</title>
    </head>
    <body>
      <h1>送信完了！！！</h1>
      <p><a href="index.php">送信画面へ</p>
      <p><a href="history.php">送信履歴をみる</p>
    </body>
  </html> 