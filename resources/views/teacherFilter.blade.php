@extends('layouts.app')

@section('content')
    <!-- Start: Header Section -->
    <header id="header" class="inner-navbar-wrapper navbar-wrapper">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.html">')}}
                    <img src="{{asset('app-assets/images/logo-header-v1.png')}}" alt="Skille" />
                </a>
                <div class="inner-header-search">
                    <input class="form-control" type="text" placeholder="Search Anything">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="index.html" data-toggle="dropdown" aria-expanded="false">Home</a>
                            <ul class="dropdown-menu">
                                <li><a href="index.html">Home V1</a></li>
                                <li><a href="home-v2.html">Home V2</a></li>
                                <li><a href="home-v3.html">Home V3</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a data-toggle="dropdown" aria-expanded="false" class="nav-link dropdown-toggle active" href="books-media-list-view.html">Books &amp; Media</a>
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
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                News &amp; Events
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="news-events-list-view.html">News &amp; Events List
                                        View</a>
                                </li>
                                <li><a href="news-events-detail.html">News &amp; Events
                                        Detail</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pages
                            </a>
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
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Blog
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-list.html">Blog List View</a></li>
                                <li><a href="blog-grid.html">Blog Grid View</a></li>
                                <li><a href="blog-detail.html">Blog Detail</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a>
                    </ul>
                    <div class="header-login-btn">
                        <a href="signin.html" class="btn btn-light"><i class="fa fa-user"></i>
                            Login</a>
                        <a href="cart.html" class="btn btn-light"><i class="fa fa-cart-plus"></i>
                            Cart</a>
                    </div>
                </div>
            </nav>
            <!-- Header Main Navigation End-->
            <!-- Mobile Navigation-->
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
            <!-- Mobile Navigation End-->
        </div>
    </header>
    <!-- End: Header Section -->

    <!-- Start: Page Banner -->
    <section class="inner-page-banner">
        <div class="container">
            <div class="banner-header">
                <h2>Books & Media List</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Books & Media</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- End: Page Banner -->

    <!-- Start: Book & Media Section -->
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="books-media-list">
                    <div class="container">

                        <div class="row">
                            <div class="col-md-12 col-lg-3">
                                <aside id="secondary" class="sidebar widget-area" data-accordion-group>
                                    <span data-toggle="collapse" data-target="#collapsefilter" aria-controls="collapsefilter" class="show-hide-filters"><img
                                            src="{{asset('app-assets/images/icons/hide-filter-icon.png')}}" alt="">
                                        Hide Filters</span>
                                    <div id="collapsefilter" class="collapse books-media-filters">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <h5>Filtered By</h5>
                                            </div>
                                            <div class="col-lg-6"><a href="#" class="clear-filters">Clear all Filters <i
                                                        class="fa fa-times"></i></a></div>
                                        </div>
                                        <div class="filters-list">
                                            <ul>
                                                <li>eBooks
                                                    <a href="#"><i class="fa fa-times"></i></a>
                                                </li>
                                                <li>Action
                                                    <a href="#"><i class="fa fa-times"></i></a>
                                                </li>
                                                <li>$150-$180
                                                    <a href="#"><i class="fa fa-times"></i></a>
                                                </li>
                                                <li>English
                                                    <a href="#"><i class="fa fa-times"></i></a>
                                                </li>
                                                <li>Scott Fitzgerald
                                                    <a href="#"><i class="fa fa-times"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="widget widget_related_search" data-accordion-group="">
                                        <div>
                                            <div class="single-data-accordion open" data-accordion>
                                                <h5 class="widget-sub-title" data-control>@lang('sector.type')</h5>
                                                <div class="widget_checkbox_list" data-content>
                                                    <div class="form-group">
                                                        <input value="1" type="checkbox" id="type1" class="form-check-input type">
                                                        <label class="form-check-label" for="type1">@lang('sector.governmental')</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <input value="2" id="type2" type="checkbox" class="form-check-input type">
                                                        <label class="form-check-label" for="type2">@lang('sector.special')</label>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="single-data-accordion" data-accordion>
                                                <h5 class="widget-sub-title" data-control>@lang('general.sector')</h5>
                                                <div class="widget_checkbox_list" id="sectors" data-content>

                                                </div>
                                            </div>
                                            <div class="single-data-accordion" data-accordion>
                                                <h5 class="widget-sub-title" data-control>@lang('general.class')</h5>
                                                <div class="widget_checkbox_list" id="classes" data-content>

                                                </div>
                                            </div>
                                            <div class="single-data-accordion" data-accordion>
                                                <h5 class="widget-sub-title" data-control>@lang('general.subject')</h5>
                                                <div class="widget_checkbox_list" id="subjects" data-content>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </aside>
                            </div>
                            <div class="col-md-12 col-lg-9">
                                <div class="books-media-header">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-0">
                                                        <div class="select">
                                                            <select name="city_id" id="city_id" class="form-control">
                                                                <option value="" dType="city">@lang('general.all') @lang('general.cities')</option>
                                                                @foreach($cities as $city)
                                                                    <option value="{{$city->id}}" dType="city">{{$city->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-0" id="area">
                                                        <div class="select">
                                                            <select name="area_id" id="area_id" class="form-control">
                                                                <option value="">@lang('general.all') @lang('general.areas')</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="books-media-listing">
                                    <div class="row" id="teachers">
                                        @foreach($teachers as $teacher)
                                            <div class="col-sm-6 col-lg-6 col-xl-4">
                                                <div class="single-book-media">
                                                    <div class="book-thumb" style="height: 250px">
                                                        <img src="{{$teacher->image_path}}" class="w-100 h-100" alt="">
                                                    </div>
                                                    <div class="book-detail">
                                                        <div class="mb-2">
                                                            <div class="rating">
                                                                <input type="radio" id="star5" name="rating" value="5" /><label class="full" for="star5" title="Awesome - 5 stars"></label>
                                                                <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                                                <input type="radio" id="star4" name="rating" value="4" /><label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                                                <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                                                <input type="radio" id="star3" name="rating" value="3" /><label class="full" for="star3" title="Meh - 3 stars"></label>
                                                                <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                                                <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                                                <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                                                <input type="radio" id="star1" name="rating" value="1" /><label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                                                <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                                            </div>
                                                        </div>
                                                        <h3 class="book-media-title"><a href="#">{{$teacher->name}}</a></h3>
                                                        <p><strong>@lang('general.phone'):</strong> {{$teacher->mobile}}</p>
                                                        <div class="card-links">
                                                            <a href="#" class="btn btn-primary"><img
                                                                    src="{{asset('app-assets/images/icons/cat-filter-cart-icon.png')}}" alt=""> @lang('general.read_more')</a>
                                                            <a href="#" class="read-more"><img
                                                                    src="{{asset('app-assets/images/link-arrow.png')}}" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                {{ $teachers->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- End: Books & Media Section -->

    <!-- Start: StaffPick -->
    <section class="staffpick-box">
        <div class="title-content text-center">
            <span class="sub-title ">Popular Collections</span>
            <h2 class="section-title ">Our Staff Picks</h2>
        </div>
        <div class="container">
            <div class="staffpick-carousel books-media-grid-listing">
                <div class="single-book-media item">
                    <div class="book-thumb">
                        <span class="price-tag">$45</span>
                        <span class="wishlist active"><i class="fa fa-heart"></i></span>
                        <a href="#"><img src="{{asset('app-assets/images/books-media/list-view/book-media-list-1.jpg')}}" alt=""></a>
                    </div>
                    <div class="book-detail">
                        <div class="book-detail-hover">
                            <div class="rating-box mb-1">
                                <div class="rating">
                                    <input type="radio" name="rating" value="5" /><label class="full" for="star5" title="Awesome - 5 stars"></label>
                                    <input type="radio" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                    <input type="radio" name="rating" value="4" /><label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                    <input type="radio" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                    <input type="radio" name="rating" value="3" /><label class="full" for="star3" title="Meh - 3 stars"></label>
                                    <input type="radio" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                    <input type="radio" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                    <input type="radio" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                    <input type="radio" name="rating" value="1" /><label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                    <input type="radio" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                </div>
                                <a class="category-tags bg-light-blue">Book</a>
                                <a class="link" href="#"><img src="{{asset('app-assets/images/link-arrow.png')}}" alt=""></a>
                            </div>
                            <h3 class="book-media-title"><a href="#">Flames of War By John
                                    Smith</a></h3>
                            <p><strong>Author:</strong> F. Scott Fitzgerald</p>
                            <p><strong>ISBN:</strong> 9781581573268</p>
                            <div class="card-links">
                                <a href="#" class="btn btn-primary"><img src="{{asset('app-assets/images/icons/cat-filter-cart-icon.png')}}"
                                                                         alt="">
                                    Add
                                    To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-book-media item">
                    <div class="book-thumb">
                        <span class="price-tag">$57</span>
                        <span class="wishlist"><i class="fa fa-heart"></i></span>
                        <a href="#"><img src="{{asset('app-assets/images/books-media/list-view/book-media-list-2.jpg')}}" alt=""></a>
                    </div>
                    <div class="book-detail">
                        <div class="book-detail-hover">
                            <div class="rating-box mb-1">
                                <div class="rating">
                                    <input type="radio" name="rating" value="5" /><label class="full" for="star5" title="Awesome - 5 stars"></label>
                                    <input type="radio" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                    <input type="radio" name="rating" value="4" /><label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                    <input type="radio" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                    <input type="radio" name="rating" value="3" /><label class="full" for="star3" title="Meh - 3 stars"></label>
                                    <input type="radio" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                    <input type="radio" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                    <input type="radio" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                    <input type="radio" name="rating" value="1" /><label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                    <input type="radio" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                </div>
                                <a class="category-tags bg-purple">Audio</a>
                                <a class="link" href="#"><img src="{{asset('app-assets/images/link-arrow.png')}}" alt=""></a>
                            </div>
                            <h3 class="book-media-title"><a href="#">The Room A Novel</a>
                            </h3>
                            <p><strong>Author:</strong> F. Scott Fitzgerald</p>
                            <p><strong>ISBN:</strong> 9781581573268</p>
                            <div class="card-links">
                                <a href="#" class="btn btn-primary"><img src="{{asset('app-assets/images/icons/cat-filter-cart-icon.png')}}"
                                                                         alt="">
                                    Add
                                    To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-book-media item">
                    <div class="book-thumb">
                        <span class="price-tag">$32</span>
                        <span class="wishlist"><i class="fa fa-heart"></i></span>
                        <a href="#"><img src="{{asset('app-assets/images/books-media/list-view/book-media-list-3.jpg')}}" alt=""></a>
                    </div>
                    <div class="book-detail">
                        <div class="book-detail-hover">
                            <div class="rating-box mb-1">
                                <div class="rating">
                                    <input type="radio" name="rating" value="5" /><label class="full" for="star5" title="Awesome - 5 stars"></label>
                                    <input type="radio" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                    <input type="radio" name="rating" value="4" /><label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                    <input type="radio" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                    <input type="radio" name="rating" value="3" /><label class="full" for="star3" title="Meh - 3 stars"></label>
                                    <input type="radio" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                    <input type="radio" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                    <input type="radio" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                    <input type="radio" name="rating" value="1" /><label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                    <input type="radio" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                </div>
                                <a class="category-tags bg-pink">Video</a>
                                <a class="link" href="#"><img src="{{asset('app-assets/images/link-arrow.png')}}" alt=""></a>
                            </div>
                            <h3 class="book-media-title"><a href="#">Red Queen, Power Is A
                                    Dangerous Game</a>
                            </h3>
                            <p><strong>Author:</strong> F. Scott Fitzgerald</p>
                            <p><strong>ISBN:</strong> 9781581573268</p>
                            <div class="card-links">
                                <a href="#" class="btn btn-primary"><img src="{{asset('app-assets/images/icons/cat-filter-cart-icon.png')}}"
                                                                         alt="">
                                    Add
                                    To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-book-media item">
                    <div class="book-thumb">
                        <span class="price-tag">$38</span>
                        <span class="wishlist"><i class="fa fa-heart"></i></span>
                        <a href="#"><img src="{{asset('app-assets/images/books-media/list-view/book-media-list-3.jpg')}}" alt=""></a>
                    </div>
                    <div class="book-detail">
                        <div class="book-detail-hover">
                            <div class="rating-box mb-1">
                                <div class="rating">
                                    <input type="radio" name="rating" value="5" /><label class="full" for="star5" title="Awesome - 5 stars"></label>
                                    <input type="radio" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                    <input type="radio" name="rating" value="4" /><label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                    <input type="radio" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                    <input type="radio" name="rating" value="3" /><label class="full" for="star3" title="Meh - 3 stars"></label>
                                    <input type="radio" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                    <input type="radio" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                    <input type="radio" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                    <input type="radio" name="rating" value="1" /><label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                    <input type="radio" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                </div>
                                <a class="category-tags bg-orange">EAudio</a>
                                <a class="link" href="#"><img src="{{asset('app-assets/images/link-arrow.png')}}" alt=""></a>
                            </div>
                            <h3 class="book-media-title"><a href="#">Two Lives One Girl</a>
                            </h3>
                            <p><strong>Author:</strong> F. Scott Fitzgerald</p>
                            <p><strong>ISBN:</strong> 9781581573268</p>
                            <div class="card-links">
                                <a href="#" class="btn btn-primary"><img src="{{asset('app-assets/images/icons/cat-filter-cart-icon.png')}}"
                                                                         alt="">
                                    Add
                                    To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-book-media item">
                    <div class="book-thumb">
                        <span class="price-tag">$61</span>
                        <span class="wishlist"><i class="fa fa-heart"></i></span>
                        <a href="#"><img src="{{asset('app-assets/images/books-media/list-view/book-media-list-5.jpg')}}" alt=""></a>
                    </div>
                    <div class="book-detail">
                        <div class="book-detail-hover">
                            <div class="rating-box mb-1">
                                <div class="rating">
                                    <input type="radio" name="rating" value="5" /><label class="full" for="star5" title="Awesome - 5 stars"></label>
                                    <input type="radio" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                    <input type="radio" name="rating" value="4" /><label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                    <input type="radio" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                    <input type="radio" name="rating" value="3" /><label class="full" for="star3" title="Meh - 3 stars"></label>
                                    <input type="radio" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                    <input type="radio" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                    <input type="radio" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                    <input type="radio" name="rating" value="1" /><label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                    <input type="radio" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                </div>
                                <a class="category-tags bg-pink">Video</a>
                                <a class="link" href="#"><img src="{{asset('app-assets/images/link-arrow.png')}}" alt=""></a>
                            </div>
                            <h3 class="book-media-title"><a href="#">A Boy In Winter</a>
                            </h3>
                            <p><strong>Author:</strong> F. Scott Fitzgerald</p>
                            <p><strong>ISBN:</strong> 9781581573268</p>
                            <div class="card-links">
                                <a href="#" class="btn btn-primary"><img src="{{asset('app-assets/images/icons/cat-filter-cart-icon.png')}}"
                                                                         alt="">
                                    Add
                                    To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-book-media item">
                    <div class="book-thumb">
                        <span class="price-tag">$45</span>
                        <span class="wishlist"><i class="fa fa-heart"></i></span>
                        <a href="#"><img src="{{asset('app-assets/images/books-media/list-view/book-media-list-6.jpg')}}" alt=""></a>
                    </div>
                    <div class="book-detail">
                        <div class="book-detail-hover">
                            <div class="rating-box mb-1">
                                <div class="rating">
                                    <input type="radio" name="rating" value="5" /><label class="full" for="star5" title="Awesome - 5 stars"></label>
                                    <input type="radio" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                    <input type="radio" name="rating" value="4" /><label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                    <input type="radio" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                    <input type="radio" name="rating" value="3" /><label class="full" for="star3" title="Meh - 3 stars"></label>
                                    <input type="radio" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                    <input type="radio" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                    <input type="radio" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                    <input type="radio" name="rating" value="1" /><label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                    <input type="radio" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                </div>
                                <a class="category-tags bg-yellow">Magazine</a>
                                <a class="link" href="#"><img src="{{asset('app-assets/images/link-arrow.png')}}" alt=""></a>
                            </div>
                            <h3 class="book-media-title"><a href="#">Willows Of Fate</a>
                            </h3>
                            <p><strong>Author:</strong> F. Scott Fitzgerald</p>
                            <p><strong>ISBN:</strong> 9781581573268</p>
                            <div class="card-links">
                                <a href="#" class="btn btn-primary"><img src="{{asset('app-assets/images/icons/cat-filter-cart-icon.png')}}"
                                                                         alt="">
                                    Add
                                    To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-book-media item">
                    <div class="book-thumb">
                        <span class="price-tag">$43</span>
                        <span class="wishlist"><i class="fa fa-heart"></i></span>
                        <a href="#"><img src="{{asset('app-assets/images/books-media/list-view/book-media-list-7.jpg')}}" alt=""></a>
                    </div>
                    <div class="book-detail">
                        <div class="book-detail-hover">
                            <div class="rating-box">
                                <div class="rating">
                                    <input type="radio" name="rating" value="5" /><label class="full" for="star5" title="Awesome - 5 stars"></label>
                                    <input type="radio" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                    <input type="radio" name="rating" value="4" /><label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                    <input type="radio" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                    <input type="radio" name="rating" value="3" /><label class="full" for="star3" title="Meh - 3 stars"></label>
                                    <input type="radio" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                    <input type="radio" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                    <input type="radio" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                    <input type="radio" name="rating" value="1" /><label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                    <input type="radio" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                </div>
                                <a class="category-tags bg-orange">EAudio</a>
                                <a class="link" href="#"><img src="{{asset('app-assets/images/link-arrow.png')}}" alt=""></a>
                            </div>
                            <h3 class="book-media-title"><a href="#">How To Help Someone
                                    With
                                    Cancer</a></h3>
                            <p><strong>Author:</strong> F. Scott Fitzgerald</p>
                            <p><strong>ISBN:</strong> 9781581573268</p>
                            <div class="card-links">
                                <a href="#" class="btn btn-primary"><img src="{{asset('app-assets/images/icons/cat-filter-cart-icon.png')}}"
                                                                         alt="">
                                    Add
                                    To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-book-media item">
                    <div class="book-thumb">
                        <span class="price-tag">$54</span>
                        <span class="wishlist"><i class="fa fa-heart"></i></span>
                        <a href="#"><img src="{{asset('app-assets/images/books-media/list-view/book-media-list-8.jpg')}}" alt=""></a>
                    </div>
                    <div class="book-detail">
                        <div class="book-detail-hover">
                            <div class="rating-box">
                                <div class="rating">
                                    <input type="radio" name="rating" value="5" /><label class="full" for="star5" title="Awesome - 5 stars"></label>
                                    <input type="radio" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                    <input type="radio" name="rating" value="4" /><label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                    <input type="radio" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                    <input type="radio" name="rating" value="3" /><label class="full" for="star3" title="Meh - 3 stars"></label>
                                    <input type="radio" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                    <input type="radio" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                    <input type="radio" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                    <input type="radio" name="rating" value="1" /><label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                    <input type="radio" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                </div>
                                <a class="category-tags bg-pink">Video</a>
                                <a class="link" href="#"><img src="{{asset('app-assets/images/link-arrow.png')}}" alt=""></a>
                            </div>
                            <h3 class="book-media-title"><a href="#">Shatter Me - Taherh
                                    Mafi</a></h3>
                            <p><strong>Author:</strong> F. Scott Fitzgerald</p>
                            <p><strong>ISBN:</strong> 9781581573268</p>
                            <div class="card-links">
                                <a href="#" class="btn btn-primary"><img src="{{asset('app-assets/images/icons/cat-filter-cart-icon.png')}}"
                                                                         alt="">
                                    Add
                                    To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-book-media item">
                    <div class="book-thumb">
                        <span class="price-tag">$69</span>
                        <span class="wishlist"><i class="fa fa-heart"></i></span>
                        <a href="#"><img src="{{asset('app-assets/images/books-media/list-view/book-media-list-9.jpg')}}" alt=""></a>
                    </div>
                    <div class="book-detail">
                        <div class="book-detail-hover">
                            <div class="rating-box">
                                <div class="rating">
                                    <input type="radio" name="rating" value="5" /><label class="full" for="star5" title="Awesome - 5 stars"></label>
                                    <input type="radio" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                    <input type="radio" name="rating" value="4" /><label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                    <input type="radio" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                    <input type="radio" name="rating" value="3" /><label class="full" for="star3" title="Meh - 3 stars"></label>
                                    <input type="radio" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                    <input type="radio" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                    <input type="radio" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                    <input type="radio" name="rating" value="1" /><label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                    <input type="radio" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                </div>
                                <a class="category-tags bg-light-blue">Book</a>
                                <a class="link" href="#"><img src="{{asset('app-assets/images/link-arrow.png')}}" alt=""></a>
                            </div>
                            <h3 class="book-media-title"><a href="#">Out OF The Box</a></h3>
                            <p><strong>Author:</strong> F. Scott Fitzgerald</p>
                            <p><strong>ISBN:</strong> 9781581573268</p>
                            <div class="card-links">
                                <a href="#" class="btn btn-primary"><img src="{{asset('app-assets/images/icons/cat-filter-cart-icon.png')}}"
                                                                         alt="">
                                    Add
                                    To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start: StaffPick -->

    <!-- Start: Testimonial Section -->
    <section class="testimonial-main-v3">
        <div class="container">
            <div class="testimonial-social-main" style="background-image: none;">
                <div class="row">
                    <div class="col-md-10 mx-auto text-center">
                        <h6 class="sub-heading-v2">Newsletter</h6>
                        <h2 class="heading-v2">Subscribe Our Newsletter</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <div class="form-group newsletter-inner">
                            <input class="form-control" placeholder="Enter your Email!" id="newsletter" name="newsletter" type="email">
                            <input class="btn btn-primary" value="Subscribe" type="submit">
                        </div>
                    </div>
                </div>
            </div>
            <div class="social-icons-v3">
                <ul>
                    <li>
                        <a class="facebook" href="#" target="_blank">
                            <span><i class="fa fa-facebook-f"></i> <small>Facebook</small></span>
                        </a>
                    </li>
                    <li>
                        <a class="twitter" href="#" target="_blank">
                            <span><i class="fa fa-twitter"></i> <small>Twitter</small></span>
                        </a>
                    </li>
                    <li>
                        <a class="rss" href="#" target="_blank">
                            <span><i class="fa fa-rss"></i> <small>Rss Feed</small></span>
                        </a>
                    </li>
                    <li>
                        <a class="linkedin" href="#" target="_blank">
                            <span><i class="fa fa-linkedin"></i> <small>Linkedin</small></span>
                        </a>
                    </li>
                    <li>
                        <a class="youtube" href="#" target="_blank">
                            <span><i class="fa fa-youtube"></i> <small>Youtube</small></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End: Testimonial Section -->

    <!-- Start: Footer -->
    <footer class="site-footer site-footer-v3">
        <div class="container">
            <div class="footer-widgets">
                <div class="row">
                    <div class="col-lg-5 col-md-6 widget-container">
                        <div id="text-2" class="widget widget_text">
                            <div class="about-us">
                                <a href="index.html">
                                    <img src="{{asset('app-assets/images/logo-footer-v1.png')}}" alt="skille" />
                                </a>
                            </div>
                            <div class="textwidget">
                                The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum
                                as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour
                                and the like).
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
                        <p>&copy; 2020 <a href="index.html ">Skille</a>. All rights reserved.</p>
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
        <button id="myBtn" title="Go to top"><span>&#8593;</span></button>
    </footer>
    <!-- End: Footer -->
@endsection

@push('scripts')
    <script>

        $( document ).ready(function() {

            //get area
            $('body').on('mouseup', 'li[dtype="city"]', function() {
                var city = $(this).attr('rel');
                $("#area").html("");
                $("#area").html(
                    '<select name="area_id" id="area_id" class="form-control"><option value="" dType="areas">' + "@lang('general.all') @lang('general.areas')" + '</option>'
                );

                let areas = "";
                if (city) {
                    $.ajax({
                        url: "{{url('/') . '/get-area/'}}" + city,
                        type: 'GET',
                        dataType: "json",
                        data: {},
                        success: function (data){
                            data = data.data;
                            if (data.length != 0) {
                                for (var x = 0; x < data.length; x++) {
                                    var item = data[x];
                                    areas +=
                                        '<option dType="areas" value="' +
                                        item.id +
                                        '">' +
                                        item['name_{{app()->getLocale()}}'] +
                                        "</option>";
                                }
                                $("#area_id").append(areas);
                                $("#area").append('</select>');
                                var selectObj = $('select#area_id');
                                var selectListObj = $('ul.select-list');
                                selectObj.each(function () {
                                    var $this = $(this), numberOfOptions = $(this).children('option').length;

                                    $this.addClass('select-hidden');
                                    $this.wrap('<div class="select"></div>');
                                    $this.after('<div class="select-styled"></div>');

                                    var $styledSelect = $this.next('div.select-styled');
                                    $styledSelect.text($this.children('option').eq(0).text());

                                    var $list = $('<ul />', {
                                        'class': 'select-list'
                                    }).insertAfter($styledSelect);

                                    for (var i = 0; i < numberOfOptions; i++) {
                                        $('<li />', {
                                            text: $this.children('option').eq(i).text(),
                                            rel: $this.children('option').eq(i).val(),
                                            dType: $this.children('option').eq(i).attr('dType')
                                        }).appendTo($list);
                                    }

                                    var $listItems = $list.children('li');

                                    $styledSelect.on('click', function (e) {
                                        e.stopPropagation();
                                        $('div.select-styled.active').not(this).each(function () {
                                            $(this).removeClass('active').next(selectListObj).hide();
                                        });
                                        $(this).toggleClass('active').next(selectListObj).toggle();
                                    });

                                    $listItems.on('click', function (e) {
                                        e.stopPropagation();
                                        $styledSelect.text($(this).text()).removeClass('active');
                                        $this.val($(this).attr('rel'));
                                        $list.hide();
                                    });

                                    $(document).on('click', function () {
                                        $styledSelect.removeClass('active');
                                        $list.hide();
                                    });

                                });
                            }
                            else {
                                $("#area").append('</select>');
                                var selectObj = $('select#area_id');
                                var selectListObj = $('ul.select-list');
                                selectObj.each(function () {
                                    var $this = $(this), numberOfOptions = $(this).children('option').length;

                                    $this.addClass('select-hidden');
                                    $this.wrap('<div class="select"></div>');
                                    $this.after('<div class="select-styled"></div>');

                                    var $styledSelect = $this.next('div.select-styled');
                                    $styledSelect.text($this.children('option').eq(0).text());

                                    var $list = $('<ul />', {
                                        'class': 'select-list'
                                    }).insertAfter($styledSelect);

                                    for (var i = 0; i < numberOfOptions; i++) {
                                        $('<li />', {
                                            text: $this.children('option').eq(i).text(),
                                            rel: $this.children('option').eq(i).val(),
                                            dType: $this.children('option').eq(i).attr('dType')
                                        }).appendTo($list);
                                    }

                                    var $listItems = $list.children('li');

                                    $styledSelect.on('click', function (e) {
                                        e.stopPropagation();
                                        $('div.select-styled.active').not(this).each(function () {
                                            $(this).removeClass('active').next(selectListObj).hide();
                                        });
                                        $(this).toggleClass('active').next(selectListObj).toggle();
                                    });

                                    $listItems.on('click', function (e) {
                                        e.stopPropagation();
                                        $styledSelect.text($(this).text()).removeClass('active');
                                        $this.val($(this).attr('rel'));
                                        $list.hide();
                                    });

                                    $(document).on('click', function () {
                                        $styledSelect.removeClass('active');
                                        $list.hide();
                                    });

                                });
                            }
                        },
                        error: function (reject){
                            console.log(reject);
                        }
                    });
                }
            });//end for get area

            //check type and get sectors
            $('body').on('change', '.type', function (){
                if($(this).prop('checked') == true){
                    $('.type').prop('checked', false);
                    $(this).prop('checked', true);

                    //clear all
                    $('#sectors').html('');
                    $('#classes').html('');
                    $('#subjects').html('');

                    var type = $(this).val();
                    let sectors = '';
                    if (type) {
                        $.ajax({
                            url: "{{url('/') . '/get-sector/'}}" + type,
                            type: 'GET',
                            dataType: "json",
                            data: {},
                            success: function (data){
                                data = data.data;
                                if (data.length != 0) {
                                    for (var x = 0; x < data.length; x++) {
                                        var item = data[x];
                                        sectors += '<div class="form-group">';
                                        sectors += '<input type="checkbox" class="form-check-input sector" value="'
                                            + item.id + '" id="sector' + item.id + '">';
                                        sectors += '<label class="form-check-label" for="sector'+ item.id +'">'
                                            + item['name_{{app()->getLocale()}}'] + '</label>';
                                        sectors += '</div>'
                                    }
                                    $("#sectors").append(sectors);
                                }
                            },
                            error: function (reject){
                                console.log(reject);
                            }
                        });
                    }
                }
            });

            //check sector and get classes
            $('body').on('change', '.sector', function (){
                if($(this).prop('checked') == true){
                    $('.sector').prop('checked', false);
                    $(this).prop('checked', true);

                    //clear all
                    $('#classes').html('');
                    $('#subjects').html('');

                    var sector = $(this).val();
                    let classes = '';
                    if (sector) {
                        $.ajax({
                            url: "{{url('/') . '/get-class/'}}" + sector,
                            type: 'GET',
                            dataType: "json",
                            data: {},
                            success: function (data){
                                data = data.data;
                                if (data.length != 0) {
                                    for (var x = 0; x < data.length; x++) {
                                        var item = data[x];
                                        classes += '<div class="form-group">';
                                        classes += '<input type="checkbox" class="form-check-input class" value="'
                                            + item.id + '" id="class' + item.id + '">';
                                        classes += '<label class="form-check-label" for="class'+ item.id +'">'
                                            + item['name_{{app()->getLocale()}}'] + '</label>';
                                        classes += '</div>'
                                    }
                                    $("#classes").append(classes);
                                }
                            },
                            error: function (reject){
                                console.log(reject);
                            }
                        });
                    }


                }
            });

            //check class and get subjects
            $('body').on('change', '.class', function (){
                if($(this).prop('checked') == true){
                    $('.class').prop('checked', false);
                    $(this).prop('checked', true);

                    //clear all
                    $('#subjects').html('');

                    var classe = $(this).val();
                    let subjects = '';
                    if (classe) {
                        $.ajax({
                            url: "{{url('/') . '/get-subject/'}}" + classe,
                            type: 'GET',
                            dataType: "json",
                            data: {},
                            success: function (data){
                                data = data.data;
                                if (data.length != 0) {
                                    for (var x = 0; x < data.length; x++) {
                                        var item = data[x];
                                        subjects += '<div class="form-group">';
                                        subjects += '<input type="checkbox" class="form-check-input subject" value="'
                                            + item.id + '" id="subject' + item.id + '">';
                                        subjects += '<label class="form-check-label" for="subject'+ item.id +'">'
                                            + item['name_{{app()->getLocale()}}'] + '</label>';
                                        subjects += '</div>'
                                    }
                                    $("#subjects").append(subjects);
                                }
                            },
                            error: function (reject){
                                console.log(reject);
                            }
                        });
                    }


                }
            });

            //get teachers
            $('body').on('change', '.subject', function (){

                var recordIds = [];
                $.each($(".subject:checked"), function () {
                    recordIds.push($(this).val());
                });
                console.log(JSON.stringify(recordIds));
                var teachers = '';
                $.ajax({
                    url: "{{url('/') . '/get-teacher/'}}" + 'empty' + '/' + JSON.stringify(recordIds),
                    type: 'GET',
                    dataType: "json",
                    data: {},
                    success: function (data){
                        data = data.data;
                        if (data.length != 0) {
                            for (var x = 0; x < data.length; x++) {
                                var item = data[x];
                                teachers += '<div class="col-sm-6 col-lg-6 col-xl-4">';
                                teachers += '<div class="single-book-media">';
                                teachers += '<div class="book-thumb" style="height: 250px">';
                                teachers += '<img src="'
                                    + item['image_path'] + '" class="w-100 h-100" alt="">';
                                teachers += '</div>';
                                teachers += '<div class="book-detail">';
                                teachers += '<div class="mb-2">';
                                teachers += '<div class="rating">';
                                teachers += '<input type="radio" id="star5" name="rating" value="5" /><label class="full" for="star5" title="Awesome - 5 stars"></label>';
                                teachers += '<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>';
                                teachers += '<input type="radio" id="star4" name="rating" value="4" /><label class="full" for="star4" title="Pretty good - 4 stars"></label>';
                                teachers += '<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>';
                                teachers += '<input type="radio" id="star3" name="rating" value="3" /><label class="full" for="star3" title="Meh - 3 stars"></label>';
                                teachers += '<input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>';
                                teachers += '<input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>';
                                teachers += '<input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>';
                                teachers += '<input type="radio" id="star1" name="rating" value="1" /><label class="full" for="star1" title="Sucks big time - 1 star"></label>';
                                teachers += '<input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>';
                                teachers += '</div>';
                                teachers += '</div>';
                                teachers += '<h3 class="book-media-title"><a href="#">'
                                    + item['name_{{app()->getLocale()}}'] + '</a></h3>';
                                teachers += '<p><strong>@lang('general.phone'):</strong> '
                                    + item['mobile'] + '</p>';
                                teachers += '<div class="card-links">';
                                teachers += '<a href="#" class="btn btn-primary"><img src="{{asset('app-assets/images/icons/cat-filter-cart-icon.png')}}" alt=""> @lang('general.read_more')</a>';
                                teachers += '<a href="#" class="read-more"><img src="{{asset('app-assets/images/link-arrow.png')}}" alt=""></a>';
                                teachers += '</div>';
                                teachers += '</div>';
                                teachers += '</div>';
                                teachers += '</div>';
                            }
                            $("#teachers").html('');
                            $("#teachers").append(teachers);
                        }else {
                            $("#teachers").html('');
                        }
                    },
                    error: function (reject){
                        console.log(reject);
                    }
                });

            });

        });//end for ready

    </script>
@endpush
