const mainNav = document.querySelector('.main-navigation');

const addClass = (selector, ...names) => (selector) ? names.forEach(name => selector.classList.add(name)) : null;
const removeClass = (selector, ...names) => (selector) ? names.forEach(name => selector.classList.remove(name)) : null;

const observeElem = document.querySelector('.header-observer');

observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.intersectionRatio === 0) {
      addClass(mainNav, 'is-sticky', 'container');
      removeClass(mainNav.querySelector('.branding'), 'col-lg-4');
      addClass(mainNav.querySelector('.branding'), 'col-lg-3');
      removeClass(mainNav.querySelector('.menu'), 'col-lg-8');
      addClass(mainNav.querySelector('.menu'), 'col-lg-9');
      
    } else if(entry.intersectionRatio === 1) {
      removeClass(mainNav, 'is-sticky', 'container');
      removeClass(mainNav.querySelector('.branding'), 'col-lg-3');
      addClass(mainNav.querySelector('.branding'), 'col-lg-4');
      removeClass(mainNav.querySelector('.menu'), 'col-lg-9');
      addClass(mainNav.querySelector('.menu'), 'col-lg-8');
      
    }
  });
});

observer.observe(observeElem);

