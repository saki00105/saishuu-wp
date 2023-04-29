
// $(function(){
//     //サイドバーのスライド表示
//     $(".l-sideber__box").on('click', function(){
//         $(this).addClass("is-open");
//         $(".l-sideber").addClass("is-open");
//         // return false;
//     })

//     $(".p-sideber__box").on('click', function(){
//         $(".l-sideber__box").removeClass("is-open");
//         $(".l-sideber").removeClass("is-open");

//         // return false;
//     })


    


// });

//暗転
$(function() {
    $(".l-sideber__box").click(function() {
        $("l-sideber__layer").fadeIn();
    });

    $(".p-sideber__box").click(function() {
        $("l-sideber__layer").fadeOut();
    });
    return false;
});
