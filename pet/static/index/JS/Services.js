
window.onload=function(){
    //动画
    var neirong=document.querySelectorAll(".biaoti1_neirong_zt");
    for(var i=0;i<4;i++){

            neirong[i].style.transition = "all 1s";
            neirong[i].style.transitionDelay = i / 4 + "s";
            neirong[i].style.transform = "translateY(-285px)";

    }
}