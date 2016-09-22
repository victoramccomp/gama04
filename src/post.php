<?php
ini_set('display_errors', false);
require('Post.class.php');

// pega a variavel POST que passamos no action do form
if (isset($_POST['action'])){
    $action = $_POST['action'];

// Verifica qual formulario foi submetido
    switch($action) {

        //se for setPost
        case "getAllPosts":{

              //Criando e Instanciando o objeto
              $post = new Post;

              //Buscando todos os posts
              $post->getAllPost();

            }
          break;
          case "setNewPost":{
              session_start();
              //Criando e Instanciando o objeto
              $post = new Post;

              //Atribuindo valores ao objeto
              $post->title = $_POST['title'];
              $post->post = $_POST['post'];
              $post->picture = $_FILES['picture'];
              $post->author = $_SESSION["user"];


              //chamando a funcao que faz o insert
              $post->setNewPost();

              }
          break;
          case "getSinglePost":{

              $post = new Post;
              $post->id = $_POST['id'];
              $post->getSinglePost();

              }
          break;
          default:
              echo "";
          break;

    }

}


?>
