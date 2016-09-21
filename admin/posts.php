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
                  <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th colspan="2">#</th>
                            <th>Post</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><a href="#"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true" ></a></td>
                            <td><a href="#"><i class="fa fa-close fa-lg" aria-hidden="true"></i></a></td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                          </tr>
                          <tr>
                            <td><a href="#"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true" ></a></td>
                            <td><a href="#"><i class="fa fa-close fa-lg" aria-hidden="true"></i></a></td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                          </tr>
                          <tr>
                            <td><a href="#"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true" ></a></td>
                            <td><a href="#"><i class="fa fa-close fa-lg" aria-hidden="true"></i></a></td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                          </tr>
                          <tr>
                            <td><a href="#"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true" ></a></td>
                            <td><a href="#"><i class="fa fa-close fa-lg" aria-hidden="true"></i></a></td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                          </tr>
                          <tr>
                            <td><a href="#"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true" ></a></td>
                            <td><a href="#"><i class="fa fa-close fa-lg" aria-hidden="true"></i></a></td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                          </tr>

                        </tbody>
                      </table>
                    </div>
                </div>



        </div>




    </main>
  </body>
</html>
