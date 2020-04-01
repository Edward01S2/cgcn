/**
 * External Dependencies
 */
import 'jquery';
import 'alpinejs';
// import 'bootstrap';

$(document).ready(() => {
  // console.log('Hello world');
  $('input[type=checkbox]').addClass('form-checkbox');

  $(document).bind('gform_post_render', function() {
    $('input[type=checkbox]').addClass('form-checkbox');
  })


// const options = {
//   rootMargin: '0px 0px -80% 0px',
//   threshold: .50 // half of item height
// }

// const circle = document.querySelector('#sticky_header');

// const observer = new IntersectionObserver(entries => {
//   const [{ isIntersecting }] = entries
//   if (isIntersecting) {
//     // console.log('intersected');
//     circle.classList.add('sticky_active');
//   } else {
//     // console.log('not-intersecting');
//     circle.classList.remove('sticky_active');
//   }
// }, options);

// observer.observe(circle);

var header = $("#sticky_header");
$(window).on("scroll resize", function() {
  var scroll = $(window).scrollTop();
  var windowsize = $(window).width();

    if (windowsize <= 612) {
      //console.log(windowsize)
      //if the window is greater than 440px wide then turn on jScrollPane..
      if (scroll >= 225) {
        header.fadeIn("fast");
      } else {
        header.hide();
      }
    }
    if (windowsize <= 768) {
      console.log(windowsize)
      //if the window is greater than 440px wide then turn on jScrollPane..
      if (scroll >= 360) {
        header.fadeIn("fast");
      } else {
        header.hide();
      }
    }
    else {
      console.log(windowsize)
      //if the window is greater than 440px wide then turn on jScrollPane..
      if (scroll >= 475) {
        header.fadeIn("fast");
      } else {
        header.hide();
      }
    }



  // if (scroll >= 450) {
  //     header.fadeIn("fast");
  // } else {
  //     header.hide();
  // }
});

});
