<?php
require_once('shutoku.php');
require_once('db_connect.php');
require_once('delete.php');

// セッション開始
session_start();
 //セッションにuser_nameの値がなければlogin.phpにリダイレクト
//if (empty($_SESSION["name"])) {
   // header("Location: login.php");
   // exit;
//}
$data = new getData();
$books= $data->getPostData();



//削除ボタンが押された時にDBからその本の情報が削除されるようにする


?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>在庫一覧画面</title>
</head>
<body>
    <h1>在庫一覧画面</h1>
    <a href="sinnki.php">新規登録</a>
    <a href="logout.php">ログアウト</a>
    <br>
<table>
<tr class="title">
    <th>タイトル</th>
    <th>発売日</th>
    <th>在庫数</th>
    <th> </th>
  </tr>
  <?php foreach($books as $value){ ?>
    <tr class="books">
      <td><?php echo $value['title'];?></td>
      <td><?php echo $value['date']; ?></td>
      <td><?php echo $value['stock']; ?></td>
      <td>
      <a href="delete_post.php?id=<?php echo $value['id']; ?>">削除</a>
      </td>
    </tr>
   <?php } ?>

</table>

</body>
</html>