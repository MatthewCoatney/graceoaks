
(function($){
    $.fn.extend({
        rotaterator: function(options) {

            var defaults = {
                fadeSpeed: 500,
                pauseSpeed: 100,
				child:null
            };

            var options = $.extend(defaults, options);

            return this.each(function() {
                  var o =options;
                  var obj = $(this);
                  var items = $(obj.children(), obj);
				  items.each(function() {$(this).hide();})
				  if(!o.child){var next = $(obj).children(':first');
				  }else{var next = o.child;
				  }
				  $(next).fadeIn(o.fadeSpeed, function() {
						$(next).delay(o.pauseSpeed).fadeOut(o.fadeSpeed, function() {
							var next = $(this).next();
							if (next.length == 0){
									next = $(obj).children(':first');
							}
							$(obj).rotaterator({child : next, fadeSpeed : o.fadeSpeed, pauseSpeed : o.pauseSpeed});
						})
					});
            });
        }
    });
})(jQuery);

$(function() {
  $('.hamburger').click(function () {
    showHideMobile();
  });

  $(".dimmer").click(function() {
    showHideMobile();
  });

  $('li .icon-arrow').click(function () {
    $(this).parent().parent().toggleClass('showSubmenu');
  });
});

function showHideMobile() {
  $(".hamburger").toggleClass('active');
  $(".hamburger").parent('.menu').toggleClass('active');
  $('.dimmer').toggleClass('active');
  $('body').toggleClass('no-scrolling');
}



$(document).foundation();



$(document).ready(function () {



   $('#rotate').rotaterator({fadeSpeed:500, pauseSpeed:3000});
   $('.table-row:even').css('background-color','#f4f4f4');

//$('.slip-control').css('height','2em;');
//$('.slip-control').css('width','2em;');

   $('.playpause').on('click', function() {


     if($('.slipper').prop( "paused" ) == false){ //playing
       $('.slipper').prop( "paused",true );
       $('.slipper').slick('slickPause');
       $(this).find('use').attr('xlink:href','img/symbol-defs.svg#icon-play3');
     }
     else if($('.slipper').prop( "paused" ) == true){ //paused
       $('.slipper').prop( "paused",false );
       $('.slipper').slick('slickPlay');
       $(this).find('use').attr('xlink:href','img/symbol-defs.svg#icon-pause2');
     }
     else{ // undefined = playing

       $('.slipper').prop( "paused",true );
       $('.slipper').slick('slickPause');
       $(this).find('use').attr('xlink:href','img/symbol-defs.svg#icon-play3');
     }
   });

   $('.next').on('click', function() {
     $('.slipper').prop( "paused",true );
     $('.slipper').slick('slickPause');
     $('.playpause').find('use').attr('xlink:href','img/symbol-defs.svg#icon-play3');
       $('.slipper').slick('slickNext');
   });

   $('.prev').on('click', function() {
     $('.slipper').prop( "paused",true );
     $('.slipper').slick('slickPause');
     $('.playpause').find('use').attr('xlink:href','img/symbol-defs.svg#icon-play3');
       $('.slipper').slick('slickPrev');
   });
   /*
   $('a[data-slide]').click(function(e) {
      e.preventDefault();
      var slideno = $(this).data('slide');
      $('.slipper').slick('slickGoTo', slideno - 1);
    });
*/
});
