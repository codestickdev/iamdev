(function($){
    function isScrolledIntoView(elem) {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();

        var elemTop = $(elem).offset().top;
        var elemBottom = elemTop + $(elem).height();

        return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    }

    function Utils() {

    }

    Utils.prototype = {
        constructor: Utils,
        isElementInView: function (element, fullyInView) {
            var pageTop = $(window).scrollTop();
            var pageBottom = pageTop + $(window).height();
            if (element.length) {
              var elementTop = $(element).offset().top;
            }
            var elementBottom = elementTop + $(element).height();
    
            if (fullyInView === true) {
                return ((pageTop < elementTop) && (pageBottom > elementBottom));
            } else {
                return ((elementTop <= pageBottom) && (elementBottom >= pageTop));
            }
        }
    };
    
    var Utils = new Utils();

    function getVisible(element){
        if(element.visible(true)){
            return $(this).parent().prop('className');
        }
    }

    /**
     * AOS
     */
    $(document).ready(function(){
        if($(window).width() > 991){
            AOS.init({
                delay: 250,
                duration: 800,
            });
        }else{
            AOS.init({
                disable: true,
            });
        }
    });

    /**
     * Home page list animation
     */
    $(document).ready(function(){
        $(window).scroll(function(){
            let list_ol = $('.homeExp__content ol'),
                list_ul = $('.homeExp__content ul');

            if(list_ol.visible(true)){
                setTimeout(function(){
                    list_ol.addClass('visible');
                }, 500);
            }
            if(list_ul.visible(true)){
                setTimeout(function(){
                    list_ul.addClass('visible');
                }, 500);
            }
        });
    });

    /**
     * Smooth scroll
     */
    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();
    
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
    });

    /**
     * Move elements on scroll
     */
    $(document).ready(function(){
        $(document).on('scroll', function(){
            let wScroll = $(window).scrollTop(),
                el = $('.move-element');

            if(el.visible(true)){
                let top = $(el).offset().top,
                    value = ((top-wScroll)*0.06);

                el.css({
                    'transform': 'translate(0, ' + value + 'px)',
                });
            }
        });
    });
}(jQuery));