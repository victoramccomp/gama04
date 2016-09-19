<?php
require "../config/config.php";

function DBConnection(){

    try{
        $conn = new PDO('mysql:host='.HOST.'; dbname='.DB, USER, PASS);
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        return $conn;

    }catch(PDOException $e){
        die(print_r($e));
    }

}


?>
