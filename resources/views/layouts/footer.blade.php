<!-- Start: Footer -->
<footer class="site-footer">
    <div class="container" data-aos="fade-down">
        <div class="footer-widgets">
            <div class="row w-100">
                <div class="col-lg-5 col-md-6 widget-container">
                    <div id="text-2" class="widget widget_text">
                        <div class="about-us">
                            <a href="{{route('home')}}">
                                <img style="width:200px" src="{{asset('app-assets/images/logoFooter.png')}}" alt="LIBRARIA" />
                            </a>
                        </div>
                        <div class="textwidget">
                            @lang('general.abouthome')
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 widget-container">
                    <div id="nav_menu-2" class="widget widget_nav_menu">
                        <h3 class="footer-widget-title">@lang('general.quickLinks')</h3>
                        <div class="menu-quick-links-container">
                            <ul id="menu-quick-links" class="menu">
                                <li><a href="{{route('home')}}">@lang('general.home')</a></li>
                                <li><a href="{{route('teacher.about')}}">@lang('general.aboutUs')</a></li>
                                <li><a href="{{route('teacher.grid')}}">@lang('general.teacher')</a></li>
                                <li><a href="{{route('book.grid')}}">@lang('general.book')</a></li>
                                <li><a href="{{route('teacher.contact.page')}}">@lang('general.contact')</a></li>
                                <li><a href="{{route('event.grid')}}">@lang('general.events')</a></li>
                                @if(auth()->check() && auth()->user()->type == '3')
                                    <li><a href="{{route('logout')}}">@lang('general.logout')</a></li>
                                @else
                                    <li><a href="{{route('login')}}">@lang('general.signin')</a></li>
                                    <li><a href="{{route('register')}}">@lang('general.signup')</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 widget-container">
                    <div id="text-4" class="widget widget_text">
                        <h3 class="footer-widget-title">@lang('general.timing')</h3>
                        <div class="timming-text-widget">
                            <time datetime="">@lang('general.sat') - @lang('general.fri'): 24 / @lang('general.day')</time>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 widget-container">
                    <div class="widget twitter-widget">
                        <h3 class="footer-widget-title">@lang('general.contactInfo')</h3>
                        <address>
                            <div class="info">
                                <i class="fa fa-location-arrow"></i>
                                <span>Obour Buildings, Salah Salem Street, Nasr City</span>
                            </div>
                            <div class="info">
                                <i class="fa fa-envelope"></i>
                                <span><a href="mailto:info@212solutions.net">info@212solutions.net</a></span>
                            </div>
                            <div class="info">
                                <i class="fa fa-phone"></i>
                                <span><a href="tel:+20222611181">+2 (02) 22611181</a></span>
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
                <div class="footer-text col-md-4">
                    <p>&copy; {{date('Y')}} <a href="{{route('home')}}">212Solutions</a>. @lang('general.rights')</p>
                </div>
                {{--                    <div class="col-md-8 pull-right">--}}
                {{--                        <ul>--}}
                {{--                            <li><a href="index.html">Home</a></li>--}}
                {{--                            <li><a href="books-media-list-view.html">Books &amp; Media</a></li>--}}
                {{--                            <li><a href="news-events-list-view.html">News &amp; Events</a></li>--}}
                {{--                            <li><a href="#">Kids &amp; Teens</a></li>--}}
                {{--                            <li><a href="about-us.html">About Us</a></li>--}}
                {{--                            <li><a href="#">Research</a></li>--}}
                {{--                            <li><a href="blog-grid.html">Blog</a></li>--}}
                {{--                            <li><a href="contact.html">Contact</a></li>--}}
                {{--                        </ul>--}}
                {{--                    </div>--}}
            </div>
        </div>
    </div>
</footer>
<!-- End: Footer -->
