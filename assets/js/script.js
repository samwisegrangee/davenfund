$(document).ready(function() {

  $('body').css('display', 'none');
  $('body').fadeIn(1500);

  $('.link').click(function() {

  event.preventDefault();

  newLocation = this.href;

  $('body').fadeOut(1500, newpage);

  });

  function newpage() {

  window.location = newLocation;

  }

  //Lightbox Display with Clicked Image
  //$('#lightBox').css('height', $(document).outerWidth() + 'px');//for when an image is clicked
  //$('.imgSm').click(function () {
  //    var src = $(this).attr('src'); //get the source attribute of the clicked image
  //    var title=$(this).attr('title'); //get the title attribute of clicked image
  //    $('#lightBox img').attr('src', src); //assign src to the fullscreen div tag
  //    $('#lightBox img').attr('title', title); //assign title to the fullscreen div// tag
  //    $('#img-capt').html(title);
  //    $('#lightBox').fadeIn();
  //});

  //$('#lightBox').click(function () {
  //  $(this).fadeOut(); //this will hide the fullscreen div if you click it
  //});


});

$("h1").addClass("animated bounce");
