<!DOCTYPE html>
  <html>
    <head>
      <meta charset="UTF-8">
      <title>お問合せフォーム</title>
      <style type="text/css">
        p {
          font-weight: bold;
          font-size: 30px;
        }
      </style>
    </head>
  <body>
  <p>お問い合わせフォーム</p>
  <div>以下のフォームからお問合せください。</div>
  <br>
  <form action= "complete.php" method="post">
        <div id="title">
          タイトル（必須）　<input type="text" name="title" placeholder="タイトル" required>
        </div>
        <div id="email">
          Email（必須）　<input type="text" name="email" placeholder="Emailアドレス" required>
        </div>
        <div id="contact">
          お問い合わせ内容（必須）　<textarea name="content" placeholder="お問い合わせ内容（1000字まで）をお書きください" required></textarea>
        </div>
        <input type="submit" value="送信">
      </div>
  </form>
  </body>
</html>

