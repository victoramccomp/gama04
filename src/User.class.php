<?php

require('Database.class.php');

class User{

    private $name;
    private $email;
    private $password;
    private $db;

    public function __construct() {
          $db = new Database();
          $this->db = $db;
    }
    
    public function __set($var, $value){
          $this->$var = $value;
    }

    public function get($var){
          return $this->$var;
    }
    
    public function verificaLogin(){
			$stmt = $this->db->query("SELECT id, email, password from Users WHERE email=:email and password=:password");
            $stmt = $this->db->bind(':email', $this->email);
            $stmt = $this->db->bind(':password', $this->password);

            $user = $this->db->single();

            if(isset($user->id)){
                $output = array("type" => "true", "msg" => "Login efetuado com sucesso!");
            }else{
                $output = array("type" => "false", "msg" => "Usuário ou senha incorreto.");
            }
            echo json_encode($output);
	}