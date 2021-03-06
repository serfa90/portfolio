/*||||||||||||||||||| LOADER SET UP |||||||||||||||||||| */

window.onload = function() {
    var container = document.getElementById('loader');
   setTimeout(function(){
    container.style.visibility = 'hidden';
    container.style.opacity = '0';
   },1000);
}

/*||||||||||||||||| MY INFO ||||||||||||||||||||*/
const serfa = {
    fullName: "Samuel Serfaty",
    emailAddress: "serfaty.samuel90@gmail.com",
    phoneNumber: "+5491131787512",
    profession: "Front-end Developer"
}

/*|||||||||||||||||||| HEADER INFO ||||||||||||||||||||||*/
var headerName = document.getElementById("title2").innerHTML = serfa.fullName;
var proffesion = document.getElementById("profession").innerHTML = serfa.profession;

/*|||||||||||||||||| ABOUT ME ||||||||||||||||||||*/
var fullName = document.getElementById("fullName").innerHTML = serfa.fullName;
var email = document.getElementById("email").innerHTML = serfa.emailAddress;
var phone = document.getElementById("phone").innerHTML = serfa.phoneNumber;

/*|||||||||||||| WHAT I DO HOVER ||||||||||||||||||*/

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


/*||||||||||||||||||||| FLIP CARD EFFECT ||||||||||||||||||||||||*/

const card1 = document.querySelector('#iDo1');

card1.addEventListener('click', function(){
    card1.classList.toggle('isFlipped');
})

const card2 = document.querySelector('#iDo2');

card2.addEventListener('click', function(){
    card2.classList.toggle('isFlipped');
})


const card3 = document.querySelector('#iDo3');

card3.addEventListener('click', function(){
    card3.classList.toggle('isFlipped');
})

/*||||||||||||||||| TAP HERE EFFECT ||||||||||||||||||||||||*/

$("#iDo1").mouseenter(function(){
    $("#tapHere1").show({display: 'block'})
})
$("#iDo1").click(function(){
    $("#tapHere1").hide()
})
$("#iDo1").mouseleave(function(){
    $("#tapHere1").hide()
})

$("#iDo2").mouseenter(function(){
    $("#tapHere2").show({display: 'block'})
})
$("#iDo2").click(function(){
    $("#tapHere2").hide()
})
$("#iDo2").mouseleave(function(){
    $("#tapHere2").hide()
})


$("#iDo3").mouseenter(function(){
    $("#tapHere3").show({display: 'block'})
})
$("#iDo3").click(function(){
    $("#tapHere3").hide()
})
$("#iDo3").mouseleave(function(){
    $("#tapHere3").hide()
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

/*|||||||||||||| WHATSAPP BUTTON ||||||||||||*/

$("#whatsappBtn").mouseenter(function(){
    $("#wspImg").animate({width: '3.3em'})
})

$("#whatsappBtn").mouseleave(function(){
    $("#wspImg").animate({width: '3em'})
})