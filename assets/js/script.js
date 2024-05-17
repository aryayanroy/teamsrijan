$(document).ready(function(){
    
    var load_path = "/assets/html/";

    $.get(load_path+"head.html", function(data){
        $("head").prepend(data);
        console.log("head loaded");
    })

    var header = $("#page-header");

    header.load(load_path+"header.html",function(){
        $(this).addClass("sticky-top");
        console.log("header loaded");
    });

    $("#bottom-menu").load(load_path+"aside.html",function(){
        $(this).addClass("offcanvas offcanvas-bottom");
        console.log("bottom aside loaded");
    });

    $("#page-footer").load(load_path+"footer.html",function(){
        $(this).addClass("px-3 py-5 px-sm-5 text-white");
        console.log("footer loaded");
    });

    $(window).scroll(function(){
        let scroll = $(this).scrollTop();
        if(scroll == 0){
            header.css("box-shadow","none");
        }else{
            header.css("box-shadow","0 6px 8px rgba(0, 0, 0, 0.4)");
        }
    })
})