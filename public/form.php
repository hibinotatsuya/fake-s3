<html>
<head>
  <title>ファイル送信フォーム</title>
</head>
<body>
  <h1>ファイル送信フォーム</h1>
  <form method="post" action="index.php" enctype="multipart/form-data">
    hash(ALGO,KEY.SECRET) <input type="text" name="hash" placeholder="abcd1234"><br>
    bucket <input type="text" name="bucket" placeholder="hogeimage"><br>
    object_key <input type="text" name="object_key" placeholder="hoge/fuga.jpg"><br>
    file <input type="file" name="file"><br>
    <input type="submit" value="送信">
  </form>
</body>
</html>
