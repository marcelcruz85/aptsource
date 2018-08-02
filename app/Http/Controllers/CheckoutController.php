<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;

class CheckoutController extends Controller
{
    //
    public function charge(Request $request)
    {
        // dd($request->all());
        try {
            Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
        
            $customer = Customer::create(array(
                'email' => $request->stripeEmail,
                'source' => $request->stripeToken
            ));
        
            $charge = Charge::create(array(
                'customer' => $customer->id,
                'amount' => 6000,
                'currency' => 'usd'
            ));
        
            return response()->json('Charge successful, you get the course!', 200);

            
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
}
