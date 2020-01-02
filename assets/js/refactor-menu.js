"use strict";
const mainMenu = $('#mainNav');
const offMenu = $('#offMenu');

const mainNavClass = [
    'navbar-nav',
    'justify-content-end'
];

const offNavClass = [
    'nav',
    'flex-column'
];

const levelCls = () => {
    const levels = ['1', '2', '3'];
    levels.forEach(item => console.log(`level-${item}`));
}

const callChildren = (selector, nr) => {
    nr += 1;
    selector.children.forEach(item =>  {
        if(item.nodeName === "UL") {
            item.classList.add(`level-${nr}`);
            console.log(item);
            item.children;      
        } else return;
    });
}
callChildren(mainMenu, 0);

// const convert2BSMenu = () => {
//     createNavbar(mainMenu, 'navbar-nav', 'justify-content-end');
//     createNavbar(offMenu, 'nav', 'flex-column');

//     createNavbarLinks(mainMenu);
//     addDropDownCls(createNavbarLinks(mainMenu).querySelectorAll('.sub-menu'), 'dropdown-menu', 'dropdown-item');
//     addDropDownCls(createNavbarLinks(mainMenu).querySelectorAll('.menu-item-has-children'), 'dropdown', 'dropdown-toggle');
//     addDropDownCls(createNavbarLinks(offMenu).querySelectorAll('.sub-menu'), 'dropdown-menu', 'dropdown-item');
//     addDropDownCls(createNavbarLinks(offMenu).querySelectorAll('.menu-item-has-children'), 'dropdown', 'dropdown-toggle');

//     levelCls();
// }

// const createNavbarLinks = selector => {
//     const navBar = selector.querySelector('ul');
//     // navBar.classList.add('navbar-nav');
//     // navBar.classList.add('justify-content-end');
//     navBar.classList.add('level-1');
//     document.querySelectorAll('.level-1 > li').forEach(item => item.classList.add('nav-item'));
//     document.querySelectorAll('.level-1 > li > a').forEach(item => item.classList.add('nav-link'));
//     return navBar;
// }

// const createNavbar = (selector, cls1, cls2) => {
//     const navBar = selector.querySelector('ul');
//     navBar.classList.add(cls1);
//     navBar.classList.add(cls2);
// }

// const addDropDownCls = (selector, parentCls, childCls) => {
//     const subMenu = selector;
//     subMenu.forEach(item => {
//         item.classList.add(parentCls);
//         item.querySelectorAll('a').forEach( subItem => subItem.classList.add(childCls));
//     });
// }

// const levelCls = () => {
//     $('.level-1').querySelectorAll('.sub-menu').forEach( item => item.classList.add('level-2'));
//     $('.level-2').querySelectorAll('.sub-menu').forEach( item => item.classList.add('level-3'));   
// }
