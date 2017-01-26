'use strict'

$(document).ready(function () {

    //sidebar trigger
    $("#toc")
    .sidebar('setting', 'transition', 'overlay')
    .sidebar('attach events', '.open.button', 'show')

    // .sidebar('toggle')
    ;
    //sidebar trigger

    $('.accordion')
      .accordion({
        transition: 'drop'
      })
    ;
    $('.poptop')
      .popup({
        inline: true
      })
    ;

    $('.dropdown')
      .dropdown({
        // you can use any ui transition
        transition: 'drop'
      })
    ;

      $('.ui.embed').embed();



});
