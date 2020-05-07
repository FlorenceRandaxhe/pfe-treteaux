import Map from './parts/Map.js';
import Nav from './parts/Nav.js';
import Dropdown from './parts/Dropdown.js';
import Tab from './parts/Tabs.js'

let nav = new Nav(document.querySelector('.header'));
let dropdown = new Dropdown(document.querySelector('.nav'));
let tab = new Tab(document.querySelector('.renting__tab'));

if (document.querySelector('.contact__mapContainer')) {
    let map = new Map(document.querySelector('.contact__mapContainer'));
}
