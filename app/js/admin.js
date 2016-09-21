$(document).ready(function() {

    tinymce.init({ selector:'textarea' });

    $('#form-post').submit(function(event) {
        event.preventDefault();
        var post = new FormData();

        post.append('title', $("#title").val());
        post.append('capa', $('#capa')[0].files[0]);
        post.append('post', $('#post').val());
        post.append('action', 'getAllPosts');

        $.ajax({
           url : '../src/post.php',
           type : 'POST',
           data : post,
           processData: false,
           contentType: false,
           success : function(data) {
               console.log(data);

              }
        });

      });
});
