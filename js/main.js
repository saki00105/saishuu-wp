$(function() {
    // サイドバーのクリック表示
    $('.l-sideber__box').on('click', function() {
        $(this).addClass("is-open");
        $('.l-sideber__layer').fadeIn(500).addClass("is-open");
        $(".l-sideber").delay(500).queue(function(){
            $(this).addClass("is-open").dequeue();
        });
        return false;
    });
    //サイドバーを閉じる
    $('.p-sideber__box').on('click', function() {
      $('.l-sideber__layer').hide().removeClass('is-open');
      $('.l-sideber__box').removeClass('is-open');
      $(".l-sideber").removeClass("is-open");
      return false;
    });
});


//サイドバー表示時のスクロール固定
$(function(){
    var scrollpos;
    $('.l-sideber__box').on('click', function(){
        scrollpos = $(window).scrollTop();
        $('body').addClass('c-fixed').css({'top': -scrollpos});
    });
    $('.p-sideber__box').on('click', function(){
        $('body').removeClass('fixed').css({'top': 0});
        window.scrollTop( 0 , scrollpos );
    });
});

//リサイズ
$(function(){
    $(window).resize(function(){
        $(".l-sideber__box").removeClass("is-open");
        $(".l-sideber__layer").removeClass("is-open").css("display","none");
        $(".l-sideber").removeClass("is-open");
    });
});
