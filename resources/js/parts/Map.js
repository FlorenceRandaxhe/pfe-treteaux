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


        this.map = new mapboxgl.Map({
                container: this.mapContent,
                center: {lat: this.lat, lng: this.lng},
                zoom: 15,
                style: 'mapbox://styles/florencerandaxhe/ck9oamfii0uix1iliyo6zezeg'
        });

        this.marker = new mapboxgl.Marker()
             .setLngLat({lat: this.lat, lng: this.lng})
             .addTo(this.map);
    }

}


