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


const options = {
  rootMargin: '0px 0px -69% 0px',
  threshold: .50 // half of item height
}

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
