window.onload = function() {
  $( ".review-image" ).hover(function(){
    $('.change-foto').css('z-index',10);
  }, function() {
    // убрали мышь с элемента
    $('.change-foto').css('z-index', -1);
  });
};
function func3() {
  $.fancybox.open([], {
    loop : true,
    thumbs : {
      autoStart : true
    }
  });
};