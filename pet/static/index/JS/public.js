window.onscroll=function(){
    var t=document.documentElement.scrollTop||document.body.scrollTop;
    var top=document.getElementById("top1");
    var dingbu=document.querySelector(".dingbu");
    if(t>90){
        top.style.height="58px";
    }else{
        top.style.height="0px";
    }
    if(t>300){
        dingbu.style.display="block";
    }else{
        dingbu.style.display="none";
    }


    // 返回顶部的两种   window.scrollTo（）
    dingbu.onclick=function(){
        window.scrollTo({
            top:0,
            behavior: "smooth"
        })


        // var times=setInterval(function(){
        // 	if(t>0){
        // 		t=document.body.scrollTop=document.documentElement.scrollTop=t-40;
        // 	}else{
        // 		clearInterval(times);
        // 	}
        // },20)
    }



}