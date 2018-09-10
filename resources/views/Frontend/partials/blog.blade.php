           <section id="blog" class="section-main">

                <!-- start blog post section -->
                <section class="primary-bg-color blog-post-section">

                    <div class="section-common-space">
                        <div class="container">
                            <!-- start section title -->
                            <div class="text-center section-heading">
                                <h2 class="section-title">BLOG POST</h2>
                                <h3 class="section-subtitle">Check what's new in the world of web development and design trends</h3>
                            </div>
                            <!--end section title -->

                            <div class="row blog-post-grid">
                                <!-- start single blog post-->
                                <!-- start single blog post -->
                                @foreach($blogs as $blog)
                                <article class="col-xxs-12 col-xs-6 col-sm-4 single-blog-post">
                                    <div class="mdl-card jumbo-shadow mdl-shadow--2dp">
                                        <div class="post-thumb-wrap">
                                            <?php
                                             $image = $blog->images->first();
                                             //dump($image);
                                            ?>
                                            <!-- blog post thumbnail -->
                                            <img src="{{$image->url}}" alt="Blog 2 Thumb" height="300px">
                                            <div class="post-meta-info">

                                                <!-- post date -->
                                                <span class="post-meta-date">{{ date('M j, Y' ,strtotime($blog->created_at)) }}</span>
                                            </div>
                                        </div>
                                        <div class="post-content-wrap">
                                            
                                            <!-- blog post title -->
                                            <h2 class="mdl-card__title-text mdl-card__title-content"><a href="{{route('show.blog', $blog->slug)}}">{{$blog->title}}</a></h2>

                                            <!-- blog post content -->
                                            <div class="mdl-card__supporting-text">
                                                {{ strip_tags(substr($blog->content,0,50)) }} {{ strlen($blog->content) > 50 ? ".....": ""}}
                                            </div>
                                        </div>
                                        <div class="mdl-card__actions mdl-card--border">

                                            <!-- blog post comment number -->
                                            <a href="#" class="blog-comments">5 Comments</a>
                                            <a id="post-2" class="blog-share"><i class="zmdi zmdi-share"></i></a>

                                            <!-- start blog post social icons -->
                                            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect post-share-media js-post-share-media" data-for="post-2">
                                                <li class="fb"><a href="blog/single/single.html"><i class="zmdi zmdi-facebook-box"></i> <span>Facebook</span></a></li>
                                                <li class="tw"><a href="blog/single/single.html"><i class="zmdi zmdi-twitter-box"></i> <span>Twitter</span></a></li>
                                                <li class="gplus"><a href="blog/single/single.html"><i class="zmdi zmdi-google-plus-box"></i> <span>Google plus</span></a></li>
                                                <li class="lin"><a href="blog/single/single.html"><i class="zmdi zmdi-linkedin-box"></i> <span>Linked In</span></a></li>
                                            </ul>
                                            <!-- end blog post social icons -->

                                        </div>
                                    </div>
                                </article>
                                @endforeach
                                <!-- end single blog post-->
                                <!-- end single blog post-->
                               
                            </div>

                            <!-- view all blog page button  -->
                            <div class="text-center view-blog-post wow fadeInUpSmall" data-wow-duration="1s">
                                <a href="blog/blog-standard.html" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect btn-default btn-highlight">View all</a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end blog post section -->

                <!-- start newsletter section -->
                <section class="newsletter overflow-hidden">
                    <div class="bg-image newsletter-bg" data-center="transform: translate3d(0px, -50%, 0px)" data-top-bottom="transform: translate3d(0px, -25%, 0px)" data-bottom-top="transform: translate3d(0px, -75%, 0px)"></div>
                    <div class="overlay overlay-five">
                        <div class="section-common-space">
                            <div class="container">
                                <div class="row">
                                    <div class="clearfix col-sm-12 col-md-offset-2 col-md-10 col-lg-offset-2 col-lg-8">
                                        <div class="section-heading"> 
                                            <h2 class="section-title">NEWSLETTER</h2>
                                        </div>
                                        <div class="clearfix newsletter-form">
                                            <form action="#" class="mailchimpForm">
                                                <div class="mdl-textfield mdl-js-textfield news-letter-input">
                                                    <input class="mdl-textfield__input" type="text" id="nl_email" name="EMAIL" />
                                                    <label class="mdl-textfield__label" for="nl_email">YOUR EMAIL</label>
                                                </div>
                                                <button type="submit" class="mdl-button ripple-black mdl-js-button mdl-button--raised mdl-js-ripple-effect btn-default btn-white wow fadeInRight" data-wow-duration="1.2s">Subscribe</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> 
                <!-- end newsletter section -->

            </section>