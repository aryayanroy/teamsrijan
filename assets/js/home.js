$(document).ready(function(){
    $("#sponsors").owlCarousel({
        loop:true,
        margin:50,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            425:{
                items:2
            },
            576:{
                items:3
            },
            768:{
                items:4
            },
            992:{
                items:5
            }
        }
    })

    var final = new Date("1 22, 2025 00:00:00").getTime();
    convert = 1000*60*60;
    setInterval(function(){
        var now = new Date().getTime();
        var distance = final - now;
        if(distance > 0){
            $("#days").text(Math.floor(distance / (convert * 24)));
            $("#hrs").text(Math.floor((distance % (convert * 24)) / (convert)));
            $("#mins").text(Math.floor((distance % (convert)) / (convert/60)));
            $("#secs").text(Math.floor((distance % (convert/60)) / 1000));
        }
    }, 1000)
})