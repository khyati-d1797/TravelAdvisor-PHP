$(document).ready(function(){
    "use strict";
    $("#part1").mouseover(function(){
        for(var i=2;i<9;i++){
            $("#part"+i).delay(300*(i-1)).show(500); 
        }       
    });
    
    
    
});