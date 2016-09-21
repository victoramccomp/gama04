<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $conexao = mysql_connect($host,$user, $pass) or die (mysql_error());
    mysql_select_db($banco) or die(mysql_error());
?>

<html>
    <head>
        <title>Autenticado usuário</title>
        <script type ="text/javascript">
            function loginsuccessfully(){
                setTimeout("window.location='painel.php'", 5000);
            }
            function loginfailed(){
                setTimeout("window.location='login.php'", 5000);
            }
        </script>    
    </head>
    <body>           
        <?php
            $email=$_POST['email'];
            $senha=$_POST['senha'];
            $sql = mysql_query("SELECT * FROM -tabela- WHERE email = '$email' and senha='$senha'") or die(mysql_error());
            $row = mysql_num_rows($sql);
            if($row>0){
                session_start();
                $_SESSION['email']=$_POST['email'];
                $_SESSION['senha']=$_POST['senha'];
                echo "Você foi autenticado com sucesso!";
                echo "<script>loginsuccessfully()</script>";
            }else{
                echo "<center>Nome do usuário ou senha inválido</center>"
                echo "<script>loginfailed</script>"
            }
        ?>
     </body>
</html>