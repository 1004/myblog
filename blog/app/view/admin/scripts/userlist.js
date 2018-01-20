/**
 * Created by xky on 2018/1/15 0015.
 */
$(
    function () {
        $('.useredit').each(function () {
            user.onedit(this);
        });
        $('.userdelete').each(function () {
            user.ondelete(this);
        });
        user.onadd('.adduser');
    }
);