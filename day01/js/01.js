/**
 * Created by xky on 2017/3/28 0028.
 */
var a = parseInt("10");
var str1 = new String("哈哈你号楼");
var mygirl = {
    name:"小花",
    age:18,
    zuofan:function (){
        "做饭"
    }
};
var le = str1.length;
var arr2 = new Array(7,3,3,2);
var arr3 = [3,1,23];
function calculateValue() {
    for (var i=0;i<arr3.length;i++){
        var value = arr3[i];
        document.write(value);
    }
    var d2 = new Date();
    document.write(d2);
}
var d1 = new Date();
var s1 = Math.max(1,3,4);
var r1 = Math.random();
var m1 = mygirl.age;
// window.setInterval("calculateValue()",1000);
// window.clearInterval()
// window.clearTimeout()
// window.setTimeout()
function setValue(obj) {
    obj.innerHTML = "哈哈你好楼"
}