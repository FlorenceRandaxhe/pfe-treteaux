import Map from './parts/Map.js';
import Nav from './parts/Nav.js';
import Dropdown from './parts/Dropdown.js';
import Tab from './parts/Tabs.js';
import Text from './parts/Text.js';

let nav = new Nav(document.querySelector('.header'));
let dropdown = new Dropdown(document.querySelector('.nav'));

if (document.querySelector('.aboutSalle')) {
    let text = new Text(document.querySelector('.aboutSalle'));
}

if (document.querySelector('.renting__tab')) {
    let tab = new Tab(document.querySelector('.renting__tab'));
}

if (document.querySelector('.contact__mapContainer')) {
    let map = new Map(document.querySelector('.contact__mapContainer'));
}
