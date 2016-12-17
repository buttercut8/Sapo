jQuery(document).ready(function($) {
    $("#index-slider").owlCarousel({
           navigation : true,
           pagination:false,
           slideSpeed : 1000,
           paginationSpeed :3800,
           singleItem:true,
           lazyLoad : true,
           autoPlay:false,
    });
    // Slider customer orther
    $("#customer-slider").owlCarousel({
           navigation : true,
           pagination:false,
           slideSpeed : 1000,
           paginationSpeed :3800,
           autoPlay:3000,
           items :3,
           itemsDesktop : [1199,3],
           itemsDesktopSmall : [979,3]
    });
    // back to top
    $('body').prepend('<a href="javascript:void(0)" id="back-to-top"></a>');
    var amountScrolled = 300;
    $(window).scroll(function(){
      if ( $(window).scrollTop() > amountScrolled ) {
        $('#back-to-top').addClass('on_top').removeClass('off_top');
      } else {
        $('#back-to-top').addClass('off_top').removeClass('on_top');
      }
    });
    $('#back-to-top').click(function() {
      $('html, body').animate({ scrollTop : 0 },950);
    });

    // move to address
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });


});
