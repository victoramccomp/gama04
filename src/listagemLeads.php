<?php

require_once "connection.php";
$connection = DBConnection();

function ListagemLeads($connection) {
    try {
        $stmt = $connection->prepare("SELECT name, email FROM Leads");

        $stmt->execute();
        $totalLeads = 0;

        while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $totalLeads++;
            echo "<strong>Nome:</strong> {$linha['name']} | <strong>e-mail:</strong> {$linha['email']}<br />";
        }

        echo "<strong>Total de Leads: " . $totalLeads . "</strong>";

    }
    catch (PDOException $e) {
      echo $e->getMessage();
    }
}

ListagemLeads($connection);