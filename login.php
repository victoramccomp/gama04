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
    <script>

      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-84283899-2', 'auto');
      ga('send', 'pageview');

    </script>
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
               <form class="form-login" id="login" method="POST">
                    <div class="container">
                        <div class="form-group">
                            <div class="col-md-12">
                                <h3>LOGIN</h3><br>
                            </div>
                            <div class="col-md-12">
                                <label for="idUser">Usuário: </label>
                                <input type="text" class='form-control required' id="idUser" name="user">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="idSenha">Senha: </label>
                                <input type="password" class='form-control required' id="idSenha" name="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                    <input type="submit" name="button" class='btn-form' value="Enviar">
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
                    <img src="app/image/logo.png" alt="logo" />
                </div>
           </div>
        </div>                   
      <script type="text/javascript" src="app/js/jquery-3.1.0.min.js"></script>
      <script type="text/javascript" src="app/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="app/js/bootbox.min.js"></script>
      <script type="text/javascript" src="app/js/script.js"></script>
      <script type="text/javascript" src="app/js/app.js"></script>
      <script type="text/javascript" src="app/js/login.js"></script>
      <script type="text/javascript">
            verificarLogin();
      </script>

  </body>
</html>
