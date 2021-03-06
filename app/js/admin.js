$(document).ready(function() {


});

function setNewPost(){
    loaderContent('init');

    var contentPost = tinyMCE.get('post').getContent();
    var post = new FormData();

    post.append('title', $("#title").val());
    post.append('picture', $('#picture')[0].files[0]);
    post.append('post', contentPost);
    post.append('action', 'setNewPost');

    $.ajax({
       url : '../src/post.php',
       type : 'POST',
       data : post,
       contentType: false,
       processData: false,
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
            loaderContent();

          }
    });

};


function getAllPosts(){

  loaderContent('init');
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

                  var itens = "";
                  var table = "<table class='table table-striped' id='tb-posts'>";
                      table += "<thead><tr><th colspan='2'>#</th><th>Post</th></tr></thead>";
                      table += "<tbody></tbody>";
                      table += "</table>";
                      $('#content').html(table);

                  $.each(posts, function(i, post) {
                        itens = "";
                        itens += "<tr><td class='icon'><a href='#'><i class='fa fa-pencil-square-o fa-lg' aria-hidden='true'></a></td>";
                        itens += "<td class='icon'><a href='#'><i class='fa fa-close fa-lg' aria-hidden='true'></a></td>";
                        itens += "<td>"+post.title+"</td></tr>";
                        $('#tb-posts tbody').append(itens);
                  });

            }

            loaderContent();

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




function getAllLead(){

    $.ajax({
      type: 'GET',
      url: '../src/lead.php',
      data:"action=getAllLead",
      success: function(data){
          var leads = jQuery.parseJSON(data);
          $("#countLeads").html("TOTAL DE LEADS: "+leads.count);
          var line;

          $.each(leads, function(i, lead) {
              line = "<tr><td>"+lead.email+"</td><td>"+lead.name+"</td><td>"+lead.answer+"</td><td>"+lead.regtime+"</td></tr>";
              $("#tblLeads tbody").append(line);
          });

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
