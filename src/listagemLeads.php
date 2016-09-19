<?php

require_once "connection.php";
$connection = DBConnection();

function ListagemLeads($connection) {
    try {
        $sql  = "SELECT COUNT(Email) FROM Leads";

        $stmt = $connection->prepare($sql);
        $stmt->execute();

    }
    catch (PDOException $e) {
      echo $e->getMessage();
    }
}