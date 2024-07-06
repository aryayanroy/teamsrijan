$(document).ready(function(){
    $(".crews-carousel").owlCarousel({
        margin:10,
        responsive:{
            0:{
                items:1,
                stagePadding: 25,
                loop:true,
                autoplay:true,
                autoplayTimeout: 3000,
                autoplayHoverPause:true
            },
            425:{
                items:2
            },
            576:{
                items:3,
                stagePadding: 25
            },
            768:{
                items:4
            },
            992:{
                items:5
            }
        }
    })
})