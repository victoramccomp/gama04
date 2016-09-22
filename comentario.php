<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Poste um Comentário!</title>
    </head>
    <body>
        <div class="container">
            <form action="comentando.php" method="post"  class="form-lead">
                <div class="col-md-6">
                      <div class="form-group">
                           <label for="Idnome" class="name">Nome:</label>
                           <input type="text" id="Idnome" name="nome"  class='form-control required'> 
                           <br><br>      
                      </div>
                      <div class="form-group">
                           <label for="comentario" class="comentario">Comentário:</label>
                           <div id="comentario" class="resposta_feedback"></div>
                           <textarea name="mensagem" id="comentario" rows="8" cols="30" maxlength="140" class='required'></textarea>   
                      </div>
                      <br>   
                      <input type="submit" name="button" class='btn-form' value="Enviar">
                      <input type="reset" class='btn-form' value="Limpar">
            </form>
        </div>
</body>
</html>