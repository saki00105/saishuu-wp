

$(function() {
    // サイドバーのクリック表示
    // $('.l-sideber__box').on('click', function() {

    $(document).on('click', '.l-sideber__box', function(){
        $(this).addClass("is-open");
        $('.l-sideber__layer').fadeIn().addClass('is-open');
        $(".l-sideber").delay(300).queue(function(){
            $(this).addClass("is-open");
        });
        return false;
    });
    console.log("テスト1");


    //サイドバーを閉じる
    // $('.p-sideber__box').on('click', function() {
    $(document).on('click', '.p-sideber__box', function() {

      $('.l-sideber__layer').hide().removeClass('is-open');
      $('.l-sideber__box').removeClass('is-open');
      $(".l-sideber").removeClass("is-open");
      return false;
    });
console.log("テスト２");
});
