<?php
  //Arquivo utilizando para verificar se o usuário existe para login
  session_start();

  require('User.class.php');
  $user = new User;

  $user->email = $_POST['email'];
  $user->password = $_POST['password'];

  $logado = $user->verificarLogin();

  if($logado == false){
      header("location: ../login.php?auth=error");
  }else{

      $_SESSION["logado"] = true;
      $_SESSION["user"] = $logado;
      header("location: ../admin");
  }



?>
