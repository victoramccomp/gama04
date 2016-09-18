function RegisterLead(){

  var name = $("#name").val();
  var email = $("#email").val();
  var isValid = true;

  $(".required").removeClass("error");

  $(".message").html("");

    if(name == ""){
      $("#name").addClass('error');
      $(".message").html("Campo Obrigatório");
      return false;
    }

    if(email == ""){
      $("#email").addClass('error');
      $(".message").html("Campo Obrigatório");
      return false;

    }

    if(!checkEmail(email)) {
        isValid = false;
        $("#email").addClass('error');
        $(".message").html("Esse endereço de e-mail é inválido");
        return false;
    }


    if(isValid == true){
      $.ajax({
            type: 'POST',
            url: 'src/form.php',

            data: { name: name, email: email },
            success:function(data){
              var msg = jQuery.parseJSON(data);
              
              if(msg.type == "true"){
                $(".content-center").html('<div class="well well-lg text-center"><h2>'+msg.message+'</h2></div>');
              }else{
                $(".message").html(msg.message);
              }

            },
            error:function(xhr, status, error){
              var err = eval("(" + xhr.responseText + ")");
                console.log(err.Message);
                  $('.message').html('Não foi possível efetuar o cadastro.');
            }
          });
    }

}



function checkEmail(emailAddress) {
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return pattern.test(emailAddress);
};
