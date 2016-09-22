<!DOCTYPE html>
<html>
  <head>

      <?php include('header.php'); ?>

  </head>
  <body>
      <main>
          <?php include('menu.php'); ?>

          <section class='text-promotional text-center'>
              <p>
                Quer ganhar um vale-compras de <strong>R$200,00</strong> na <strong>FOREVER 21?</strong><br/>
                Vamos selecionar a <strong>MELHOR FRASE</strong> para o tema a seguir:
              </p>
          </section>

          <section class='form-question'>
              <div class="question text-center">
                  <p>
                    "Em uma frase, compartilhe o seu melhor conselho para quem<br>
                    nunca comprou roupa pela internet. Be creative! Be Cool!"
                  </p>
              </div>
              <div class="container">
                <p class='message'>

                </p>
              </div>
              <form class="form-lead" id="form" method="POST">


              <div class="container">
                   <label for="Idresp">Escreva sua frase aqui</label>
                   <div id="textarea_feedback" class="resposta_feedback"></div>
                   </br>
                   </br>
                   <textarea name="resp" id="answer" rows="8" cols="30" maxlength="140" class='required'></textarea>
                   </br>
                   </br>
                   <p>Ei! Não se esqueça de preencher essas informações abaixo para entrarmos em contato e anunciarmos o vencedor</p>
              </div>
                    <div class="container">
                        <div class="row form-group text-left">
                            <div class="col-md-6">
                                <div class="form-group" class = >
                                    <p id = "camposObrigatorios"></p>
                                    <label for="name">Nome</label><br>
                                    <input type="text" class='form-control required' id="name" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="name">Email</label><br>
                                    <input type="email" class='form-control required' id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="Idtelefone">Telefone (opcional)</label><br>
                                    <input type="text" class='form-control required' id="phone" name="telefone">
                                </div>
                                <div class="form-group">
                                    <label for="gene">Gênero</label><br>
                                      <div class="row">
                                          <div class="radio-genero">
                                            <input type="radio" name="genero" class="ipt-genero" checked value="1">
                                            <label for="Idmasculino">Masculino</label>
                                          </div>
                                          <div class="radio-genero">
                                            <input type="radio" name="genero" class="ipt-genero" value="2">
                                            <label for="Idfeminino">Feminino</label>
                                          </div>
                                          <div class="radio-genero">
                                            <input type="radio" name="genero" class="ipt-genero" value="3">
                                            <label for="Idoutro">Outros</label>
                                          </div>
                                      </div>
                                </div>
                                <input type="submit" name="button" class='btn-form' value="Enviar">
                                <a href="doc/regulamento.pdf" target="blank">
                                    <button type="button" name="button" class='btn-form'>Baixe o regulamento</button>
                                 </a>
                            </div>
                            <div class="col-md-6 criatividade text-center">
                                <span class='criatividade-title'>Sem criatividade agora? </span>
                                <p>
                                    Cadastre-se com o facebook e avisaremos sobre as próximas promoções do nosso site!!!
                                </p>
                                <button type="button" name="button" class='btn-facebook' onclick="sendFacebook()"><i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i> Cadastrar com o Facebook</button>
                            </div>
                       </div>

                </div>

                </form>
              </div>
          </section>
          <section class='about-us' id="sobre">
              <div class="container">
                <h2>Sobre a coolture</h2>
                <p>
                  A coolture entende que o seu estilo é único, assim como você.
                  Indo além das roupas e acessórios, seu lifestyle que te torna cool.<br>
                  Queremos mudar os conceitos da moda tradicional e, principalmente, te entender e cativar com conteúdo relevante,
                  <br>diversão, entretenimento, promoções e muita cooltura.<br><br>
                  <span>Preparem-se que a Coolture está chegando!</span>
                </p>
              </div>
          </section>

      </main>
      <?php include('scripts.php'); ?>
      <?php include('footer.php'); ?>


  </body>
</html>
