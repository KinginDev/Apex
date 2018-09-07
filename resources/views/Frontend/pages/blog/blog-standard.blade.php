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

                            <!-- start sidebar -->
                            <div class="col-xs-12 col-sm-4 primary-sidebar">
                                <div class="sidebar-area">

                                    <!-- recent post -->
                                    <aside class="white-box widget">
                                        <h3 class="widget-title">RECENT POSTS</h3>
                                        <div class="widget-text">
                                            <ul class="recent-posts">
                                                <li class="recent-item">
                                                    <a href="single/single.html">GENERAL BLOG POST</a>
                                                    <span><time datetime="2015-10-24">October 24, 2015</time></span>
                                                </li>
                                                <li class="recent-item">
                                                    <a href="single/single-slider.html">POST WITH IMAGE SLIDE</a>
                                                    <span><time datetime="2015-10-24">October 16, 2015</time></span>
                                                </li>
                                                <li class="recent-item">
                                                    <a href="single/single-video.html">WE SUPPORT YOUR CUSTOM VIDEO</a>
                                                    <span><time datetime="2015-10-24">October 9, 2015</time></span>
                                                </li>
                                                <li class="recent-item">
                                                    <a href="single/single-audio.html">UPDATE POST WITH AUDIO</a>
                                                    <span><time datetime="2015-10-24">October 9, 2015</time></span>
                                                </li>
                                                <li class="recent-item">
                                                    <a href="single/single-video-youtube.html">POST WITH YOUTUBE VIDEO</a>
                                                    <span><time datetime="2015-10-24">September 30, 2015</time></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </aside>

                                    <!-- category post -->
                                    <aside class="white-box widget">
                                        <h3 class="widget-title">CATEGORIES</h3>
                                        <ul>
                                            <li><a href="#">Google Design</a></li>
                                            <li><a href="#">UX Design</a></li>
                                            <li><a href="#">UI Design</a></li>
                                            <li><a href="#">UI Design</a></li>
                                            <li><a href="#">Flat Design</a></li>
                                        </ul>
                                    </aside>

                                    <!-- archive post -->
                                    <aside class="white-box widget">
                                        <h3 class="widget-title">ARCHIVE</h3>
                                        <ul>
                                            <li><a href="#">September 2015</a></li>
                                            <li><a href="#">October 2015</a></li>
                                            <li><a href="#">November 2015</a></li>
                                            <li><a href="#">December 2015</a></li>
                                            <li><a href="#">January 2016</a></li>
                                        </ul>
                                    </aside>

                                    <!-- tag post -->
                                    <aside class="white-box widget">
                                        <h3 class="widget-title">TAGS</h3>
                                        <div class="clearfix tagcloud">
                                            <a href="#">Awesome</a>
                                            <a href="#">Blog</a>
                                            <a href="#">Coderpixel</a>
                                            <a href="#">Creative</a>
                                            <a href="#">MatX</a>
                                            <a href="#">Google Design</a>
                                            <a href="#">Material Design</a>
                                        </div>
                                    </aside>
                                </div>
                            </div>
                            <!-- end sidebar -->

                        </div>
                    </div>
                </div>
            </section>
            <!-- end blog content -->

        </main>
        <!-- start main wrapper -->
@endsection