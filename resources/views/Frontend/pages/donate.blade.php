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
                                <div class="styled-paginantion colorsch-white" >
                                	<div class="col-md-4"></div>
                                    <div class="col-md-4">
                                    	 
                                        <div class="team-member tm-edition3" style="padding: 20px;">
                                            <!-- start team member image -->
                                            <div class="member-img">
                                              
                                            </div>
                                             @if (Session::has('success'))

                                              <div class="alert alert-success alert-dismissable">
                                                <strong>Success: {{Session::get('success') }}</strong>
                                              </div>

                                              @endif
                                               <ul class="progress-bar-wrap" data-action="progress-bar" style="margin: 20px 0px !important;">
                                            <?php
                                                   $sum = 0;
                                                   foreach($donate as $pay){
                                                      $sum += $pay->amount;
                                                     
                                                   }
                                                   
                                                    function calc_per ($val1, $val2){
                                                       $perc = $val2/$val1;
                                                        $perc = $perc * 100;
                                                        return $perc;
                                                    }
                                                  $perc = calc_per(10000,$sum);
                                                 
                                                ?>
                                        <!-- start skill progress bar -->
                                        <li class="narrow progress-bar-inner">
                                            <!-- skill title -->
                                            <span class="progress-bar-label">Goal ($10,000)</span>
                                            <div class="progress-bar" style="margin: 20px 0px;">
                                                <!-- skill level-->
                                                <div class="progress-bar-L1" data-width="{{$perc}}%">
                                                    <div class="progress-conunt"><span>{{$perc}}%</span></div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- end skill progress bar -->
                                            </ul>
                                            <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="matx-form-valid contact-form" role="form" id="payment_form">
                                            <div class="text-center " style="height: 300px;">
										            <p>
										                
										            </p>
										            <div class="mdl-textfield mdl-js-textfield">
		                                                <input type="email" class="mdl-textfield__input" name="email" value=""> {{-- required in kobo --}}
		                                                <label class="mdl-textfield__label" for="email">Email</label>
		                                            </div> {{-- required --}}
										            
										             <div class="mdl-textfield mdl-js-textfield">
		                                                <input type="text" class="mdl-textfield__input" id="amount" name="amount" value=""> {{-- required in kobo --}}
		                                                <label class="mdl-textfield__label" for="amount" >Amount</label>
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

      @section('scripts')
        <script type="text/javascript">
            $('#payment_form').submit(function(e){
                e.preventDefault();
                var amount = $(this).find('#amount').val();
                var value = amount + '.00';
              $('#payment_form').submit();
            })
        </script>
      @endsection