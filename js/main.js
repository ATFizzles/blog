$('.post').readmore({
    moreLink: '<a href="#">More examples and options</a>',
    maxHeight: 100,
    afterToggle: function(trigger, element, expanded) {
      if(! expanded) { // The "Close" link was clicked
        $('html, body').animate( { scrollTop: element.offset().top }, {duration: 100 } );
      }
    }
  });
    $('article').readmore({maxHeight: 240});