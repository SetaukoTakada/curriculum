<?php
require_once("getData.php");

$data = new getData();
//$data->getUserData();
$user= $data->getUserData();
$posts= $data->getPostData();
var_dump($posts);
?>




<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>4-2</title>
</head>
<body>
  <header class="container">
    <img src="./img/1599315827_logo.png" alt="" width="200px" height="120px">
  <div class="users">
    <p>ようこそ <?php  echo $user['last_name'].$user['first_name'];?> さん</p>
    <P>最終ログイン日： <?php echo $user['last_login'] ;?></P>
  </div>
</header>
 <main>
<table>
  
</table>
 </main>
  
</body>
</html>