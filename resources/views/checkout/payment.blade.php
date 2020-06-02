@extends('layout')
@section('extra-script')
<script src="https://js.stripe.com/v3/"></script>
@endsection
@section('title', 'Payement')
@section('main')
    @include('checkout.partials.heroBooking', [
        'back' => route('info', ['event' => $event->slug]),
    ])

<main class="main">
    <section class="bPay">
        <div class="wrapper">
            <div class="bPay__heading">
                <h2 class="bPay__title">Payement</h2>
            </div>
            <form class="form" action="{{ route('pay', ['event' => $event->slug]) }}" method="post" id="payment-form" data-client="{{$clientSecret}}">
                @csrf
                <div class="bPay__container">

                    <div class="form__chekoutContent">

                        @if(session()->has('alert'))
                            <p class="bPay__alert">Veuillez remplir tous les champs</p>
                        @endif

                        <div class="form__checkoutControl">
                            <label for="cardName" class="form__label">Nom du titulaire de la carte</label>
                            <input type="text" class="my-input form__checkoutInput" id="cardName" placeholder="John Doe">
                        </div>

                        <div class="form__checkoutControl">
                            <label class="form__label" for="card-element">Information de la carte</label>
                            <div id="card-element" class="form__checkoutInput"></div>
                            <div class="form__checkoutError" id="card-errors" role="alert"></div>
                        </div>
                    </div>

                    @include('checkout.partials.cartSmall')
                </div>
                <div class="bPay__btn">
                    <a class="btn btn--booking btn--back" href="{{ route('info', ['event' => $event->slug ]) }}">Retour</a>
                    <button class="btn btn--booking btn--next" id="submit">
                        <div class="spinner spinner--hidden" id="spinner"></div>
                        <span class="btn__text">Payer</span>
                    </button>
                </div>
            </form>
        </div>
    </section>
</main>
@endsection
@section('extra-js')
<script type="text/javascript">
// Set your publishable key: remember to change this to your live publishable key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
// var stripe = Stripe('pk_test_JWjZI0QAOuabl66z9qvLZ7St00M7nHwq4C');
// var elements = stripe.elements();

// // Set up Stripe.js and Elements to use in checkout form
//   var style = {
//     base: {
//       color: "#32325d",
//       fontFamily: '"Lato Regular", Helvetica, sans-serif',
//       fontSmoothing: "antialiased",
//       fontSize: "16px",
//       "::placeholder": {
//         color: "#aab7c4"
//       }
//     },
//     invalid: {
//       color: "#e66363",
//       iconColor: "#e66363"
//     }
//   };

// var card = elements.create("card", { style: style, hidePostalCode: true });
// card.mount("#card-element");

// card.on('change', ({error}) => {
//   const displayError = document.getElementById('card-errors');
//   if (error) {
//     displayError.textContent = error.message;
//   } else {
//     displayError.textContent = '';
//   }
// });

// var form = document.getElementById('payment-form');
// var submitButton = document.getElementById('submit');

// form.addEventListener('submit', function(ev) {
//   ev.preventDefault();
//   var cardName = document.getElementById('cardName').value;

// stripe.createToken(card, {name:cardName}).then(({token}) => {
// console.log('Received Stripe token:', token);
// })

//   submitButton.disabled = true;
//   stripe.confirmCardPayment("{{$clientSecret}}", {
//     payment_method: {
//       card: card,
//       billing_details: {
//         name: cardName
//       }
//     }
//   }).then(function(result) {
//     if (result.error) {
//         submitButton.disabled = false;
//       // Show error to your customer (e.g., insufficient funds)
//       console.log(result.error.message);
//     } else {
//       // The payment has been processed!
//       if (result.paymentIntent.status === 'succeeded') {
//         var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
//         var paymentIntent = result.paymentIntent;
//         var url =  document.getElementById('payment-form').action;
//         var redirect = '/confirmation';

//         fetch(
//             url,
//             {
//                 headers: {
//                     "Content-Type": "application/json",
//                     "Accept": "application/json, text-plain, */*",
//                     "X-Requested-With": "XMLHttpRequest",
//                     "X-CSRF-TOKEN": token
//                 },
//                 method: 'post',
//                 body: JSON.stringify({
//                     paymentIntent: paymentIntent
//                 })
//             }).then((data) => {
//                 console.log(data);
//                 form.reset();
//                 //window.location.href = redirect;
//         }).catch((error) => {
//             console.log(error)
//         })

//       }
//     }
//   });
// });
</script>
@endsection
