$(function () {
    var delay = 3;
    var currentSlide = 0;
    var maxSlide = $('.slide-item').length - 1;

    initSlider();
    changeSlider();

    function initSlider() {
        $('.slide-item').hide();
        $('.slide-item').eq(0).show();

        for (var i = 0; i < maxSlide + 1; i++) {
            var content = $('.bullets').html();
            if (i == 0)
                content += '<span class="active-slider"></span>';
            else
                content += '<span></span>';
            $('.bullets').html(content);
        }
        
    }

    function changeSlider() {
        setInterval(function () {
            $('.slide-item').eq(currentSlide).fadeOut(800);
            currentSlide++;

            if (currentSlide > maxSlide)
                currentSlide = 0;
            $('.slide-item').eq(currentSlide).fadeIn(3000);
            $('.bullets span').removeClass('active-slider');
            $('.bullets span').eq(currentSlide).addClass('active-slider');
        }, delay * 1000);
    }

})
