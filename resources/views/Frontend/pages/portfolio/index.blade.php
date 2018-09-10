@extends('Frontend.layouts.portfolio')

@section('content') 
 <section class="banner-header">

            <div class="banner-overlay">
                <div class="bg-image standred-blog-bg" data-top="transform: translate3d(0px, 0px, 0px)" data-top-bottom="transform: translate3d(0px, 250px, 0px)"></div>
            </div>
			<section class="section-main">
                <div class="overlay overlay-seven">
                    <div class="container">
                        <div class="section-common-space">
                            <div class="clearfix banner-content">
                                <div class="pull-left banner-content-inner">
                                    <!-- portfolio title -->
                                     <h2 class="portfolio-single-title">{{$project->client}}</h2>

                                    <!-- start portfolio info -->
                                    <div class="clearfix post-meta portfolio-meta"> {{-- 
                                        <span>By <a href="#">CoderPixel</a></span> --}}
                                        <span>{{ date('M j, Y' ,strtotime($project->created_at)) }}</span>
                                    </div>
                                    <!-- end portfolio info -->
                                </div>
                                
                                <!-- start portfolio navigation top -->
                              {{--   <div class="banner-pagination portfolio-pagination">
                                    <a href="portfolio-single-03.html" class="mdl-button mdl-js-button mdl-js-ripple-effect round-nav-btn left-arrow">
                                        <i class="zmdi zmdi-chevron-left"></i>
                                    </a>

                                    <a href="portfolio-single-02.html" class="mdl-button mdl-js-button mdl-js-ripple-effect round-nav-btn right-arrow">
                                        <i class="zmdi zmdi-chevron-right"></i>
                                    </a>
                                </div> --}}
                                <!-- end portfolio navigation top -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

           @include('Frontend.pages.blog.partials.header')
       </section>
 <!-- start main wrapper -->
 <main class="main-wrapper">
 <section class="section-main">
                <div class="section-common-space">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-7 col-lg-8">
                                <div class="single-pf-images">
                                    <!-- portfolio image's slider -->
                                    <div class="pf-attachment-img-group thumb-slides-container bullet-overlaped-center">
                                    	@foreach($project->images as $image)
                                        	<img src="{{$image->url}}" alt="{{$image->name}}">
                                        @endforeach
                                       
                                    </div>
                                </div>
                            </div>
                            <!-- start portfolio details -->
                            <div class="col-sm-12 col-md-5 col-lg-4">
                                <div class="single-pf-content pfc-align-left">
                                    <h4>PROJECT INFO</h4>
                                    <p>{{$project->project_info}}</p>

                                    <h4>Client</h4>
                                    <p>{{$project->client}}</p>

                                    <h4>Tools</h4>
                                    <p>{{$project->toold}}</p>

                                    <h4>live url</h4>
                                    <p><a href="{{$project->live_url}}">{{$project->live_url}}</a></p>

                                    <!-- start share portfolio -->
                                    <h4>SHARE</h4>
                                     {!!Share::page(route('show.project',$project->id), $project->client, ['class' => 'fb', 'id' => 'my-id'], '<ul class="pull-right clearfix social share-social js-post-share-media">', '</ul>')
                                        ->facebook()
                                        ->twitter()
                                        ->googlePlus()
                                        ->linkedin(route('show.project',$project->id))!!}
                                <!-- end social icons -->
                                    <!-- end share portfolio -->
                                </div>
                            </div>
                            <!-- end portfolio details -->
                        </div>
                    </div>
                </div>
              
            </section>
</main>
            @endsection