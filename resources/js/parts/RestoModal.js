var mapboxgl = require('mapbox-gl/dist/mapbox-gl.js');

export default class RestoModal{

    constructor(el) {
        this.el = el;
        this.getElements();
        this.setEvents();
    }

    getElements(){
        this.links = this.el.querySelector('.restoCard__link');
        this.modals = this.el.querySelector('.restoInfo');
        this.overlay =this.el.querySelector('.restoInfo__hide');
        this.close =this.el.querySelector('.restoInfo__close');
    }

    setEvents(){
        this.links.addEventListener('click', (e) => this.openModal(e))
        this.overlay.addEventListener('click', (e) => this.closeModal(e))
        this.close.addEventListener('click', (e) => this.closeModal(e))
    }

    openModal(e){
        e.preventDefault();
        document.querySelector('body').classList.add('layout--scrollblock');
        this.modals.classList.add('restoInfo--show');
        this.createMap()
        this.initMap();

    }

    closeModal(e){
        e.preventDefault();
        this.modals.classList.remove('restoInfo--show');
        document.querySelector('body').classList.remove('layout--scrollblock');
        this.removeMap();
    }

    createMap(){
        this.mapContent = document.createElement('div');
        this.mapContent.setAttribute('class','restoInfo__map');
        this.mapContent.setAttribute('style', 'width: 100%; height: 200px');
        this.modals.querySelector('.restoInfo__container').appendChild(this.mapContent)
    }

    removeMap(){
        setTimeout(() => {
            this.modals.querySelector('.restoInfo__container').removeChild(this.mapContent);
        }, 500);
    }

    initMap() {
        this.lat = parseFloat(this.modals.getAttribute('data-lat'));
        this.lng = parseFloat(this.modals.getAttribute('data-lng'));

        mapboxgl.accessToken = 'pk.eyJ1IjoiZmxvcmVuY2VyYW5kYXhoZSIsImEiOiJjazl3ZmJ2azMwOGI5M2d1aGRldHlxMjJmIn0.l9b5ADWDn7OQ1D7Obndf0g';

        this.map = new mapboxgl.Map({
                container: this.mapContent,
                center: {lat: this.lat, lng: this.lng},
                zoom: 15,
                style: 'mapbox://styles/florencerandaxhe/ck9oamfii0uix1iliyo6zezeg'
        });


        this.geojson = {
            type: 'FeatureCollection',
            features: [
            {
                type: 'Feature',
                geometry: {
                    type: 'Point',
                    coordinates: [5.693863, 50.737120]
                },
                properties: {
                    title: 'Les Tréteaux - Centre Culturel de Visé',
                    description: 'Visé',
                    color: 'pink'
                }
            },

            {
                type: 'Feature',
                geometry: {
                    type: 'Point',
                    coordinates: [this.lng, this.lat]
                },
                properties: {
                    title: 'Restaurant',
                    description: 'Visé',
                    color: 'purple'
                }
            }]
        };

        this.geojson.features.forEach( marker => {
            this.mark = document.createElement('div');
            this.mark.className = 'restoInfo__marker restoInfo__marker--' + marker.properties.color;

         new mapboxgl.Marker(this.mark)
            .setLngLat(marker.geometry.coordinates)
            .addTo(this.map);
        });
    }
}


if (document.querySelector('.allRestos')) {

    document.querySelectorAll('.restoCard').forEach(resto => {
        let modal = new RestoModal(resto);
    })
}
