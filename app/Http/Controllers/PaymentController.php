<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Paystack;
use App\Donation;
class PaymentController extends Controller
{
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

        dd($paymentDetails);
        $amount =new Donation();
        
        $amount->email = $paymentDetails;
        $amount->amount = $paymentDetails;
        $amount->save();
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
    
}
