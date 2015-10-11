$(document).ready(function() {
  toggle = $("#toggle-menu");	
  $(toggle).next().hide();	
});

$(document).on('click', '#toggle-menu', function (e) {
   $(this).next().slideToggle();
});
