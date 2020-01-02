"use strict";
const bodyClass = $('body').classList;
const articleList = $('.articles .article-list');

const changeGrid = () => {
    if(proofClass('bericht')) {
        articleList.classList.add('category-list');
    } 
    
    else {
        articleList.classList.add('card-columns')
    }
}



const styleElements = () => {
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
const proofClass = cls => Array.from(bodyClass).some(item => item.includes(cls));


if (proofClass('archive')) {
    changeGrid();
    styleElements();
}

