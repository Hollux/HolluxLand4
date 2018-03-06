/*BOUTON SLIDEDOWN/UP*/

$('.content').slideDown(2000, function () {
});


$(document).ready(function(){
    $(".fadeToggle").click(function(){
        var fade = $(this).attr('data-fade');
        $("div[data-fadetarget]").each(function(){
           if($(this)[0] != $("div[data-fadetarget="+ fade +"]")[0]) {
                $(this).fadeOut();
            }
        })
        $("div[data-fadetarget="+ fade +"]").fadeToggle();
    });

    //ouverture p1
    $("div[data-fadetarget=fade1]").fadeIn();
});


/*RETOUR HAUT DE PAGE*/

//fais apparaitre quand scrollTop >2
//clic => animate scrollTop
ScrollToTop = function () {
    var s = $(window).scrollTop();
    if (s > 2) {
        $('.scrollup').fadeIn();
    } else {
        $('.scrollup').fadeOut();
    }
}

//arrète animate en cas de scroll etc(les bind)
StopAnimation = function () {
    $("html, body").bind("scroll mousedown DOMMouseScroll mousewheel keyup", function () {
        $('html, body').stop();
    });
}

//lance les fonctions
$(window).scroll(function () {
    ScrollToTop();
});

// DOM ready
$(function () {
    $('.scrollup').click(function () {
        $("html, body").animate({scrollTop: 0}, 500);
        return false;
    });

    StopAnimation();

});

function onSubmit(token) {
    jQuery('.g-recaptcha-response').prop('value', token);
    jQuery('.g-recaptcha').closest('form').submit();
}

// SMASH UP INCLUDE

//sntn
//$('.container').height($(window).height() - $('footer').height())

// NEIGE

