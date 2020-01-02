"use strict";
const mainMenu = $('#mainNav');

const convert2BSMenu = () => {
    mainMenuNavbar();
    addDropDownCls(mainMenuNavbar().querySelectorAll('.sub-menu'), 'dropdown-menu', 'dropdown-item');
    addDropDownCls(mainMenuNavbar().querySelectorAll('.menu-item-has-children'), 'dropdown', 'dropdown-toggle');
    levelCls();
}

const mainMenuNavbar = () => {
    const navBar = mainMenu.querySelector('ul');
    navBar.classList.add('navbar-nav');
    navBar.classList.add('justify-content-end');
    navBar.classList.add('level-1');
    navBar.querySelectorAll('li').forEach(item => item.classList.add('nav-item'));
    navBar.querySelectorAll('a').forEach(item => item.classList.add('nav-link'));
    return navBar;
}

const addDropDownCls = (selector, parentCls, childCls) => {
    const subMenu = selector;
    subMenu.forEach(item => {
        item.classList.add(parentCls);
        item.querySelectorAll('a').forEach( subItem => subItem.classList.add(childCls));
    });
}

const levelCls = () => {
    $('.level-1').querySelectorAll('.sub-menu').forEach( item => item.classList.add('level-2'));
    $('.level-2').querySelectorAll('.sub-menu').forEach( item => item.classList.add('level-3'));   
}

const showMenu = () => {
    if (screen.width >= 992) {
        //console.log("large");
        displayMenu(mainMenu, 'block');
    } else {
        //console.log("small");
        displayMenu(mainMenu, 'none');
    }
}

const displayMenu = (item, arg) => item.style.display = arg;

const reportWindowSize = () => {
    //console.log(`Height: ${window.innerHeight} and width: ${window.innerWidth}`);
    showMenu();
}

showMenu();
window.addEventListener('resize', reportWindowSize);

//convert2BSMenu();
