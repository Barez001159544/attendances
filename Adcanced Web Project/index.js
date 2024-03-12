var menu= document.querySelector("header i");
var banner= document.querySelector(".menuBanner");
var closeBanner= document.querySelector(".menuBanner i");
var body=document.querySelector("body");
menu.onclick = function(){
    if(window.screen.width>=1000){
    banner.classList.add("showMenu");
    }else{
        banner.style.display="flex";
    }
    body.style.overflowX="hidden";
};
closeBanner.onclick = function(){
    if(window.screen.width>=1000){
    banner.classList.remove("showMenu");
    }else{
        banner.style.display="none";
    }
    body.style.overflowY="scroll";
};
// ---------------------------------
window.onscroll = function() {
    myFunction()
};

function myFunction() {
  if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
    document.querySelector(".one").id = "test1";
    document.querySelector(".two").id = "test2";
    document.querySelector(".three").id = "test3";
    document.querySelector(".four").id = "test4";
  } else {
    // document.querySelector(".center1 .percents .one").id = "";
    document.querySelector(".one").id = "";
    document.querySelector(".two").id = "";
    document.querySelector(".three").id = "";
    document.querySelector(".four").id = "";
  }
}
// -----------------------------------
