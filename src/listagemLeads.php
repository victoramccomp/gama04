<?php

require_once "connection.php";
$connection = DBConnection();

function ListagemLeads($connection) {
    try {
        $stmt = $connection->prepare("SELECT name, email, answer, regtime FROM Leads");

        $stmt->execute();
        $totalLeads = 0;
        
        echo "<table><tr>" .
             "<th><strong>Nome</strong></th>" .
             "<th><strong>Resposta</strong></th>" .
             "<th><strong>Horário</strong></th></tr>";

        while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $totalLeads++;
            echo "<tr>" .
                 "<td>{$linha['name']}</td>" .
                 "<td>{$linha['answer']}</td>" .
                 "<td>{$linha['regtime']}</td>" .
                 "</tr>";
        }
        echo "</table></br>";
        echo "<h1><strong>TOTAL DE LEADS: " . $totalLeads . "</strong></h1>";

    }
    catch (PDOException $e) {
      echo $e->getMessage();
    }
}

ListagemLeads($connection);