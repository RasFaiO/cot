//máximo de contenido
$('.card-content>p').each(function(){
  $(this).html($(this).text().substring(0,125))
})
$(document).ready(function(){
  //dropdown
  $(".dropdown-trigger").dropdown(
    {hover: true}
  );
  //Slider
  $('.slider').slider({
    fullwidth: true
  });
  //Parallax
  $('.parallax').parallax();
  //select
  $('select').material_select();
});
// Pause slider
$('.slider').slider('pause');
// Start slider
$('.slider').slider('start');
// Next slide
$('.slider').slider('next');
// Previous slide
$('.slider').slider('prev');
$(".button-collapse").sideNav();