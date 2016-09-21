function getAllPosts(){


    $.ajax({
          type: 'POST',
          url: 'src/post.php',
          data: { action: 'getAllPosts' },
          success:function(data){
            var posts = jQuery.parseJSON(data);

            if(posts == ""){
                var write = "<div class='wall'><h3>Nenhum Post cadastrado.</h3></div>";
                $('#posts-blog').html(write);

            }else{
                  var list = "";
                      $.each(posts, function(i, post) {
                        list += '<div class="col-md-12">';
                        list += '<h2 class="titulo">'+post.title+'</h2><br>';
                        list += '<p class="data" >'+post.posted+'</p></div>';
                        list += '<div class="postagem">';
                        list += '<div class="col-md-12"><p>'+post.post+'</p></div><div>';
                      });

                  $('#posts-blog').html(list);
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
