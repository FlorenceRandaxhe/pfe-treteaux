export default class RestoModal{

    constructor(el) {
        this.el = el;
        this.getElements();
        this.setEvents();
    }

    getElements(){
        this.links = this.el.querySelectorAll('.restoCard__link');
        this.modals = this.el.querySelectorAll('.restoInfo');
        this.overlay =this.el.querySelectorAll('.restoInfo__hide');
        this.close =this.el.querySelectorAll('.restoInfo__close');
    }

    setEvents(){
        for (let i = 0; i < this.links.length; i++) {
            this.links[i].addEventListener('click', (e) => this.openModal(e, i))
        }

        for (let i = 0; i < this.overlay.length; i++) {
            this.overlay[i].addEventListener('click', (e) => this.closeModal(e, i))
        }

        for (let i = 0; i < this.close.length; i++) {
            this.close[i].addEventListener('click', (e) => this.closeModal(e, i))
        }
    }

    openModal(e, i){
        e.preventDefault();
        document.querySelector('body').classList.add('layout--scrollblock');
        this.modals[i].classList.add('restoInfo--show');
        this.createMap(this.modals[i])
        this.initMap(this.modals[i]);

    }

    closeModal(e, i){
        e.preventDefault();
        this.modals[i].classList.remove('restoInfo--show');
        document.querySelector('body').classList.remove('layout--scrollblock');
        this.removeMap(this.modals[i]);
    }

    createMap(modal){
        this.mapContent = document.createElement('div');
        this.mapContent.setAttribute('class','restoInfo__map');
        this.mapContent.setAttribute('style', 'width: 100%; height: 200px');
        modal.querySelector('.restoInfo__container').appendChild(this.mapContent)
    }

    removeMap(modal){
        modal.querySelector('.restoInfo__container').removeChild(this.mapContent);
    }

    initMap(modal) {
        this.lat = parseFloat(modal.getAttribute('data-lat'));
        this.lng = parseFloat(modal.getAttribute('data-lng'));

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