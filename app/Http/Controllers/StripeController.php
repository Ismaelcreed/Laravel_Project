<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Gloudemans\Shoppingcart\Facades\Cart;

class StripeController extends Controller
{
    public function checkout(){
        $items = Cart::instance('cart')->content();
        return view('checkout',['items'=>$items]);
    }

    public function createPaymentIntent(Request $request)
    {

        Stripe::setApiKey("{{env('STRIPE_KEY')}}");

        try {
            $paymentIntent = PaymentIntent::create([
                'amount' => $request->total_amount,
                'currency' => 'usd',
                'source' => $request->input('stripeToken'),
                'description' => 'Description de la commande',
            ]);

            return response()->json(['clientSecret' => $paymentIntent->client_secret]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    

}
