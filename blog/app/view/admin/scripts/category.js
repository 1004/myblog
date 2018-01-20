/**
 * Created by xky on 2018/1/16 0016.
 */

(function (win) {
    function Category() {

    }

    Category.prototype = {
        showAdd:showAdd
    };

    function showAdd(view) {
        $(view).on('click',function () {
            window.location.href = 'index.php?p=admin&a=showaddcategory&c=category';
        });
    }

    function add() {

    }

    win.category = new Category();
})(window)




