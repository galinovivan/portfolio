$(document).ready(function() {
  var lis = $('.carousel_wrapper li');
  for (var i = 0; i < lis.lenght; i++) {
    lis[i].css('position', 'relative');
    var span = document.createElement('span');
    span.style.cssText = 'position: absolute;left: 0; top: 0';
    span.innerHTML = i + 1;
    lis[i].innerHTML(span);
  };
  var count = 1;
  var quantity = 4;
  var width = $('carousel_wrapper').css('width');

  var carousel = $('.carousel_wrapper');
  var list = $('.carousel_wrapper ul');

  var position = 0;

  setTimeout(carouselInit(), 2000);

  function carouselInit() {
    if (count < quantity) {
    position = Math.min(position + width * count, 0);
    list.css('margin-left', position + 'px');
  } else {
    count = 0;
  }
  }
});
