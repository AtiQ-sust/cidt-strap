   $(window).scroll(function() {

    if ($(this).scrollTop()>0)
     {
        $('.navbar').fadeOut();
     }
    else
     {
      $('.navbar').fadeIn();
     }
 });