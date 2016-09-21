function loaderContent(type){

    if(type == "init"){
        $(".container-admin").append('<div class="bg-loader"><div class="loader-admin">Loading...</div></div>');
        $(".btn-primary-admin").prop('disabled', true);
    }else{
        $(".bg-loader").fadeOut();
        $(".btn-primary-admin").prop('disabled', false);
    }
}
