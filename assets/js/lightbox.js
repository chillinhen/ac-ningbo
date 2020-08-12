"use strict";

const initGalleryLight = elem => {
    if (elem.length >= 1) {
        elem.forEach((item, i) => {
            if (item.querySelectorAll('figure a')) {

                item.querySelectorAll('figure  a').forEach(a => {
                    a.classList.add('glightbox');
                    a.setAttribute('data-gallery', `gallery-${i}`);
                });
            } else return;
        });
    } else return;
}

const initThumbLight = elem => {
    if (elem.length != 0) {
        console.log(elem.length)
        elem.forEach(item => item.parentNode.nodeName === "A" ? item.parentNode.classList.add('glightbox') : null);
    } else return;
}

initGalleryLight($$('[class*="gallery"][class*="columns"]'));
initThumbLight($$('article[class*="post"] p > img'));

const lightbox = GLightbox({
    touchNavigation: true,
    loop: true,
    autoplayVideos: true,
    onOpen: () => {
        //console.log('Lightbox opened')
    },
    beforeSlideLoad: (slide, data) => {
        // Need to execute a script in the slide?
        // You can do that here...
    }
});