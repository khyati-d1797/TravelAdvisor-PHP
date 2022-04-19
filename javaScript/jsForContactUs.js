$(document).ready(function(){
    "use strict";
    $("#submitForContactUs").click(function(){
        
        var name = $("#name").val();
        var email = $("#email").val();
        var country = $("#country").val();
        var feedback = $("#feedback").val();
        


        console.log(name);
        console.log(email);
        console.log(country);
        console.log(feedback);
        
        
        
        if(email!="" && feedback!="" && name!=""){
            $("#contactusFeedback").text(feedback);
            $("#contactUsFinalMsg").show(1000);
            $("#contactUsForm").hide(1000);
        }else{
            $("#err").text("Name, Email and feedback are mandatory");
        }
        
        
    });
   
    
});