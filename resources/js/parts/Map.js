var mapboxgl = require('mapbox-gl/dist/mapbox-gl.js');

export default class Map{

    constructor(el) {
        this.el = el;
        this.getElements();
        this.initMap()
    }

    getElements(){
        this.mapContent = this.el.querySelector('#map');
        this.lat = parseFloat(this.el.getAttribute('data-lat'));
        this.lng = parseFloat(this.el.getAttribute('data-lng'));
    }

    initMap() {

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
                    coordinates: [this.lng, this.lat]
                },
                properties: {
                    title: 'Les Tréteaux - Centre Culturel de Visé',
                    description: 'Visé',
                }
            }]
        };

        this.geojson.features.forEach( marker => {
            this.mark = document.createElement('div');
            this.mark.className = 'contact__marker';

         new mapboxgl.Marker(this.mark)
            .setLngLat(marker.geometry.coordinates)
            .addTo(this.map);
        });
        // this.marker = new mapboxgl.Marker()
        //      .setLngLat({lat: this.lat, lng: this.lng})
        //      .addTo(this.map);
    }
}

if (document.querySelector('.contact__mapContainer')) {
    let map = new Map(document.querySelector('.contact__mapContainer'));
}