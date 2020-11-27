

 /*Bloquear scroll si no se le hace click dentro del mapa*/

 $('.googlemap').click(function () {
  $('.googlemap iframe').css("pointer-events", "auto");
});

$( ".googlemap" ).mouseleave(function() {
$('.googlemap iframe').css("pointer-events", "none"); 
});

// JavaScript Document
$(document).ready(function() {
  $('#autoWidth').lightSlider({
      autoWidth:true,
      loop:true,
      onSliderLoad: function() {
          $('#autoWidth').removeClass('cS-hidden');
      } 
  });  
});