@extends('layouts.app')

@section('content')
    <!-- Start: Header Section -->
    <header id="header-v1" class="navbar-wrapper">
        <button id="myBtn" title="Go to top"><span>&#8593;</span></button>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-topbar">
                        <div class="row">
                            <div class="col-sm-6 col-md-8 d-none d-sm-block">
                                <div class="topbar-info">
                                    <a href="tel:+61-3-8376-6284"><i class="fa fa-phone"></i>Call Us Now:
                                        +61-3-8376-6284</a>
                                    <span>/</span>
                                    <a href="mailto:support@skille.com"><i class="fa fa-envelope"></i>Email Now:
                                        support@skille.com</a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="topbar-links">
                                    <a href="signin.html"><i class="fa fa-lock"></i>Login</a>
                                    <a href="signup.html">Register</a>
                                    <span>|</span>
                                    <div class="header-cart dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                            <i class="fa fa-shopping-cart"></i>
                                            <small>0</small>
                                        </a>
                                        <div class="dropdown-menu cart-dropdown">
                                            <ul>
                                                <li class="clearfix">
                                                    <img src="{{asset('app-assets/images/header-cart-image-01.jpg')}}" alt="cart item" />
                                                    <div class="item-info">
                                                        <div class="name">
                                                            <a href="#">The Great Gatsby</a>
                                                        </div>
                                                        <div class="author"><strong>Author:</strong> F. Scott Fitzgerald
                                                        </div>
                                                        <div class="price">1 X $10.00</div>
                                                    </div>
                                                    <a class="remove" href="#"><i class="fa fa-trash-o"></i></a>
                                                </li>
                                                <li class="clearfix">
                                                    <img src="{{asset('app-assets/images/header-cart-image-02.jpg')}}" alt="cart item" />
                                                    <div class="item-info">
                                                        <div class="name">
                                                            <a href="#">The Great Gatsby</a>
                                                        </div>
                                                        <div class="author"><strong>Author:</strong> F. Scott Fitzgerald
                                                        </div>
                                                        <div class="price">1 X $10.00</div>
                                                    </div>
                                                    <a class="remove" href="#"><i class="fa fa-trash-o"></i></a>
                                                </li>
                                                <li class="clearfix">
                                                    <img src="{{asset('app-assets/images/header-cart-image-03.jpg')}}" alt="cart item" />
                                                    <div class="item-info">
                                                        <div class="name">
                                                            <a href="#">The Great Gatsby</a>
                                                        </div>
                                                        <div class="author"><strong>Author:</strong> F. Scott Fitzgerald
                                                        </div>
                                                        <div class="price">1 X $10.00</div>
                                                    </div>
                                                    <a class="remove" href="#"><i class="fa fa-trash-o"></i></a>
                                                </li>
                                            </ul>
                                            <div class="cart-total">
                                                <div class="title">SubTotal</div>
                                                <div class="price">$30.00</div>
                                            </div>
                                            <div class="cart-buttons">
                                                <a href="cart.html" class="btn btn-dark-gray">View Cart</a>
                                                <a href="checkout.html" class="btn btn-primary">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default">
                        <div class="row w-100 no-gutters">
                            <div class="col-md-3">
                                <div class="navbar-header">
                                    <div class="navbar-brand">
                                        <a href="index.html">
                                            <img src="{{asset('app-assets/images/logo-header-v1.png')}}" alt="" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <!-- Header Topbar -->
                                <div class="collapse navbar-collapse hidden-sm hidden-xs">
                                    <ul class="nav navbar-nav mr-auto">
                                        <li class="nav-item dropdown active">
                                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="index.html">Home</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="index.html">Home V1</a></li>
                                                <li><a href="home-v2.html">Home V2</a></li>
                                                <li><a href="home-v3.html">Home V3</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="books-media-list-view.html">Books &amp; Media</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="books-media-list-view.html">Books &amp; Media List
                                                        View</a>
                                                </li>
                                                <li><a href="books-media-gird-view.html">Books &amp; Media Grid
                                                        View</a></li>
                                                <li><a href="books-media-v3.html">Books &amp; Media V3</a></li>
                                                <li><a href="books-media-detail-v1.html">Books &amp; Media
                                                        Detail V1</a>
                                                </li>
                                                <li><a href="books-media-detail-v2.html">Books &amp; Media
                                                        Detail V2</a>
                                                </li>
                                                <li><a href="books-media-detail-v3.html">Books &amp; Media
                                                        Detail V3</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="news-events-list-view.html">News &amp; Events</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="news-events-list-view.html">News &amp; Events List
                                                        View</a>
                                                </li>
                                                <li><a href="news-events-detail.html">News &amp; Events
                                                        Detail</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Pages</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="signup.html">SignUp/Register</a></li>
                                                <li><a href="signin.html">SignIn</a></li>
                                                <li><a href="404.html">404/Error</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="blog-list.html">Blog</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="blog-list.html">Blog List View</a></li>
                                                <li><a href="blog-grid.html">Blog Grid View</a></li>
                                                <li><a href="blog-detail.html">Blog Detail</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-menu d-lg-none">
                            <a href="#mobile-menu"><i class="fa fa-navicon"></i></a>
                            <div id="mobile-menu">
                                <ul>
                                    <li class="mobile-title">
                                        <h4>Navigation</h4>
                                        <a href="#" class="close"></a>
                                    </li>
                                    <li>
                                        <a href="index.html">Home</a>
                                        <ul>
                                            <li><a href="index.html">Home V1</a></li>
                                            <li><a href="home-v2.html">Home V2</a></li>
                                            <li><a href="home-v3.html">Home V3</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="books-media-list-view.html">Books &amp; Media</a>
                                        <ul>
                                            <li><a href="books-media-list-view.html">Books &amp; Media List
                                                    View</a>
                                            </li>
                                            <li><a href="books-media-gird-view.html">Books &amp; Media Grid
                                                    View</a></li>
                                            <li><a href="books-media-v3.html">Books &amp; Media V3</a></li>
                                            <li><a href="books-media-detail-v1.html">Books &amp; Media
                                                    Detail V1</a>
                                            </li>
                                            <li><a href="books-media-detail-v2.html">Books &amp; Media
                                                    Detail V2</a>
                                            </li>
                                            <li><a href="books-media-detail-v3.html">Books &amp; Media
                                                    Detail V3</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="news-events-list-view.html">News &amp; Events</a>
                                        <ul>
                                            <li><a href="news-events-list-view.html">News &amp; Events List View</a>
                                            </li>
                                            <li><a href="news-events-detail.html">News &amp; Events Detail</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Pages</a>
                                        <ul>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="signup.html">SignUp/Register</a></li>
                                            <li><a href="signin.html">SignIn</a></li>
                                            <li><a href="404.html">404/Error</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="blog-list.html">Blog</a>
                                        <ul>
                                            <li><a href="blog-list.html">Blog List View</a></li>
                                            <li><a href="blog-grid.html">Blog Grid View</a></li>
                                            <li><a href="blog-detail.html">Blog Detail</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- End: Header Section -->

    <!-- Start: Slider Section -->
    <div data-ride="carousel" class="carousel slide" id="home-v1-header-carousel" data-interval="false" data-pause="hover">
        <!-- Carousel slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <figure>
                    <img alt="Home Slide" class="d-block w-100" src="{{asset('app-assets/images/header-slider/home-v1/header-slide.jpg')}}" />
                </figure>
                <div class="carousel-caption" data-aos="fade-down">
                    <h3>Online Learning Anytime, Anywhere!</h3>
                    <h2>Discover Your Roots</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humor, or randomized words.</p>
                    <div class="slide-buttons hidden-sm hidden-xs">
                        <a href="signin.html" class="btn btn-primary">Get Started Now!<span></span></a>
                        <a href="signup.html" class="btn btn-light">Join Now<span></span></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <figure>
                    <img alt="Home Slide" class="d-block w-100" src="{{asset('app-assets/images/header-slider/home-v1/header-slide.jpg')}}" />
                </figure>
                <div class="carousel-caption">
                    <h3>Online Learning Anytime, Anywhere!</h3>
                    <h2>Discover Your Roots</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humor, or randomized words.</p>
                    <div class="slide-buttons hidden-sm hidden-xs">
                        <a href="signin.html" class="btn btn-primary">Get Started Now!<span></span></a>
                        <a href="signup.html" class="btn btn-light">Join Now<span></span></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <figure>
                    <img alt="Home Slide" class="d-block w-100" src="{{asset('app-assets/images/header-slider/home-v1/header-slide.jpg')}}" />
                </figure>
                <div class="carousel-caption">
                    <h3>Online Learning Anytime, Anywhere!</h3>
                    <h2>Discover Your Roots</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humor, or randomized words.</p>
                    <div class="slide-buttons hidden-sm hidden-xs">
                        <a href="signin.html" class="btn btn-primary">Get Started Now!<span></span></a>
                        <a href="signup.html" class="btn btn-light">Join Now<span></span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="carousel-control-prev" href="#home-v1-header-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#home-v1-header-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- End: Slider Section -->

    <!-- Start: Search Section -->
    <section class="search-filters">
        <div class="container">
            <div class="filter-box">
                <div class="row align-items-center">
                    <div class="col-md-4 col-sm-12">
                        <h3>What are you looking for at the SKILLE?</h3>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <form action="{{route('home.search')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="sector_id" id="sector_id" class="form-control">
                                            <option value="">@lang('general.all') @lang('general.sectors')</option>
                                            @foreach($sectors as $sector)
                                                <option value="{{$sector->id}}">{{$sector->type}} - {{$sector->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="class_id" id="class_id" class="form-control">
                                            <option value="">@lang('general.all') @lang('general.classes')</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="subject_id" id="subject_id" class="form-control">
                                            <option value="">@lang('general.all') @lang('general.subjects')</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <a href="#" class="btn btn-primary">@lang('general.search')<span></span></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Search Section -->

    <!-- Start: Welcome Section -->
    <section class="welcome-section" data-speed="0.06" data-revert="true">
        <div class="container">
            <div class="title-content text-center" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <h6 class="sub-title">Welcome to the skille</h6>
                        <h2 class="section-title">Your First Choice For Online Education Anywhere,Anytime</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="welcome-image" data-aos="fade-up-right">
                        <img src="{{asset('app-assets/images/welcome-img-home-v1.jpg')}}" class="algin-right" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="facts-counter" data-aos="fade-left">
                        <ul>
                            <li class="bg-light-blue">
                                <div class="fact-item">
                                    <div class="fact-icon">
                                        <i class="ebook"></i>
                                    </div>
                                    <span>Books<strong class="fact-counter">45780</strong></span>
                                </div>
                            </li>
                            <li class="bg-purple">
                                <div class="fact-item">
                                    <div class="fact-icon">
                                        <i class="eaudio"></i>
                                    </div>
                                    <span>Audio<strong class="fact-counter">32450</strong></span>
                                </div>
                            </li>
                            <li class="bg-pink">
                                <div class="fact-item">
                                    <div class="fact-icon">
                                        <i class="videos"></i>
                                    </div>
                                    <span>Videos<strong class="fact-counter">14450</strong></span>
                                </div>
                            </li>
                            <li class="bg-yellow">
                                <div class="fact-item">
                                    <div class="fact-icon">
                                        <i class="magazine"></i>
                                    </div>
                                    <span>Magazines<strong class="fact-counter">32450</strong></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="welcome-wrap" data-aos="fade-down">
                        <div class="welcome-text">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humor, or randomized words which don't look even slightly believable. If you are going to use
                                a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the
                                first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore
                                always free from repetition, injected humor, or non-characteristic words etc.</p>
                            <a class="btn btn-primary" href="signup.html">Free Join Now<span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Welcome Section -->

    <!-- Start: Features -->
    <section class="features">
        <div class="container">
            <ul>
                <li data-aos="fade-left">
                    <div class="feature-box">
                        <div class="image">
                            <img src="{{asset('app-assets/images/features/home-v1/books-collection.jpg')}}" alt="Books Collection" />
                        </div>
                        <h3>Collection Of Books</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        <a href="about-us.html">
                            Read More <i class="fa fa-long-arrow-right"></i>
                        </a>
                    </div>
                </li>
                <li data-aos="fade-down">
                    <div class="feature-box">
                        <div class="image">
                            <img src="{{asset('app-assets/images/features/home-v1/ebooks.jpg')}}" alt="Books Collection" />
                        </div>
                        <h3>Download or Read eBooks</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        <a href="about-us.html">
                            Read More <i class="fa fa-long-arrow-right"></i>
                        </a>
                    </div>
                </li>
                <li data-aos="fade-right">
                    <div class="feature-box">
                        <div class="image">
                            <img src="{{asset('app-assets/images/features/home-v1/dvd.jpg')}}" alt="Books Collection" />
                        </div>
                        <h3>Watch and Download DVDs</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        <a href="about-us.html">
                            Read More <i class="fa fa-long-arrow-right"></i>
                        </a>
                    </div>
                </li>
                <li data-aos="fade-left">
                    <div class="feature-box">
                        <div class="image">
                            <img src="{{asset('app-assets/images/features/home-v1/magazines.jpg')}}" alt="Books Collection" />
                        </div>
                        <h3>Variety of Magazines</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        <a href="about-us.html">
                            Read More <i class="fa fa-long-arrow-right"></i>
                        </a>
                    </div>
                </li>
                <li data-aos="fade-up">
                    <div class="feature-box">
                        <div class="image">
                            <img src="{{asset('app-assets/images/features/home-v1/audio.jpg')}}" alt="Books Collection" />
                        </div>
                        <h3>Audio for Books & Magazine</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        <a href="about-us.html">
                            Read More <i class="fa fa-long-arrow-right"></i>
                        </a>
                    </div>
                </li>
                <li data-aos="fade-right">
                    <div class="feature-box">
                        <div class="image">
                            <img src="{{asset('app-assets/images/features/home-v1/eaudio.jpg')}}" alt="Books Collection" />
                        </div>
                        <h3>eAudios</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        <a href="about-us.html">
                            Read More <i class="fa fa-long-arrow-right"></i>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- End: Features -->

    <!-- Start: Newsletter -->
    <section class="newsletter section-padding">
        <div class="container">
            <div class="row  align-items-center">
                <div class="col-md-5">
                    <h6 class="sub-title">Newsletter</h6>
                    <h2 class="section-title">Subscribe to get the latest updates</h2>
                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <input class="form-control" placeholder="Enter your Email!" id="newsletter" name="newsletter" type="email">
                        <input class="form-control btn btn-primary" value="Subscribe" type="submit">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Newsletter -->

    <!-- Start: Our Community Section -->
    <section class="community-testimonial">
        <div class="container">
            <div class="title-content text-center" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-8 mx-auto text-center">
                        <h6 class="sub-title">User Testimonial</h6>
                        <h2 class="section-title">Words From our Community</h2>
                    </div>
                </div>
            </div>
            <div class="owl-carousel">
                <div class="single-testimonial-box" data-aos="fade-left">
                    <div class="top-portion">
                        <img src="{{asset('app-assets/images/testimonial-image-01.jpg')}}" alt="Testimonial Image" />
                        <div class="user-comment">
                            <div class="arrow-left"></div>
                            <blockquote cite="#">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna magna, rhoncus
                                eget commodo et, dignissim non nulla. Sed sit amet vestibulum ex. Donec dolor velit
                            </blockquote>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="bottom-portion">
                        <a href="#" class="author">
                            Adrey Pachai <small>(Student )</small>
                        </a>
                        <div class="social-share-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="single-testimonial-box" data-aos="fade-right">
                    <div class="top-portion">
                        <img src="{{asset('app-assets/images/testimonial-image-02.jpg')}}" alt="Testimonial Image" />
                        <div class="user-comment">
                            <div class="arrow-left"></div>
                            <blockquote cite="#">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna magna, rhoncus
                                eget commodo et, dignissim non nulla. Sed sit amet vestibulum ex. Donec dolor velit
                            </blockquote>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="bottom-portion">
                        <a href="#" class="author">
                            Maria B <small>(Student )</small>
                        </a>
                        <div class="social-share-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="single-testimonial-box">
                    <div class="top-portion">
                        <img src="{{asset('app-assets/images/testimonial-image-01.jpg')}}" alt="Testimonial Image" />
                        <div class="user-comment">
                            <div class="arrow-left"></div>
                            <blockquote cite="#">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna magna, rhoncus
                                eget commodo et, dignissim non nulla. Sed sit amet vestibulum ex. Donec dolor velit
                            </blockquote>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="bottom-portion">
                        <a href="#" class="author">
                            Adrey Pachai <small>(Student )</small>
                        </a>
                        <div class="social-share-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="single-testimonial-box">
                    <div class="top-portion">
                        <img src="{{asset('app-assets/images/testimonial-image-02.jpg')}}" alt="Testimonial Image" />
                        <div class="user-comment">
                            <div class="arrow-left"></div>
                            <blockquote cite="#">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna magna, rhoncus
                                eget commodo et, dignissim non nulla. Sed sit amet vestibulum ex. Donec dolor velit
                            </blockquote>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="bottom-portion">
                        <a href="#" class="author">
                            Maria B <small>(Student )</small>
                        </a>
                        <div class="social-share-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="single-testimonial-box">
                    <div class="top-portion">
                        <img src="{{asset('app-assets/images/testimonial-image-01.jpg')}}" alt="Testimonial Image" />
                        <div class="user-comment">
                            <div class="arrow-left"></div>
                            <blockquote cite="#">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna magna, rhoncus
                                eget commodo et, dignissim non nulla. Sed sit amet vestibulum ex. Donec dolor velit
                            </blockquote>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="bottom-portion">
                        <a href="#" class="author">
                            Adrey Pachai <small>(Student )</small>
                        </a>
                        <div class="social-share-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="single-testimonial-box">
                    <div class="top-portion">
                        <img src="{{asset('app-assets/images/testimonial-image-02.jpg')}}" alt="Testimonial Image" />
                        <div class="user-comment">
                            <div class="arrow-left"></div>
                            <blockquote cite="#">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna magna, rhoncus
                                eget commodo et, dignissim non nulla. Sed sit amet vestibulum ex. Donec dolor velit
                            </blockquote>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="bottom-portion">
                        <a href="#" class="author">
                            Maria B <small>(Student )</small>
                        </a>
                        <div class="social-share-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="single-testimonial-box">
                    <div class="top-portion">
                        <img src="{{asset('app-assets/images/testimonial-image-01.jpg')}}" alt="Testimonial Image" />
                        <div class="user-comment">
                            <div class="arrow-left"></div>
                            <blockquote cite="#">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna magna, rhoncus
                                eget commodo et, dignissim non nulla. Sed sit amet vestibulum ex. Donec dolor velit
                            </blockquote>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="bottom-portion">
                        <a href="#" class="author">
                            Adrey Pachai <small>(Student )</small>
                        </a>
                        <div class="social-share-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="single-testimonial-box">
                    <div class="top-portion">
                        <img src="{{asset('app-assets/images/testimonial-image-02.jpg')}}" alt="Testimonial Image" />
                        <div class="user-comment">
                            <div class="arrow-left"></div>
                            <blockquote cite="#">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna magna, rhoncus
                                eget commodo et, dignissim non nulla. Sed sit amet vestibulum ex. Donec dolor velit
                            </blockquote>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="bottom-portion">
                        <a href="#" class="author">
                            Maria B <small>(Student )</small>
                        </a>
                        <div class="social-share-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Our Community Section -->

    <!-- Start: Latest Blog -->
    <section class="latest-blog section-padding banner">
        <div class="container">
            <div class="title-content text-center" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-8 mx-auto text-center">
                        <h6 class="sub-title">Our Blog</h6>
                        <h2 class="section-title">Latest Blog Posts</h2>
                    </div>
                </div>
            </div>
            <div class="tabs-container">
                <div class="tabs-menu">
                    <ul>
                        <li class="active">
                            <a href="#" class="bg-light-blue top-left-rounded">
                                <div class="title">
                                    <i class="yellow"></i>
                                    <h3>Books</h3>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="bg-purple">
                                <div class="title">
                                    <i class="light-green"></i>
                                    <h3>eBooks</h3>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="bg-pink">
                                <div class="title">
                                    <i class="blue"></i>
                                    <h3>DVDS</h3>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="bg-yellow">
                                <div class="title">
                                    <i class="red"></i>
                                    <h3>Magazines</h3>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="bg-indigo bottom-left-rounded">
                                <div class="title">
                                    <i class="violet"></i>
                                    <h3>Audio</h3>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="bg-orange">
                                <div class="title">
                                    <i class="green"></i>
                                    <h3>eAudio</h3>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tabs-list">
                    <div class="tab-content active">
                        <article>
                            <div class="post-detail">
                                <div class="info-bar">
                                    <div class="comments">
                                        <a href="#">
                                            <i class="fa fa-comment"></i> 37
                                        </a>
                                    </div>
                                    <div class="likes">
                                        <a href="#">
                                            <i class="fa fa-thumbs-o-up"></i> 110
                                        </a>
                                    </div>
                                    <div class="viewed">
                                        <a href="#">
                                            <i class="fa fa-eye"></i> 180
                                        </a>
                                    </div>
                                    <div class="share">
                                        <a href="#">
                                            <i class="fa fa-share-alt"></i> Share
                                        </a>
                                    </div>
                                </div>
                                <h4>It uses dictionary over 200 Latin</h4>
                                <div class="author">
                                    <a href="#">
                                        <i class="fa fa-user"></i> Adrey Pachai
                                    </a>
                                </div>
                                <p>Etiam posuere ultrices mauris vitae tincidunt. Cras lacinia, lectus quis ullamcorper
                                    auctor, mauris lacus imperdiet turpis, et semper enim massa ut diam. Sed at
                                    malesuada urna. Mauris quis venenatis leo. Proin a malesuada purus. Suspendisse odio
                                    diam, ornare sit amet interdum ut, vehicula a lorem. Donec a sem erat. Etiam
                                    condimentum semper mauris vitae porttitor.</p>
                                <a href="blog-detail.html" class="btn btn-dark-gray">Read More</a>
                            </div>
                            <figure>
                                <img src="{{asset('app-assets/images/latest-blog-img-home-v1.jpg')}}" alt="Latest Blog">
                                <figcaption>
                                    <a href="#">
                                        <span class="date">07</span>
                                        <span class="month">Mar</span>
                                    </a>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="tab-content">
                        <article>
                            <div class="post-detail">
                                <div class="info-bar">
                                    <div class="comments">
                                        <a href="#">
                                            <i class="fa fa-comment"></i> 37
                                        </a>
                                    </div>
                                    <div class="likes">
                                        <a href="#">
                                            <i class="fa fa-thumbs-o-up"></i> 110
                                        </a>
                                    </div>
                                    <div class="viewed">
                                        <a href="#">
                                            <i class="fa fa-eye"></i> 180
                                        </a>
                                    </div>
                                    <div class="share">
                                        <a href="#">
                                            <i class="fa fa-share-alt"></i> Share
                                        </a>
                                    </div>
                                </div>
                                <h4>eBooks</h4>
                                <div class="author">
                                    <a href="#">
                                        <i class="fa fa-user"></i> Adrey Pachai
                                    </a>
                                </div>
                                <p>Sed at malesuada urna. Mauris quis venenatis leo. Proin a malesuada purus.
                                    Suspendisse odio diam, ornare sit amet interdum ut, vehicula a lorem. Donec a sem
                                    erat. Etiam condimentum semper mauris vitae porttitor. Etiam posuere ultrices mauris
                                    vitae tincidunt. Cras lacinia, lectus quis ullamcorper auctor, mauris lacus
                                    imperdiet turpis, et semper enim massa ut.</p>
                                <a href="blog-detail.html" class="btn btn-dark-gray">Read More</a>
                            </div>
                            <figure>
                                <img src="{{asset('app-assets/images/latest-blog-img-home-v1-2.jpg')}}" alt="Latest Blog">
                                <figcaption>
                                    <a href="#">
                                        <span class="date">06</span>
                                        <span class="month">Mar</span>
                                    </a>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="tab-content">
                        <article>
                            <div class="post-detail">
                                <div class="info-bar">
                                    <div class="comments">
                                        <a href="#">
                                            <i class="fa fa-comment"></i> 37
                                        </a>
                                    </div>
                                    <div class="likes">
                                        <a href="#">
                                            <i class="fa fa-thumbs-o-up"></i> 110
                                        </a>
                                    </div>
                                    <div class="viewed">
                                        <a href="#">
                                            <i class="fa fa-eye"></i> 180
                                        </a>
                                    </div>
                                    <div class="share">
                                        <a href="#">
                                            <i class="fa fa-share-alt"></i> Share
                                        </a>
                                    </div>
                                </div>
                                <h4>DVDS</h4>
                                <div class="author">
                                    <a href="#">
                                        <i class="fa fa-user"></i> Adrey Pachai
                                    </a>
                                </div>
                                <p>Etiam posuere ultrices mauris vitae tincidunt. Cras lacinia, lectus quis ullamcorper
                                    auctor, mauris lacus imperdiet turpis, et semper enim massa ut diam. Sed at
                                    malesuada urna. Mauris quis venenatis leo. Proin a malesuada purus. Suspendisse odio
                                    diam, ornare sit amet interdum ut, vehicula a lorem. Donec a sem erat. Etiam
                                    condimentum semper mauris vitae porttitor.</p>
                                <a href="blog-detail.html" class="btn btn-dark-gray">Read More</a>
                            </div>
                            <figure>
                                <img src="{{asset('app-assets/images/latest-blog-img-home-v1.jpg')}}" alt="Latest Blog">
                                <figcaption>
                                    <a href="#">
                                        <span class="date">05</span>
                                        <span class="month">Mar</span>
                                    </a>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="tab-content">
                        <article>
                            <div class="post-detail">
                                <div class="info-bar">
                                    <div class="comments">
                                        <a href="#">
                                            <i class="fa fa-comment"></i> 37
                                        </a>
                                    </div>
                                    <div class="likes">
                                        <a href="#">
                                            <i class="fa fa-thumbs-o-up"></i> 110
                                        </a>
                                    </div>
                                    <div class="viewed">
                                        <a href="#">
                                            <i class="fa fa-eye"></i> 180
                                        </a>
                                    </div>
                                    <div class="share">
                                        <a href="#">
                                            <i class="fa fa-share-alt"></i> Share
                                        </a>
                                    </div>
                                </div>
                                <h4>Magazines</h4>
                                <div class="author">
                                    <a href="#">
                                        <i class="fa fa-user"></i> Adrey Pachai
                                    </a>
                                </div>
                                <p>Sed at malesuada urna. Mauris quis venenatis leo. Proin a malesuada purus.
                                    Suspendisse odio diam, ornare sit amet interdum ut, vehicula a lorem. Donec a sem
                                    erat. Etiam condimentum semper mauris vitae porttitor. Etiam posuere ultrices mauris
                                    vitae tincidunt. Cras lacinia, lectus quis ullamcorper auctor, mauris lacus
                                    imperdiet turpis, et semper enim massa ut.</p>
                                <a href="blog-detail.html" class="btn btn-dark-gray">Read More</a>
                            </div>
                            <figure>
                                <img src="{{asset('app-assets/images/latest-blog-img-home-v1-2.jpg')}}" alt="Latest Blog">
                                <figcaption>
                                    <a href="#">
                                        <span class="date">04</span>
                                        <span class="month">Mar</span>
                                    </a>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="tab-content">
                        <article>
                            <div class="post-detail">
                                <div class="info-bar">
                                    <div class="comments">
                                        <a href="#">
                                            <i class="fa fa-comment"></i> 37
                                        </a>
                                    </div>
                                    <div class="likes">
                                        <a href="#">
                                            <i class="fa fa-thumbs-o-up"></i> 110
                                        </a>
                                    </div>
                                    <div class="viewed">
                                        <a href="#">
                                            <i class="fa fa-eye"></i> 180
                                        </a>
                                    </div>
                                    <div class="share">
                                        <a href="#">
                                            <i class="fa fa-share-alt"></i> Share
                                        </a>
                                    </div>
                                </div>
                                <h4>Audio</h4>
                                <div class="author">
                                    <a href="#">
                                        <i class="fa fa-user"></i> Adrey Pachai
                                    </a>
                                </div>
                                <p>Etiam posuere ultrices mauris vitae tincidunt. Cras lacinia, lectus quis ullamcorper
                                    auctor, mauris lacus imperdiet turpis, et semper enim massa ut diam. Sed at
                                    malesuada urna. Mauris quis venenatis leo. Proin a malesuada purus. Suspendisse odio
                                    diam, ornare sit amet interdum ut, vehicula a lorem. Donec a sem erat. Etiam
                                    condimentum semper mauris vitae porttitor.</p>
                                <a href="blog-detail.html" class="btn btn-dark-gray">Read More</a>
                            </div>
                            <figure>
                                <img src="{{asset('app-assets/images/latest-blog-img-home-v1.jpg')}}" alt="Latest Blog">
                                <figcaption>
                                    <a href="#">
                                        <span class="date">03</span>
                                        <span class="month">Mar</span>
                                    </a>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="tab-content">
                        <article>
                            <div class="post-detail">
                                <div class="info-bar">
                                    <div class="comments">
                                        <a href="#">
                                            <i class="fa fa-comment"></i> 37
                                        </a>
                                    </div>
                                    <div class="likes">
                                        <a href="#">
                                            <i class="fa fa-thumbs-o-up"></i> 110
                                        </a>
                                    </div>
                                    <div class="viewed">
                                        <a href="#">
                                            <i class="fa fa-eye"></i> 180
                                        </a>
                                    </div>
                                    <div class="share">
                                        <a href="#">
                                            <i class="fa fa-share-alt"></i> Share
                                        </a>
                                    </div>
                                </div>
                                <h4>eAudio</h4>
                                <div class="author">
                                    <a href="#">
                                        <i class="fa fa-user"></i> Adrey Pachai
                                    </a>
                                </div>
                                <p>Sed at malesuada urna. Mauris quis venenatis leo. Proin a malesuada purus.
                                    Suspendisse odio diam, ornare sit amet interdum ut, vehicula a lorem. Donec a sem
                                    erat. Etiam condimentum semper mauris vitae porttitor. Etiam posuere ultrices mauris
                                    vitae tincidunt. Cras lacinia, lectus quis ullamcorper auctor, mauris lacus
                                    imperdiet turpis, et semper enim massa ut.</p>
                                <a href="blog-detail.html" class="btn btn-dark-gray">Read More</a>
                            </div>
                            <figure>
                                <img src="{{asset('app-assets/images/latest-blog-img-home-v1-2.jpg')}}" alt="Latest Blog">
                                <figcaption>
                                    <a href="#">
                                        <span class="date">02</span>
                                        <span class="month">Mar</span>
                                    </a>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Latest Blog -->

    <!-- Start: News & Event -->
    <section class="news-events section-padding banner">
        <div class="container">
            <div class="title-content text-center" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-8 mx-auto text-center">
                        <h6 class="sub-title">New & Events</h6>
                        <h2 class="section-title">Latest News & Events</h2>
                    </div>
                </div>
            </div>
            <div class="news-events-list">
                <div class="row no-gutters">
                    <div class="col-md-12 col-lg-5 col-xl-6">
                        <div class="single-news-event first-news-event" data-aos="fade-down">
                            <figure>
                                <img class="rounded-border" src="{{asset('app-assets/images/news-event/home-news-event-01.jpg')}}"
                                     alt="News & Event" />
                            </figure>
                            <div class="content-block bottom-left-rounded">
                                <div class="member-info">
                                    <div class="content_meta_category">
                                        <span class="arrow-right"></span>
                                        <a href="#" rel="category tag">EVENT</a>
                                    </div>
                                    <ul class="news-event-info">
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class="fa fa-calendar"></i>
                                                July 25, 2016
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class="fa fa-clock-o"></i>
                                                10:15 AM - 10:15 PM
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class="fa fa-map-marker"></i>
                                                New York, USA
                                            </a>
                                        </li>
                                    </ul>
                                    <h3><a href="news-events-detail.html">It uses a dictionary of over 200 Latin word</a></h3>
                                    <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                                        of
                                        letters, as opposed to using 'Content here, content here', making it look like
                                        readable
                                        English. Many desktop publishing packages and web page editors now use Lorem
                                        Ipsum as
                                        their default model.</p>
                                    <a class="btn btn-secondary" href="news-events-detail.html">Read More</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-7 col-xl-6">
                        <div class="single-news-event second-news-event" data-aos="fade-right">
                            <div class="content-block">
                                <div class="member-info">
                                    <div class="content_meta_category">
                                        <span class="arrow-right"></span>
                                        <a href="#" rel="category tag">EVENT</a>
                                    </div>
                                    <ul class="news-event-info">
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class="fa fa-calendar"></i>
                                                July 25, 2016
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class="fa fa-map-marker"></i>
                                                New York, USA
                                            </a>
                                        </li>
                                    </ul>
                                    <h3><a href="news-events-detail.html">It uses a dictionary of over 200 Latin word</a></h3>
                                    <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                                        of
                                        letters, as opposed to using 'Content here, content here', </p>
                                    <a class="btn btn-secondary" href="news-events-detail.html">Read More</a>
                                </div>
                            </div>
                            <figure>
                                <img class="rounded-border" src="{{asset('app-assets/images/news-event/home-news-event-02.jpg')}}"
                                     alt="News & Event" />
                            </figure>
                            <div class="clearfix"></div>
                        </div>
                        <div class="single-news-event third-news-event" data-aos="fade-left">
                            <figure>
                                <img src="{{asset('app-assets/images/news-event/home-news-event-03.jpg')}}" alt="News & Event" />
                            </figure>
                            <div class="content-block bottom-right-rounded">
                                <div class="member-info">
                                    <div class="content_meta_category">
                                        <span class="arrow-right"></span>
                                        <a href="#" rel="category tag">EVENT</a>
                                    </div>
                                    <ul class="news-event-info">
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class="fa fa-calendar"></i>
                                                July 25, 2016
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class="fa fa-map-marker"></i>
                                                New York, USA
                                            </a>
                                        </li>
                                    </ul>
                                    <h3><a href="news-events-detail.html">It uses a dictionary of over 200 Latin word</a></h3>
                                    <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                                        of
                                        letters, as opposed to using 'Content here, content here', </p>
                                    <a href="news-events-detail.html" class="btn btn-secondary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: News & Event -->

    <!-- Start: Social Network -->
    <section class="social-network section-padding">
        <div class="container">
            <div class="title-content text-center" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-8 mx-auto text-center">
                        <h6 class="sub-title">Our Social Network</h6>
                        <h2 class="section-title">Follow Us</h2>
                    </div>
                </div>
            </div>
            <ul>
                <li>
                    <a class="facebook" href="#" target="_blank">
                        <i class="fa fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a class="twitter" href="#" target="_blank">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a class="google" href="#" target="_blank">
                        <i class="fa fa-google-plus"></i>
                    </a>
                </li>
                <li>
                    <a class="rss" href="#" target="_blank">
                        <i class="fa fa-rss"></i>
                    </a>
                </li>
                <li>
                    <a class="linkedin" href="#" target="_blank">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </li>
                <li>
                    <a class="youtube" href="#" target="_blank">
                        <i class="fa fa-youtube"></i>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <!-- End: Social Network -->

    <!-- Start: Footer -->
    <footer class="site-footer">
        <div class="container" data-aos="fade-down">
            <div class="footer-widgets">
                <div class="row w-100">
                    <div class="col-lg-5 col-md-6 widget-container">
                        <div id="text-2" class="widget widget_text">
                            <div class="about-us">
                                <a href="index.html">
                                    <img src="{{asset('app-assets/images/logo-footer-v1.png')}}" alt="LIBRARIA" />
                                </a>
                            </div>
                            <div class="textwidget">
                                The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
                                letters, as opposed to using 'Content here, content here', making it look like readable
                                English. Many desktop publishing packages and web page editors now use Lorem Ipsum as
                                their default model text, and a search for 'lorem ipsum' will uncover many web sites
                                still in their infancy. Various versions have evolved over the years, sometimes by
                                accident, sometimes on purpose (injected humour and the like).
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 widget-container">
                        <div id="nav_menu-2" class="widget widget_nav_menu">
                            <h3 class="footer-widget-title">Quick Links</h3>
                            <div class="menu-quick-links-container">
                                <ul id="menu-quick-links" class="menu">
                                    <li><a href="#">Library News</a></li>
                                    <li><a href="#">History</a></li>
                                    <li><a href="#">Meet Our Staff</a></li>
                                    <li><a href="#">Board of Trustees</a></li>
                                    <li><a href="#">Budget</a></li>
                                    <li><a href="#">Annual Report</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 widget-container">
                        <div id="text-4" class="widget widget_text">
                            <h3 class="footer-widget-title">Timing</h3>
                            <div class="timming-text-widget">
                                <time datetime="2017-02-13">Mon - Thu: 9am - 9pm</time>
                                <time datetime="2017-02-13">Fri: 9am - 6pm</time>
                                <time datetime="2017-02-13">Sat: 9am - 5pm</time>
                                <time datetime="2017-02-13">Sun: 1pm - 6pm</time>
                                <ul>
                                    <li><a href="#">Closings</a></li>
                                    <li><a href="#">Branches</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 widget-container">
                        <div class="widget twitter-widget">
                            <h3 class="footer-widget-title">Contact Info</h3>
                            <address>
                                <div class="info">
                                    <i class="fa fa-location-arrow"></i>
                                    <span>21 King Street, Melbourne, Victoria 3000 Australia</span>
                                </div>
                                <div class="info">
                                    <i class="fa fa-envelope"></i>
                                    <span><a href="mailto:support@skille.com">support@skille.com</a></span>
                                </div>
                                <div class="info">
                                    <i class="fa fa-phone"></i>
                                    <span><a href="tel:012-345-6789">+ 012-345-6789</a></span>
                                </div>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="footer-text col-md-3">
                        <p>&copy; 2020 <a href="index.html">Skille</a>. All rights reserved.</p>
                    </div>
                    <div class="col-md-9 pull-right">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="books-media-list-view.html">Books &amp; Media</a></li>
                            <li><a href="news-events-list-view.html">News &amp; Events</a></li>
                            <li><a href="#">Kids &amp; Teens</a></li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="#">Research</a></li>
                            <li><a href="blog-grid.html">Blog</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End: Footer -->
@endsection

@push('scripts')
    <script>

        $( document ).ready(function() {

            //get classes
            $(document).on('change', '#sector_id', function() {
                console.log('here');
                var sector = $(this).val();
                $("#class_id").html("");
                $("#class_id").html(
                    '<option selected value="">' + "@lang('general.all') @lang('general.sectors')" + '</option>'
                );
                classes = "";
                if (sector) {
                    console.log('asff');
                    $.ajax({
                        url: "{{url('/') . '/class-search/'}}" + sector,
                        type: 'GET',
                        dataType: "json",
                        data: {},
                        cache: false,
                        success: function (data){
                            console.log('data');
                        },
                        error: function (reject){
                            console.log(reject);
                        }
                    });
                }
            });//end for get classes

            //get subjects


        });//end for ready

    </script>
@endpush
/*
if (data.length != 0) {
for (var x = 0; x < data.length; x++) {
var item = data[x];
areas +=
'<option value="' +
                                    item.id +
                                    '">' +
    item.name_en +
    "</option>";
}
$("#area").append(areas);
}


*/
