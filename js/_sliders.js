(function($){

    // Home
    $(document).ready(function(){
        $('.homeSlider__content').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            swipeToSlide: false,
            draggable: false,
            asNavFor: $('.homeSlider__images'),
        });
        $('.homeSlider__images').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
            swipeToSlide: false,
            draggable: false,
            fade: true,
            asNavFor: $('.homeSlider__content'),
        });

        // Testimonials
        $('.homeTestimonials__wrap').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            dots: false,
        });

        // Portfolio
        $('.homePortfolio__images').on('afterChange', function(event, slick, currentSlide, nextSlide){
            let slide = $(this).find('.image[data-slick-index="' + currentSlide + '"]'),
                url = slide.data('url'),
                title = slide.data('title'),
                desc = slide.data('desc'),
                content = $('.homePortfolio__content');

            content.css('opacity', '0');
            setTimeout(function(){
                content.find('.title').text(title);
                content.find('.desc').text(desc);
                content.find('.link').attr('href', url);
            }, 300);
            setTimeout(function(){
                content.css('opacity', '1');
            }, 350);
        });
        $('.homePortfolio__images').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            adaptiveHeight: true,
            arrows: true,
            dots: false,
        });
    });
}(jQuery));