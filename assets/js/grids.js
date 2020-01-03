"use strict";
const bodyClass = $('body');
const articleList = $('.articles .article-list');

/*** Change Layout by category */
const changeCategoryGrid = () => {
    if(proofClass(bodyClass, 'bericht')) {
        articleList.classList.add('category-list');
    } 
    
    else {
        articleList.classList.add('card-columns')
    }
}

const styleCatElements = () => {
    $$(".category-list > article")
        .map(item => {
            item.classList.add('row');
            item.classList.add('my-5');
            if(item.children[0].classList.contains('img-cnt')) {
                item.children[0].classList.add('col-md-4');
                item.children[1].classList.add('col-md-8');
            } else {
                item.children[0].classList.add('col-md-12');
            }
            item.children[item.children.length - 1].classList.add('col-md-12');
        });
    $$(".card-columns > article")
        .map(item => {
            item.classList.add('card');
            item.classList.add('card-item');
            if(item.children[0].classList.contains('img-cnt')) {
                item.children[0].classList.add('card-img-top');
                item.children[1].classList.add('card-body');
            } else {
                item.children[0].classList.add('card-body');
            }
            // item.querySelector('.body').children.map(subitem => {
            //     console.log(subitem.querySelector('.title'));
            // });
        });
}

const proofPage = () => {
    if (proofClass(bodyClass, 'archive')) {
        changeCategoryGrid();
        styleCatElements();
    } else return;
}
proofPage();

/** Change Layout by content */

const proofLayout = () => {
    const gbCols = $$('.has-2-columns');
    gbCols.forEach(item => {
        console.log(item.classList);
        if (proofClass(item, 'sidebar-left')) {
            console.log('foo');
            item.children.forEach(elem => elem.classList.remove('wp-block-column'));
            item.firstElementChild.classList.add('col-sm-8');
            item.firstElementChild.nextElementSibling.classList.add('col-sm-4');
        } else console.log('bar');
    });
}
proofLayout();
