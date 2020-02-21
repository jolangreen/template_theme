/* LOAD FIRST BANNER ITEM
   ========================================================================== 
$(function(){
  $('.item').first().addClass('active');
});
*/


/* SMOOTH ANCHOR LINK
   ========================================================================== 
$(function() {
  $('a.smooth-scroll').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
*/


/* FULL HEIGHT
   ========================================================================== 
$(function(){
    $('.item') .css({'height': (($(window).height()))+'px'});
    $(window).resize(function(){
        $('.item') .css({'height': (($(window).height()))+'px'});
    });
});
*/
