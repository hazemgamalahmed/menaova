@extends('header')
@section('content')
       <section class="hero-slider hero-style-1">
            <div class="line">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="hero-container">
                <div class="hero-inner">
                    <div class="container">
                        <div class="slide-title">
                            <h2>  traffic should you actually be getting!</h2>
                        </div>
                        <div class="slide-text">
                            <p> frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole</p>
                        </div>
                        <div class="clearfix"></div>
                        <div class="rocket-area">
                            <img src="{{url('../public/rocket-2.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of hero slider -->


        <!-- start features-section -->
        <section class="features-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-8">
                        <div class="section-title">
                            <span>Check Our Features</span>
                            <h2>Dynamic team of creative <br>people, Innovation and Degital <br>marketing expert.</h2>
                            <p>Samsa was a travelling salesman and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="feature-grids clearfix">
                            <!--first of the blogs-->
                            
                            <h1 align="center">last news </h1>
                            @foreach($myindex as $mypost)
                            <?php
                            $mynewTitle = str_replace(" ", "?", $mypost->title);
                            ?>
                            <div class="grid">
                                <a href="{{url('/')}}/blog-single/{{$mypost->id}}/{{$mynewTitle}}"><h3>{{$mypost->title}}</h3></a>
                                <p>{{$mypost->description}}</p>
                                <img src="uploads/file/{{$mypost->image}}">
                            </div>
                            @endforeach
                            <!--end of the blogs-->
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end features-section -->

        
        <!-- start tips-tricks-section -->
        <!-- end tips-tricks-section -->


        <!-- start services-section -->
        <section class="services-section section-padding">
            <div class="shape">
                <div class="line">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="section-title-s3">
                            <span>Services</span>
                            <h2>We Are Specialized in the Following Services</h2>
                            <p>Samsa was a travelling salesman  and above it there hung a picture that he had recently cut out of an illustrated magazine valuealb</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="service-grids">
                            <div class="grid">
                                <i class="fi flaticon-rocket"></i>
                                <h3><a href="https://seoul-html.itech-theme.com/index.html#">SEO Optimization</a></h3>
                                <p>Magazine and housed in a gilded in frame. It showed a lady fitted wifur hat and fur who sat upright</p>
                            </div>
                            <div class="grid">
                                <i class="fi flaticon-content"></i>
                                <h3><a href="https://seoul-html.itech-theme.com/index.html#">Content Marketing</a></h3>
                                <p>Magazine and housed in a gilded in frame. It showed a lady fitted wifur hat and fur who sat upright</p>
                            </div>
                            <div class="grid">
                                <i class="fi flaticon-email"></i>
                                <h3><a href="https://seoul-html.itech-theme.com/index.html#">Email Marketing</a></h3>
                                <p>Magazine and housed in a gilded in frame. It showed a lady fitted wifur hat and fur who sat upright</p>
                            </div>
                            <div class="grid">
                                <i class="fi flaticon-facebook"></i>
                                <h3><a href="https://seoul-html.itech-theme.com/index.html#">Social Marketing</a></h3>
                                <p>Magazine and housed in a gilded in frame. It showed a lady fitted wifur hat and fur who sat upright</p>
                            </div>
                            <div class="grid">
                                <i class="fi flaticon-strategy"></i>
                                <h3><a href="https://seoul-html.itech-theme.com/index.html#">PPC Marketing</a></h3>
                                <p>Magazine and housed in a gilded in frame. It showed a lady fitted wifur hat and fur who sat upright</p>
                            </div>
                            <div class="grid">
                                <i class="fi flaticon-chain"></i>
                                <h3><a href="https://seoul-html.itech-theme.com/index.html#">Link Building</a></h3>
                                <p>Magazine and housed in a gilded in frame. It showed a lady fitted wifur hat and fur who sat upright</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end services-section -->


        <!-- start why-choose-us-s1 -->
       
        <!-- end why-choose-us-s1 -->


        <!-- start seo-rank-section -->
       
        <!-- end seo-rank-section -->


        <!-- start pricing-section -->
        <section class="pricing-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="section-title-s2">
                            <span>Pricing</span>
                            <h2>No hidden charges! Choose your best plan.</h2>
                            <p>Samsa was a travelling salesman  and above it there hung a picture that he had recently cut out of an illustrated magazine valuealb</p>
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="pricing-grids">
                            <div class="grid">
                                <div class="pricing-header">
                                    <h5>Startup Plan</h5>
                                    <i class="fi flaticon-diamond"></i>
                                    <h1 class="price"><span>$</span>139</h1>
                                    <p>Per Month</p>
                                </div>
                                <div class="pricing-body">
                                    <ul>
                                        <li>Finance Business &amp;  Analysing</li>
                                        <li>Managment &amp; Marketing</li>
                                        <li>1 Top 10 Ranking Gurantee</li>
                                        <li>24/7 Customer Support</li>
                                    </ul>
                                    <a href="https://seoul-html.itech-theme.com/index.html#" class="theme-btn-s3">Select The Plan</a>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="hilight-tag">Most Popular</div>
                                <div class="pricing-header">
                                    <h5>Professional Plan</h5>
                                    <i class="fi flaticon-speaker"></i>
                                    <h1 class="price"><span>$</span>239</h1>
                                    <p>Per Month</p>
                                </div>
                                <div class="pricing-body">
                                    <ul>
                                        <li>Finance Business &amp;  Analysing</li>
                                        <li>Managment &amp; Marketing</li>
                                        <li>1 Top 10 Ranking Gurantee</li>
                                        <li>24/7 Customer Support</li>
                                    </ul>
                                    <a href="https://seoul-html.itech-theme.com/index.html#" class="theme-btn-s3">Select The Plan</a>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="pricing-header">
                                    <h5>Premium Plan</h5>
                                    <i class="fi flaticon-coffee-cup"></i>
                                    <h1 class="price"><span>$</span>339</h1>
                                    <p>Per Month</p>
                                </div>
                                <div class="pricing-body">
                                    <ul>
                                        <li>Finance Business &amp;  Analysing</li>
                                        <li>Managment &amp; Marketing</li>
                                        <li>1 Top 10 Ranking Gurantee</li>
                                        <li>24/7 Customer Support</li>
                                    </ul>
                                    <a href="https://seoul-html.itech-theme.com/index.html#" class="theme-btn-s3">Select The Plan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>               
            </div> <!-- end container -->
        </section>
        <!-- end pricing-section -->


        <!-- start partners-section -->
        <section class="partners-section">
            <h2 class="hidden">Partners</h2>
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="partner-grids partners-slider owl-carousel owl-theme owl-loaded">
                            
                            
                            
                            
                            
                        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1638px, 0px, 0px); transition: all 0.3s ease 0s; width: 3510px;"><div class="owl-item cloned" style="width: 204px; margin-right: 30px;"><div class="grid">
                                <img src="./index_files/img-1.png" alt="">
                            </div></div><div class="owl-item cloned" style="width: 204px; margin-right: 30px;"><div class="grid">
                                <img src="./index_files/img-2.png" alt="">
                            </div></div><div class="owl-item cloned" style="width: 204px; margin-right: 30px;"><div class="grid">
                                <img src="./index_files/img-3.png" alt="">
                            </div></div><div class="owl-item cloned" style="width: 204px; margin-right: 30px;"><div class="grid">
                                <img src="./index_files/img-4.png" alt="">
                            </div></div><div class="owl-item cloned" style="width: 204px; margin-right: 30px;"><div class="grid">
                                <img src="./index_files/img-5.png" alt="">
                            </div></div><div class="owl-item" style="width: 204px; margin-right: 30px;"><div class="grid">
                                <img src="./index_files/img-1.png" alt="">
                            </div></div><div class="owl-item" style="width: 204px; margin-right: 30px;"><div class="grid">
                                <img src="./index_files/img-2.png" alt="">
                            </div></div><div class="owl-item active" style="width: 204px; margin-right: 30px;"><div class="grid">
                                <img src="./index_files/img-3.png" alt="">
                            </div></div><div class="owl-item active" style="width: 204px; margin-right: 30px;"><div class="grid">
                                <img src="./index_files/img-4.png" alt="">
                            </div></div><div class="owl-item active" style="width: 204px; margin-right: 30px;"><div class="grid">
                                <img src="./index_files/img-5.png" alt="">
                            </div></div><div class="owl-item cloned active" style="width: 204px; margin-right: 30px;"><div class="grid">
                                <img src="./index_files/img-1.png" alt="">
                            </div></div><div class="owl-item cloned active" style="width: 204px; margin-right: 30px;"><div class="grid">
                                <img src="./index_files/img-2.png" alt="">
                            </div></div><div class="owl-item cloned" style="width: 204px; margin-right: 30px;"><div class="grid">
                                <img src="./index_files/img-3.png" alt="">
                            </div></div><div class="owl-item cloned" style="width: 204px; margin-right: 30px;"><div class="grid">
                                <img src="./index_files/img-4.png" alt="">
                            </div></div><div class="owl-item cloned" style="width: 204px; margin-right: 30px;"><div class="grid">
                                <img src="./index_files/img-5.png" alt="">
                            </div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style="display: none;">prev</div><div class="owl-next" style="display: none;">next</div></div><div class="owl-dots" style="display: none;"></div></div></div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end partners-section -->


        <!-- start testimonials-section -->
       
        <!-- end testimonials-section -->
        @endsection