<?php
$my_name = $_POST['my_name'];
$number = $_POST['number'];
$numbers = $number * mt_rand(1, 6)
?>
<p><?php echo date("Y-m-d H:i:s", time());?></p>
<p>私の名前は<?php echo $my_name; ?>です。</p>
<p>番号は<?php echo $numbers; ?>です。</p>
<p>結果は<?php 
if ($numbers == 1 && $numbers <=10) {
  echo "凶";
}elseif ($numbers >=11 && $numbers <=15) {
  echo "小吉";
}elseif($numbers >=16 && $numbers <=20){
  echo "中吉";
}elseif($numbers >=21 && $numbers <=25){
  echo "吉";
}elseif($numbers >=26 && $numbers <=36){
  echo "大吉";
}else
  echo "残念";

?></p>