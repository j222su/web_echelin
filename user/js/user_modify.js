// 프로필 화면 보여지기 처리
$(function(){
    $(".button_background").click(function(){
        $('.about_me3').show();
    });
})
// 프로필 화면 속 안에 있는 실명 보여지기 처리
$(function(){
    $(".update_button").click(function(){
        $('.view_name').show();
        $('.hide_save_button').show();
        $('.input_save_form').show();

    });
})


$(function(){
    $(".update_button_2").click(function(){
        $('.view_pass').show();
        $('.hide_save_button_pass').show();
        $('.input_save_pass_form').show();

    });
})

// $(function(){
//     $(".update_button").click(function(){
//         $('.view_name').show();
//         $('.hide_save_button').show();
//         $('.input_save_form').show();

//     });
// })



