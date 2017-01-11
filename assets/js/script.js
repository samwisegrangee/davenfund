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


  //Bring in the Login Card
  $('.log-it').click(function() {
    $('#video-card').fadeOut(100);
    $('#register-card').fadeOut(100);
    $('#login-card').fadeIn(300);
  });

  //Bring in the Register Card
  $('.reg-it').click(function() {
    $('#login-card').fadeOut(100);
    $('#register-card').fadeIn(300);
  });

  //Bring in the Buffer Card
  $('.buff-it').click(function() {
    $('#register-card').fadeOut(100);
    $('#buffer-card').fadeIn(300);
  });

  //Shuffle Gallery
  $(function () {
    var parent = $("#shuffle");
    var divs = parent.children();
    while (divs.length) {
      parent.append(divs.splice(Math.floor(Math.random() * divs.length), 1)[0]);
    }
  });


});
