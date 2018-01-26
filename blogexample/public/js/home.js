/**
 * Created by xky on 2018/1/26 0026.
 */


$(function  () {
    initView();
    menu_check();
    scroll_menu();
});

/**
 * 初始化模块布局
 */
function initView() {
    $('.header').load('./header.html');
    $('.footer').load('./footer.html');
}

/**
 * 初始化菜单选择
 */
function menu_check() {
    $('.con_recommand>.rec_tab li ').on('click',function () {
        $(this).addClass('check').siblings('li').removeClass('check');
    });
}

function scroll_menu() {
    $(window).scroll(function () {
       var top = $(this).scrollTop();
       if(top >330){
           $('.back_arrow').fadeIn();
       }else {
           $('.back_arrow').fadeOut();
       }
    });
    $('.back_arrow').on('click',function () {
        $("html,body").animate({scrollTop:0},400);
    });
}
