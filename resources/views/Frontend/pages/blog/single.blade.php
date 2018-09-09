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
                            <div class="clearfix banner-content">
                                <div class="pull-left banner-content-inner">
                                    <!-- single page post title -->
                                     <h2>{{$blog->title}}</h2>

                                    <!-- start single page post meta -->
                                    <div class="clearfix post-meta"> {{-- 
                                        <span>By <a href="#">CoderPixel</a></span> --}}
                                        <span>{{ date('M j, Y' ,strtotime($blog->created_at)) }}</span>
                                       {{-- // <span class="cm">5 Comments</span> --}}
                                        <span><a href="#">{{$blog->category->name}}</a></span>
                                    </div>
                                    <!-- end single page post meta -->
                                </div>

                                <!-- start social icons -->
                               {!!Share::page(route('show.blog',$blog->slug), $blog->title, ['class' => 'fb', 'id' => 'my-id'], '<ul class="pull-right clearfix social share-social js-post-share-media">', '</ul>')
                                        ->facebook()
                                        ->twitter()
                                        ->googlePlus()
                                        ->linkedin(route('show.blog',$blog->slug))!!}
                                <!-- end social icons -->
                            </div>
                        </div>
                    </div>
                    <!-- end banner content -->

                </div>
            </section>

           @include('Frontend.pages.blog.partials.header')
 <!-- start main wrapper -->
</section>
        <main class="main-wrapper blog-single">
            <section class="section-main single-blog blog-bg">
                <div class="section-common-space">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-8">
                                <!-- start main post -->
                                <div class="main-post">

                                    <!-- start single page post start -->
                                    <article class="single-post-content">

                                        <!-- start post thumbnail -->
                                        <div class="post-thumb-wrap">
                                           <div class="thumb-slides-container">
                                           	@foreach($blog->images as $image)
                                                    <img class="activator" src="{{$image->url}}" alt="{{$image->name}}" style=" height:420px !important;">
                                                </div>
                                              @endforeach
                                        </div>
                                        <!-- end post thumbnail -->

                                        <!-- start single post content -->
                                        <div class="post-entry">
                                           {!!$blog->content!!}
                                        </div>
                                        <!-- end single post content -->

                                        <!-- start share post -->
                                        <div class="clearfix tab-histry post-share">
                                            <span>Social Share</span>
                                            {!!Share::page(route('show.blog',$blog->slug), $blog->title, ['class' => 'fb', 'id' => 'my-id'], '<ul class="pull-right clearfix social share-social js-post-share-media">', '</ul>')
                                        ->facebook()
                                        ->twitter()
                                        ->googlePlus()
                                        ->linkedin(route('show.blog',$blog->slug))!!}
                                        </div>
                                        <!-- end share post -->

                                    </article>
                                    <!-- end single page post start -->
                                    
                              {{--       <!-- start comment section -->
                                    <div class="white-box comments-section">
                                        <h2 class="com-title">4 Comments</h2>
                                        <ul>
                                            <li>
                                                <div class="clearfix single-comment mdl-shadow--2dp jumbo-shadow">
                                                    <div class="clearfix comment-thumb">
                                                        <a href="#" class="pull-left ctwr"><img src="../../img/comment-thumb/cr1.png" alt="User Image"></a>
                                                        <span class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect btn-default btn-black pull-right comment-reply">Reply</span>
                                                        <div class="comment-meta">
                                                            <a href="">CoderPixel says:</a>
                                                            <div class="date">October 24, 2015 at 07.50 am</div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-content">
                                                        <div class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non enim ut enim fringilla adipiscing id in lorem. Quisque aliquet neque vitae lectus tempus consectetur.</div>
                                                    </div>
                                                </div>

                                                <ul>
                                                    <li>
                                                        <div class="clearfix single-comment mdl-shadow--2dp jumbo-shadow">
                                                            <div class="clearfix comment-thumb">
                                                                <a href="#" class="pull-left ctwr"><img src="../../img/comment-thumb/cr2.png" alt="User Image"></a>
                                                                <span class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect btn-default btn-black pull-right comment-reply">Reply</span>
                                                                <div class="comment-meta">
                                                                    <a href="">EKHTIAR MAHMUD says:</a>
                                                                    <div class="date">October 24, 2015 at 07.50 am</div>
                                                                </div>
                                                            </div>
                                                            <div class="comment-content">
                                                                <div class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non enim ut enim fringilla adipiscing id in lorem. Quisque aliquet neque vitae lectus tempus consectetur.</div>
                                                            </div>
                                                        </div>
                                                        <ul>
                                                            <li>
                                                                <div class="clearfix single-comment mdl-shadow--2dp jumbo-shadow">
                                                                    <div class="clearfix comment-thumb">
                                                                        <a href="#" class="pull-left ctwr"><img src="../../img/comment-thumb/cr3.png" alt="User Image"></a>
                                                                        <span class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect btn-default btn-black pull-right comment-reply">Reply</span>
                                                                        <div class="comment-meta">
                                                                            <a href="">ANONYMOUS says:</a>
                                                                            <div class="date">October 24, 2015 at 07.50 am</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="comment-content">
                                                                        <div class="comment-text">Great Design! Like it :)</div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <div class="clearfix single-comment mdl-shadow--2dp jumbo-shadow">
                                                            <div class="clearfix comment-thumb">
                                                                <a href="#" class="pull-left ctwr"><img src="../../img/comment-thumb/cr4.png" alt="User Image"></a>
                                                                <span class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect btn-default btn-black pull-right comment-reply">Reply</span>
                                                                <div class="comment-meta">
                                                                    <a href="">JAMES BOND says:</a>
                                                                    <div class="date">October 24, 2015 at 07.50 am</div>
                                                                </div>
                                                            </div>
                                                            <div class="comment-content">
                                                                <div class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non enim ut enim fringilla adipiscing id in lorem. Quisque aliquet neque vitae lectus tempus consectetur.</div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="clearfix single-comment mdl-shadow--2dp jumbo-shadow">
                                                            <div class="clearfix comment-thumb">
                                                                <a href="#" class="pull-left ctwr"><img src="../../img/comment-thumb/cr5.png" alt="User Image"></a>
                                                                <span class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect btn-default btn-black pull-right comment-reply">Reply</span>
                                                                <div class="comment-meta">
                                                                    <a href="">ROBERT DOWNEY says:</a>
                                                                    <div class="date">October 24, 2015 at 07.50 am</div>
                                                                </div>
                                                            </div>
                                                            <div class="comment-content">
                                                                <div class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non enim ut enim fringilla adipiscing id in lorem. Quisque aliquet neque vitae lectus tempus consectetur.</div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end comment section --> --}}
                
                                 {{--    <!-- start comment comment form -->
                                    <div class="clearfix white-box comment-form cu-form">
                                        <h2 class="com-title">Leave a Reaply</h2>
                                        <div class="comment-form-group">
                                            <form action="#" class="matx-form-valid">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="mdl-textfield mdl-js-textfield">
                                                            <input class="mdl-textfield__input" type="text" id="name" />
                                                            <label class="mdl-textfield__label" for="name">Name</label>
                                                          </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mdl-textfield mdl-js-textfield">
                                                            <input class="mdl-textfield__input" type="text" id="email" />
                                                            <label class="mdl-textfield__label" for="email">Email</label>
                                                          </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mdl-textfield mdl-js-textfield">
                                                            <input class="mdl-textfield__input" type="text" id="website" />
                                                            <label class="mdl-textfield__label" for="website">Website</label>
                                                          </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mdl-textfield mdl-js-textfield mdl-textarea">
                                                            <textarea class="mdl-textfield__input" id="message" ></textarea>
                                                            <label class="mdl-textfield__label" for="message">Message</label>
                                                      </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="text-left">
                                                            <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect btn-black btn-default btn-submit" disabled>send</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- end comment comment form --> --}}

                                </div>
                                <!-- end main post -->
                            </div>
                            <!-- start sidebar -->
                         @include('Frontend.pages.blog.partials.sidebar' ,['latest' => $latest, 'categories'=> $categories])
                            <!-- end sidebar -->
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- end main wrapper -->

@endsection