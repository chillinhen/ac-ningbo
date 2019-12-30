"use strict";
// scroll-to-top
const scrollIcon = $('.scroll-to-top_cnt');

const showScrollToTop = () => scrollIcon.classList.add('show');
const hideScrollToTop = () => scrollIcon.classList.remove('show');

const smoothScrollToTop = () => window.scrollTo({ top: 0, left:0, behavior: "smooth" });

window.addEventListener('scroll', () => {
     if(window.scrollY > 300) showScrollToTop();
     else hideScrollToTop();
});
scrollIcon.addEventListener('click', () => smoothScrollToTop());
