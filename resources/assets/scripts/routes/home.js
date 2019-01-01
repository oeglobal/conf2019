require('lightgallery');

export default {
  loadGallery() {
    require(['lg-thumbnail'], function(){
      $('#lightgallery').lightGallery({
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
