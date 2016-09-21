<?php

require('Database.class.php');

class Post{

    private $title;
    private $post;
    private $db;

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

    function getAllPost(){
          $stmt = $this->db->query("SELECT title, post, author_id, date_Posted FROM Posts ORDER BY date_Posted");
          $posts = $this->db->result();

          $output = array();
          foreach ($posts as $post) {
              $output[] = array(
                              "title" => $post->title,
                              "post" => $post->post
                            );
          }

          echo json_encode($output);
    }

/*
    function setNewPost(){
          $database = new Database();
          $stmt = $database->query("SELECT title, post, author_id, date_Posted FROM Posts");
          $stmt = $database->execute();
          $stmt = $database->result();

          return var_dump($stmt);
    }
    */





}


?>
