<!DOCTYPE html>
<html>
  <head>
    <?php include('header.php'); ?>
  </head>
  <body>
    <main>
        <div class="container-fluid">
              <?php include('sidebar.php'); ?>
                <div class="container container-admin">
                  <h2>Posts</h2>
                  <div class="row">
                    <div class="col-md-2">
                      <a href="create-post.php">
                        <button type="button" name="button" class='btn btn-primary-admin'>
                           <i class="fa fa-plus" aria-hidden="true"></i> Novo Post
                         </button>
                      </a>
                    </div>
                  </div>
                  <br/>

                  <div id="content" class="table-responsive">

                  </div>
                

                </div>

        </div>



    </main>

    <?php include('scripts.php'); ?>
    <script type="text/javascript">
        getAllPosts();
    </script>

  </body>
</html>
