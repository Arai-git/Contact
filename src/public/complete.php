<?php
$errors = [];
$title = filter_input(INPUT_POST, 'title');
$email = filter_input(INPUT_POST, 'email');
$content = filter_input(INPUT_POST, 'content');
if (empty($title) || empty($email) || empty($content)) {
    $errors[] =
        '「タイトル」「Email」「お問い合わせ内容」のどれかが記入されていません！';
}

$dbUserName = 'root';
$dbPassword = 'password';
$pdo = new PDO(
    'mysql:dbname=contactform;host=mysql;charset=utf8',
    $dbUserName,
    $dbPassword
);

$title = $_POST['title'];
$email = $_POST['email'];
$content = $_POST['content'];

//データの追加
$sql =
    'INSERT INTO `contacts` (`id`, `title`, `email`, `content`) VALUES (0, :title, :email, :content)';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':title', $title, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':content', $content, PDO::PARAM_STR);
$stmt->execute();

if (empty($errors)) {
    $message = '送信完了！！！';
    $links = '
      <a href="./index.php">
        <p>送信画面へ</p>
      </a>
      <a href="./history.php">
        <p>送信履歴をみる</p>
      </a>
    ';
} else {
    $links = '
        <a href="./index.php">
          <p>送信画面へ</p>
        </a>
      ';
}
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