<?php

require_once "connection.php";
$connection = DBConnection();

function ListagemLeads($connection) {
    try {
        $stmt = $connection->prepare("SELECT Count(email) as leads FROM Leads");
        $stmt->execute();
        $totalLeads = $stmt->fetch(PDO::FETCH_OBJ);
        echo "<h1><strong>TOTAL DE LEADS: " . $totalLeads->leads . "</strong></h1>";

    }
    catch (PDOException $e) {
      echo $e->getMessage();
    }
}

ListagemLeads($connection);
