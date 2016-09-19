function listagemLeads() {
  $.ajax({
        type: 'GET',
        url: 'src/listagemLeads.php',
        success: function(data){
          if(data)
            $("#leads").html(data);
        },
        error: function(xhr, status, error){
          var err = eval("(" + xhr.responseText + ")");
          $('.message').html('Não foi possível realizar listagem');
        }
      });
}

listagemLeads();