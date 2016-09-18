<?php

function DBConnection(){

$host = "13.65.33.186";
$user = "gamaexp";
$pwd = "VpstMbC2Bnhn5a7qHASH";
$db = "GamaExp";

    try{
        $conn = new PDO('mysql:host='.$host.'; dbname='.$db, $user, $pwd);
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        return $conn;

    }catch(PDOException $e){
        die(print_r($e));
    }

}


?>
