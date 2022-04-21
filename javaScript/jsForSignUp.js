$(document).ready(function(){
    "use strict";
    $("#submitSignup").click(function(){
        
        var uName = $("#uname").val();
        var email = $("#email").val();
        var psswd = $("#pass").val();
        var psswd2 = $("#pass2").val();
        var address = $("#address").val();


        console.log(uName);
        console.log(email);
        console.log(psswd);
        console.log(psswd2);
        console.log(address);
        
        var ok = 1;
        
        $("#uNameIdErr").text("");
        $("#eMailIdErr").text("");
        $("#passwdErr").text("");
        $("#passwd2Err").text("");
        $("#addressErr").test("");
        if(uName==""){
            $("#uNameIdErr").text("User Name can't be empty");
            ok=0;
        }
        if(email==""){
            $("#eMailIdErr").text("Email can't be empty");
            ok=0;
        }
        if(pass==""){
            $("#passwdErr").text("Password can't be empty");
            ok=0;
        }
        if(pass2==""){
            $("#passwd2Err").text("Repeat password can't be empty");
            ok=0;
        }
        
        if(pass2!=pass || pass.length<8){
            $("#passwd2Err").text("Password missmatch or lenth less than 8");
            ok=0;
        }
        
        if(ok==1){
            window.location.href='signedUpSuccess.html';
        }
        
    });
    
    var emailIsFine = 0;
    
    $("#email").keydown(function(){
        var email = $(this).val();
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        console.log(email);
        if(!regex.test(email)) {
            emailIsFine = 0;
            $("#eMailIdGood").text("");
        }else{
            emailIsFine = 1;
           
            $("#eMailIdGood").text("Email look good");
        }
        
    });
    
    
    
   
    
});