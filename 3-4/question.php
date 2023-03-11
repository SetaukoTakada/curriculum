<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style2.css">
  <title></title>
</head>
<body>

<?php
//POST送信で送られてきた名前を受け取って変数を作成
$my_name = $_POST['my_name'];


//①画像を参考に問題文の選択肢の配列を作成してください。
$number = ['80','22','20','21'];
$lang = ["PHP","Python","JAVA","HTML"];
$command = ["join","select","insert","update"];

//② ①で作成した、配列から正解の選択肢の変数を作成してください
$oknumber = $number[0];
$oklang = $lang[3];
$okcommand = $command[3];


?>
<p>お疲れ様です<?php echo $my_name; ?>さん</p>
<style>
.color{
  color:white;
}
</style>

<!--フォームの作成 通信はPOST通信で-->

<form action="answer.php" method="post">
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<div class="color">
<?php foreach($number as $value){?>
<input type="radio" name="number" value="<?php echo $value ;?>"/>
<?php  echo  $value ;}
?>


<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach($lang as $value2){?>
<input type="radio" name="lang" value="<?php echo $value2 ;?>"/>
<?php echo  $value2 ;}?>

<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach($command as $value3){?>
<input type="radio" name="command" value="<?php echo $value3 ;?>"/>
<?php echo  $value3 ;}?>

</div>




<!--問題の正解の変数と名前の変数を[answer.php]に送る-->

      <input type="hidden" name="my_name" value="<?php echo $my_name; ?>"/>
      <input type="hidden" name="oknumber" value="<?php echo $oknumber ;?>" />
      <input type="hidden" name="oklang" value="<?php echo $oklang ;?>"/>
      <input type="hidden" name="okcommand" value="<?php echo $okcommand ;?>"/>
      <br>
      <input type="submit" value="回答する" />
    </form>
</body>
    </html>