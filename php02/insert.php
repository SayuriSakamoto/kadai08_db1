<?php
//1. POSTデータ取得
$username = $_POST["username"];
$age = $_POST["age"];
$bookname = $_POST["bookname"];
$bookurl = $_POST["bookurl"];
$comment = $_POST["comment"];

//2. DB接続します
try {
  //Password:MAMP='root',XAMPP='root'または''（空）を使用
  $pdo = new PDO('mysql:dbname=sayuri0430_gs_kadai;charset=utf8;host=mysql3101.db.sakura.ne.jp','',''); //※さくらサーバーにあげるとき要修正
} catch (PDOException $e) {
  exit('DB_CONNECT:'.$e->getMessage());
}

//３．データ登録SQL作成（idとindateは自動設定のため省略）
$sql = "INSERT INTO gs_an_table(username, age, bookname, bookurl, comment) VALUES (:username, :age, :bookname, :bookurl, :comment);";
$stmt = $pdo->prepare($sql);

// パラメータをバインド
$stmt->bindValue(':username', $username, PDO::PARAM_STR);  
$stmt->bindValue(':age', $age, PDO::PARAM_INT);  
$stmt->bindValue(':bookname', $bookname, PDO::PARAM_STR);  
$stmt->bindValue(':bookurl', $bookurl, PDO::PARAM_STR);  
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);  
$status = $stmt->execute(); //true or false

//４．データ登録処理後
if($status==false){
  // SQL実行時にエラーがあれば表示
  $error = $stmt->errorInfo();
  exit("SQL_ERROR:".$error[2]);
}else{
  // index.phpへリダイレクト
  header("Location: index.php");
  exit();
}
?>
