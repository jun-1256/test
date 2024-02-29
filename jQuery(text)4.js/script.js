$(function(){
    
    $("h1").hover(
    function(){
        $("img").fadeIn();
    },
    function(){
        $("img").fadeOut();
    });
});

$(function(){
  
  $("img").hover(
    function(){
        $(this).animate({width:"220px"});
    },
    function(){
        $(this).animate({width:"200px"});
    });
  });
