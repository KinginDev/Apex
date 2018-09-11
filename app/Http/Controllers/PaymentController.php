<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Paystack;
use App\Donation;
class PaymentController extends Controller
{
    public function view(){
        $donate = Donation::all();
      return view('Frontend.pages.donate')->with(compact('donate'));
    }
    
    public function redirectToGateway($value='')
    {
    	return Paystack::getAuthorizationUrl()->redirectNow();
    }
    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();
        $data = collect($paymentDetails);
                $amount =new Donation();
                $amount->email = $data->data->customer->email;
                $amount->amount = $data->data->amount;
                $amount->save();
                Session::flash('success', 'Payment successfully made thank you for dropping by!');
                return redirect(route('pay.view'));
        
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
    
}
