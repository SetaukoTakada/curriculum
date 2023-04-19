<?php
require_once("getData.php");

$data = new getData();
//$data->getUserData();
$user= $data->getUserData();
$posts= $data->getPostData();
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
    <p class="name">ようこそ <?php  echo $user['last_name'].$user['first_name'];?> さん</p>
    <P class="login">最終ログイン日： <?php echo $user['last_login'] ;?></P>
  </div>
</header>
 <main>
<table>
  <tr class="title">
    <th>記事ID</th>
    <th>タイトル</th>
    <th>カテゴリ</th>
    <th>本文</th>
    <th>投稿日</th>
  </tr>
  <?php foreach($posts as $value){ ?>
    <tr class="contens">
      <td><?php echo $value[0]; ?></td>
      <td><?php echo $value[1]; ?></td>
      <td><?php 
        if ($value[2] == 1) {
         echo "食事";
        } elseif($value[2] == 2){ 
         echo "旅行";
        }else{
         echo "その他";
        }
      ?></td>
      <td><?php echo $value[3]; ?></td>
      <td><?php echo $value[4]; ?></td>
    </tr>
   <?php } ?>
</table>
 </main>
  <footer>
    <p>Y&I group.inc</p>
  </footer>
</body>
</html>