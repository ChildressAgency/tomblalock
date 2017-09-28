jQuery(document).ready(function($){

  /* menu */
  $(".menu-open").on('click', function(evt){
    evt.preventDefault();
    $(".mobilenav").fadeToggle(500, function(){
      window.scrollTo(0,0);
    });
    $(".top-menu").toggleClass("top-animate");
    $("body").toggleClass("noscroll");
    $(".mid-menu").toggleClass("mid-animate");
    $(".bottom-menu").toggleClass("bottom-animate");
  });
  $(document).keydown(function(e){
    if (e.keyCode == 27){
      $(".mobilenav").fadeOut(500);
      $(".top-menu").removeClass("top-animate");
      $("body").removeClass("noscroll");
      $(".mid-menu").removeClass("mid-animate");
      $(".bottom-menu").removeClass("bottom-animate");
    }
  });

  function togglescroll() {
    $('body').on('touchmove', function (e) {
      if ($('body').hasClass('noscroll')) {
        e.preventDefault();
      }
    });
  }

  togglescroll();

});