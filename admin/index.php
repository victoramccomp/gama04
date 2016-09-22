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
                  <h2>Leads</h2>
                  <h3 id="countLeads"></h3>
                  <div class="table-responsive">
                      <table class="table table-striped" id="tblLeads">
                        <thead>
                          <tr>
                            <th>Email</th>
                            <th>Nome</th>
                            <th>Resposta</th>
                            <th>Data</th>
                          </tr>
                        </thead>
                        <tbody>

                        </tbody>
                      </table>
                    </div>
                </div>



        </div>

        <?php include('scripts.php'); ?>
        <script type="text/javascript">
          getAllLead();
        </script>


    </main>
  </body>
</html>
