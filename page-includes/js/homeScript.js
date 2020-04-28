$(function () {
    // $('select').formSelect();
    $("#contact-form textarea").characterCounter();
    $("#upwd").fadeOut(0);
    
    $(window).on("scroll", function () {

        var fromTop = $(window).scrollTop();
        var toDown = $("#w_courses-section").offset().top - 100;

        if (fromTop > toDown) {
            $("ul#menu").css("opacity", 0);
            $("a#logo-container").addClass("center");

            $("nav")
                .removeClass("z-depth-0")
                .addClass("z-depth-5");
                
            $("#upwd").fadeIn(750);

        } else {
            $("ul#menu").css("opacity", 1);
            $("a#logo-container").removeClass("center");

            $("nav")
                .removeClass("z-depth-5")
                .addClass("z-depth-0");

            $("#upwd").fadeOut(750);
        }
    });

    //Fixed Action Button
    $("#upwd").click(function (){
        $('html, body').animate({
            scrollTop: 0
        }, 450);
    });

    //Smooth scrolling for internal links
    $('a.smooth').on('click', function() {
        var target = $(this).attr('href');
        var internal = target.indexOf("#");
        
        if (internal >= 0) {
            $('html, body').animate({
                scrollTop: $(target).offset().top - 50
            }, 450);

            $('.sidenav').sidenav('close');
            return false;
        }
    });
});