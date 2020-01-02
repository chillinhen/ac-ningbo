"use strict";
const mainMenu = $('#mainNav');
const offMenu = $('#offMenu');

const showMenu = () => {
    if (screen.width >= 992) {
        //console.log("large");
        displayMenu(mainMenu, 'block');
        //displayMenu(offMenu, 'block');
    } else {
        //console.log("small");
        displayMenu(mainMenu, 'none');
        //displayMenu(offMenu, 'block');
    }
}

const displayMenu = (item, arg) => item.style.display = arg;

const reportWindowSize = () => {
    //console.log(`Height: ${window.innerHeight} and width: ${window.innerWidth}`);
    showMenu();
}

showMenu();
window.addEventListener('resize', reportWindowSize);

