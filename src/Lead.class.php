<?php

require('Database.class.php');

class Lead{

    private $name;
    private $email;
    private $ip;
    private $register;
    private $answer;
    private $phone;
    private $genre;

    public function __set($var, $value){
          $this->$var = $value;
    }

    public function get($var){
          return $this->$var;
    }

    public function __construct() {
        $db = new Database();
        $this->db = $db;
    }

    function getAllLead(){
          $stmt = $this->db->query("SELECT name, email, answer,
                                    DATE_FORMAT(regtime,'%d/%m/%Y %Hh%i') AS regtime
                                    FROM Leads WHERE email IS NOT NULL ORDER BY regtime DESC");
          $leads = $this->db->result();
          $count = $this->db->rowCount();
          $this->db = null;//fechando a conexao

          $output = array('count' => $count);

          foreach ($leads as $lead) {
              $output[] = array(
                              "name" => $lead->name,
                              "email" => $lead->email,
                              "answer" => $lead->answer,
                              "regtime" => $lead->regtime
                            );
          }

          echo json_encode($output);
    }


}


?>
