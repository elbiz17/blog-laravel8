$(document).ready (function () {
   $(".contents").slice(0, 3).show();
   $("#loadMore").on("click", function(e){
     e.preventDefault();
     $(".contents:hidden").slice(0, 3).slideDown();
     if ($(".contents:hidden").length == 0) {
       $("#loadMore").text("No Content").addClass("noContent");
     }
   });
   })