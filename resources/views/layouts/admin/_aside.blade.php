<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-dark sidenav-active-rounded">
    <div class="brand-sidebar">
        <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="{{route('admin.home')}}"><img class="hide-on-med-and-down " src="{{asset("admin-assets/images/logo/materialize-logo.png")}}" alt="materialize logo"/><img class="show-on-medium-and-down hide-on-med-and-up" src="{{asset("admin-assets/images/logo/materialize-logo-color.png")}}" alt="materialize logo"/><span class="logo-text hide-on-med-and-down">Guide</span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
    </div>
    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="accordion">

        <li class="bold"><a class="waves-effect waves-cyan @if(request()->segment(3) == 'teachers') active @endif " href="{{route('admin.teachers.index')}}"><i class="material-icons">person</i><span class="menu-title" data-i18n="Mail">@lang('general.teachers')</span><span class="badge badge pill pink accent-2 float-right mr-2">{{\App\Models\User::where('type','2')->count()}}</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan @if(request()->segment(3) == 'students') active @endif " href="{{route('admin.students.index')}}"><i class="material-icons">groups</i><span class="menu-title" data-i18n="Chat">@lang('general.students')</span><span class="badge badge pill pink accent-2 float-right mr-2">{{\App\Models\User::where('type','3')->count()}}</span></a>

        <li class="bold"><a class="waves-effect waves-cyan @if(request()->segment(3) == 'reviews') active @endif " href="{{route('admin.reviews.index')}}"><i class="material-icons">messages</i><span class="menu-title" data-i18n="Chat">@lang('general.reviews')</span><span class="badge badge pill pink accent-2 float-right mr-2">{{\App\Models\Review::count()}}</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan @if(request()->segment(3) == 'sectors') active @endif " href="{{route('admin.sectors.index')}}"><i class="material-icons">school</i><span class="menu-title" data-i18n="ToDo">@lang('general.sectors')</span><span class="badge badge pill pink accent-2 float-right mr-2">{{\App\Models\Sector::count()}}</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan @if(request()->segment(3) == 'classes') active @endif " href="{{route('admin.classes.index')}}"><i class="material-icons">school</i><span class="menu-title" data-i18n="Kanban">@lang('general.classes')</span><span class="badge badge pill pink accent-2 float-right mr-2">{{\App\Models\Classes::count()}}</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan @if(request()->segment(3) == 'subjects') active @endif " href="{{route('admin.subjects.index')}}"><i class="material-icons">school</i><span class="menu-title" data-i18n="File Manager">@lang('general.subjects')</span><span class="badge badge pill pink accent-2 float-right mr-2">{{\App\Models\Subject::count()}}</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan @if(request()->segment(3) == 'cities') active @endif " href="{{route('admin.cities.index')}}"><i class="material-icons">location_city</i><span class="menu-title" data-i18n="Contacts">@lang('general.cities')</span><span class="badge badge pill pink accent-2 float-right mr-2">{{\App\Models\City::count()}}</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan @if(request()->segment(3) == 'areas') active @endif " href="{{route('admin.areas.index')}}"><i class="material-icons">domain</i><span class="menu-title" data-i18n="Calendar">@lang('general.areas')</span><span class="badge badge pill pink accent-2 float-right mr-2">{{\App\Models\Area::count()}}</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan @if(request()->segment(3) == 'cat_events') active @endif " href="{{route('admin.cat_events.index')}}"><i class="material-icons">bookmark</i><span class="menu-title" data-i18n="Calendar">@lang('general.cat_events')</span><span class="badge badge pill pink accent-2 float-right mr-2">{{\App\Models\EventCategory::count()}}</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan @if(request()->segment(3) == 'events') active @endif " href="{{route('admin.events.index')}}"><i class="material-icons">perm_media</i><span class="menu-title" data-i18n="Calendar">@lang('general.events')</span><span class="badge badge pill pink accent-2 float-right mr-2">{{\App\Models\Event::count()}}</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan @if(request()->segment(3) == 'subject_books') active @endif " href="{{route('admin.subject_books.index')}}"><i class="material-icons">books</i><span class="menu-title" data-i18n="Calendar">@lang('general.cat_books')</span><span class="badge badge pill pink accent-2 float-right mr-2">{{\App\Models\BookSubject::count()}}</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan @if(request()->segment(3) == 'books') active @endif " href="{{route('admin.books.index')}}"><i class="material-icons">books</i><span class="menu-title" data-i18n="Calendar">@lang('general.books')</span><span class="badge badge pill pink accent-2 float-right mr-2">{{\App\Models\Book::count()}}</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan @if(request()->segment(3) == 'blogs') active @endif " href="{{route('admin.blogs.index')}}"><i class="material-icons">burst_mode</i><span class="menu-title" data-i18n="Calendar">@lang('general.blogs')</span><span class="badge badge pill pink accent-2 float-right mr-2">{{\App\Models\Blog::count()}}</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan @if(request()->segment(3) == 'contacts') active @endif " href="{{route('admin.contacts.index')}}"><i class="material-icons">contacts</i><span class="menu-title" data-i18n="Calendar">@lang('general.contacts')</span><span class="badge badge pill pink accent-2 float-right mr-2">{{\App\Models\Contact_us::count()}}</span></a>
        </li>

    </ul>
    <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>
