<!DOCTYPE html>
<html>
  <head>
        <?php include('header.php'); ?>
  </head>
  <body>
      <main>
        <?php include('menu-blog.php'); ?>

          <section class='post-blog' id="post">
              <div class="container">
                  <div id="post-blog">
                      <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                              <h1 id="post-title"></h1>
                              <br/>
                              <span id="post-posted"></span>
                              <br/>
                              <div id="post-picture">

                              </div>
                              <div id="post-content">

                              </div>
                            </div>
                      </div>
                  </div>
              </div>

            </section>
      </main>
      <?php include('scripts.php'); ?>
      <script type="text/javascript">
        getSinglePost(<?=$_GET['post']?>);
      </script>


      <?php include('footer.php'); ?>



  </body>
</html>
