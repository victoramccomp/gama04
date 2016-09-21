<?php

require('Database.class.php');

class Post{

    private $title;
    private $post;

    public function __set($var, $value){
          $this->$var = $value;
    }

    public function get($var){
          return $this->$var;
    }

    function getAllPost(){
          $database = new Database();
          $stmt = $database->query("SELECT title, post, author_id, date_Posted FROM Posts");
          $stmt = $database->execute();
          $stmt = $database->result();

          return var_dump($stmt);
    }

    function setNewPost(){
          $database = new Database();
          $stmt = $database->query("SELECT title, post, author_id, date_Posted FROM Posts");
          $stmt = $database->execute();
          $stmt = $database->result();

          return var_dump($stmt);
    }





}


?>
