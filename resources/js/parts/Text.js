export default class Text{

    constructor(el) {
        this.el = el;
        this.getElements();
        this.setEvents()
    }

    getElements(){
        this.textPath = this.el.querySelector('#text-path');
    }

    setEvents(){
        console.log('test')
        window.addEventListener('scroll', (e) => this.onScroll())
    }

    updatePath(offset){
        this.textPath.setAttribute('startOffset', offset);
    }

    onScroll(){
      requestAnimationFrame(() =>{
        this.updatePath(window.scrollY - 1200);
      });
    }


}


