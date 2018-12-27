export default {
  loadGoogleFonts() {
    window.WebFontConfig = {
      google: {families: ['Josefin+Sans:400,600,700&amp;subset=latin-ext']},
    };

    (function (d) {
      let wf = d.createElement('script'), s = d.scripts[0];
      wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
      wf.async = true;
      s.parentNode.insertBefore(wf, s);
    })(document);

  },

  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};

