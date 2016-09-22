<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url" content="http://coolture.com.br">
    <meta property="og:image" content="http://coolture.com.br/app/image/descface.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="600">
    <img src="app/image/descface.jpg" alt="descface" class="invisible"/>
    <link rel="shortcut icon" type="image/x-icon" href="app/image/favicon.ico">
    <title>Coolture</title>
    <link rel="stylesheet" href="app/bootstrap/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="app/font-awesome-4.6.3/css/font-awesome.min.css" media="screen">
    <link rel="stylesheet" href="app/css/form.css" media="screen">
  </head>
  <body>
      <main>
          <div class="nav-main" id="home">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12">
                          <img src="app/image/logo.png" alt="Logo" class="logo"/>
                      </div>
                      <div class="nav-icon">
                          <i class="fa fa-bars" aria-hidden="true"></i>
                      </div>

                  </div>
              </div>
          </div>
          <section class='login-blog' id="loginBlog">
               <form class="form-login" action="src/Auth.php" id="login" method="POST">
                    <div class="container">
                            <div class="col-md-6 col-md-offset-3">
                                <h3>LOGIN</h3><br>
                                <?php
                                    if($_GET['auth'] == 'error'){
                                        echo "<div class='alert alert-danger'>";
                                        echo "O nome de usuário e a senha fornecidos não correspondem às informações em nossos registros. <br>";
                                        echo "<strong>Verifique-as e tente novamente.</strong>";
                                        echo "</div>";
                                    }else if($_GET['auth'] == 'session'){
                                        echo "<div class='alert alert-danger'>";
                                        echo "Sua sessão expirou. <br>";
                                        echo "<strong>Efetue o login para continuar navegando.</strong>";
                                        echo "</div>";
                                    }

                                 ?>

                            <div class="form-group">
                                <label for="idUser">Email: </label>
                                <input type="text" class='form-control required' id="idUser" name="email">
                            </div>
                        <div class="form-group">

                                <label for="idSenha">Senha: </label>
                                <input type="password" class='form-control required' id="idSenha" name="password">

                        </div>
                        <div class="form-group">
                                  <input type="submit" name="button" class='btn-form' value="Entrar">
                        </div>
                        </div>
                    </div>
          </section>
      </main>
       </form>
       <footer id="contato text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                </div>
           </div>
        </div>
      <?php include('scripts.php'); ?>
      <script type="text/javascript" src="app/js/login.js"></script>


  </body>
</html>
