//import SmoothScroll from 'smooth-scroll';
import Map from './parts/Map.js';
import Nav from './parts/Nav.js';
import Dropdown from './parts/Dropdown.js';
import Tab from './parts/Tabs.js';
import Text from './parts/Text.js';
import RestoModal from './parts/RestoModal.js';
import SearchModal from './parts/SearchModal.js';
import Reveal from './parts/Reveal.js';

document.body.classList.add('body--js');

let reveal = new Reveal(document.querySelector('body'))
//let scroll = new SmoothScroll('[data-scroll]');


let nav = new Nav(document.querySelector('.header'));
let dropdown = new Dropdown(document.querySelector('.nav'));
let search = new SearchModal(document.querySelector('.search'));


if (document.querySelector('.aboutSalle')) {
    let text = new Text(document.querySelector('.aboutSalle'));
}

if (document.querySelector('.renting__tab')) {
    let tab = new Tab(document.querySelector('.renting__tab'));
}

if (document.querySelector('.contact__mapContainer')) {
    let map = new Map(document.querySelector('.contact__mapContainer'));
}

if (document.querySelector('.allRestos')) {
    let resto = new RestoModal(document.querySelector('.allRestos'));
}
