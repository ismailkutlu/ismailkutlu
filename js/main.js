$(document).ready(function() { 
    $('.home h1').hide();
    $('.home h2').hide();

    $('.home h1').delay(2000).fadeIn(1000);
    $('.home h2').delay(2500).fadeIn(1000);

    $('nav ul a').hide();
    $('nav ul a').delay(500).fadeIn(500);

    $('.fa-sm').hide();   
    
    $(window).scroll(function() {    
        if ($(this).scrollTop() >= screen.height/2) {
            $('.icon-1, .icon-2, .icon-3').css({
                "background-color": "#000"
            })
            $('.logo').fadeIn().css({"opacity": "1"})
            $('nav').css({  "background-color": "rgba(255, 255, 255, 0.85)", 
                            "box-shadow": "0px 0px 4px 4px rgba(0, 0, 0, 0.15)"
            })
            $('nav ul a li').css({"color": "#000"})
            $('nav ul a li:hover').css({})
            $(  '.hamburger-icon:hover .icon-1',
                '.hamburger-icon:hover .icon-2',
                '.hamburger-icon:hover .icon-3').css({
                    "background-color": "#FFF"
            })
        } else {
            $('.icon-1, .icon-2, .icon-3').css({
                "background-color": "#FFF"
            })
            $('.logo').fadeOut().css({"opacity": "0"});
            $('nav').css({  "background-color": "transparent", 
                            "box-shadow": "0px 0px 4px 4px rgba(0, 0, 0, 0)"
            })
            $('nav ul a li').css({  "color": "#FFF"
            })            
        }
    });
    //Smoothscrolling
    jQuery(document).ready(function($) {

        $('.smoothscroll').on('click',function (e) {
            e.preventDefault();

            var target = this.hash,
            $target = $(target);

            $('html, body').stop().animate({
                'scrollTop': $target.offset().top
            }, 800, 'swing', function () {
                window.location.hash = target;
            });
        });
        
    });
    //Fadeoutscrolling
    $(window).scroll(function(){
        $(".home h1").css("opacity", 1 - $(window).scrollTop() / 400);
        $(".home h2").css("opacity", 1 - $(window).scrollTop() / 400);
        $(".home .rect").css("opacity", 1 - $(window).scrollTop() / 400);
    });

    //HUMBURGER
    var icon = document.getElementById("icon");
    var icon1 = document.getElementById("a");
    var icon2 = document.getElementById("b");
    var icon3 = document.getElementById("c");
    var nav = document.getElementById('nav__list');
    // var nav = document.getElementById('nav');
    var blue = document.getElementById("blue");

    icon.addEventListener('click', function() {
        icon1.classList.toggle('a');
        icon2.classList.toggle('c');
        icon3.classList.toggle('b');
        nav.classList.toggle('show');
        blue.classList.toggle('slide');
        
        $('nav ul').toggleClass('left');
    });

    //IMAGE RESPONSIVE
    function imageresize() {
        var contentwidth = $('body').width();

        if ((contentwidth) <= 960){
            $('.fa-sm').fadeIn(1000);
            $('.hamburger-icon').show();
            $('nav ul a').css({
                "width": "100%",
            })
            $('#nav__list').css({                
                "opacity": 0
            })
            $('.dark-blue').css({
                "background-color": "#0288D1",
            })
        //BIGGER THAN 960px
        } else {
            $('.fa-sm').hide();    
            $('.hamburger-icon').hide();
            $('.dark-blue').css({
                "background-color": "transparent",
            })
            $('nav ul a').css({
                "width": "120px",
            })
            $('#nav__list').css({                
                "opacity": 1
            })
        }
    }

    imageresize();  

    $(window).bind("resize", function(){
        imageresize();
    });
    
    var $skills = $('#skills h2');
    var $about = $('#about h2');
    var $contact = $('#contact h2');

    $skills.waypoint(function () {
        $('.skill-wrap').css({
            opacity: 1
        })
        $('progress').each(function() {
            var max = $(this).val();
            $(this).val(0).animate({
                value: max
            }, { duration: 2000});
        });
        $('em').delay(1000).animate({
            opacity: 1,
        }, { duration: 2000})
        // waypoint.disable();
        this.destroy();
        
    }, { offset: "50%"});

    $about.waypoint(function () {
        $('#about h3').animate({
            "opacity": 1
        })
        $('#about p, #about ul, #about blockquote').animate({
            "opacity": 1
        }, 1000)
        this.destroy();
    }, { offset: "50%"})

    $contact.waypoint(function () {
        $('#contact i').animate({
            "opacity": 1
        }, 1000)
        this.destroy();
    }, { offset: "50%"})
}());
