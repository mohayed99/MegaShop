$(function(){

"use strict";

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
})


// End Owl Carousel



// Bootstrap Slider




$(".carousel-inner,.carousel-item").height($(window).height() - $(".header").height());


// Bootstrap Slider





// Fix Body Padding




// Add active class on li click

$(".navbar-light .navbar-nav li").click(function(){

$(this).addClass("active").siblings().removeClass("active");
});


// Add active class on li click




// Slide Search Overlay On Seach Button Click

$(".fa-search").click(function(){

$(".search-overlay").slideDown();

});

$(".search-overlay span").click(function(){

$(".search-overlay").slideUp();


});


// Slide Search Overlay On Seach Button Click


// Scroll To Top Button

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



});



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



