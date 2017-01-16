$(document).ready(function () {


    window.onscroll = function () {
        var scrolled = window.pageYOffset || document.documentElement.scrollTop;
        var height = $("body").height();
        if (scrolled > 100) {
            $('.mouse-down').css('display', 'none');
        }
        else {
            $('.mouse-down').show();
        }
    }

    $('video').click(function(){
        this[this.paused ? 'play' : 'pause']();
    });

    //Обработка нажатия на кнопку "Вниз"
    $(".mouse-down").click(function () {
        var curPos = $(document).scrollTop();
        var height = $("body").height();
        var scrollTime = (height - curPos) / 1.73;
        $("body,html").animate({"scrollTop": height}, scrollTime);
    });

    //Обработка нажатия на кнопку "Вверх"
    $(".mouse-up").click(function () {
        //Необходимо прокрутить в начало страницы
        var curPos = $(document).scrollTop();
        var scrollTime = curPos / 1.73;
        $("body,html").animate({"scrollTop": 0}, scrollTime);
    });
});


