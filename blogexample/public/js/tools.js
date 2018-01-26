/**
 * Created by xky on 2018/1/26 0026.
 */
function animate(ele,target,speed){
    clearInterval(ele.timer);
    ele.timer = setInterval(function(){
        var realSpeed = target>ele.offsetLeft ? speed : -speed;
        ele.style.left = ele.offsetLeft+realSpeed+"px";
        if (Math.abs(target-ele.offsetLeft)<=speed) {
            ele.style.left = target+"px";
            clearInterval(ele.timer);
        }
    }, 30);
}

/**
 * 先快后慢动画
 * @param  {[type]} ele    [description]
 * @param  {[type]} target [description]
 * @return {[type]}        [description]
 */
function animFastLow (ele,target){
    console.log(ele.isstart);
    if(ele.isstart){
        return;
    }
    clearInterval(ele.timer);
    ele.timer = setInterval(function(){
        ele.isstart = true;
        var temp = target-ele.offsetLeft;
        var step = temp>0 ? Math.ceil(temp)/10 : Math.floor(temp)/10;
        ele.style.left = ele.offsetLeft+step+"px";
        if (Math.abs(temp) <= step) {
            ele.style.left = target;
            ele.isstart = false;
            clearInterval(ele.timer);
        }
    }, 2);
}

function animFastLowTop (ele,target){
    clearInterval(ele.timer);
    ele.timer = setInterval(function(){
        var temp = target-ele.offsetTop;
        var step = temp>0 ? Math.ceil(temp)/10 : Math.floor(temp)/10;
        ele.style.top = ele.offsetTop+step+"px";
        if (Math.abs(temp) <= step) {
            ele.style.top = target;
            clearInterval(ele.timer);
        }
    }, 25);
}

function animMenu(ele,distance) {
    var target = ele.offsetLeft+distance;
    animFastLow(ele,target);
}

/**
 * 滚动的距离 兼容性写法
 * @return {[type]} [description]
 */
function scroll(){
    if (window.pageYOffset !== undefined) {
        return {
            left: window.pageXOffset,
            top: window.pageYOffset
        }
    }else if(document.compatMode === "CSS1Compat"){
        return {
            left: document.documentElement.scrollLeft,
            top: document.documentElement.scrollTop
        }
    }else {
        return{
            left: document.body.scrollLeft,
            top: document.body.scrollTop
        }
    }

}