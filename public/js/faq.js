$(document).ready(function(){

  /**
   * Expand the question
   * @param $dd
   */
  var expand = function($dd) {
    $dd.css("max-height", "100%")
      .animate({
        "height": "100%"
      });
    // Fade out the read more
    $dd.find(".read-more").fadeOut();
  };

  $(".search .permalink").click(function() {
    var $el = $(this);
    expand($el.parent().next("dd"));
    return false;
  });

  $(".search .read-more").click(function() {
    var $el = $(this);
    expand($el.parent());
    return false;
  });

});
