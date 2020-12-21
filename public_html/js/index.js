/* ---slideshow--- */
(function($){
  $(document).ready(function(){
    var slides = $('#slideshow > li');
    var cnt = 0;
    function toggle(){
      cnt = (cnt + 1) %3;
      slides.removeClass("current").eq(cnt).addClass("current");
    }
    setInterval(toggle,3000);
  });
})(jQuery);
// ---end---
