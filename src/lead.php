<?php
ini_set('display_errors', 1);
require_once "Lead.class.php";

if (isset($_REQUEST['action'])){
    $action = $_REQUEST['action'];

// Verifica qual formulario foi submetido
  switch($action) {

        case "getAllLead":{
              $lead = new Lead;
              $lead->getAllLead();

            }
          break;
          default:
              echo "";
          break;

    }

}


?>
