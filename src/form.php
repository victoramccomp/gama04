<?php
$connection = DBConnection();

function RegisterLead($connection, $name, $email, $ip, $date){
  try {
    $sql  = "SELECT * FROM Leads";
    $stmt = $connection->prepare($sql);
    $stmt->execute();

    return $stmt;

  } catch (PDOException $e) {
      echo $e->getMessage();
  }

}

$name = $_POST['name'];
$email = $_POST['email'];
$ip = $_POST['email'];
$date = "";

RegisterLead($connection, $name, $email, $ip, $date);
