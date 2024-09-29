<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Book data登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>
  div{padding: 10px;font-size:16px;}
  td{border: 1px solid red;}
</style>
</head>


<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>Book data登録</legend>
     <td>ID：<input type="text" name="id"></td><br>
     <td>ユーザー名：<input type="text" name="username"></td><br>
     <td>年齢：<input type="text" name="age"></td><br>
     <td>本のタイトル：<input type="text" name="bookname"></td><br>
     <td>本のURL：<input type="text" name="bookurl"></td><br>
     <td>コメント<textArea name="comment" rows="5" cols="50"></textArea></td><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</>
</html>
