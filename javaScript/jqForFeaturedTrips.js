$(document).ready(function(){
    "use strict";
    
    
    
    
    
    $(".ftrip").dblclick(function(){
        $(".fTripSlideDown").slideUp();
        console.log("doubleClick Working");
        $(this).find(".fTripSlideDown").slideDown();
    });
    
    
    
    
    
    $(".fTripSlideDown").click(function(){
        console.log("doubleClick Working");
        $(this).slideUp();
    });
    
    
    
});

