$('.toogle-menu').on('click', function(e) {
  e.preventDefault;
  $(this).toggleClass('toogle-menu_active');
  $('.slide-menu').toggleClass('slide-menu_active');
  $('.menu li').toggleClass('animate-left');
});


$.get("https://ipinfo.io", function (response) {
    var check_country = response.country;
    if (check_country = 'UA') {
      $('.from-ua').css({'display': 'none'});
      $('.not-from-ua').css({'display': 'inline-block'});
    } else {
      $('.from-ua').css({'display': 'inline-block'});
      $('.not-from-ua').css({'display': 'none'});
    }
}, "jsonp");

var containerEl = document.querySelector('.container-mix');
var mixer = mixitup(containerEl, {
  animation: {
    effects: 'fade scale stagger(50ms)'
  },
  load: {
    filter: 'none'
  }
});

containerEl.classList.add('mixitup-ready');

mixer.show()
  .then(function() {
    mixer.configure({
      animation: {
          effects: 'fade scale'
      }
    });
  });
