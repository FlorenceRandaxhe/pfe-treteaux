export default class Payment{

    constructor(el) {
        this.el = el;
        this.getClientInfo();
        this.setEvents();
    }

    setEvents() {
        this.stripe = Stripe('pk_test_JWjZI0QAOuabl66z9qvLZ7St00M7nHwq4C');
        this.elements = this.stripe.elements();

        this.card = this.elements.create('card', {
            style: {
                base: {
                    color: "#32325d",
                    fontFamily: '"Lato Regular", Helvetica, sans-serif',
                    fontSmoothing: "antialiased",
                    fontSize: "16px",
                    "::placeholder": {
                        color: "#aab7c4"
                    }
                },
                invalid: {
                    color: "#e66363",
                    iconColor: "#e66363"
                }
            },
            hidePostalCode: true
        });

        this.card.mount('#card-element');

        this.card.on('change', ({error}) => {
            this.displayError = document.getElementById('card-errors');

            if (error) {
                this.displayError.textContent = error.message;
            } else {
                this.displayError.textContent = '';
                this.submitform();
            }
        });
    }

    getClientInfo(){
        this.token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        fetch('/getInfo',{
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json, text-plain, */*",
                "X-Requested-With": "XMLHttpRequest",
                "X-CSRF-TOKEN": this.token
            },
            method: 'post',

        }).then(res => res.json())
        .then(data => {
            this.data = data
        }).catch((error) => {
            console.log(error)
        })
    }

    submitform(){
        this.form = document.getElementById('payment-form');
        this.submitButton = document.getElementById('submit');

        this.form.addEventListener('submit', (ev) => {
            ev.preventDefault();

            this.changeLoadingState(true);

            this.cardName = document.getElementById('cardName');

            this.stripe.createToken(this.card, {
                name: this.cardName.value
            })
            .then(({token}) => {
                console.log('Received Stripe token:', token);
                if (token === undefined) {
                    this.cardName.classList.add('form__checkoutInput--error')
                }
            })
            .catch((e) => {
                console.log(e);
            });
            this.clientSecret = this.form.getAttribute('data-client');

            this.stripe.confirmCardPayment(this.clientSecret, {
                payment_method: {
                    card: this.card,
                    billing_details: {
                        name: this.cardName.value,
                        email: this.data.email,
                        phone: this.data.phone,
                        address: {
                            city: this.data.town,
                            postal_code: this.data.cp,
                            line1: this.data.address
                        }
                    }
                }
            }).then((result) => {
                if (result.error) {
                    this.changeLoadingState(false);
                    console.log(result.error.message);

                } else {
                    if (result.paymentIntent.status === 'succeeded') {

                        this.token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                        this.paymentIntent = result.paymentIntent;
                        this.url =  this.form.action;
                        this.redirect = '/confirmation';

                        fetch(this.url,{
                            headers: {
                                "Content-Type": "application/json",
                                "Accept": "application/json, text-plain, */*",
                                "X-Requested-With": "XMLHttpRequest",
                                "X-CSRF-TOKEN": this.token
                            },
                            method: 'post',
                            body: JSON.stringify({paymentIntent: this.paymentIntent})

                        }).then((data) => {
                            //console.log(data);
                            this.form.reset();
                            window.location.href = this.redirect;
                        }).catch((error) => {
                            console.log(error)
                        })
                    }
                }
            });
        });
    }

    changeLoadingState(isLoading) {
        if (isLoading) {
            this.submitButton.disabled = true;
            document.querySelector(".spinner").classList.remove("spinner--hidden");
            this.submitButton.classList.add("btn__hidden");
        } else {
            this.submitButton.disabled = false;
            document.querySelector(".spinner").classList.add("spinner--hidden");
            this.submitButton.classList.remove("btn__hidden");
        }
    };
}

if (document.querySelector('.bPay')) {
    let payment = new Payment(document.querySelector('.bPay'));
}