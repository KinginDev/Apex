@extends('Frontend.layouts.app')

@section('content')
<main class="main-wrapper">
	   <!-- start team section -->
            <section class="primary-bg-color section-bd-top overflow-hidden team-section">
                <div class="section-common-space">
                    <div class="container">

                        <!-- start section title -->
                        <div class="text-center section-heading">
                            <h2 class="section-title">Buy us a Cup of Coffe</h2>
                            <h3 class="section-subtitle">Donate to our cause</h3>
                        </div>
                        <!-- end section title -->

                        <div class="ov-hidden-padding">
                            <div class="row">
                                <!-- start team slider -->
                                <div class="styled-paginantion colorsch-white" data-action="teamSlider">
                                	<div class="col-md-4"></div>
                                    <div class="col-md-4 col-offset-md-4">
                                    	 
                                        <div class="team-member tm-edition3">
                                            <!-- start team member image -->
                                            <div class="member-img">
                                              
                                            </div>
                                            <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="matx-form-valid contact-form" role="form">
                                            <div class="text-center " style="height: 300px;">
										            <p>
										                <div>
										                    Apex Triangle Donation
										                   
										                </div>
										            </p>
										            <input type="hidden" name="email" value="otemuyiwa@gmail.com"> {{-- required --}}
										            <input type="hidden" name="orderID" value="345">
										             <div class="mdl-textfield mdl-js-textfield">
		                                                <input type="text" class="mdl-textfield__input" name="amount" value="800"> {{-- required in kobo --}}
		                                                <label class="mdl-textfield__label" for="name">Amount</label>
		                                            </div>
										           
										            <input type="hidden" name="quantity" value="3">
										            <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
										            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
										            <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
										            @csrf {{-- works only when using laravel 5.1, 5.2 --}}
										            <p>
										              <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect btn-black btn-default btn-submit" type="submit" value="Pay Now!">
										              <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
										              </button>
										            </p>
										          </div>
										       
										</div>
										</form>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end team slider --> 
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end team section -->
            
</main>
     @endsection