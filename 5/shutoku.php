<?php
require_once("db_connect.php");

class getData{

  public $pdo;
  public $data;

  //コンストラクタ
  function __construct()  {
      $this->pdo = connect();
  }

  public function getPostData(){
    $getposts_sql = "SELECT * FROM books";
    $post_data = $this->pdo->query($getposts_sql);
    return $post_data;
}
}