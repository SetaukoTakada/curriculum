<?php
require_once('db_connect.php');
// セッション開始
session_start();

$err_msg = "";

if(isset($_POST['login'])) {
    $name = htmlspecialchars($_POST['name'],ENT_QUOTES);
    $password = htmlspecialchars($_POST['password']);

      try {
          //データベースアクセスの処理文章。ログイン名があるか判定
          $db = connect();
          $sql ='select * from users where name = ? ';
          $stmt = $db->prepare($sql);
          $stmt->execute(array($name));
         $row= $stmt->fetch(PDO::FETCH_ASSOC);
         
         

        

          if(password_verify($password,$row["password"])){
            header('Location: http://localhost/LetsEngineer/curriculum/PHPjob/5/main.php');
          }else{
            $err_msg = "ユーザー名またはパスワードが誤りです。";
          }
         }
       catch (PDOException $e) {
          echo 'Error: ' . $e->getMessage();
          die();
      }
    }
?>

<!doctype html>
<html lang="ja">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ログインページ</title>
    </head>
    <body>
        <h2>ログイン画面</h2>
            <?php if($err_msg !== null && $err_msg !==''){echo $err_msg;}?>
            <br>
            <form method="post" action="">
            <input type="text" name="name" size="15" placeholder="ユーザー名"/><br><br> 
            <input type="text" name="password" size="15" placeholder="パスワード"/><br><br>
            <input type="submit" name="login" value="ログイン">
        </form>
        <a href="signUp.php">新規ユーザー登録</a>
    </body>
</html>