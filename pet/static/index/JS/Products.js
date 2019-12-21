
var list=document.querySelectorAll(".chanpin_top li");

var chanpin=document.querySelectorAll(".chanpin_bottom");
list[0].className="chanpin_top_xz";
chanpin[0].style.display="block";
list.forEach(function(value,index){
	value.onclick=()=>{
		chanpin.forEach(function(v,i){
			list[i].className="";
			chanpin[i].style.display="none";
		})
		list[index].className="chanpin_top_xz";
		chanpin[index].style.display="block";
	}
})



