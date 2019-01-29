// Select DOM Items / const so it is constant
const menuBtn = document.querySelector //querySelector returns the first element that matches a specified css selector
('.menu-btn');
const menu = document.querySelector
('.menu');
const menuNav = document.querySelector
('.menu-nav');
const menuBranding = document.querySelector
('.menu-branding');
const menuText = document.querySelector
('.menu-text');
const navItems = document.querySelectorAll //querySelectorAll returns all matches in the css
('.nav-item');

//Set Initial State Of Menu
let showMenu = false;

menuBtn.addEventListener('click', toggleMenu); //add event listener for click on menu button

function toggleMenu() { //function with the name toggleMenu
    if(!showMenu) {
        menuBtn.classList.add('close');
        menu.classList.add('show');
        menuNav.classList.add('show');
        menuBranding.classList.add('show');
        navItems.forEach(item => item.classList.add('show'));
        menuText.style.display = "block";
        // Set Menu State
        showMenu = true;   
    }   else {
        menuBtn.classList.remove('close');
        menu.classList.remove('show');
        menuNav.classList.remove('show');
        menuBranding.classList.remove('show');
        navItems.forEach(item => item.classList.remove('show'));
        menuText.style.display = "none";
        // Set Menu State
        showMenu = false;

    }
}