/*||||||||||||||||||| LOADER SET UP |||||||||||||||||||| */

window.onload = function() {
    var contenedor = document.getElementById('loader');
   setTimeout(function(){
    contenedor.style.visibility = 'hidden';
    contenedor.style.opacity = '0';
   },2000);
}


/*|||||||||||||| WHAT I DO HOVER ON LINE ||||||||||||||||||*/

$("#iDo1").mouseenter(function(){
    $("#lineColor1").animate({width: '100%'})
})

$("#iDo1").mouseleave(function(){
    $("#lineColor1").animate({width: '25px'})
})

$("#iDo2").mouseenter(function(){
    $("#lineColor2").animate({width: '100%'})
})

$("#iDo2").mouseleave(function(){
    $("#lineColor2").animate({width: '25px'})
})

$("#iDo3").mouseenter(function(){
    $("#lineColor3").animate({width: '100%'})
})

$("#iDo3").mouseleave(function(){
    $("#lineColor3").animate({width: '25px'})
})

/*||||||||||||||||||| TO TOP BUTTON |||||||||||||||||*/

let topButton = document.getElementById("topBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction(){
    if(document.body.scrollTop > 20 || document.documentElement.scrollTop> 20){
        topButton.style.display = "block";
    }else{
        topButton.style.display = "none";
    }
}

function topFunction(){
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}