<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$my_name = $_POST['my_name'];
$oknumber = $_POST['oknumber'];
$oklang = $_POST['oklang'];
$okcommand = $_POST['okcommand'];
$number = $_POST['number'];
$lang = $_POST['lang'];
$command = $_POST['command'];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する



?>
<p><?php echo $my_name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
if ($number == $oknumber) {
   echo "正解！";
}else{
  echo "残念・・・";
}
?>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
if ($lang == $oklang) {
   echo "正解！";
}else{
  echo "残念・・・";
}
?>

<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
if ($command == $okcommand) {
   echo "正解！";
}else{
  echo "残念・・・";
}
?>