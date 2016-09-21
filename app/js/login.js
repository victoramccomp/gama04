function verificarLogin(){

    $.ajax({
          type: 'POST',
          url: 'src/login.php',
          data: { action: 'verificarLogin' },
          success:function(data){
            var user = jQuery.parseJSON(data);
            console.log(user);
            if(user == ""){
                setTimeout("window.location='login.php'",5000);
            }else{
                setTimeout("window.location='posts.php'",5000);
            }

          },
          error:function(request, error) {
                if (request.status==0) {
                    console.log('You are offline!!\n Please Check Your Network.');
                } else if(request.status==404) {
                    console.log('Requested URL not found.');
                } else if(request.status==500) {
                    console.log('Internel Server Error.');
                } else if(error=='parsererror') {
                    console.log('Error.\nParsing JSON Request failed.');
                } else if(error=='timeout'){
                    console.log('Request Time out.');
                } else {
                    console.log('Unknow Error.\n'+request.responseText);
                }
          }
    });
}


