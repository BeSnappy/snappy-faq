$(document).ready(function(){

  /**
   * Expand the question
   * @param $dd The dd tag selector
   */
  var expand = function($dd) {
    $dd.css("max-height", "100%")
      .animate({
        "height": "100%"
      });
    // Fade out the read more
    $dd.find(".read-more").fadeOut();
  };

  $("dl:not('.home-featured'):not('.search-results') dt a").click(function(e) {
    expand($(this).parent().next("dd"));
  });

  $("dl:not('.home-featured') dd .read-more").click(function(e) {
    e.preventDefault();
    expand($(this).parent());
  });

});
