function nextImage(){
    var currPath = document.getElementById("mainImg").src.split("/");
    var curImgName = currPath[currPath.length-1];
    
    imgReset();
    if(curImgName == "Toronto1.jpg"){
        document.getElementById("mainImg").src = "images/Toronto2.jpg"
        borderChange(2);
    }else if(curImgName == "Toronto2.jpg"){
        document.getElementById("mainImg").src = "images/Toronto3.jpg"
        borderChange(3);
    }else if(curImgName == "Toronto3.jpg"){
        document.getElementById("mainImg").src = "images/s4.jpg"
        borderChange(4);
    }else if(curImgName == "s4.jpg"){
        document.getElementById("mainImg").src = "images/s5.jpg"
        borderChange(5);
    }else if(curImgName == "s5.jpg"){
        document.getElementById("mainImg").src = "images/s6.jpg"
        borderChange(6);
    }else if(curImgName == "s6.jpg"){
        document.getElementById("mainImg").src = "images/s1.jpg"
        borderChange(1);
    }
}



function prevImage(){
    var currPath = document.getElementById("mainImg").src.split("/");
    var curImgName = currPath[currPath.length-1];
    imgReset();
    if(curImgName == "s1.jpg"){
        document.getElementById("mainImg").src = "images/s6.jpg"
        borderChange(6);
    }else if(curImgName == "s2.jpg"){
        document.getElementById("mainImg").src = "images/s1.jpg"
        borderChange(1);
    }else if(curImgName == "s3.jpg"){
        document.getElementById("mainImg").src = "images/s2.jpg"
        borderChange(2);
    }else if(curImgName == "s4.jpg"){
        document.getElementById("mainImg").src = "images/s3.jpg"
        borderChange(3);
    }else if(curImgName == "s5.jpg"){
        document.getElementById("mainImg").src = "images/s4.jpg"
        borderChange(4);
    }else if(curImgName == "s6.jpg"){
        document.getElementById("mainImg").src = "images/s5.jpg"
        borderChange(5);
    }
}


function imgReset(){
    for(var i = 1; i<=6;i++){
        document.getElementById("imgX"+i).src = "images/s"+i+".jpg";
        document.getElementById("imgX"+i).style.borderColor="black";
        document.getElementById("imgX"+i).style.borderWidth="1px";
    }
}

function borderChange(x){
    var pick = document.getElementById("imgX"+x).style;
    pick.borderColor = "yellow";
    pick.borderWidth = "5px"
}

function pickImage1(){
    document.getElementById("mainImg").src = "images/s1.jpg"
    imgReset();
    borderChange(1);
    
}

function pickImage2(){
    document.getElementById("mainImg").src = "images/s2.jpg"
    imgReset();
    borderChange(2);
}

function pickImage3(){
    document.getElementById("mainImg").src = "images/s3.jpg"
    imgReset();
    borderChange(3);
}

function pickImage4(){
   document.getElementById("mainImg").src = "images/s4.jpg"
    imgReset();
    borderChange(4);
}

function pickImage5(){
    document.getElementById("mainImg").src = "images/s5.jpg"
    imgReset();
    borderChange(5);
}

function pickImage6(){
    document.getElementById("mainImg").src = "images/s6.jpg"
    imgReset();
    borderChange(6);
}




