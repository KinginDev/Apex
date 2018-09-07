<template>
	<div>
		<!-- start single blog post -->
                                <article class="col-xxs-12 col-xs-6 col-sm-4 single-blog-post" v-for="post in posts" :key="post.id">
                                    <div class="mdl-card jumbo-shadow mdl-shadow--2dp">
                                        <div class="post-thumb-wrap">

                                            <!-- blog post thumbnail -->
                                            <img src="img/blog/bp2.jpg" alt="Blog 2 Thumb">
                                            <div class="post-meta-info">

                                                <!-- post date -->
                                                <span class="post-meta-date">Merch 14, 2015</span>
                                            </div>
                                        </div>
                                        <div class="post-content-wrap">

                                            <!-- blog post title -->
                                            <h2 class="mdl-card__title-text mdl-card__title-content"><a href="blog/single/single.html">{{post.title}}</a></h2>

                                            <!-- blog post content -->
                                            <div class="mdl-card__supporting-text">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro velit laboriosam eius amet nobis repellat fugiat adipisci.</p>
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
                                <!-- end single blog post-->
	</div>
</template>
<script>
	import axios from 'axios'
	export default{

		name: 'blog',
		data(){
			return {
				posts: []
			}
		},
		methods: {
			getAllPosts(){
				axios.get('api/get/posts', ({data}) => {
					this.posts = data
				});
			}
		},
        created(){
            this.getAllPosts();
        }
	}
</script>