function calculateFullscreenHeight() {
    "use strict";
    
    var windowH = $(window).height(),
        heightMax = windowH;
    if (heightMax > 800) {
        heightMax = 800;
    }
    $('.fullheight').css({'height': (windowH) + 'px'});
    $('.minfullheight').css({'min-height': (windowH) + 'px'});
    $('.fullheightMax800').css({'height': (heightMax) + 'px'});
    
    $('.projectimage').css({'max-height': (windowH / 2) + 'px'});
    
//    var scroller = $('header.main2'),
//        contents = scroller.wrapInner('<div>').children(), // wrap a div around the contents
//        height = contents.outerHeight();
//    contents.replaceWith(contents.html()); // unwrap the inner div
//    if (height > windowH) {
//        $('header.main2').css({'height': (height) + 'px;'});
////        $('header.main2').css({'height': (min-height) + 'px;'});
//    }
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











//$(document).ready(function () {
//    "use strict";
//    
////    var menuXPos = $('#menu').position().top;
////    $(window).scroll(function() {
////        var winTop = $(window).scrollTop();
////        if(winTop >= menuXPos){
////            $('#menu').addClass("floating").not().removeClass("normal");
////        } else {
////            $('#menu').addClass("normal").not().removeClass("floating");
////        }
////    });
//    
//    calculateFullscreenHeight();
//});


// for the window resize
$(window).resize(function () {
    "use strict";
    calculateFullscreenHeight();
});



//$(window).load(function () {
//    "use strict";
//    
//        // Cache selectors
//    var topMenu = $("#menu");
//    var topMenuHeight = topMenu.outerHeight();
//        // All list items
//    var menuItems = topMenu.find("a");
//        // Anchors corresponding to menu items
//    var scrollItems = menuItems.map(function () {
//            "use strict";
//            var item = $($(this).attr("href"));
//            if (item.length) {
//                return item;
//            }
//        });
//    
//    $(window).scroll(function () {
//       "use strict";
//        console.log('Test');      
//    });
//    
////    $(window).scroll(function () {
////        "use strict";
////            // Get container scroll position
////        var fromTop = $(this).scrollTop() + topMenuHeight;
////            // Get id of current scroll item
////        var cur = scrollItems.map(function () {
////                if ($(this).offset().top < fromTop) {
////                    return this;
////                }
////            });
////        // Get the id of the current element
////        cur = cur[cur.length - 1];
////        var id = cur && cur.length ? cur[0].id : "";
////        // Set/remove active class
////        menuItems
////            .parent().removeClass("active")
////            .end().filter("[href=#" + id + "]").parent().addClass("active");
////    });
//    
//    
//    
//    
//     $('a').click(function () {
//        var elementClicked = $(this).attr("href"),
//            destination = $(elementClicked).offset().top;
//        $("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination}, 250);
//        return false;
//    });
//    
//    calculateFullscreenHeight();
//});


    
// Bind to scroll
//$(window).scroll(function () {
//    "use strict";
//        // Get container scroll position
//    var fromTop = $(this).scrollTop() + topMenuHeight;
//        // Get id of current scroll item
//    var cur = scrollItems.map(function () {
//            if ($(this).offset().top < fromTop) {
//                return this;
//            }
//        });
//    // Get the id of the current element
//    cur = cur[cur.length - 1];
//    var id = cur && cur.length ? cur[0].id : "";
//    // Set/remove active class
//    menuItems
//        .parent().removeClass("active")
//        .end().filter("[href=#" + id + "]").parent().addClass("active");
//});

   