export default class Tabs{

    constructor(el) {
        this.el = el;
        this.getElements();
        this.setEvent();
    }

    getElements(){
        this.tabLinks = document.querySelectorAll(".tabs__item");
        this.tabContents = document.querySelectorAll(".rentingInfo");
    }

   setEvent(){
    this.el.querySelector('.renting__intro').classList.remove('renting__intro--sticky');
        this.el.querySelector('.renting__content').classList.add('renting__content--js');
        this.tabLinks.forEach( tablink => {
            this.setDefaultTab(tablink);
            tablink.addEventListener("click", (e) => this.openTabs(e, tablink));
        });
   }

   setDefaultTab(tablink){
        if (tablink.dataset.tab === "salle") {
            tablink.classList.add("tabs__item--active");
        }
        document.querySelector("#salle").classList.add("rentingInfo--active");
   }

    openTabs(e, tablink) {
        e.preventDefault();
        this.tab = tablink.dataset.tab;

        this.tabContents.forEach(tabContent => {
            tabContent.classList.remove("rentingInfo--active");
        });

        this.tabLinks.forEach( tabLink => {
            tabLink.classList.remove("tabs__item--active");
        });

        document.querySelector("#" + this.tab).classList.add("rentingInfo--active");

        tablink.classList.add("tabs__item--active");
    }

}


if (document.querySelector('.renting__tab')) {
    let tab = new Tabs(document.querySelector('.renting__tab'));
}
