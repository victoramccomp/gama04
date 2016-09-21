<!DOCTYPE html>
<html>
  <head>
        <?php include('header.php'); ?>
  </head>
  <body>
      <main>
        <?php include('menu-blog.php'); ?>
          <section class='blog' id="blog">
              <div class="container">
                  <div class="row" id="posts-blog">

                  </div>
                <a href="index.php" target="blank">
                    <button type="button" name="button" class='btn-form'>Quero participar da promoção!</button>
                </a>
              </div>

            </section>
      </main>

      <footer id="contato text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="app/image/logo.png" alt="logo" />
                </div>
                <div class="col-md-4 text-center text-contact">
                    <p>Contato:<br>contato@coolture.com.br</p>
                </div>
                <div class="col-md-4">
                      <a href="https://www.facebook.com/coolturebrasil" target="blank">
                          <img src="app/image/iconfacebook.png" alt="facebook" />
                      </a>
                      <a href="https://twitter.com/CooltureBrasil" target="blank">
                        <img src="app/image/icontwitter.png" alt="twitter" />
                      </a>
                      <a href="https://www.instagram.com/coolturebrasil/" target="blank">
                        <img src="app/image/iconinstagram.png" alt="instagram" />
                      </a>
                </div>
            </div>
        </div>

      </footer>
      <script type="text/javascript" src="app/js/jquery-3.1.0.min.js"></script>
      <script type="text/javascript" src="app/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="app/js/jquery.mask.min.js"></script>
      <script type="text/javascript" src="app/js/bootbox.min.js"></script>
      <script type="text/javascript" src="app/js/script.js"></script>
      <script type="text/javascript" src="app/js/app.js"></script>
      <script type="text/javascript" src="app/js/blog.js"></script>
      <script type="text/javascript">
        getAllPosts();
      </script>
  </body>
</html>
