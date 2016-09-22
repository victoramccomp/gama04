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
                  <div id="posts-blog">
                    <!-- <?php include('comentario.php'); ?> -->
                  </div>
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
        <?php include('scripts.php'); ?>



      <script type="text/javascript">
        getAllPosts();
      </script>
  </body>
</html>
