$(document).ready(function(){
   "use strict";
    $("#subSubmit").click(function(){
        if($("#subEmail").val()!=""){
            $("").insertAfter("#subSubmit");
            $("<p id='SubToHide' style='color:yellow;'>You have been subscribed</p>").insertAfter("#subSubmit");
            $("#SubToHide").hide(10000);
        }else{
            $("<p id='SubToHide' style='color:red;'>Please enter email first</p>").insertAfter("#subSubmit");
            $("#SubToHide").hide(5000);
        }
        
    });
});


