<?php

namespace App\Http\Controllers;
use Session;
use Stripe;
use Illuminate\Http\Request;

class paymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('stripe');
    }
  
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        $customer = \Stripe\Customer::create([
          'email' => 'paying.user@example.com',
          'source' => 'src_18eYalAHEMiOZZp1l9ZTjSU0',
        ]);

        \Stripe\Customer::createSource(
          'cus_AFGbOSiITuJVDs',
          [
            'source' => 'src_18eYalAHEMiOZZp1l9ZTjSU0',
          ]
        );
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "customer" => $customer,
                "description" => "Test payment from itsolutionstuff.com." 
        ]);
  
        Session::flash('success', 'Payment successful!');
          
        return back();
    }}
