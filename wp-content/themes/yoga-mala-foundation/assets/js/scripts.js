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
         scrollTop: jQuery("div#programsHeader").offset().top
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


  // class ProjectPlayer {
  //   constructor({iframeId, initialVideoId, modalId}) {
  //     this.initialVideoId     = initialVideoId || '342133424';
  //     this.iframeId           = iframeId || '#program-video-iframe';
  //     this.iframe             = document.querySelector(this.iframeId);
  //     this.modal              = $( modalId || '#program-video-modal' );
  //     this.errorModal         = $('#error-modal');
  //     this.vimeoPlayer;
  //     this.playerLoaderId;
  //     this.videoLoadInterval  = 25;       // miliseconds
  //     this.loadVideoTime      =  5;       // seconds
  //   }    

  //   allElementsPresent() {
  //     if (!this.iframe) {             // query selector returns an element or null
  //       console.log('Video iframe cannot be found.');
  //       return false;
  //     }
  //     if (!this.modal.length) {       // jQuery returns an array
  //       console.log('Video modal cannot be found.');
  //       return false;
  //     }

  //     return true;
  //   }

  //   disableVideos() {
  //     /* Code to hide buttons (video images) */
  //   }

  //   openModalWithError(message) {
  //     $( this.errorModal ).find('p').text(message);
  //     $( this.errorModal ).foundation('open');
  //   }

  //   loadEventHandlers() {
  //     // Modal open triggers
  //     const videoButtons = document.querySelectorAll('.open-modal');
  //     [...videoButtons].forEach(function(button) {
  //       button.addEventListener('click', function(e) {

  //         const { videoId } = e.target.dataset;
  //         this.vimeoPlayer.loadVideo(videoId)
  //           .then((id) => {
  //             this.vimeoPlayer.play();
  //             $( this.modal ).foundation('open');
  //           })
  //           .catch((err) => {
  //             if (err.message = 'The video id must be an integer.') {
  //               this.openModalWithError('Unfortunately, the video could not be loaded. Please contact support.\n\n------- data -------\nVideo:' + videoId + '\nInitial video: ' + this.initialVideoId);
  //             }
  //           });
  //       }.bind(this));
  //     }.bind(this));

  //     // Close button and black backdrop click event handlers
  //     const closeButton = document.querySelector('.close-modal');
  //     closeButton.addEventListener('click', function(e) {
  //       $( this.modal ).foundation('close');
  //     }.bind(this));
  //     $(document).on('closed.zf.reveal', '[data-reveal]', () => {
  //       if (this.vimeoPlayer) {
  //         this.vimeoPlayer.unload();
  //       }
  //     });
  //   }

  //   init() {
  //     if (!this.allElementsPresent()) {
  //       this.disableVideos();
  //       return;
  //     }

  //     let count = 0;
  //     const max = Math.round(this.loadVideoTime * 1000 / this.videoLoadInterval);
  //     this.playerLoaderId = setInterval(() => {
  //       if (count >= max) {
  //         clearInterval(this.playerLoaderId);
  //         return;
  //       }
  //       count++;

  //       if (Vimeo) {
  //         clearInterval(this.playerLoaderId);
  //         this.iframe.src = 'https://player.vimeo.com/video/' + this.initialVideoId + '?byline=0&portrait=0';
  //         this.vimeoPlayer = new Vimeo.Player('program-video-iframe');
  //       }
  //     }, this.videoLoadInterval);
      
  //     this.loadEventHandlers();
  //   }
  // }

  // const projectPlayer = new ProjectPlayer({/* You can pass options here */});
  // projectPlayer.init();

// The below is transpiled code from above using https://babeljs.io/repl
// In case any changes need to be made to the modal and video load, change the above code and run this through babel.
// This is done to support older browsers/devices.

function _instanceof(left, right) { if (right != null && typeof Symbol !== "undefined" && right[Symbol.hasInstance]) { return !!right[Symbol.hasInstance](left); } else { return left instanceof right; } }

