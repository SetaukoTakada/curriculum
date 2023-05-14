<?php
require_once('db_connect.php');
require_once('shutoku.php');

$id = $_POST['id'];

if (empty($id)) {
  header("Location: main.php");
  exit;
}

try{
     $db = connect();
     $sql ='delete from books where id = $id ';
     $stmt = $db->prepare($sql);
     $delete= $stmt->fetch(PDO::FETCH_ASSOC);
     var_dump($delete);
   
}








?>