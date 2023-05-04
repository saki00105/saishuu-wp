

$(function() {
    // サイドバーのクリック表示
    $('.l-sideber__box').on('click', function() {
        $(this).addClass("is-open");
        $('.l-sideber__layer').fadeIn().addClass('is-open');
        $(".l-sideber").delay(300).queue(function(){
            $(this).addClass("is-open");
        });
        // return false;
    });

    //サイドバーを閉じる
    $('.p-sideber__box').on('click', function() {
      $('.l-sideber__layer').hide().removeClass('is-open');
      $('.l-sideber__box').removeClass('is-open');
      $(".l-sideber").removeClass("is-open");
    //   return false;
    });

});
