function buildTrip(){
    var finalPriceTotal = parseInt(0);
    var destString = "";
    var finalDates = "No Dates Chosen!";
    var finalHotel = "";
    document.getElementById("final-price").innerHTML = "";
    
    for(var i=1;i<=2;i++){
        if(document.getElementById("des"+i).checked){
            var temp = document.getElementById("des"+i).value.split("::");
            if(destString.length==0){
                destString = "List Of Sub Destinations you will visit are "
                destString+=(""+temp[0]);
            }else{
                destString+=(", "+temp[0]);
            }
            finalPriceTotal+=parseInt(temp[1]);
        }
    }
    var tempFromDate = document.getElementById("fromDate").value;
    var tempToDate = document.getElementById("toDate").value;
    if(tempFromDate && tempToDate){
        if(tempFromDate < tempToDate){
            finalDates="Your trip is from "+tempFromDate+" to "+tempToDate;
            var diff = tempToDate - tempFromDate;
            var date1 = new Date(tempFromDate);
            var date2 = new Date(tempToDate);
            var difference_In_Time = date2.getTime() - date1.getTime();
            var difference_In_Days = difference_In_Time / (1000 * 3600 * 24);
            finalPriceTotal += parseInt((difference_In_Days)*70);
            var dayStr = "<span class='glyphicon glyphicon-time'></span> "+(difference_In_Days+1)+" Days and "+(difference_In_Days)+" Nights";
            document.getElementById("final-days-and-nights").innerHTML = dayStr;
        }
        else window.alert("To date can not be less than From date.")
    }
    
    for(var i=1;i<=3;i++){
        var temp = document.getElementById("hotel"+i);
        if(temp.checked){
            var arr = temp.value.split("::");
            finalHotel+="You will be staying at "+arr[0];
            finalPriceTotal+=parseInt(arr[1]);
        }
    }
    
    var stops = 0;
    for(var i=1;i<=10;i++){
        var temp = document.getElementById("tm"+i);
        if(temp.checked){
            stops++;
            var val = temp.value;
            finalPriceTotal+=parseInt(val);
        }
    }
    
    
    
    document.getElementById("final-price").innerHTML = "Bill for your package is $"+finalPriceTotal;
    document.getElementById("final-destination").innerHTML = destString;
    document.getElementById("final-dates").innerHTML = finalDates;
    document.getElementById("final-hotel").innerHTML = finalHotel;
    if(stops !=0)
    document.getElementById("final-mini-stops").innerHTML = "You will have "+stops+" stops each day";
    
    
    
}


function reset(){
    console.log("something selected")
    document.getElementById("final-price").innerHTML = "All clear. Now you can build your trip!";
    document.getElementById("final-destination").innerHTML = "";
    document.getElementById("final-dates").innerHTML = "";
    document.getElementById("final-hotel").innerHTML = "";
    document.getElementById("final-mini-stops").innerHTML = "";
    document.getElementById("final-days-and-nights").innerHTML = "";
    
    for(var i=1;i<=10;i++){
        var temp = document.getElementById("tm"+i);
        temp.checked = false;
    }
    
    for(var i=1;i<=2;i++){
        document.getElementById("des"+i).checked = false;
    }
    
    document.getElementById("fromDate").value="";
    document.getElementById("toDate").value="";
    
}

function destSelected(x){
    var temp = document.getElementById("dest-card-"+x);
    var color = temp.style.backgroundColor;
    console.log(color === "grey");
    if(color === "grey"){
        console.log("setting white");
        temp.style.backgroundColor="white";
    }else{
        console.log("setting grey");
        temp.style.backgroundColor="grey";
    }

    // console.log("destination selected");
    // for(var i=1;i<=5;i++){
    //         document.getElementById("dest-card-"+i).style.backgroundColor="white";
    // }
    // for(var i=1;i<=5;i++){
    //     if(i==x){
    //         var temp = document.getElementById("dest-card-"+i);
    //         temp.style.backgroundColor="grey";

    //     }
        
    // }
}



function hotelSelected(x){
    console.log("hotel selected");
    for(var i=1;i<=3;i++){
            document.getElementById("hotel-card-"+i).style.backgroundColor="white";
    }
    for(var i=1;i<=3;i++){
        if(i==x){
            var temp = document.getElementById("hotel-card-"+i);
            temp.style.backgroundColor="grey";
        }
        
    }
}



$(document).ready(function(){
    $("#genTrip").click(function(){
        $(".finalItinerary").show(500);
    });
    
});