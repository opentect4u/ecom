$(document).ready(function(){

    // if(window.location.hostname === 'localhost'){
        var url = window.location.protocol+"//"+window.location.hostname+'/ecom/login';
    // }
    // else{
    //     var url = window.location.protocol+"//"+window.location.hostname+'/logins';        
    // }

    $('#login').click(function(){
        $.ajax({
            type: "GET",
            url: url,
            async: false
        }).done(function(res){
            $('login').html(res);
        });
    });

});