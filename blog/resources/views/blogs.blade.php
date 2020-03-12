@extends('header')
@section('content')

    <!-- start page-wrapper -->
      <!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>Blog</h2>
                        <p>Samsa was a travelling salesman and above it there hung a picture that he had recently cut out of an illustrated magazine and</p>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>        
        <!-- end page-title -->


        <!-- start blog-pg-section -->
        @foreach($myposts as $post)
        <?php
        $mytitle = str_replace(" ", "?", $post->title);
        ?>
        <section class="blog-pg-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-8">
                        <div class="blog-content">
                            <div class="post format-standard-image">
                                <div class="entry-media">
                                    <img src="../uploads/file/{{$post->image}}" alt="">
                                    <div class="cat">{{$post->content}}</div>
                                </div>
                                <div class="entry-meta">
                                    <span>{{$post->created_at}} </span>
                                    <span>By: {{$post->user_id()->first()->name}}
                                </div>
                                <div class="entry-details">
                                    <h3><a href="blog-single/{{$post->id}}/{{$mytitle}}">{{$post->title}}</a></h3>
                                    <p>{{$post->description}}</p>
                                </div>
                            </div>
                            @endforeach
                          <!--   <div class="post format-standard-image">
                                <div class="entry-media">
                                    <img src="./blog_files/img-5.jpg" alt="">
                                    <div class="cat">SEO, SMM</div>
                                </div>
                                <div class="entry-meta">
                                    <span>Feb 13, 2020 </span>
                                    <span>By: <a href="https://seoul-html.itech-theme.com/blog.html#">Admim</a> </span>
                                </div>
                                <div class="entry-details">
                                    <h3><a href="https://seoul-html.itech-theme.com/blog.html#">Search engine optimization but I didn’t know where to begin contacted SEO Services USA</a></h3>
                                    <p>Samples lay spread out on the table  Samsa was a travelling salesman and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with Collection of textile</p>
                                    <a href="https://seoul-html.itech-theme.com/blog.html#" class="read-more">Read More</a>
                                </div>
                            </div> -->
                           <!--  <div class="post format-video">
                                <div class="entry-media video-holder">
                                    <img src="./blog_files/img-6.jpg" alt="">
                                    <a href="https://www.youtube.com/embed/7e90gBu4pas?autoplay=1" class="video-btn" data-type="iframe">
                                        <i class="fi flaticon-play-button"></i>
                                    </a>
                                    <div class="cat">SEO, SMM</div>
                                </div>
                                <div class="entry-meta">
                                    <span>Feb 13, 2020 </span>
                                    <span>By: <a href="https://seoul-html.itech-theme.com/blog.html#">Admim</a> </span>
                                </div>
                                <div class="entry-details">
                                    <h3><a href="https://seoul-html.itech-theme.com/blog.html#">Search engine optimization but I didn’t know where to begin contacted SEO Services USA</a></h3>
                                    <p>Samples lay spread out on the table  Samsa was a travelling salesman and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with Collection of textile</p>
                                    <a href="https://seoul-html.itech-theme.com/blog.html#" class="read-more">Read More</a>
                                </div>
                            </div> -->
                           <!--  <div class="post format-standard">
                                <div class="cat">Adovcate, Law</div>
                                <div class="entry-meta">
                                    <span>Feb 13, 2020 </span>
                                    <span>By: <a href="https://seoul-html.itech-theme.com/blog.html#">Admim</a> </span>
                                </div>
                                <div class="entry-details">
                                    <h3><a href="https://seoul-html.itech-theme.com/blog.html#">Search engine optimization but I didn’t know </a></h3>
                                    <p>Samples lay spread out on the table  Samsa was a travelling salesman and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with Collection of textile</p>
                                    <a href="https://seoul-html.itech-theme.com/blog.html#" class="read-more">Read More</a>
                                </div>
                            </div> -->
                            <!-- <div class="post format-gallery">
                                <div class="entry-media">
                                    <div class="post-slider owl-carousel owl-theme owl-loaded owl-text-select-on">
                                        
                                        
                                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1560px, 0px, 0px); transition: all 0s ease 0s; width: 4680px;"><div class="owl-item cloned" style="width: 750px; margin-right: 30px;"><img src="./blog_files/img-5.jpg" alt=""></div><div class="owl-item cloned" style="width: 750px; margin-right: 30px;"><img src="./blog_files/img-6.jpg" alt=""></div><div class="owl-item active" style="width: 750px; margin-right: 30px;"><img src="./blog_files/img-5.jpg" alt=""></div><div class="owl-item" style="width: 750px; margin-right: 30px;"><img src="./blog_files/img-6.jpg" alt=""></div><div class="owl-item cloned" style="width: 750px; margin-right: 30px;"><img src="./blog_files/img-5.jpg" alt=""></div><div class="owl-item cloned" style="width: 750px; margin-right: 30px;"><img src="./blog_files/img-6.jpg" alt=""></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style=""><i class="fi flaticon-back"></i></div><div class="owl-next" style=""><i class="fi flaticon-next"></i></div></div><div class="owl-dots" style="display: none;"></div></div></div>
                                    <div class="cat">SEO, SMM</div>
                                </div>
                                <div class="entry-meta">
                                    <span>Feb 13, 2020 </span>
                                    <span>By: <a href="https://seoul-html.itech-theme.com/blog.html#">Admim</a> </span>
                                </div>
                                <div class="entry-details">
                                    <h3><a href="https://seoul-html.itech-theme.com/blog.html#">Search engine optimization but I didn’t know where to begin contacted SEO Services USA</a></h3>
                                    <p>Samples lay spread out on the table  Samsa was a travelling salesman and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with Collection of textile</p>
                                    <a href="https://seoul-html.itech-theme.com/blog.html#" class="read-more">Read More</a>
                                </div>
                            </div> -->
                            <!--instade of paginate-->
                            <!--###############################################################################################################-->
                            <!-- <div class="pagination-wrapper pagination-wrapper-left">
                                <ul class="pg-pagination">
                                    <li>
                                        <a href="https://seoul-html.itech-theme.com/blog.html#" aria-label="Previous">
                                            <i class="fi flaticon-back"></i>
                                        </a>
                                    </li>
                                    <li class="active"><a href="https://seoul-html.itech-theme.com/blog.html#">1</a></li>
                                    <li><a href="https://seoul-html.itech-theme.com/blog.html#">2</a></li>
                                    <li><a href="https://seoul-html.itech-theme.com/blog.html#">3</a></li>
                                    <li>
                                        <a href="https://seoul-html.itech-theme.com/blog.html#" aria-label="Next">
                                            <i class="fi flaticon-next"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div> -->
                            <!--end paginate-->
                            <!--#################################################################################################################-->
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="blog-sidebar">
                           <!--  <div class="widget about-widget">
                                <h3>About us</h3>
                                <div class="img-holder">
                                    <img src="./blog_files/about-widget.jpg" alt="">
                                </div>
                                <p>Picture Samples lay spread out on the Samsa was a travelling salesman and above it there hung a  that he</p>
                                <div class="social">
                                    <ul class="clearfix">
                                        <li><a href="https://seoul-html.itech-theme.com/blog.html#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="https://seoul-html.itech-theme.com/blog.html#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="https://seoul-html.itech-theme.com/blog.html#"><i class="ti-linkedin"></i></a></li>
                                        <li><a href="https://seoul-html.itech-theme.com/blog.html#"><i class="ti-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div> -->
                           <!--  <div class="widget search-widget">
                                <h3>Search</h3>
                                <form>
                                    <div>
                                        <input type="text" class="form-control" placeholder="Search Post..">
                                        <button type="submit"><i class="ti-search"></i></button>
                                    </div>
                                </form>
                            </div> -->
                       
                         
                            
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end blog-pg-section -->


       @endsection