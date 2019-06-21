jQuery(document).foundation();
/*
These functions make sure WordPress
and Foundation play nice together.
*/

jQuery(document).ready(function() {

  const $ = jQuery;

  // Remove empty P tags created by WP inside of Accordion and Orbit
  jQuery('.accordion p:empty, .orbit p:empty').remove();

	 // Makes sure last grid item floats left
	jQuery('.archive-grid .columns').last().addClass( 'end' );

	// Adds Flex Video to YouTube and Vimeo Embeds
  jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').each(function() {
    if ( jQuery(this).innerWidth() / jQuery(this).innerHeight() > 1.5 ) {
      jQuery(this).wrap("<div class='widescreen flex-video'/>");
    } else {
      jQuery(this).wrap("<div class='flex-video'/>");
    }
  });

  // Adds scrollTo Menu functionality to page sections
  // let navitems = ['about', 'programs', 'partners', 'involve'];
  //
  // for (let i = 0; i<navitems.length; i++) {
  //
  //   jQuery('ul#menu-main-1 li.' + i +' a').click(function(e){
  //       e.preventDefault();
  //       jQuery('html, body').animate({
  //        scrollTop: jQuery("div#'+ i + '").offset().top
  //       }, 1500);
  //     });
  // }

  // jQuery(document).foundation({
  //   offcanvas : {
  //       // Sets method in which offcanvas opens.
  //       // [ move | overlap_single | overlap ]
  //       open_method: 'move',
  //       // Should the menu close when a menu link is clicked?
  //       // [ true | false ]
  //       close_on_click : true
  //     }
  // });

  // ABout
  jQuery('li.about a').click(function(e){
      e.preventDefault();
      console.log('clicked!');
      jQuery('html, body').animate({
       scrollTop: jQuery("div#inner-content").offset().top
      }, 1500);
    });

    // Programs
    jQuery('li.programs a').click(function(e){
        e.preventDefault();
        console.log('clicked!');
        jQuery('html, body').animate({
         scrollTop: jQuery("div#programs").offset().top
        }, 1500);
      });

    // Partners
    jQuery('li.partners a').click(function(e){
        e.preventDefault();
        console.log('clicked!');
        jQuery('html, body').animate({
         scrollTop: jQuery("div#partners").offset().top
        }, 1500);
      });

    // Get Involved
    jQuery('li.involve a').click(function(e){
        e.preventDefault();
        console.log('clicked!');
        jQuery('html, body').animate({
         scrollTop: jQuery("div#contact").offset().top
        }, 1500);
      });


// CLose Off Canvas on Menu click (mobile)
  jQuery('.off-canvas a').on('click', function() {
      jQuery('.off-canvas').foundation('close');
  });

  $('.open-modal').click(function() {
    const modal = $('#program-video-modal');
    const videoHolder = $('.flex-video');
    const { videoId } =  this.dataset;
    const content = videoId 
      ? '<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/' + videoId + '?autoplay=1&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div>'
      : '<div style="padding:56.25% 0 0 0;position:relative; display: flex; justify-content: center; align-items: center;"><p>Unable to find video</p></div>';
    $( videoHolder ).append(content);
    $( modal ).foundation('open');
  });
  
  $('.close-modal').on('click', function() {
    const modal = $('#program-video-modal');
    const videoHolder = $('.flex-video');
    $( videoHolder ).find( 'div' ).remove();
    $( modal ).foundation('close');
  });


});