function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _nonIterableSpread(); }

function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance"); }

function _iterableToArray(iter) { if (Symbol.iterator in Object(iter) || Object.prototype.toString.call(iter) === "[object Arguments]") return Array.from(iter); }

function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = new Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } }

function _classCallCheck(instance, Constructor) { if (!_instanceof(instance, Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var ProjectPlayer =
/*#__PURE__*/
function () {
  function ProjectPlayer(_ref) {
    var iframeId = _ref.iframeId,
        initialVideoId = _ref.initialVideoId,
        modalId = _ref.modalId;

    _classCallCheck(this, ProjectPlayer);

    this.initialVideoId = initialVideoId || '342133424';
    this.iframeId = iframeId || '#program-video-iframe';
    this.iframe = document.querySelector(this.iframeId);
    this.modal = $(modalId || '#program-video-modal');
    this.errorModal = $('#error-modal');
    this.vimeoPlayer;
    this.playerLoaderId;
    this.videoLoadInterval = 25; // miliseconds

    this.loadVideoTime = 5; // seconds
  }

  _createClass(ProjectPlayer, [{
    key: "allElementsPresent",
    value: function allElementsPresent() {
      if (!this.iframe) {
        // query selector returns an element or null
        console.log('Video iframe cannot be found.');
        return false;
      }

      if (!this.modal.length) {
        // jQuery returns an array
        console.log('Video modal cannot be found.');
        return false;
      }

      return true;
    }
  }, {
    key: "disableVideos",
    value: function disableVideos() {
      /* Code to hide buttons (video images) */
    }
  }, {
    key: "openModalWithError",
    value: function openModalWithError(message) {
      $(this.errorModal).find('p').text(message);
      $(this.errorModal).foundation('open');
    }
  }, {
    key: "loadEventHandlers",
    value: function loadEventHandlers() {
      var _this2 = this;

      // Modal open triggers
      var videoButtons = document.querySelectorAll('.open-modal');

      _toConsumableArray(videoButtons).forEach(function (button) {
        button.addEventListener('click', function (e) {
          var _this = this;

          var videoId = e.target.dataset.videoId;
          this.vimeoPlayer.loadVideo(videoId).then(function (id) {
            _this.vimeoPlayer.play();

            $(_this.modal).foundation('open');
          }).catch(function (err) {
            if (err.message = 'The video id must be an integer.') {
              _this.openModalWithError('Unfortunately, the video could not be loaded. Please contact support.\n\n------- data -------\nVideo:' + videoId + '\nInitial video: ' + _this.initialVideoId);
            }
          });
        }.bind(this));
      }.bind(this)); // Close button and black backdrop click event handlers


      var closeButton = document.querySelector('.close-modal');
      closeButton.addEventListener('click', function (e) {
        $(this.modal).foundation('close');
      }.bind(this));
      $(document).on('closed.zf.reveal', '[data-reveal]', function () {
        if (_this2.vimeoPlayer) {
          _this2.vimeoPlayer.unload();
        }
      });
    }
  }, {
    key: "init",
    value: function init() {
      var _this3 = this;

      if (!this.allElementsPresent()) {
        this.disableVideos();
        return;
      }

      var count = 0;
      var max = Math.round(this.loadVideoTime * 1000 / this.videoLoadInterval);
      this.playerLoaderId = setInterval(function () {
        if (count >= max) {
          clearInterval(_this3.playerLoaderId);
          return;
        }

        count++;

        if (Vimeo) {
          clearInterval(_this3.playerLoaderId);
          _this3.iframe.src = 'https://player.vimeo.com/video/' + _this3.initialVideoId + '?byline=0&portrait=0';
          _this3.vimeoPlayer = new Vimeo.Player('program-video-iframe');
        }
      }, this.videoLoadInterval);
      this.loadEventHandlers();
    }
  }]);

  return ProjectPlayer;
}();

var projectPlayer = new ProjectPlayer({
  /* You can pass options here */
});
projectPlayer.init();
});
