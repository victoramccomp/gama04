<?php

function DBConnection(){

$host = "localhost\sqlexpress";
$user = "";
$pwd = "";
$db = "";

try{
    $conn = new PDO( "sqlsrv:Server= $host ; Database = $db ", $user, $pwd);
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $sql = "";
    $conn->query($sql);
}catch(PDOException $e){
    die(print_r($e));
}

}
