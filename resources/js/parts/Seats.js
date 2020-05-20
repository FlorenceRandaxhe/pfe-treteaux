export default class Seats{

    constructor(el) {
        this.el = el;
        this.visible = false;
        this.getElements();
        this.setEvents();
    }

    getElements(){
        this.checkboxDisabled = this.el.querySelectorAll('.seat__checkbox[disabled]');
        this.checkbox = this.el.querySelectorAll('.seat__checkbox:not(:disabled)');
        this.circles = this.el.querySelectorAll('.circle');
        this.takenSeat = this.el.querySelector('.alert__takenSeat');
        this.totalSeat = this.el.querySelector('.alert__totalSeat');
        this.amountSeat = this.el.querySelector('.alert__amountSeat');
        this.closeTaken = this.el.querySelector('.alert__close--taken');
        this.closeTotal = this.el.querySelector('.alert__close--total');
        this.closeAmount = this.el.querySelector('.alert__close--amount');
        this.max = this.el.querySelector('.booking__svg').dataset.max;
        this.btn = this.el.querySelector('.booking__next');
    }

    setEvents(){
        this.el.querySelector('.booking__check').classList.add('sro');
        for (let i = 0; i < this.circles.length; i++) {
            this.circles[i].addEventListener('click', () => this.toggleSeat(this.circles[i]));
        }
        for (let i = 0; i < this.checkboxDisabled.length; i++) {
            this.showTakenSeat(this.checkboxDisabled[i])
        }
        this.closeTaken.addEventListener('click', (e) => this.hideTakenSeatAlert(e))
        this.takenSeat.addEventListener('click', (e) => this.hideTakenSeatAlert(e))
        this.closeTotal.addEventListener('click', (e) => this.hideTotalSeatAlert(e))
        this.closeAmount.addEventListener('click', (e) => this.hideAmountSeatAlert(e))
        this.totalSeat.addEventListener('click', (e) => this.eventBodyClick(e))
        this.amountSeat.addEventListener('click', (e) => this.eventBodyClick(e))



        for (let i = 0; i < this.checkbox.length; i++) {
            this.showTakenSeat(this.checkbox[i])
        }

        this.btn.addEventListener('click', (e) => this.checkAmoutOfSeats(e))
    }

    toggleSeat(seat){
        for (let i = 0; i < this.checkbox.length; i++) {
            if (this.checkbox[i].id === seat.dataset.seat) {

                if (seat.hasAttribute("data-occup")) {
                    this.showTakenSeatAlert()
                    return;
                };

                this.checkbox[i].checked = !this.checkbox[i].checked;
                this.checkbox[i].toggleAttribute('data-checked');
                seat.classList.toggle('circle--selected');
                seat.toggleAttribute('data-selected');

                this.selected = this.el.querySelectorAll('[data-selected]');
                this.sum = parseInt(this.max) + 1;
                if (this.selected.length == parseInt(this.max) + 1) {
                    this.checkbox[i].checked = !this.checkbox[i].checked;
                    seat.classList.remove('circle--selected');
                    seat.removeAttribute('data-selected');
                    this.showTotalSeatAlert();
                }
            }
        }
    }

    showTakenSeat(checkbox){
        for (let i = 0; i < this.circles.length; i++) {
            if (checkbox.id === this.circles[i].dataset.seat
                && checkbox.disabled && checkbox.checked) {
                this.circles[i].setAttribute('data-occup', 'true')
                this.circles[i].classList.add('circle--occupied')
            }
        }

        for (let i = 0; i < this.circles.length; i++) {
            if (checkbox.id === this.circles[i].dataset.seat
                && checkbox.checked && !checkbox.disabled) {
                this.circles[i].setAttribute('data-selected', 'true')
                this.circles[i].classList.add('circle--selected')
            }
        }
    }

    checkAmoutOfSeats(e) {

        this.selected = this.el.querySelectorAll('[data-selected]');
        this.sum = parseInt(this.max) + 1;
        if (this.selected.length < parseInt(this.max)) {
            e.preventDefault();
            this.showAmountSeatAlert();
        } else {
            return;
        }
    }

    showTakenSeatAlert(){
        this.takenSeat.classList.add('alert__takenSeat--show');
        this.visible = true;
        document.querySelector('body').classList.add('layout--scrollblock');
    }

    hideTakenSeatAlert(e) {
        e.preventDefault();
        this.takenSeat.classList.remove('alert__takenSeat--show');
        document.querySelector('body').classList.remove('layout--scrollblock');
    }

    showTotalSeatAlert(){
        this.totalSeat.classList.add('alert__totalSeat--show');
        document.querySelector('body').classList.add('layout--scrollblock');
    }

    hideTotalSeatAlert(e) {
        e.preventDefault();
        this.totalSeat.classList.remove('alert__totalSeat--show');
        document.querySelector('body').classList.remove('layout--scrollblock');
    }

    showAmountSeatAlert(){
        this.amountSeat.classList.add('alert__amountSeat--show');
        document.querySelector('body').classList.add('layout--scrollblock');
    }

    hideAmountSeatAlert(e) {
        e.preventDefault();
        this.amountSeat.classList.remove('alert__amountSeat--show');
        document.querySelector('body').classList.remove('layout--scrollblock');
    }

    eventBodyClick(e){
        if( this.totalSeat.querySelector('.alert__content') === e.target
            || this.closeTotal === e.target
            || this.totalSeat.querySelector('.alert__content').contains(e.target)
            || this.closeTotal.contains(e.target)
        ) {
            return;
        }
        this.hideTotalSeatAlert(e);
        this.hideAmountSeatAlert(e);
    }
}

if (document.querySelector('.bookingSeats')) {
    let seats = new Seats(document.querySelector('.bookingSeats'));
}