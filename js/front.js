$(function () {


    /* ============================================================
         TESTIMONIALS SLIDER
    =============================================================== */
    $('.testimonials-slider').owlCarousel({
        items: 1,
        loop: true,
        margin: 30,
        autoplay: true,
        smartSpeed: 1000,
    });


    /* ============================================================
         MODAL VIDEO
    =============================================================== */
    new ModalVideo('.video-btn');


    /* ============================================================
         NAVBAR SHOW & HIDE ON SCROLL
    =============================================================== */
    var currentScrollTop = 0,
        c = 0;
    $(window).on('scroll load', function () {
         var a = $(window).scrollTop(), b = $('.header').height();
        currentScrollTop = a;
        if (c < currentScrollTop && a > b + b + 100) {
            $('.header').addClass("scrollUp");
            $('.navbar .dropdown-menu').removeClass('show');
            $('.navbar .dropdown-toggle').attr('aria-expanded', 'false');
        } else if (c > currentScrollTop && !(a <= b)) {
            $('.header').removeClass("scrollUp");
        }
        c = currentScrollTop;

        if ( $(window).scrollTop() > 50 ) {
            $('.header.header-animated').addClass('active');
        } else {
            $('.header.header-animated').removeClass('active');
        }
    });


    /* ============================================================
         DISABLE DEMO LINKS
    =============================================================== */
    $('[href="#"]').on('click', function (e) {
        e.preventDefault();
    });


    /* ============================================================
         SCROLL TOP BUTTON
    =============================================================== */
    $('#scrollTop').on('click', function () {
        $('html, body').animate({ scrollTop: 0}, 1000);
    });

    $(window).on('scroll', function () {
        if ($(window).scrollTop() >= 2000) {
            $('#scrollTop').addClass('active');
        } else {
            $('#scrollTop').removeClass('active');
        }
    });



});




  window.onscroll = function showScroll() {
    
    var widthScreen = window.innerWidth;
    var heightScreen = window.innerHeight;
    //console.log(window.scrollY)
    //console.log(heightScreen);

    if (widthScreen > 991 && window.scrollY >= 260 && heightScreen <= 750) {
  
        let elems = $('.fadeInBlock').get();
        animate();
      
        function animate() {
            let elem = elems.shift();
            $(elem).show("drop", {
                direction: "left",
                complete: function () {
                    if(elems.length > 0)
                    window.setTimeout(animate);
                }
            }, 700);
        }    
    } 

    
    if (widthScreen <= 991 && window.scrollY >= 540) { //cond mobile et tab
  
        let elems = $('.fadeInBlock').get();
        animate();
      
        function animate() {
            let elem = elems.shift();
            $(elem).show("drop", {
                direction: "left",
                complete: function () {
                    if(elems.length > 0)
                    window.setTimeout(animate);
                }
            }, 700);
        }    
    } 
  };



window.onload = function showScroll() {

    var w = window.innerWidth;
    var heightScreen = window.innerHeight;

    if (w > 991 && heightScreen > 750) { // cond desktop
        let elems = $('.fadeInBlock').get();
        animate();
      
        function animate() {
            let elem = elems.shift();
            $(elem).show("drop", {
                direction: "left",
                complete: function () {
                    if(elems.length > 0)
                    window.setTimeout(animate);
                }
            }, 700);
        } 
    }   
    
  };


/*var heightScreen = window.innerHeight;
console.log(heightScreen);
*/

//travaux
$('#travaux').change(function() {
    if($(this).is(":checked")) {
        $('.travauxHide').show();
    }
else{
        $('.travauxHide').hide();
    }                                          
});


// Co-emprunteur
$('#co-emp').change(function() {
    if($(this).is(":checked")) {
        $('.co-input').show();
    }
else{
        $('.co-input').hide();
    }                                          
});
