   <div class="col-xs-12 col-sm-4 primary-sidebar">
                                <div class="sidebar-area">

                                    <!-- recent post widget-->
                                    <aside class="white-box widget">
                                        <h3 class="widget-title">RECENT POSTS</h3>
                                        <div class="widget-text">
                                            <ul class="recent-posts">
                                               @foreach($latest as $blog)
                                                <li class="recent-item">
                                                    <a href="{{route('show.blog',$blog->slug)}}">{{$blog->title}}</a>
                                                    <span><time datetime="2015-10-24">{{ date('M j, Y' ,strtotime($blog->created_at)) }}</time></span>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </aside>

                                    <!-- category widget -->
                                    <aside class="white-box widget">
                                        <h3 class="widget-title">CATEGORIES</h3>
                                        <ul>
                                           @foreach($categories  as $category)
                                            <li><a href="#">{{$category->name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </aside>

                                    <!-- archive widget -->
<!--
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
-->

                                    <!-- tag widget -->
<!--
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
-->
                                </div>
                            </div>