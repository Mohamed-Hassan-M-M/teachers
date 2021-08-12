<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-dark sidenav-active-rounded">
    <div class="brand-sidebar">
        <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="{{route('admin.home')}}"><img class="hide-on-med-and-down " src="{{asset("app-assets/images/logo/materialize-logo.png")}}" alt="materialize logo"/><img class="show-on-medium-and-down hide-on-med-and-up" src="{{asset("app-assets/images/logo/materialize-logo-color.png")}}" alt="materialize logo"/><span class="logo-text hide-on-med-and-down">Guide</span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
    </div>
    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="accordion">

        <li class="bold"><a class="waves-effect waves-cyan @if(request()->segment(3) == 'teachers') active @endif " href=""><i class="material-icons">person</i><span class="menu-title" data-i18n="Mail">Teacher</span><span class="badge badge pill pink accent-2 float-right mr-2">{{\App\Models\User::where('type','2')->count()}}</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan @if(request()->segment(3) == 'students') active @endif " href=""><i class="material-icons">groups</i><span class="menu-title" data-i18n="Chat">Student</span><span class="badge badge pill pink accent-2 float-right mr-2">{{\App\Models\User::where('type','3')->count()}}</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan @if(request()->segment(3) == 'sectors') active @endif " href="{{route('admin.sectors.index')}}"><i class="material-icons">school</i><span class="menu-title" data-i18n="ToDo">Sector</span><span class="badge badge pill pink accent-2 float-right mr-2">{{\App\Models\Sector::count()}}</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan @if(request()->segment(3) == 'classes') active @endif " href="{{route('admin.classes.index')}}"><i class="material-icons">school</i><span class="menu-title" data-i18n="Kanban">Class</span><span class="badge badge pill pink accent-2 float-right mr-2">{{\App\Models\Classes::count()}}</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan @if(request()->segment(3) == 'subjects') active @endif " href=""><i class="material-icons">school</i><span class="menu-title" data-i18n="File Manager">Subject</span><span class="badge badge pill pink accent-2 float-right mr-2">{{\App\Models\Subject::count()}}</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan @if(request()->segment(3) == 'cities') active @endif " href="{{route('admin.cities.index')}}"><i class="material-icons">location_city</i><span class="menu-title" data-i18n="Contacts">City</span><span class="badge badge pill pink accent-2 float-right mr-2">{{\App\Models\City::count()}}</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan @if(request()->segment(3) == 'areas') active @endif " href="{{route('admin.areas.index')}}"><i class="material-icons">domain</i><span class="menu-title" data-i18n="Calendar">Area</span><span class="badge badge pill pink accent-2 float-right mr-2">{{\App\Models\Area::count()}}</span></a>
        </li>

    </ul>
    <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>
