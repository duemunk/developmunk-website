function calculateFullscreenHeight() {
    "use strict";
    var windowH = $(window).height(),
        heightMax = windowH;
    if (heightMax > 800) {
        heightMax = 800;
    }
    $('.fullheight').css({'height': (windowH)+'px'});
    $('.minfullheight').css({'min-height': (windowH)+'px'});
    $('.fullheightMax800').css({'height': (heightMax)+'px'});
    $('.projectimage').css({'max-height': (windowH / 2)+'px'});
}
$(document).ready(function () {
  'use strict';
  /* FULL HEIGHT */
  calculateFullscreenHeight();
  /* ACTIVE MENU ITEM */
  var topMenu = $('ul.menu'),
      topMenuHeight = topMenu.outerHeight(),
      // All list items
      menuItems = topMenu.find("a"),
      // Anchors corresponding to menu items
      scrollItems = menuItems.map(function () {
        var id = $(this).attr("href"),
            firstChar = id.charAt(0),
            isHash = (firstChar === '#');
        if (isHash) {
          var item = $(id);
          if (item.length) { return item; }
        }
      });
  $(window).scroll(function () {
    if (scrollItems.length) {
      var fromTop = Math.max($(this).scrollTop(), 0),
          // Get id of current scroll item
          cur = scrollItems.map(function () {
              if (Math.max($(this).offset().top, 0) <= fromTop) {
                  return this;
              }
          });
      // Get the id of the current element
      cur = cur[cur.length - 1];
      var id = cur && cur.length ? cur[0].id : "";
      // Set/remove active class
      menuItems
        .parent().removeClass("active")
        .end().filter("[href=#" + id + "]").parent().addClass("active");
    }
  });
  /* SCROLL TO HASH ITEM */
  $('a').click(function () {
    var elementClicked = $(this).attr("href"),
        destination = $(elementClicked).offset().top;
    $("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination}, 250);
    return false;
  });
});
// for the window resize
$(window).resize(function () {
  "use strict";
  calculateFullscreenHeight();
});
