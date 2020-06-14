<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart(Event $event, Request $request)
    {
        if (!$request->session()->exists('category')) {
            return redirect()->route('booking', ['event' => $event]);
        }
        $arr = [];
        foreach (session('category') as $key) {
            $arr[] = $event->prices[$key];
        }
        $total = array_sum($arr);
        session(['total' => $total]);

        return view('checkout.cart', [
            'event' => $event
        ]);
    }

    public function emptyCart(Request $request, Event $event)
    {
       $request->session()->forget(['category', 'sum', 'order', 'select', 'total', 'client', 'seat']);

        return redirect()->route('booking', [
            'event' => $event
        ]);

    }
}
