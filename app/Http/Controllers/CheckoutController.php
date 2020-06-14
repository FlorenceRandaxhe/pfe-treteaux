<?php

namespace App\Http\Controllers;

use App\Event;
use App\Order;
use App\Mail\ConfirmReservation;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use PDF;

class CheckoutController extends Controller
{
    public function payment(Event $event, Request $request)
    {

        if (!$request->session()->exists('category')) {
            return redirect()->route('booking', ['event' => $event]);
        }

        Stripe::setApiKey(env('STRIPE_SECRET'));
        $intent = PaymentIntent::create([
            'amount' => round(session('total') * 100),
            'currency' => 'eur',
            'metadata' => ['integration_check' => 'accept_a_payment'],
        ]);

        return view('checkout.payment', [
            'clientSecret' => $intent->client_secret,
            'event' => $event
        ]);
    }

    public function pay(Request $request, Event $event)
    {
        $data = $request->json()->all();

        if (!$data) {
            return redirect()->back()->with('alert', 'remplir les champs');
        }
        if ($data['paymentIntent']['status'] === 'succeeded') {

            if($event->seating != 0){
                $event->seats = $event->seats - intval(session('sum'));
                $event->save();
            } else{
                $result = array_merge($event->seats, Session('seat'));
                $event->update(['seats' => json_encode($result)]);
            }

            $order = new Order();
            $order->event_id = $event->id;
            $order->email = session('client')['email'];
            $order->orderDate = now();
            $order->total = round(session('total'));
            $order->clientInfo = session('client');
            $order->order = session('category');
            if($event->seating != 0){
                $order->order = session('category');
            } else {
                $c = array_combine(session('select'), session('category'));
                session(['order' => $c]);
                $order->order = session('order');
            }
            $order->save();

            $fileName =  $order->id . '_' . str_replace(' ', '-', session('client')['lastName']) . '_' . str_replace(' ', '-', session('client')['firstName']);

            PDF::loadView('pdf.ticket', [
                'event' => $event,
                'client' => session('client'),
                'category' => session('category'),
                'seats' => session('select')
            ])
            ->setPaper('a4')
            ->save(storage_path('app/public/' . $fileName . '' . '.pdf'));

            Mail::to(session('client')['email'])->send(new ConfirmReservation($event, $fileName));

            $request->session()->forget(['category', 'sum', 'order', 'select', 'total', 'client', 'seat']);
            //$request->session()->flush();
        }
    }

    public function confirm(Request $request)
    {
        return view('checkout.confirm');
    }

}
