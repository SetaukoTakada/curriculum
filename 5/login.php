<?php
require_once('db_connect.php');
// セッション開始
session_start();

$err_msg = "";

if (!empty($_POST)){
  if (empty($_POST["name"])) {
    echo "名前が未入力です。";
  }

if (empty($_POST["password"])) {
  echo "パスワードが未入力です。";
}

}
if (!empty($_POST["name"]) && !empty($_POST["password"])){
    $name = htmlspecialchars($_POST['name'],ENT_QUOTES);
    $password = htmlspecialchars($_POST['password']);


      try {
          //データベースアクセスの処理文章。ログイン名があるか判定
          $db = connect();
          $sql ='select * from users where name = ? ';
          $stmt = $db->prepare($sql);
          $stmt->execute(array($name));
         $row= $stmt->fetch(PDO::FETCH_ASSOC);
        }
        catch (PDOException $e) {
           echo 'Error: ' . $e->getMessage();
           die();
       }
      

         if(password_verify($password,$row["password"])){
            header('Location:main.php');
          }else{
            $err_msg = "ユーザー名に誤りがあります。";
          }

          if(password_verify($name,$row["name"])){
            header('Location:main.php');
          }else{
            $err_msg = "パスワードに誤りがあります。";
          }

          
       
    }
?>

<!doctype html>
<html lang="ja">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="css/login.css">
        <title>ログインページ</title>
    </head>
    <body>
      <div class="container">
        <h2>ログイン画面</h2>
        <a href="signUp.php" class="sinki">新規ユーザー登録</a></div>
            <?php if($err_msg !== null && $err_msg !==''){echo $err_msg;}?>
            <br>
            <form method="post" action="">
            <input type="text" name="name" size="15" placeholder="ユーザー名"/><br><br> 
            <input type="text" name="password" size="15" placeholder="パスワード"/><br><br>
            <input type="submit" name="login" value="ログイン" class="login">
        </form>
       
    </body>
</html>