/**
 * Listen to scroll to change header opacity class
 */
function checkScroll(){

    var startY = $('.navbar').height() * 0.1; //The point where the navbar changes in px

    if($(window).scrollTop() > startY){
        $('.navbar').addClass("scrolled");
    }else{
        if(($("#bs-example-navbar-collapse-1").is(":visible")) == false){
        console.log("toggle is open")};
        $('.navbar').removeClass("scrolled");
    }
}

if($('.navbar').length > 0){
    $(window).on("scroll load resize", function(){
        checkScroll();
    });
}


$(".navbar-toggle.collapsed").on("click", function(){
  if(($("#bs-example-navbar-collapse-1").is(":visible")) == false){
  console.log("toggle is open");
  $('.navbar').addClass("scrolled");}else{
    checkScroll();
  };})


  $(".panel-footer").on("click", function(){
    if(($("#collapseOne").is(":visible")) == false){
      document.querySelector(".panel-title").textContent = "Click to see less votes";
    // $('.navbar').addClass("scrolled");
  }else{
      document.querySelector(".panel-title").textContent = "Click to see more votes"
      // checkScroll();
    };})
