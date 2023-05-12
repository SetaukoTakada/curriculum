<?php



if(isset($_POST['newbook'])) {
  $title = $_POST['title'];
  $date = $_POST['date'];
  $stock = $_POST['stock'];
  try{
     $db = new PDO('mysql:host=localhost;dbname=checktest5','root','');
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
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <h1>本 登録画面</h1>
    <form method="POST" action="">
      
        <input type="text" name="title" value="" placeholder="タイトル"/>
        <br>
        <input type="text" name="date" value="" placeholder="発売日"/><br>
        <p>在庫数</p>
        <label for="stock"></label>
        <select name=”stock”>
        <option >選択してください</option>
        <option >1</option>
        <option >2</option>
        <option >3</option>
        <option >4</option>
        <option >5</option>
        <option >6</option>
        <option >7</option>
        <option >8</option>
        <option >9</option>
        <option >10</option>
        </select>
        <br>
        <input type="submit" value="登録" name="newbook">
    </form>
</body>
</html>