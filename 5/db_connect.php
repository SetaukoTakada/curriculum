<?php
    define('DB_DATABASE', 'checktest5');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('PDO_DSN', 'mysql:host=localhost;charset=utf8;dbname='.DB_DATABASE);
    
    function connect(){
    try {
        $dbh = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
        //echo 'DBと接続しました。';
        return $dbh;
    } catch (PDOException $e) {
        echo 'Error:' . $e->getMessage();
        die();
    }
}
    ?>