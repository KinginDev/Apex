 <section id="work" class="section-main portfolio-default">
                <div class="section-common-space">
                    <div class="container">

                        <!-- start section title -->
                        <div class="text-center section-heading">
                            <h2 class="section-title">OUR WORK</h2>
                            <h3 class="section-subtitle">New stunning projects for our amazing clients</h3>
                        </div>
                        <!-- end section title -->

                        <div class="default-spacing-col-3" data-portfolio-url="portfolio/for-ajax-load/more-portfolio.html" data-action="portfolio">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="text-center portfolio-category-wrap">

                                        <!-- start portfolio filter items -->
                                        <ul class="clearfix portfolio-category mdl-shadow--2dp">
                                            <li class="filter active" data-target="*">ALL</li>
                                            <li class="filter" data-target=".blog">BLOGS</li>
                                            <li class="filter" data-target=".ecomerce">ECOMMERCE</li>
                                            <li class="filter" data-target=".company">COMPANY</li>
                                            <li class="filter" data-target=".music">MUSIC PORTAL</li>
                                            <li class="filter" data-target=".mobile-apps">MOBILE APPS </li>
                                        </ul>
                                        <!-- end portfolio filter items -->

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                @if(!$projects->isEmpty())
                                    <!-- start portfolio items -->
                                    <div class="clearfix protfolio-items">

                                        @foreach($projects as $project)
                                        <!-- start single portfolio item with content pop-up and attachment preview -->
                                        <div id="portfolio-01" class="col-xxs-6 col-xs-6 col-sm-4 single-portfolio {{str_replace(',', ' ',$project->tags)}}">
                                            <div class="portfolio-item">
                                                <a href="{{route('show.project', $project->id)}}" >
                                                    <!-- start portfolio image -->
                                                    <div class="protfolio-image">
                                                        <?php
                                                             $image = $project->images->first();
                                                             //dump($image);
                                                            ?>
                                                        <img src="{{$image->url}}" alt="{{$image->name}}">
                                                        
                                                        <!-- .pf-overlay with icon display only portfolio style two -->
                                                        <div class="pf-overlay"><i class="zmdi zmdi-center-focus-strong"></i></div>
                                                    </div>
                                                    <!-- end portfolio image -->

                                                    <div class="portfolio-meta">
                                                        <i class="zmdi zmdi-plus-circle"></i>
                                                        <h3 class="portfolio-title">{{$project->client}}</h3>

                                                        <!-- .portfolio-subtitle show only portfolio style two -->
                                                        <div class="portfolio-subtitle">{{ (substr($project->project_info,0,20)) }} </div>
                                                    </div>
                                                    <div class="pf-overlay"></div>
                                                </a>
                                            </div>
                                        </div>
                                        @endforeach
                                    @else

                                     @endif
                                        <!-- end single portfolio item -->

                                   

                                   
                                </div>
                                <!-- end portfolio items -->

                                <!-- Portfolio ajax div, it's a hidden div need for ajax loading -->
                                <div data-action="portfolioInitItem" class="portfolio-ajax-hidden-div"></div>

                                <!-- start portfolio load more button -->
                                <div class="text-center load-portfolio wow fadeInUpSmall" data-wow-duration="1s">
                                    <a href="#" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect btn-default btn-highlight">LOAD MORE</a>
                                </div>
                                <!-- end portfolio load more button -->
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>