<?php
require_once('db_connect.php');
// セッション開始
session_start();


if(isset($_POST['newbook'])) {
  $title = $_POST['title'];
  $date = $_POST['date'];
  $stock = $_POST['stock'];
  try{
     $db = connect();
     $sql ='insert into books(title,date,stock) values(?,?,?)';
     $stmt = $db->prepare($sql);
     $stmt->execute(array($title,$date,$stock));
     $stmt = null;
     $db = null;
     
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
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="css/sinnki.css">
</head>
<body>
    <h1>本 登録画面</h1>
    <form method="POST" action="">
        <input type="text" name="title" value="" placeholder="タイトル"/>
        <br>
        <input type="text" name="date" value="" placeholder="発売日"/><br>
        <p>在庫数</p>
        <label for="stock"></label>
        <select name="stock">
        <option >選択してください</option>
          <?php   
          $stock = array(1,2,3,4,5,6,7,8,9,10);
          foreach ($stock as $value) {
            echo'<option>'.$value.'</option>';
          }
          ?>
        </select>
        <br>
        <input type="submit" value="登録" name="newbook" class="touroku">
    </form>
</body>
</html>