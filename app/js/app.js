$(document).ready(function() {
    $('#form').submit(function(event) {
        event.preventDefault();
        var name = $("#name").val();
        var email = $("#email").val();
        var answer = $("#answer").val();
        var phone = $("#phone").val();
        var genre = $(".ipt-genero:checked").val();

        var isValid = true;

        $(".required").removeClass("error");

        $(".message").html("");

        if(answer == ""){
          $("#answer").addClass('error');
          bootbox.alert("Necessário responder a questão.");
          return false;
        }


          if(name == ""){
            isValid = false;
            $("#name").addClass('error');
            bootbox.alert("Necessário preencher com o Nome.");
            $("#camposObrigatorios").css("color", "red");
            return false;
          }

          if(email == ""){
            isValid = false;
            $("#email").addClass('error');
            bootbox.alert("Necessário preencher com o Email");
            $("#camposObrigatorios").html("Preencha os campos que estão em vermelho");
            return false;
          }


          if(email != "" && !checkEmail(email)) { // VALIDANDO O EMAIL COM REGEX
              isValid = false;
              $("#email").addClass('error');
              bootbox.alert("Esse endereço de Email é inválido");
              return false;
          }

          if(email != "" && name != "" && answer != ""){
		              $("#camposObrigatorios").html("");
	        }

          if(isValid == true){
                $.ajax({
                  type: 'POST',
                  url: 'src/form.php',

                  data: { name: name, email: email, answer: answer, phone: phone, genre:genre },
                  success:function(data){
                      var msg = jQuery.parseJSON(data);

                    if(msg.type == "true"){
                      bootbox.alert(msg.message);
                      $("#name").val("");
                      $("#email").val("");
                      $("#answer").val("");
                      $("#phone").val("");
                    }else{
                      bootbox.alert(msg.message);
                    }

                  },
                  error:function(xhr, status, error){
                    var err = eval("(" + xhr.responseText + ")");
                    bootbox.alert('Não foi possível efetuar o cadastro.');

                  }
                });

          }

    });

});
