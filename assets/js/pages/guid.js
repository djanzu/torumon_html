$(document).ready(function () {
  var slider = $('.slide').slick({
    dots: false,
    speed: 300,
    prevArrow: '<img src="../assets/img/guid/prev.svg" class="slide-arrow prev-arrow">',
    nextArrow: '<img src="../assets/img/guid/next.svg" class="slide-arrow next-arrow">'
  });
  $('input[name="tab_item"]').change(function () {
    slider.slick('setPosition');
  });
});