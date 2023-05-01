

$(function(){
    $(".l-sideber__box").on('click', function(){
        $(this).addClass("is-open");
        $(".l-sideber").addClass("is-open");
        return false;
    });

    $(".p-sideber__box").on('click', function(){
        $(".l-sideber__box").removeClass("is-open");
        $(".l-sideber").removeClass("is-open");
        return false;
    });

});

console.log("テスト");


//暗転
// $(function() {
//     $(".l-sideber__box").click(function() {
//         $("l-sideber__layer").fadeIn();
//     });

//     $(".p-sideber__box").click(function() {
//         $("l-sideber__layer").fadeOut();
//     });
//     return false;
// });


// $(function() {
//     // ハンバーガーメニューをクリックしたときの処理
//     $('.l-sideber__box').on('click', function() {
//         $(this).addClass("is-open");

//         console.log("test");

//       // オーバーレイをフェードインして表示する
//       $('.l-sideber__layer').fadeIn().addClass('is-open');
//       // サイドバーを表示する
//       $('.l-sideber').addClass('is-open');
//       return false;
//     });
    
//     // オーバーレイをクリックしたときの処理
//     $('.p-sideber__box').on('click', function() {
//       // オーバーレイを非表示にする
//       $('.l-sideber__layer').fadeOut().removeClass('is-open');
//       // サイドバーを非表示にする
//       $('.l-sideber__box').removeClass('is-open');
//       $(".l-sideber").removeClass("is-open");
//       return false;
//     });
// });
  