<!DOCTYPE html>
<!-- saved from url=(0044)https://seoul-html.itech-theme.com/blog.html -->
<html lang="en" class=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="{{$mysingle->user_id()->first()->name}}">
    <?php
    $metaTitle = str_replace(" ", "?", $mysingle->title);
    ?>
    <meta property="og:url" content="https://www.menaova.com/server.php/blog-single/{{$mysingle->id}}/{{$metaTitle}}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{$mysingle->title}}" />
    <meta property="og:description" content="{{$mysingle->description}}" />
    <meta property="og:image" content="{{url('../uploads/file')}}/{{$mysingle->image}}" />
    <meta name="csrf-token" content="LggE3JDQLb9tCzJ0wCtQdFMvgXLfA5ehquoUnUEU">
    <meta name="google-site-verification" content="CAGodPjlo9cFVbsuGAxsi_dAevfFyLtqjGrJcrUCEFk" />
    <meta name="description" content="{{$mysingle->description}}">
    <meta name="keywords" content="{{$mysingle->content}}">
    <meta name="referrer" content="origin-when-crossorigin" id="meta_referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> {{$mysingle->title}} </title>
    
    <link href="{{ URL::asset('../public/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('../public/flaticon.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('../public/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('../public/animate.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('../public/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('../public/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('../public/slick.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('../public/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('../public/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('../public/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('../public/odometer-theme-default.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('../public/jquery.fancybox.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('../public/style.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<style type="text/css">.fancybox-margin{margin-right:17px;}</style></head>

