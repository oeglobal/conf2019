import hoverintent from 'hoverintent/dist/hoverintent.min';

export default {
  loadGoogleFonts() {
    window.WebFontConfig = {
      google: { families: ['Montserrat:400,600,700&amp;subset=latin-ext'] },
    };

    (function (d) {
      let wf = d.createElement('script'), s = d.scripts[0];
      wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
      wf.async = true;
      s.parentNode.insertBefore(wf, s);
    })(document);

  },

  dropDown() {
    $('.nav-dropdown .menu-item').each(function () {

      hoverintent(this,
        () => {
          $(this).addClass('is-active');
        },
        () => {
          $(this).removeClass('is-active');
        }).options({
        timeout: 500,
        handleFocus: true,
      });

      $(this).on('click', function (event) {
        $(this).toggleClass('is-active');
        event.stopPropagation();
      });
    });
  },

  mobileMenu() {
    $('.js-toggle-menu').on('click', () => {
      $('body').toggleClass('menu-open');
    });
  },

  init() {
    this.loadGoogleFonts();
    this.dropDown();
    this.mobileMenu();
  }
  ,
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  }
  ,
};

