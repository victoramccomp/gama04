<?php

ini_set('display_errors', false);
require('User.class.php');

// pega a variavel POST que passamos no action do form
if (isset($_POST['action'])){
    $action = $_POST['action'];

// Verifica qual formulario foi submetido
    if($action == 'verificarLogin') {

        //Criando e Instanciando o objeto
        $user = new User;
        $user->email = $_POST['email'];
        $user->password = $_POST['password'];

        //Buscando todos os posts
        $user->verificarLogin();

    }else{
        echo "";
    }
}

?>
