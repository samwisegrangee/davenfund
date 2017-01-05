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


  //Modal Drop Downs by Id: Make sure the <a>'s all have id="[modal tag]-open"
  //$(function() {
  //  $("[id$=-open]").click(function() {
  //    var id = this.id;
  //    var targetId = id.replace('-open', '');
  //    var $target = $('#' + targetId);
  //    $($target).css("display", "block");
  //    $($target).css("overflow-y", "auto");
  //    $("body").css("overflow", "hidden");
  //    $(".modal-container").css("display", "block");
  //    $("html, body").animate({
  //      scrollTop: 0
  //    }, "slow"); //
  //  });
  //});

  //$(function() {
  //  $(".close").click(function(e) {
  //    e.preventDefault();
  //    $(".modal").css("display", "none");
  //    $(".modal").css("overflow-y", "");
  //    $("body").css("overflow", "");
  //    window.location.hash = $("#trigger").attr("id"); //
  //  });
  //});


});

$("h1").addClass("animated bounce");
