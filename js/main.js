$(function(){

"use strict";

/* *************************************************** */

// Start Owl Carousel

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:100,
    nav:true,
    responsive:{
        0:{
            items:4
        },
        600:{
            items:4
        },
        1000:{
            items:5
        }
    }
});


// End Owl Carousel

/* *************************************************** */

// Bootstrap Slider

$(".carousel-inner,.carousel-item").height($(window).height() - $(".header").height());

// Bootstrap Slider

/* *************************************************** */

// Slide Search Overlay On Seach Button Click

$(".fa-search").click(function(){

$(".search-overlay").slideDown();

});

$(".search-overlay span").click(function(){

$(".search-overlay").slideUp();


});

// Slide Search Overlay On Seach Button Click

/* *************************************************** */

// Start Scroll To Top Button

$(window).scroll(function(){

if( $(this).scrollTop() > 200 )

{
    $(".scroll-top").fadeIn();
}

else
{
    $(".scroll-top").fadeOut();
}
});


$(".scroll-top").click(function(e){

e.preventDefault();

$("html").animate({scrollTop:0},1000);

});


// End Scroll To Top Button


/* jRange */

$('.range-slider').jRange({
    from: 0,
    to: 1000,
    step: 1,
    scale: [0,1000],
    width:250,
    isRange : true
});

/* jRange */

// Add Fixed Class

$(window).scroll(function(){

if($(this).scrollTop() >= 40)
{
    $(".main-nav").addClass("fixed");    
}

else
{
    $(".main-nav").removeClass("fixed");    
}

});

// Add Fixed Class



// Add Active Class On Page Change

$(".nav-item .nav-link").each(function(){


    if( $(this).html() == $("title").html() )
    {
        $(this).addClass("active").parent().siblings().find("a").removeClass("active");
    }


});


// Add Active Class On Page Change


// Toggle Input From Type From Password To Text

$("#toggle-pass-btn").click(function(e){

e.preventDefault();

if($("#togglepass input").attr("type") === "password")
{
 $("#togglepass input").attr("type","text");
 $("#toggle-pass-btn").html("Hide");   
}

else
{
  $("#togglepass input").attr("type","password");
 $("#toggle-pass-btn").html("Show");      
}
});

// Toggle Input From Type From Password To Text

$(".add-to-cart").each(function(){
    

$(this).click(function(){

let productid = $(this).data("id");
let username = $("#user-name").html();


$.ajax({

url:'addtocart.php',
method:'GET',
data:{id:productid,user:username},
success : function(data){

$("#cart-items").html(data);

}

}); // End Ajax





});

});

console.log($(".product-price").length);

let x = setInterval(calculTotal,1000);

$(".cart-item button").each(function(){


$(this).click(function(){
calculTotal();
$(this).parent().parent().remove();

let id = $(this).data("id");


$.ajax({

url:"deletecart.php",
method:"GET",
data:{id},
success:function(data){

$("#cart-items").html(data);

}
})


});

});

function calculTotal()
{


let total = 0;
$(".product-price").each(function(){
let x = "";
for(let i = 1;i<$(this).html().length; i++)
{
    if( $(this).html()[i] >=0 || $(this).html()[i]<= 9 ||$(this).html()[i] === "."  )
    {
        x += $(this).html()[i];
    }




}

total =  total + parseInt(x);


});

$("#total").html("$"+total+".00");

}
calculTotal();
// End Main Function


});
