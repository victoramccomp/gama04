<?php
ini_set('display_errors', 1);


require('Post.class.php');
echo $_POST['action'];
// pega a variavel GET que passamos no action do form
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

              //Criando e Instanciando o objeto
              $post = new Post;

              //Atribuindo valores ao objeto
              $post->title = $_POST['title'];
              $post->post = $_POST['post'];

              //chamando a funcao que faz o insert
              $post->getAllPost();

              }
          break;

          default:
              echo "";
          break;

    }

}


?>
