@extends('Frontend.layouts.blog-standard')

@section('content')
 <section class="banner-header">

            <div class="banner-overlay">
                <div class="bg-image standred-blog-bg" data-top="transform: translate3d(0px, 0px, 0px)" data-top-bottom="transform: translate3d(0px, 250px, 0px)"></div>
            </div>
			<section class="section-main">
                <div class="overlay overlay-seven">
                    <!-- start banner content -->
                    <div class="container">
                        <div class="section-common-space">
                            <div class="align-middle-contentf banner-content">
                                <h2> Apex Triangle Blog</h2>
                                <h3>This is one of our super clean retina display blog designs. Get the latest new from the world of Programming and design trends</h3>
                            </div>
                        </div>
                    </div>
                    <!-- end banner content -->

                </div>
            </section>

           @include('Frontend.pages.blog.partials.header')
       </section>
 <!-- start main wrapper -->
          <main class="main-wrapper">

            <!-- start blog content -->
            <section class="section-main">
                <div class="section-common-space">
                    <div class="container">
                        <div class="row">
                            <!-- start all blog post  -->
                            <div class="col-xs-12 col-sm-8">
                                <div class="main-post post-groups">
                                
                                    <!-- General Post -->
                                    @foreach($blogs as $blog)
                                    <article class="xxs-12 single-blog-post">
                                        <div class="mdl-card mdl-shadow--2dp jumbo-shadow">

                                            <div class="post-thumb-wrap">
                                                <div class="thumb-slides-container">
                                                	@foreach($blog->images as $image)
                                                   	 <img class="activator" src="{{$image->url}}" alt="{{$image->name}}" height="420px">
                                                    @endforeach
                                                </div>
                                                <div class="post-meta-info">
                                                    <span class="post-meta-date">{{ date('M j, Y' ,strtotime($blog->created_at)) }}</span>
                                                </div>
                                            </div>
                                            <div class="post-content-wrap">
                                                <h2 class="mdl-card__title-text mdl-card__title-content"><a href="{{route('show.blog', $blog->slug)}}">{{$blog->title}}</a></h2>

                                                <div class="mdl-card__supporting-text">
                                                     {{ strip_tags(substr($blog->content,0,50)) }} {{ strlen($blog->content) > 50 ? ".....": ""}}
                                                </div>
                                            </div>

                                            <div class="mdl-card__actions mdl-card--border">
                                                <a href="#" class="blog-comments">5 Comments</a>
                                                <a id="post-1" class="blog-share"><i class="zmdi zmdi-share"></i></a>
                                                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect post-share-media js-post-share-media" data-for="post-1">
                                                    <li class="fb"><a href="single/single.html"><i class="zmdi zmdi-facebook-box"></i> <span>Facebook</span></a></li>
                                                    <li class="tw"><a href="single/single.html"><i class="zmdi zmdi-twitter-box"></i> <span>Twitter</span></a></li>
                                                    <li class="gplus"><a href="single/single.html"><i class="zmdi zmdi-google-plus-box"></i> <span>Google plus</span></a></li>
                                                    <li class="lin"><a href="single/single.html"><i class="zmdi zmdi-linkedin-box"></i> <span>Linked In</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </article>
                                    @endforeach
                                  
                                </div>

                                <!-- post loader -->
                                <div class="text-center post-loader">
                                   {{$blogs->links()}}
                                </div>
                                <!-- end post loader -->

                            </div>
                            <!-- end all blog post  -->

                           @include('Frontend.pages.blog.partials.sidebar' ,['latest' => $latest, 'categories'=> $categories])

                        </div>
                    </div>
                </div>
            </section>
            <!-- end blog content -->

        </main>
        <!-- start main wrapper -->
@endsection