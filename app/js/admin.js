$(document).ready(function() {
    loaderContent();
    tinymce.init({ selector:'textarea' });

    $('#form-post').submit(function(event) {
        event.preventDefault();
        var post = new FormData();

        post.append('title', $("#title").val());
        post.append('capa', $('#capa')[0].files[0]);
        post.append('post', $('#post').val());
        post.append('action', 'setNewPost');

        $.ajax({
           url : '../src/post.php',
           type : 'POST',
           data : post,
           processData: false,
           contentType: false,
           success : function(data) {
                var post = jQuery.parseJSON(data);
                if(post.type == "true"){
                    bootbox.confirm(post.msg, function(conf) {
                        if(conf == true){
                            window.location.href = 'posts.php';
                        }
                    });
                }else{
                  bootbox.alert(post.msg);
                }


              }
        });

      });
});


function getAllPosts(){
    $.ajax({
          type: 'POST',
          url: '../src/post.php',
          data: { action: 'getAllPosts' },
          success:function(data){
            var posts = jQuery.parseJSON(data);

            if(posts == ""){
                var write = "<div class='wall'><h3>Nenhum Post cadastrado.</h3></div>";
                $('#content').html(write);

            }else{

                  var write = "";

                  $.each(posts, function(i, post) {
                      write += "<tr><td class='icon'><a href='#'><i class='fa fa-pencil-square-o fa-lg' aria-hidden='true'></a></td>";
                      write += "<td class='icon'><a href='#'><i class='fa fa-close fa-lg' aria-hidden='true'></a></td>";
                      write += "<td>"+post.title+"</td></tr>";
                  })


                  $('#content').append(
                      $("<table class='table table-striped' id='tb-posts'>").append(
                        $("<thead>").append(
                          $("<tr>").append(
                            $("<th colspan='2'>").text('#'),
                            $("<th>").text('Post')
                          )
                        ),
                        $("<tbody>").html(write)
                      )
                    );

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
