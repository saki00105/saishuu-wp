$(function() {
    // サイドバーのクリック表示
    $('.l-sideber__box').on('click', function() {
        $(this).addClass("is-open");
        $('.l-sideber__layer').fadeIn(500).addClass("is-open");
        $(".l-sideber").delay(500).queue(function(){
            $(this).addClass("is-open").dequeue();
        });
        $("body").delay(500).queue(function(){
            $(this).addClass("c-fixed").dequeue();
        });
        return false;
    });
    //サイドバーを閉じる
    $('.p-sideber__box').on('click', function() {
      $('.l-sideber__layer').hide().removeClass('is-open');
      $('.l-sideber__box').removeClass('is-open');
      $(".l-sideber").removeClass("is-open");
      $('body').removeClass('c-fixed');
      return false;
    });
});

//リサイズ
$(function(){
    $(window).resize(function(){
        $(".l-sideber__box").removeClass("is-open");
        $(".l-sideber__layer").removeClass("is-open").css("display","none");
        $(".l-sideber").removeClass("is-open");
        $('body').removeClass('c-fixed');
    });
});

// カレント表示
$(function() {
    $('.p-pagination__link a').each(function(){
        var $href = $(this).attr('href');
        if(location.href.match($href)) {
            $(this).parent().addClass('is-active');
        } else {
            $(this).parent().removeClass('is-active');
        }
        return false;
    });
});
