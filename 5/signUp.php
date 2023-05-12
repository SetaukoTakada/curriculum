<?php


if(isset($_POST['signUp'])) {
  $name = $_POST['name'];
  $password = $_POST['password'];
  try{
     $db = new PDO('mysql:host=localhost;dbname=checktest5','root','');
     $sql ='insert into users(name,password) values(?,?)';
     $stmt = $db->prepare($sql);
     $stmt->execute(array($name,password_hash($password,PASSWORD_DEFAULT)));
     $stmt = null;
     $db = null;
     
     header('Location: http://localhost/LetsEngineer/curriculum/PHPjob/5/login.php');
     exit;

  }catch(PDOException $e){
    echo $e->getMessage();
    exit;
  }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <h1>ユーザー登録画面</h1>
    <form method="POST" action="">
      
        <input type="text" name="name" value="" placeholder="ユーザー名"/>
        <br>
        <input type="password" name="password" value="" placeholder="パスワード"/><br>
        <input type="submit" value="新規登録" name="signUp">
    </form>
</body>
</html>


 
