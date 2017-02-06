$(document).ready(function() {

  //Fade In Page
  $('body').css('display', 'none');
  $('body').fadeIn(1500);

  $('.link').click(function() {

  event.preventDefault();

  newLocation = this.href;
  //Fade Out Page

  $('body').fadeOut(1500, newpage);

  });

  function newpage() {

  window.location = newLocation;

  }

  //Bouncing Headers
  $("h1").addClass("animated bounce");

  //Shuffle Gallery
  $(function () {
    var parent = $("#shuffle");
    var divs = parent.children();
    while (divs.length) {
      parent.append(divs.splice(Math.floor(Math.random() * divs.length), 1)[0]);
    }
  });

  //Toggles the size of the Question boxes
  $(".q-box").click(function(){
    $(this).toggleClass("big");
  });



});
