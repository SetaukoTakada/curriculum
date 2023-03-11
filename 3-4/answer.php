<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style3.css">
  <title></title>
</head>
<body>
  


<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$my_name = $_POST['my_name'];
$oknumber = $_POST['oknumber'];
$oklang = $_POST['oklang'];
$okcommand = $_POST['okcommand'];
$value = $_POST['number'];
$value2 = $_POST['lang'];
$value3 = $_POST['command'];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する



?>
<style>
.color2{
  color: white;
  text-align: center;
}
  </style>

<p><?php echo $my_name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<div class="color2">
<?php
if ($value == $oknumber) {
   echo "正解！";
}else{
  echo "残念・・・";
}
?>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
if ($value2 == $oklang) {
   echo "正解！";
}else{
  echo "残念・・・";
}
?>

<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
if ($value3 == $okcommand) {
   echo "正解！";
}else{
  echo "残念・・・";
}
?>
</div>

</body>
</html>