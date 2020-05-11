import Map from './parts/Map.js';
import Nav from './parts/Nav.js';
import Dropdown from './parts/Dropdown.js';
import Tab from './parts/Tabs.js';
import Text from './parts/Text.js';
import RestoModal from './parts/RestoModal.js';
import SearchModal from './parts/SearchModal.js';
import Reveal from './parts/Reveal.js';
import Slider from './parts/Slider.js';

document.body.classList.remove('body--nojs');
document.body.classList.add('body--js');
let reveal = new Reveal(document.querySelector('body'));
let nav = new Nav(document.querySelector('.header'));
let search = new SearchModal(document.querySelector('.search'));
document.querySelectorAll('.nav__item--dropdown').forEach(drop => {
    let dropdown = new Dropdown(drop);
})
