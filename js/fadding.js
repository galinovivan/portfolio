$(document).ready(function() {
   var closeLink = $('.close_btn');
    var openLink = $('.open_btn');
    function pageInit(page) {
       openLink.click(function() {
           page.show('slow');
       })
   }


});