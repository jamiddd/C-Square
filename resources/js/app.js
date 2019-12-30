import {MDCTopAppBar} from '@material/top-app-bar';
import {MDCRipple} from '@material/ripple';
import {MDCDrawer} from "@material/drawer";
import {MDCMenu} from '@material/menu';
// Instantiation
const topAppBarElement = document.querySelector('.mdc-top-app-bar');
const topAppBar = new MDCTopAppBar(topAppBarElement);
const buttonRipple = new MDCRipple(document.querySelector('.mdc-button'));
const selector = '.mdc-button, .mdc-icon-button, .mdc-card__primary-action';
const ripples = [].map.call(document.querySelectorAll(selector), function(el) {
  return new MDCRipple(el);
});

const drawer = MDCDrawer.attachTo(document.querySelector('.mdc-drawer'));
const listEl = document.querySelector('.mdc-drawer .mdc-list');
const mainContentEl = document.querySelector('.main-content');

listEl.addEventListener('click', (event) => {
  drawer.open = false;
});

document.body.addEventListener('MDCDrawer:closed', () => {
  mainContentEl.querySelector('input, button').focus();
});

topAppBar.listen('MDCTopAppBar:nav', () => {
    drawer.open = !drawer.open;
});

const coursemenu = new MDCMenu(document.querySelector('.mdc-menu'));
const coursemenutoggle = document.querySelector('.course-menu-toggle');

coursemenutoggle.addEventListener('click', () => {
    coursemenu.open = !coursemenu.open;
    // coursemenu.setAnchorCorner(coursemenu.Corner.BOTTOM_LEFT);
    coursemenu.setAnchorElement(coursemenutoggle);
});

// menu.open = true;


// const anc = document.querySelector('.course-menu-toggle');
