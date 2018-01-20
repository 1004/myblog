/**
 * Created by xky on 2018/1/15 0015.
 * 对用户的view的操作 闭包成一个类
 */
(function (win) {
    function User() {

    }
    User.prototype = {
         onedit:function (editview) {
             var self = this;
             $(editview).on('click',function () {
                    self.edit($(this).data('id'));
             });
         },
        edit:function (id) {
            alert(id);
        },

        ondelete:function (deleteview) {
            var self = this;
            $(deleteview).on('click',function () {
                self.xdelete($(this).data('id'));
            });
        },

        xdelete:function (id) {
            window.location.href = 'index.php?p=admin&a=deleteuser&c=operationuser&id='+id;
        },

        onadd:function (addview) {
            var self = this;
            $(addview).on('click',function () {
                window.location.href = 'index.php?p=admin&a=showadduser&c=operationuser';
            });
        }
    };

    win.user = new User();

})(window);