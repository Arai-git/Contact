<!DOCTYPE html>
  <html>
    <head>
      <meta charset="UTF-8">
      <title>お問合せフォーム</title>
    </head>
  <body>
    <h1>お問い合わせフォーム</h1>
    <h3>以下のフォームからお問合せください。</h3>
    <br>
    <form action="complete.php" method="post">
    <table>
      <tr>
        <td>タイトル</td>
        <td><input name="title" cols="30" rows="10" placeholder="タイトル"></textarea></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input name="email" cols="30" rows="10" placeholder="Emailアドレス"></textarea></td>
      </tr>
      <tr>
        <td valign="top">お問い合わせ内容</td>
        <td><textarea name="content" cols="30" rows="10" placeholder="お問い合わせ内容（1000文字まで）お書きください"></textarea></td>
      </tr>
      <tr>
        <td></td>
        <td><button type="submit" name="button">送信</button></td>
      </tr>
    </table>
    </form>
  </body>
</html>