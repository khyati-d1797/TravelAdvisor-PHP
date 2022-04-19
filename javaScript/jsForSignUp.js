$(document).ready(function(){
    "use strict";
    $("#submitSignup").click(function(){
        
        var fName = $("#fNameId").val();
        var lName = $("#lNameId").val();
        var dob = $("#dobId").val();
        var email = $("#eMailId").val();
        var phNo = $("#phNoId").val();
        var psswd = $("#passwd").val();
        var psswd2 = $("#passwd2").val();


        console.log(fName);
        console.log(lName);
        console.log(dob);
        console.log(email);
        console.log(phNo);
        console.log(psswd);
        console.log(psswd2);
        
        var ok = 1;
        
        $("#fNameIdErr").text("");
        $("#lNameIdErr").text("");
        $("#dobIdErr").text("");
        $("#eMailIdErr").text("");
        $("#phNoIdErr").text("");
        $("#passwdErr").text("");
        $("#passwd2Err").text("");
        
        if(fName==""){
            $("#fNameIdErr").text("First Name can't be empty");
            ok=0;
        }
        if(lName==""){
            $("#lNameIdErr").text("Last name can't be empty");
            ok=0;
        }
        if(dob==""){
            $("#dobIdErr").text("Date of birth can't be empty");
            ok=0;
        }
        if(email==""){
            $("#eMailIdErr").text("Email can't be empty");
            ok=0;
        }
        if(phNo=="" || phNo.length<10){
            $("#phNoIdErr").text("Phone number can't be empty or less than 10 digits");
            ok=0;
        }
        if(psswd==""){
            $("#passwdErr").text("Password can't be empty");
            ok=0;
        }
        if(psswd2==""){
            $("#passwd2Err").text("Repeat password can't be empty");
            ok=0;
        }
        
        if(psswd2!=psswd || psswd.length<8){
            $("#passwd2Err").text("Password missmatch or lenth less than 8");
            ok=0;
        }
        
        if(ok==1){
            window.location.href='signedUpSuccess.html';
        }
        
    });
    
    var emailIsFine = 0;
    
    $("#eMailId").keydown(function(){
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