<div class="top-bar">
    <div class="container">
        <div class="row d-flex justify-content-between">
            <div class="topbar-left">
                <!-- <ul>
                    <li><a href="faq-1.html"><i class="fa fa-question-circle"></i>Ask a Question</a></li>
                    <li><a href="javascript:;"><i class="fa fa-envelope-o"></i>Support@website.com</a></li>
                </ul> -->
            </div>
            <div class="topbar-right">
                <ul>
                    <!-- <li>
                        <select class="header-lang-bx">
                            <option data-icon="flag flag-uk">English UK</option>
                            <option data-icon="flag flag-us">English US</option>
                        </select>
                    </li> -->
                    @if (Route::has('login'))
                        @auth
                            <li><a href="{{ url('/home') }}">Dashboard</a></li>
                            <li>
                                <a class="dropdown-item" href="{!! url('/logout') !!}" class="btn btn-default btn-flat" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        @else
                            <li><a href="{{ route('login') }}">Login</a></li>

                            @if (Route::has('register'))
                                <li><a href="{{ route('register') }}">Registro</a></li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="sticky-header navbar-expand-lg">
    <div class="menu-bar clearfix">
        <div class="container clearfix">
            <!-- Header Logo ==== -->
            <div class="menu-logo">
                <a href="{{ url('/') }}"><img src="{{ asset('assets/images/logo-white.png') }}" alt=""></a>
            </div>
            <!-- Mobile Nav Button ==== -->
            <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <!-- Author Nav ==== -->
            <div class="secondary-menu">
                <div class="secondary-inner">
                    <ul>
                        {{-- <li class="{{ Request::is('/*') ? 'active' : '' }}"><a href="{{ url('/') }}">HOME <!--<i class="fa fa-chevron-down">--></i></a></li>
                        <li lass="add-mega-menu {{ Request::is('viewschools*') ? 'active' : '' }}"><a href="{{ route('viewschools') }}">COLEGIOS </a></li> --}}
                        {{-- <li><a href="javascript:;" class="btn-link"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="javascript:;" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="javascript:;" class="btn-link"><i class="fa fa-linkedin"></i></a></li> --}}
                        <!-- Search Button ==== -->
                        <!-- <li class="search-btn"><button id="quik-search-btn" type="button" class="btn-link"><i class="fa fa-search"></i></button></li> -->
                    </ul>
                </div>
            </div>
            <!-- Search Box ==== -->
            <!-- <div class="nav-search-bar">
                <form action="#">
                    <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                    <span><i class="ti-search"></i></span>
                </form>
                <span id="search-remove"><i class="ti-close"></i></span>
            </div> -->
            <!-- Navigation Menu ==== -->
            <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
                <div class="menu-logo">
                    <a href="{{ url('/') }}"><img src="assets/images/logo.png" alt=""></a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="{{ Request::is('/*') ? 'active' : '' }}"><a href="{{ url('/') }}">Home <!--<i class="fa fa-chevron-down">--></i></a></li>
                    <!-- <li><a href="javascript:;">Pages <i class="fa fa-chevron-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="javascript:;">About<i class="fa fa-angle-right"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="about-1.html">About 1</a></li>
                                    <li><a href="about-2.html">About 2</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:;">Event<i class="fa fa-angle-right"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="event.html">Event</a></li>
                                    <li><a href="events-details.html">Events Details</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:;">FAQ's<i class="fa fa-angle-right"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="faq-1.html">FAQ's 1</a></li>
                                    <li><a href="faq-2.html">FAQ's 2</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:;">Contact Us<i class="fa fa-angle-right"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="contact-1.html">Contact Us 1</a></li>
                                    <li><a href="contact-2.html">Contact Us 2</a></li>
                                </ul>
                            </li>
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="membership.html">Membership</a></li>
                            <li><a href="error-404.html">404 Page</a></li>
                        </ul>
                    </li> -->
                        {{-- <li class="add-mega-menu {{ Request::is('view*') ? 'active' : '' }}"><a href="{{ route('courses.view') }}">Cursos </a> --}}
                        {{-- <ul class="sub-menu add-menu">
                            <li class="add-menu-left">
                                <h5 class="menu-adv-title">Mis Courses</h5>
                                <ul>
                                    <li><a href="{{ route('courses.viewcourses') }}">Cursos </a></li>
                                    <li><a href="{{ route('courses.coursedetails') }}">Detalles del curso</a></li>
                                    <li><a href="#">Perfil del instructor</a></li>
                                    <li><a href="#">Eventos</a></li>
                                    <li><a href="#">Membresía</a></li>
                                </ul>
                            </li>
                            <li class="add-menu-right">
                                <img src="assets/images/adv/adv.jpg" alt=""/>
                            </li>
                        </ul> 
                    </li>--}}
                    {{-- <li lass="add-mega-menu {{ Request::is('viewschools*') ? 'active' : '' }}"><a href="{{ route('viewschools') }}">Colegios </a></li> --}}
                    <li lass="add-mega-menu {{ Request::is('details*') ? 'active' : '' }}"><a href="{{ route('details') }}">Mis Clases </a></li>

                    {{-- <li class="nav-dashboard"><a href="{{ url('/home') }}">Dashboard <!--<i class="fa fa-chevron-down">--></i></a> --}}
                        <!-- <ul class="sub-menu">
                            <li><a href="admin/index.html">Dashboard</a></li>
                            <li><a href="admin/add-listing.html">Add Listing</a></li>
                            <li><a href="admin/bookmark.html">Bookmark</a></li>
                            <li><a href="admin/courses.html">Courses</a></li>
                            <li><a href="admin/review.html">Review</a></li>
                            <li><a href="admin/teacher-profile.html">Teacher Profile</a></li>
                            <li><a href="admin/user-profile.html">User Profile</a></li>
                            <li><a href="javascript:;">Calendar<i class="fa fa-angle-right"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="admin/basic-calendar.html">Basic Calendar</a></li>
                                    <li><a href="admin/list-view-calendar.html">List View Calendar</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:;">Mailbox<i class="fa fa-angle-right"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="admin/mailbox.html">Mailbox</a></li>
                                    <li><a href="admin/mailbox-compose.html">Compose</a></li>
                                    <li><a href="admin/mailbox-read.html">Mail Read</a></li>
                                </ul>
                            </li>
                        </ul> -->
                    </li>

                </ul>
                {{-- <div class="nav-social-link">
                    <a href="javascript:;"><i class="fa fa-facebook"></i></a>
                    <a href="javascript:;"><i class="fa fa-google-plus"></i></a>
                    <a href="javascript:;"><i class="fa fa-linkedin"></i></a>
                </div> --}}
            </div>
            <!-- Navigation Menu END ==== -->
        </div>
    </div>
</div>
