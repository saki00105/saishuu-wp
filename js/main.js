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


// $(function() {
//     02
//         $("#search_button").click(function() {
//     03
//             if($('form input[name="search_box"]').val() == "") {
//     04
//                 alert("キーワードを入力して下さい。");
//     05
//                 return false;
//     06
//             }
//     07
//             var search_catch = $("#search_box").val();
//     08
//             var space = search_catch.replace(/　/g," ").split(" ");
//     09
//             var totalNumber = space.length;
//     10
//             alert(space[0]);
//     11
//             alert(totalNumber);
//     12
//         });
//     13
//     });
    