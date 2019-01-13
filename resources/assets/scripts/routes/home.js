require('lightgallery');

export default {
  loadGallery() {
    require(['lg-thumbnail'], function () {
      $('#lightgallery').lightGallery({
        exThumbImage: 'data-exthumbimage',
      });
    });
  },

  init() {
    this.loadGallery();
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
