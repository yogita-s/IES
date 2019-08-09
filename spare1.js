// dropped ie6 support

$(document).ready(function() {
    $(".nav").accessibleDropDown();
});

$.fn.accessibleDropDown = function () {
    var el = $(this);

    /* Make dropdown menus keyboard accessible */

    $("a", el).focus(function() {
        $(this).parents("li").addClass("hover");
    }).blur(function() {
        $(this).parents("li").removeClass("hover");
    });
}

/*$(document).ready(function() {
    $('.newProductLearnMore').hover(function() {
      $('.newProductDesc').css('borderTop', '5px solid #006699');
    });
  });*/

