$(window).on('load', function() {
   var preloader = $('.page_preloader');
    var spinner = preloader.find('.spinner');
    spinner.fadeOut();
    preloader.delay(350).fadeOut('slow');
});