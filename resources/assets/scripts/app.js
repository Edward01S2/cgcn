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


// const headerEl = document.querySelector('.sticky_header')
// const sentinalEl = document.querySelector('#sticky_top')

// const handler = (entries) => {
//   //console.log(entries)
//   // entries is an array of observed dom nodes
//   // we're only interested in the first one at [0]
//   // because that's our .sentinal node.
//   // Here observe whether or not that node is in the viewport
//   if (!entries[0].isIntersecting) {
//     headerEl.classList.add('sticky_active')
//   } else {
//     headerEl.classList.remove('sticky_active')
//   }
// }

// const observer = new window.IntersectionObserver(handler)
// // give the observer some dom nodes to keep an eye on
// observer.observe(sentinalEl)

var options
function setObserver() {
  if($(window).width() < 1024) {
    options = {
      rootMargin: '0px 0px -84% 0px',
      threshold: .25 // half of item height
    }
  }
  else if($(window).width() < 1280) {
    options = {
      rootMargin: '0px 0px -76% 0px',
      threshold: .25 // half of item height
    }
  }
  else if($(window).width() < 1440) {
    options = {
      rootMargin: '0px 0px -79% 0px',
      threshold: .75 // half of item height
    }
  }
  else {
    options = {
      rootMargin: '0px 0px -75% 0px',
      threshold: .75 // half of item height
    }
  }
}

setObserver();
$(window).resize(function() {
  setObserver();
});

const circle = document.querySelector('#sticky_header');

const observer = new IntersectionObserver(entries => {
  const [{ isIntersecting }] = entries
  if (isIntersecting) {
    // console.log('intersected');
    circle.classList.add('sticky_active');
  } else {
    // console.log('not-intersecting');
    circle.classList.remove('sticky_active');
  }
}, options);

observer.observe(circle);


});
