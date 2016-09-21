function loaderContent(type){
    if(type == "init"){
        $(".container-admin").append('<div class="loader-admin">Loading...</div>');
    }else{
        $(".loader-admin").fadeOut();
    }
}
