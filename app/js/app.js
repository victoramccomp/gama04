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
          $(".message").html("Campo Obrigatório");
          //return false;
        }else {
 	  $("#answer").removeClass('error');
	}


          if(name == ""){
            $("#name").addClass('error');
            $("#camposObrigatorios").html("Preencha os campos que estão em vermelho");
            $("#camposObrigatorios").css("color", "red");
            //return false;
          } else {
 	    $("#name").removeClass('error');

	 }

          if(email == ""){
            $("#email").addClass('error');
            $(".message").html("Campo Obrigatório");
            $("#camposObrigatorios").html("Preencha os campos que estão em vermelho");
            //return false;
          }else {
 	    $("#email").removeClass('error');
     
	  }


          if(email != "" && !checkEmail(email)) { // VALIDANDO O EMAIL COM REGEX
              isValid = false;
              $("#email").addClass('error');
              $(".message").html("Esse endereço de e-mail é inválido");
              //return false;
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
                      $(".form-lead").html('<div class="well well-lg text-center"><h2>'+msg.message+'</h2></div>');
                    }else{
                      $(".message").html(msg.message);
                    }

                  },
                  error:function(xhr, status, error){
                    var err = eval("(" + xhr.responseText + ")");
                    $('.message').html('Não foi possível efetuar o cadastro.');

                  }
                });
           
          }

    });

});
