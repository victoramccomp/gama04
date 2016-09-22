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

    public function verificarLogin(){
			   $stmt = $this->db->query("SELECT id, token, email, password from Users WHERE email=:email and password = MD5(CONCAT(:password, Salt))");
            $stmt = $this->db->bind(':email', $this->email);
            $stmt = $this->db->bind(':password', $this->password);
            $user = $this->db->single();

            if(isset($user->token)){
                return $user->id;
            }else{
                return false;
            }

	}
}
?>
