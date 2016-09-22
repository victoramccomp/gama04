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


function loginFacebook(){
     FB.login(function(response) {
         if (response.authResponse) {
          console.log('Welcome!  Fetching your information.... ');
          FB.api('/me', function(response) {
            console.log(response);
            console.log('Good to see you, ' + response.name + '.');
          });
         } else {
          console.log('User cancelled login or did not fully authorize.');
         }
     }, {scope: 'email'});

}
