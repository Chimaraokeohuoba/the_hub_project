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



// 786


// $(window).on('resize', function(){
//   console.log($(window).width());
//   var small_search = document.createTextNode("<img src='project_images\search-magnifier-interface-symbol.png' alt=''>");
//   var big_search = document.createTextNode("<div class='input-group' style='width:40vw;margin-top:10px;'><input type='text' class='form-control' placeholder='Search for anything'><span class='input-group-btn'><button class='btn btn-success' type='button' style='padding:8px;'><img src=' project_images\search-magnifier-interface-symbol (1).png' alt=''></button></span></div>");
//   if($(window).width()<786){
//     var list = document.createElement("li");
//     list.appendChild(small_search);
//     var item = document.getElementById("search");
//     item.replaceChild(list,item.childNodes[0]);
    // console.log(document.querySelector("#search"));
    // document.querySelector("#search").replaceWith("<img id = 'search' src='project_images\search-magnifier-interface-symbol.png' alt=''>");
  // }else{
  //   var list = document.createElement("li");
  //   list.appendChild(big_search);
  //   var item = document.getElementById("search");
  //   item.replaceChild(list,item.childNodes[0]);
    // console.log(document.querySelector("#search"));
    // document.querySelector("#search").replaceWith(<div id = 'search' class='input-group' style='width:40vw;margin-top:10px;'><input type='text' class='form-control' placeholder='Search for anything'><span class='input-group-btn'><button class='btn btn-success' type='button' style='padding:8px;'><img src=' project_images\search-magnifier-interface-symbol (1).png' alt=''></button></span></div>);
// }
//     })



   //  var elmnt = document.createElement("li");
   //     var textnode = document.createTextNode("Water");
   //     elmnt.appendChild(textnode);
   //
   //     var item = document.getElementById("myList");
   //     item.replaceChild(elmnt, item.childNodes[0]);
   // }

    // var textnode = document.createTextNode("Water");
    //     var item = document.getElementById("myList").childNodes[0];
    //     item.replaceChild(textnode, item.childNodes[0]);
    // }
