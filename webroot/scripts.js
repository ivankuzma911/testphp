$( document ).ready(function() {
    $("#author .dropdown-menu li a").click(function(){           
        $("#authorText").val($(this).text());
    });

    $("#genre .dropdown-menu li a").click(function(){           
        $("#genreText").val($(this).text());
      });

    $(".table tbody tr").hover(function(e){
       $(this).find(".title span").css("visibility", "visible");
       var x = e.clientX,
           y = e.clientY;       
       $(this).find(".hidden_images img").css({top: y, left : x}).css("visibility", "visible");
    },function(){
        $(this).find(".title span").css("visibility", "hidden");
        $(this).find(".hidden_images img").css("visibility", "hidden");
    });
});