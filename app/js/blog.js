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
                          list += '<a href="post.php?post='+post.id+'"><div class="post-blog-unit row">'
                          list += '<div class="col-md-8 col-md-offset-1">';
                          list += '<h2 class="titulo-blog text-left">'+post.title+'</h2></div><div class="col-md-2"><span class="text-right blog-posted">'+post.posted+'</span></div>';
                          list += '</div></div>';
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



function getSinglePost(id){
    $.ajax({
          type: 'POST',
          url: 'src/post.php',
          data: { action: 'getSinglePost', id: id},
          success:function(data){

            var post = jQuery.parseJSON(data);

            if(post.title == null){
                var write = "<div class='wall'><h3>Post não localizado.</h3></div>";
                $('#post-blog').html(write);

            }else{

              $("#post-title").html(post.title);
              $("#post-posted").html(post.posted);
              $("#post-content").html(post.post);

              if(post.picture != null){
                $("#post-picture").html("<img src='"+post.picture+"'>");
              }

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
