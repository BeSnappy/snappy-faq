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

  $("dl:not('.home-featured') dt a").click(function(e) {
    e.preventDefault();
    var $el = $(this);
    expand($el.parent().next("dd"));
    return false;
  });

  $("dl:not('.home-featured') dd .read-more").click(function(e) {
    e.preventDefault();
    var $el = $(this);
    expand($el.parent());
    return false;
  });

});
