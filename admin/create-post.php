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
                    <h2>Novo Post</h2>
                        <form class="form-admin" method="POST" id="form-post">
                            <div class="form-post">
                                <div class="form-group">
                                  <label for="title">Titulo: </label>
                                  <input type="text" name="title" placeholder="Digite o titulo." id="title" class="form-input">
                                </div>
                                <div class="form-group">
                                  <label for="title">Capa: </label><br>
                                  <input type="file" name="capa" id="picture" class="form-input">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="post">Post: </label><br>
                                    <textarea name="post" id="post"></textarea>
                                </div>
                                <br>
                                <button type="submit" name="button" class='btn btn-primary-admin'>Enviar</button>
                            </div>
                        </form>
                  </div>
          </div>
    </main>


    <?php include('scripts.php'); ?>
    <script type="text/javascript">
    $(document).ready(function() {

        tinymce.init({ selector:'#post' });

      });
    </script>
  </body>
</html>
