$(document).ready(function(){
    
    var load_path = "/assets/html/";

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
        $(this).addClass("px-3 pt-5 px-sm-5 text-white");
        console.log("footer loaded");
        var currentYear = new Date().getFullYear();
        $("#copyright-year").html(currentYear);
    });

    $(window).scroll(function(){
        let scroll = $(this).scrollTop();
        if(scroll == 0){
            header.removeClass("shadow");
        }else{
            header.addClass("shadow");
        }
    })

})