$(document).ready(function(){

var cslider = $("input[type=range]");
var lops = ["red", "orange", "yellow", "green", "blue", "indigo", "violet"];
for(i=0; i<cslider.length; i++){
    if(cslider.length<=lops.length){
        cslider[i].classList.add("sl"+lops[i]);
        $(cslider[i]).data("color", lops[i]);
    }else{
      cslider[i].classList.add("sl"+lops[i%7]);
      $(cslider[i]).data("color", lops[i%7]);
    }
}
cslider.each(function(){
    tho_deco_sliders($(this));
});

$("input[type=range]").on("change", function(){
    tho_deco_sliders($(this));
});

$("input[type=range]").on("input", function(){
    tho_deco_sliders($(this));
});

function tho_deco_sliders(selector){
    var trai = selector.val()/selector.attr('max')*100+"%";
    var clo = selector.data("color");
    var res = 'linear-gradient(to right, '+clo+' 0%, '+clo+' '+trai+', transparent '+trai+', transparent 100%)';
    selector.css("background", res);
}
});