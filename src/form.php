<?php
require_once "connection.php";

$connection = DBConnection();

function RegisterLead($connection, $name, $email, $ip, $date){
  try {
    $sql  = "INSERT INTO Leads(Name, Email, IP, RegTime)VALUES(:name, :email, :ip, GETDATE());";
    $stmt = $connection->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':ip', $ip);
    if($stmt->execute(){
      $msgReturn = array("msg"=> "Cadastro efetuado com sucesso.");
    }else{
      $msgReturn = array("msg"=> "Não foi possível efetuar o cadastro.");
    }
    
    return json_encode($msgReturn);

  } catch (PDOException $e) {
      echo $e->getMessage();
  }

}

$name = $_POST['name'];
$email = $_POST['email'];
$ip = $_SERVER["REMOTE_ADDR"];
$date = "";

RegisterLead($connection, $name, $email, $ip, $date);
