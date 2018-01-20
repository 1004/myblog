/**
 * Created by xky on 2018/1/16 0016.
 */
function vaild() {
    var name =  $('.name').val();
    var pwd = $('.pwd').val();
    if (name == '' || pwd == ''){
        alert('用户名或者密码不能为空');
        return false;
    }
    return true;
}