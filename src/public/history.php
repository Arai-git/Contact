<?php

$db_username = 'root';
$db_password = 'password';
$pdo = new pdo(
    'mysql:host=mysql; dbname=contactform; charset=utf8',
    $db_username,
    $db_password
);
$sql = 'SELECT * FROM contacts';
$statement = $pdo->prepare($sql);
$statement->execute();
$contacts = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
  <html>
    <head>
      <meta charset="UTF-8">
      <title>送信履歴</title>
    </head>
  <body>
    <h1>送信履歴</h1>
    <div class="container">
        <?php foreach ($contacts as $contact): ?>
          <p><?php echo $contact['title'] . "\n"; ?></p>
          <p><?php echo $contact['content'] . "\n"; ?></p>
        <?php endforeach; ?>
        <p><a href="index.php">戻る</p>
    </div>
  </body>
</html>