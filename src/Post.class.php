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
          $stmt = $this->db->query("SELECT id, title, post, author_id, date_Posted FROM Posts ORDER BY date_Posted");
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


    function setNewPost(){
          $stmt = $this->db->query("INSERT INTO Posts(title, post, author_id, date_Posted)
                                      VALUES(:title, :post, 1, NOW())");
          $stmt = $this->db->bind(':title', $this->title);
          $stmt = $this->db->bind(':post', $this->post);

          if($this->db->execute()){
              $output = array(type=> "true", msg => "Seu post foi cadastrado (:");
          }else{
              $output = array(type=> "false", msg => "Não foi possível cadastrar seu post ):");
          }

          echo json_encode($output);
    }



}


?>
