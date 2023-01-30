<?php
$name ='taro';
$pass ='pass';

if ($name='taro' && $pass='pass') {
  echo 'ログイン成功です';
}elseif ($name='taro') {
  echo 'パスワードが間違っています。';
}elseif ($pass='pass') {
  echo '名前が間違っています。';
}else {
  echo '入力情報が間違っています';
}

?>

