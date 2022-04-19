$(document).ready(function(){
    "use strict";
    var emailIsFine = 0;
    $("#subEmail").keydown(function(){
        var email = $(this).val();
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        console.log(email);
        if(!regex.test(email)) {
            emailIsFine = 0;
            $("#footEMailIdGood").text("");
        }else{
            emailIsFine = 1;
            $("#footEMailIdGood").text("Email looks good");
        }
        
    });
    
    
    
   
    
});