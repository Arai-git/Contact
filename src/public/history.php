<!DOCTYPE html>
  <html>
    <head>
      <meta charset="UTF-8">
      <title>送信履歴</title>
    </head>
  <body>
  <h1>送信履歴</h1>

  <?php
  //直リンクされた場合index.phpにリダイレクト
  // if($_SERVER["REQUEST_METHOD"] != "POST"){
  //   header("Location: index.php");
  //   exit();
  // }
  $db_username = 'root';
  $db_password = 'password';
  $pdo = new pdo(
      'mysql:host=mysql; dbname=contactform; charset=utf8',
      $db_username,
      $db_password
  );
  $sql = 'select * from contacts';
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $results = $stmt->fetchall();

  foreach ($results as $result) {
      echo $result['title'];
      echo '<br>';
      echo '<br>';
      echo $result['content'];
      echo '<br>';
      echo '<br>';
  }
  ?>

  <p><a href="index.php">戻る</p>
  </form>
  </body>
