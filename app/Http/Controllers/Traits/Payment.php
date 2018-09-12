<?php
	namespace App\Controllers\Traits;

	use Paystack;

	trait Payment {
	 /**
     * Initiate a payment request to Paystack
     * @return Paystack
     */
    public function makePaymentRequest()
    {
        $data = [
            "amount" => intval(request()->amount).'00',
            "reference" => request()->reference,
            "email" => request()->email,
            "plan" => request()->plan,
            "first_name" => request()->first_name,
            "last_name" => request()->last_name,
            "callback_url" => request()->callback_url,
            /*
            * to allow use of metadata on Paystack dashboard and a means to return additional data back to redirect url
            * form need an input field: <input type="hidden" name="metadata" value="{{ json_encode($array) }}" >
            *array must be set up as: $array = [ 'custom_fields' => [
            *                                                            ['display_name' => "Cart Id", "variable_name" => "cart_id", "value" => "2"],
            *                                                            ['display_name' => "Sex", "variable_name" => "sex", "value" => "female"],
            *                                                            .
            *                                                            .
            *                                                            .
            *                                                        ]
            *                                        
            *                                  ]
            */
            'metadata' => request()->metadata 
        ];
	}
?>