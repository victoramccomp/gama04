window.fbAsyncInit = function() {
    FB.init({
      appId      : '659844010834245',
      xfbml      : true,
      version    : 'v2.7'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));


function setLeadFacebook(){
    FB.login(
            function(response) {
                if (response.authResponse) {
                   FB.api('/me', {fields: 'id,name,email'}, function(response) {
                      $.ajax({
                          type: 'POST',
                          url: 'src/form.php',

                          data: { name: response.name, email: response.email},
                          success:function(data){
                            var msg = jQuery.parseJSON(data);

                            if(msg.type == "true"){
                              bootbox.alert(msg.message);
                            }else{
                              bootbox.alert(msg.message);
                            }

                          },
                          error:function(xhr, status, error){
                            var err = eval("(" + xhr.responseText + ")");
                            bootbox.alert('Não foi possível efetuar o cadastro.');

                          }
                        });

                   });
                } else {
                    console.log('User cancelled login or did not fully authorize.');
                }
            },
            {scope:'email'}
            );
}
