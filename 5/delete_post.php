<?php
require_once('db_connect.php');
require_once('shutoku.php');


$id = $_GET['id'];



try{
     $db = connect();
     $sql ='delete from books where id =  '.$id;
     $stmt = $db->prepare($sql);
     $delete= $stmt->execute();
     header("Location: main.php");
   
}catch (PDOException $e) {
  echo 'Error: ' . $e->getMessage();
  die();
}









?>