require('./bootstrap');
var $ = require( "jquery" );

$(document).ready(function() {

  $('.single-faq').click(
    function() {
      $(this).children('.plus').toggleClass('hide');
      $(this).children('.minus').toggleClass('hide');
      $(this).children('p').toggleClass('hide');
    }
  );

})
