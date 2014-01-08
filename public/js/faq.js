$(document).ready(function(){

  /**
   * Expand the question
   * @param $dd The dd tag selector
   */
  var expand = function($dd) {
    $("dl").find(".active").removeClass("active");
    $dd.addClass("active").prev().addClass("active");
    $dd.css("max-height", "100%")
      .animate({
        "height": "100%"
      });
    // Fade out the read more
    $dd.find(".read-more").fadeOut();
  };

  $(".topic dt a").click(function(e) {
    expand($(this).parent().next("dd"));
  });

  $(".home-featured dd, .search-results dd").click(function(e) {
    e.preventDefault();
    window.location.href = $(this).prev().find("a").attr("href");
  });

  $(".topic dl dd:not('.active')").click(function(e) {
    e.preventDefault();
    expand($(this));
  });

  // Set the active class and expand
  hash = window.location.hash;
  if (hash) {
    expand($(hash).next("dd"));
  }

});