<body>
 <div class="page-wrapper">

        <!-- start preloader -->
        <div class="preloader" style="display: none;">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
        <!-- end preloader -->

        <!-- Start header -->
        <header id="header" class="site-header header-style-3">
            <nav class="navigation navbar navbar-default original">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="https://www.sky-tech-eg.com/" target="_blank"><img src="{{url('../public/sky-tech-logo.png')}}" alt=""></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navbar-left navigation-holder">
                        <button class="close-navbar"><i class="ti-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li class="menu-item-has-children">
                                <a href="{{url('/')}}">Home.</a>
                                
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{url('../server.php/blog')}}">Pages.</a>
                                <ul class="sub-menu">
                                    <li><a href="{{url('about-us')}}">About</a></li>
                                    <li><a href="{{url('../server.php/contacts-us')}}">Contact</a></li>
                                    
                                    <li><a href="{{url('../server.php/team')}}">Team</a></li>
                                    
                                    
                                    <li><a href="{{url('pricing')}}">Pricing</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{url('../server.php/services')}}">Services.</a>
                                
                            </li>
                            <li class="menu-item-has-children current-menu-parent">
                                <a href="{{url('../server.php/blog')}}">Blog</a>
                               
                            </li>
                            
                            <li><a href="{{url('../server.php/contacts-us')}}">Contact</a></li>
                        </ul>
                    </div><!-- end of nav-collapse -->
                    
                    <div class="contact-info-1">
                       <span>Call us: +54847-54521</span>
                       <a href="{{url('../server.php/contacts-us')}}" class="theme-btn-s2">Contact us <i class="ti-angle-right"></i></a>
                    </div>
                </div><!-- end of container -->
            </nav><nav class="navigation navbar navbar-default sticky-header">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="https://seoul-html.itech-theme.com/index.html"><img src="./blog_files/logo.png" alt=""></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navbar-left navigation-holder">
                        <button class="close-navbar"><i class="ti-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li class="menu-item-has-children">
                                <a href="https://seoul-html.itech-theme.com/blog.html#">Home.</a>
                                <ul class="sub-menu">
                                    <li><a href="https://seoul-html.itech-theme.com/index.html">Home style 1</a></li>
                                    <li><a href="https://seoul-html.itech-theme.com/index-2.html">Home style 2</a></li>
                                    <li><a href="https://seoul-html.itech-theme.com/index-3.html">Home style 3</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="https://seoul-html.itech-theme.com/blog.html#">Pages.</a>
                                <ul class="sub-menu">
                                    <li><a href="{{url('about')}}">Aboutrs</a></li>
                                    <li><a href="https://seoul-html.itech-theme.com/contact.html">Contact</a></li>
                                   <!--  <li class="menu-item-has-children">
                                        <a href="https://seoul-html.itech-theme.com/blog.html#Level3">Testimonials</a>
                                        <ul class="sub-menu">
                                            <li><a href="https://seoul-html.itech-theme.com/testimonials.html">Testimonials</a></li>
                                            <li><a href="https://seoul-html.itech-theme.com/testimonials-s2.html">Testimonials style 2</a></li>
                                        </ul>
                                    </li> -->
                                    <li class="menu-item-has-children">
                                        <a href="https://seoul-html.itech-theme.com/blog.html#Level3">Case studies</a>
                                        <ul class="sub-menu">
                                            <li><a href="https://seoul-html.itech-theme.com/portfolio.html">Case studies</a></li>
                                            <li><a href="https://seoul-html.itech-theme.com/project-single.html">Case studies single</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="https://seoul-html.itech-theme.com/team.html">Team</a></li>
                                    <li><a href="https://seoul-html.itech-theme.com/faq.html">FAQ</a></li>
                                    <li><a href="https://seoul-html.itech-theme.com/404.html">404</a></li>
                                    <li><a href="https://seoul-html.itech-theme.com/pricing.html">Pricing</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="https://seoul-html.itech-theme.com/blog.html#">Services.</a>
                                <ul class="sub-menu">
                                    <li><a href="https://seoul-html.itech-theme.com/services.html">Services</a></li>
                                    <li><a href="https://seoul-html.itech-theme.com/services-s2.html">Services style 2</a></li>
                                    <li><a href="https://seoul-html.itech-theme.com/services-s3.html">Services style 3</a></li>
                                    <li><a href="https://seoul-html.itech-theme.com/seo.html">Search engine optimization</a></li>
                                    <li><a href="https://seoul-html.itech-theme.com/smm.html">Social media marketing</a></li>
                                    <li><a href="https://seoul-html.itech-theme.com/content-merketing.html">Content Merketing</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children current-menu-parent">
                                <a href="https://seoul-html.itech-theme.com/blog.html#">Blog</a>
                                <ul class="sub-menu">
                                    <li class="current-menu-item"><a href="https://seoul-html.itech-theme.com/blog.html">Blog</a></li>
                                    <li><a href="https://seoul-html.itech-theme.com/blog-left-sidebar.html">Blog Left sidebar</a></li>
                                    <li><a href="https://seoul-html.itech-theme.com/blog-fullwidth.html">Blog full width</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="https://seoul-html.itech-theme.com/blog.html#Level3">Blog single</a>
                                        <ul class="sub-menu">
                                            <li><a href="https://seoul-html.itech-theme.com/blog-single.html">Blog single</a></li>
                                            <li><a href="https://seoul-html.itech-theme.com/blog-single-left-sidebar.html">Blog single Left sidebar</a></li>
                                            <li><a href="https://seoul-html.itech-theme.com/blog-single-fullwidth.html">Blog single full width</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="https://seoul-html.itech-theme.com/blog.html#">Shop</a>
                                <ul class="sub-menu">
                                    <li><a href="https://seoul-html.itech-theme.com/shop.html">Shop</a></li>
                                    <li><a href="https://seoul-html.itech-theme.com/shop-single.html">Shop single</a></li>
                                </ul>
                            </li>
                            <li><a href="https://seoul-html.itech-theme.com/contact.html">Contact</a></li>
                        </ul>
                    </div><!-- end of nav-collapse -->
                    
                    <div class="contact-info-1">
                       <span>Call us: +54847-54521</span>
                       <a href="https://seoul-html.itech-theme.com/blog.html#" class="theme-btn-s2">Contact us <i class="ti-angle-right"></i></a>
                    </div>
                </div><!-- end of container -->
            </nav>
        </header>
        <!-- end of 
        <!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>{{$mysingle->title}}</h2>
                        <p>{{$mysingle->description}}</p>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>        
        <!-- end page-title -->


        <!-- start blog-single-section -->
        <section class="blog-single-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-8">
                        <div class="blog-content">
                            <div class="post format-standard-image">
                                <div class="entry-media">
                                    <img src="../../../uploads/file/{{$mysingle->image}}" alt="">
                                </div>
                                <div class="date-entry-meta">
                                    <div class="entry-meta">
                                        <span>{{$mysingle->created_at}}</span>
                                        <span>By: {{$mysingle->user_id()->first()->name}}
                                    </div>
                                </div>
                                <h2>{{$mysingle->title}}</h2>
                                <p>{{$mysingle->description}} </p>
                                
                              <!--   <h3>His room, a proper human room although a little too small, lay peacefully between its four familiar</h3>
                                <p>What's happened to me he thought Nigurned to look out the window at the dull weather. Pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. . It wasn't a dream. His room, a proper human room although a little too small, lay peacefully between its four </p> -->
                                <!-- <blockquote>
                                   Slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready
                                    <span class="quoter">- Jhone dow</span>
                                </blockquote> -->
                            </div>

                            <div class="tag-share clearfix">
                                <div class="tag">
                                    <ul>
                                        <li>{{$mysingle->content}}</li>
                                    </ul>
                                </div>
                               
                            </div> <!-- end tag-share -->

                           <!--  <div class="author-box">
                                <div class="author-avatar">
                                    <a href="https://seoul-html.itech-theme.com/blog-single.html#" target="_blank"><img src="./blog-single_files/author.jpg" alt=""></a>
                                </div>
                                <div class="author-content">
                                    <a href="https://seoul-html.itech-theme.com/blog-single.html#" class="author-name">Jonathon tro</a>
                                    <p>Raising a heavy fur muff that covered the whole of her lower arm towards the viewer gregor then turned to look out the window.</p>
                                    <div class="socials">
                                        <ul class="social-link">
                                            <li><a href="https://seoul-html.itech-theme.com/blog-single.html#"><i class="ti-facebook"></i></a></li>
                                            <li><a href="https://seoul-html.itech-theme.com/blog-single.html#"><i class="ti-twitter-alt"></i></a></li>
                                            <li><a href="https://seoul-html.itech-theme.com/blog-single.html#"><i class="ti-linkedin"></i></a></li>
                                            <li><a href="https://seoul-html.itech-theme.com/blog-single.html#"><i class="ti-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> -->
                             <!-- end author-box -->
                             <?php
                             $mypreve = str_replace(" ", "?", $prev_man);
                             ?>
                            <div class="more-posts">
                                <div class="previous-post">
                                    <a href="../{{$prev_id}}/{{$mypreve}}">
                                        <span class="post-control-link">prev post</span>
                                        <span class="post-name">{{$prev_man}}</span>
                                    </a>
                                </div>
                                <?php
                                $mynext = str_replace(" ", "?", $next_man);
                                ?>
                                <div class="next-post">
                                    <a href="../{{$next_id}}/{{$mynext}}">
                                        <span class="post-control-link">next post</span>
                                        <span class="post-name">{{$next_man}}</span>
                                    </a>
                                </div>
                            </div>

                         
                    <div class="col col-md-4">
                        <div class="blog-sidebar">
                            <br><br>
                          <div id="fb-root"></div>


                            <div class="widget tag-widget">
                                <h3>Tags</h3>
                                <ul>
                                    
                                    <li>{{$mysingle->content}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <script>(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=114215202075258";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>


<?PHP    
$url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
echo "<div class='fb-comments' data-href='$url' data-num-posts='10' data-width='470'></div>";
?>
        <!-- end blog-single-section -->
@extends('footer')
       