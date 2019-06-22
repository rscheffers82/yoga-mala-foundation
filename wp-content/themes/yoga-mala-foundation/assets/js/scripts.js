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
      // console.log('clicked!');
      jQuery('html, body').animate({
       scrollTop: jQuery("div#inner-content").offset().top
      }, 1500);
    });

    // Programs
    jQuery('li.programs a').click(function(e){
        e.preventDefault();
        // console.log('clicked!');
        jQuery('html, body').animate({
         scrollTop: jQuery("div#programs").offset().top
        }, 1500);
      });

    // Partners
    jQuery('li.partners a').click(function(e){
        e.preventDefault();
        // console.log('clicked!');
        jQuery('html, body').animate({
         scrollTop: jQuery("div#partners").offset().top
        }, 1500);
      });

    // Get Involved
    jQuery('li.involve a').click(function(e){
        e.preventDefault();
        // console.log('clicked!');
        jQuery('html, body').animate({
         scrollTop: jQuery("div#contact").offset().top
        }, 1500);
      });


// CLose Off Canvas on Menu click (mobile)
  jQuery('.off-canvas a').on('click', function() {
      jQuery('.off-canvas').foundation('close');
  });


  class ProjectPlayer {
    constructor({iframeId, initialVideoId, modalId}) {
      this.initialVideoId     = initialVideoId || '342133424';
      this.iframeId           = iframeId || '#program-video-iframe';
      this.iframe             = document.querySelector(this.iframeId);
      this.modal              = $( modalId || '#program-video-modal' );
      this.errorModal         = $('#error-modal');
      this.vimeoPlayer;
      this.playerLoaderId;
      this.videoLoadInterval  = 25;       // miliseconds
      this.loadVideoTime      =  5;       // seconds
    }    

    allElementsPresent() {
      if (!this.iframe) {             // query selector returns an element or null
        console.log('Video iframe cannot be found.');
        return false;
      }
      if (!this.modal.length) {       // jQuery returns an array
        console.log('Video modal cannot be found.');
        return false;
      }

      return true;
    }

    disableVideos() {
      /* Code to hide buttons (video images) */
    }

    openModalWithError(message) {
      $( this.errorModal ).find('p').text(message);
      $( this.errorModal ).foundation('open');
    }

    loadEventHandlers() {
      // Modal open triggers
      const videoButtons = document.querySelectorAll('.open-modal');
      [...videoButtons].forEach(function(button) {
        button.addEventListener('click', function(e) {

          const { videoId } = e.target.dataset;
          this.vimeoPlayer.loadVideo(videoId)
            .then((id) => {
              this.vimeoPlayer.play();
              $( this.modal ).foundation('open');
            })
            .catch((err) => {
              if (err.message = 'The video id must be an integer.') {
                this.openModalWithError('Unfortunately, the video could not be loaded. Please contact support.\n\n------- data -------\nVideo:' + videoId + '\nInitial video: ' + this.initialVideoId);
              }
            });
        }.bind(this));
      }.bind(this));

      // Close button and black backdrop click event handlers
      const closeButton = document.querySelector('.close-modal');
      closeButton.addEventListener('click', function(e) {
        $( this.modal ).foundation('close');
      }.bind(this));
      $(document).on('closed.zf.reveal', '[data-reveal]', () => {
        if (this.vimeoPlayer) {
          this.vimeoPlayer.unload();
        }
      });
    }

    init() {
      if (!this.allElementsPresent()) {
        this.disableVideos();
        return;
      }

      let count = 0;
      const max = Math.round(this.loadVideoTime * 1000 / this.videoLoadInterval);
      this.playerLoaderId = setInterval(() => {
        if (count >= max) {
          clearInterval(this.playerLoaderId);
          return;
        }
        count++;

        if (Vimeo) {
          clearInterval(this.playerLoaderId);
          this.iframe.src = 'https://player.vimeo.com/video/' + this.initialVideoId + '?byline=0&portrait=0';
          this.vimeoPlayer = new Vimeo.Player('program-video-iframe');
        }
      }, this.videoLoadInterval);
      
      this.loadEventHandlers();
    }
  }

  const projectPlayer = new ProjectPlayer({/* You can pass options here */});
  projectPlayer.init();
});
