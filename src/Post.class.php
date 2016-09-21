<?php

require('Database.class.php');
require('UploadImage.class.php');

class Post{

    private $title;
    private $post;
    private $picture;
    private $db;
    private $id;

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
          $stmt = $this->db->query("SELECT id, title, post, author_id, DATE_FORMAT(date_Posted,'%d/%m/%Y %Hh%i') AS posted FROM Posts ORDER BY date_Posted");
          $posts = $this->db->result();

          $output = array();
          foreach ($posts as $post) {
              $output[] = array(
                              "id" => $post->id,
                              "title" => $post->title,
                              "post" => $post->post,
                              "posted" => $post->posted
                            );
          }

          echo json_encode($output);
    }


    function setNewPost(){
       
          if(isset($this->picture)){
              $upload = new UploadImage();
              $upload->file = $this->picture;
              $this->picture = $upload->save();
          }

          $stmt = $this->db->query("INSERT INTO Posts(title, author_id, date_Posted, picture)
                                      VALUES(:title, :post, 1, NOW(), :picture)");
          $stmt = $this->db->bind(':title', $this->title);
          $stmt = $this->db->bind(':post', $this->post);
          $stmt = $this->db->bind(':picture', $this->picture);

          if($this->db->execute()){
              $output = array("type" => "true", "msg" => "Seu post foi cadastrado (:");
          }else{
              $output = array("type" => "false", "msg" => "Não foi possível cadastrar seu post ):");
          }

          echo json_encode($output);
    }

    function getSinglePost(){
        $stmt = $this->db->query("SELECT id, title, picture, post, author_id, DATE_FORMAT(date_Posted,'%d/%m/%Y %Hh%i') AS posted FROM Posts WHERE id = :id");
        $stmt = $this->db->bind(':id', $this->id);
        $post = $this->db->single();

        $output = array(
                            "id" => $post->id,
                            "title" => $post->title,
                            "picture" => $post->picture,
                            "post" => $post->post,
                            "posted" => $post->posted
                          );

        echo json_encode($output);

    }



}


?>
