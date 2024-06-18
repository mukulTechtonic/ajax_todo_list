<header class="header-with-topbar">
    <div class="top-bar bg-light-gray border-bottom border-color-black-transparent d-none d-md-inline-block padding-35px-lr md-no-padding-lr"
        style="top: 0px">
        <div class="container-fluid nav-header-container">
            <div class="d-flex flex-wrap align-items-center">
                <div class="col-12 text-center text-sm-start col-sm-auto me-auto ps-lg-0">
                    <ul class="social-icon padding-5px-tb">
                        <li>
                            <a class="text-neon-blue-hover" href="https://www.linkedin.com/company/globalhunt"
                                target="_blank"><i class="fab fa-linkedin"></i></a>
                        </li>
                        <li>
                            <a class="text-neon-blue-hover" href="https://www.facebook.com/GlobalHuntIndia"
                                target="_blank"><i class="fab fa-facebook-f"></i></a>
                        </li>

                        <li>
                            <a class="text-neon-blue-hover" href="https://twitter.com/GlobalHuntIndia"
                                target="_blank"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a class="text-neon-blue-hover" href="https://www.youtube.com/c/SunilGoelGH"
                                target="_blank"><i class="fab fa-youtube"></i></a>
                        </li>

                    </ul>
                </div>
                <div class="col-auto d-none d-sm-block text-end px-lg-0 font-size-0">
                    <div class="top-bar-contact">
                        <span class="top-bar-contact-list">
                            <i class="feather icon-feather-phone-call icon-extra-small text-extra-dark-gray"></i>
                            +91-995-845-4422
                        </span>
                        <span class="top-bar-contact-list">
                            <i class="feather icon-feather-phone-call icon-extra-small text-extra-dark-gray"></i>
                            +91-120-358-0000
                        </span>
                        <span class="top-bar-contact-list d-none d-md-inline-block no-border-right pe-0">
                            <a href="mailto:corporate@globalhunt.in">
                                <i class="feather icon-feather-map-pin icon-extra-small text-extra-dark-gray"></i>
                                corporate@globalhunt.in
                            </a>

                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg top-space navbar-light bg-white header-light fixed-top navbar-boxed header-reverse-scroll"
        style="top: 49px">
        <div class="container-fluid nav-header-container">
            <div class="col-6 col-lg-2 me-auto ps-lg-0">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('website/images/logohomepage.png') }}" width="122" height="53" alt="" />
                </a>
            </div>
            <div class="col-auto menu-order px-lg-0">
                <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation"
                    aria-expanded="true">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class="navbar-collapse justify-content-center collapse" id="navbarNav" style="">
                    <ul class="navbar-nav alt-font">
                        <ul class="navbar-nav alt-font">
                            <li class="nav-item dropdown megamenu">
                                <a href="/" class="nav-link ">Home</a>
                                <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-hidden="true"></i>
                            </li>
                        </ul>
                        <ul class="navbar-nav alt-font">
                            <li class="nav-item dropdown simple-dropdown">
                                <a href="{{ url('/aboutus') }}" class="nav-link">About Us </a>
                                <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-hidden="true"></i>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown">
                                        <a href="{{ url('/companyprofile') }}">Company Profile </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{ url('/ourvalue') }}">Our Values </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{ url('/leadershipteam') }}">Leadership Team </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{ url('/testimonial') }}">Testimonials </a>
                                    </li>
                                    <li class="dropdown">
                                        <a data-bs-toggle="dropdown" href="javascript:void(0);">News & Media<i
                                                class="fas fa-angle-right dropdown-toggle"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ url('/news') }}">News</a></li>
                                            <li><a href="{{ url('/all-videos') }}">Videos</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                        <ul class="navbar-nav alt-font">
                            <li class="nav-item dropdown simple-dropdown">
                                <a href="{{ url('/industrypractices') }}" class="nav-link">Industry Practices
                                </a>
                                <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-hidden="true"></i>
                            </li>
                        </ul>
                        <ul class="navbar-nav alt-font">
                            <li class="nav-item dropdown simple-dropdown">
                                <a href="{{ url('/clientservices') }}" class="nav-link">Client Services
                                </a>
                                <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-hidden="true"></i>

                                <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown">
                                        <a href="{{ url('/postyourrequirement') }}">Post Your Requirement
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{ url('/boardsearch') }}">Board Search </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{ url('/executiverecruitment') }}">Executive Recruitment
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{ url('/recruitmentprocessoutsourcing') }}">Recruitment Process
                                            Outsourcing
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{ url('/itstaffing') }}">IT Staffing </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{ url('/outplacement') }}">Outplacement </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{ url('/marketintelligence') }}">Market Intelligence
                                        </a>
                                    </li>
                                    {{--  <li class="dropdown">
                          <a href="{{ url('/manpower') }}">Manpower</a>
                        </li>  --}}
                                </ul>
                            </li>
                        </ul>
                        <ul class="navbar-nav alt-font">
                            <li class="nav-item dropdown simple-dropdown">
                                <a href="{{ url('/jobseekers') }}" class="nav-link">Job Seekers </a>
                                <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-hidden="true"></i>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown">
                                        <a href="{{ url('/postresumes') }}">Post Resumes </a>
                                    </li>
                                    {{--  <li class="dropdown">
                          <a href="#">Current Opening</a>
                        </li>  --}}
                                    <li class="dropdown">
                                        <a href="{{ url('/careerarticles') }}">Career Articles </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{ url('/howtomakearesume') }}">How to make a Resume</a>
                                    </li>
                                    {{--  <li class="dropdown">
                          <a href="{{ url('/interviewsdosanddont') }}">Interviews Dos and Dont's</a>
                        </li>  --}}
                                </ul>
                            </li>
                        </ul>

                        <ul class="navbar-nav alt-font">
                            <li class="nav-item dropdown simple-dropdown">
                                <a href="{{ url('/recuitmentprocess') }}" class="nav-link">Recruitment Process
                                </a>
                                <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-hidden="true"></i>
                            </li>
                        </ul>

                        <ul class="navbar-nav alt-font">
                            <li class="nav-item dropdown simple-dropdown">
                                <a href="#" class="nav-link">Join Us</a>
                                <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-hidden="true"></i>
                                <ul class="dropdown-menu" role="menu">


                                    <li class="dropdown">
                                        <a href="{{ url('/life_globalhunt') }}">LifeGlobalHunt </a>
                                    </li>

                                </ul>
                            </li>
                        </ul>


                        <ul class="navbar-nav alt-font">
                            <li class="nav-item dropdown simple-dropdown">
                                <a href="{{ url('/blog') }}" class="nav-link">Blog </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav alt-font">
                            <li class="nav-item dropdown simple-dropdown">
                                <a href="{{ url('/contact') }}" class="nav-link">Contact </a>
                                <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-hidden="true"></i>
                            </li>
                        </ul>
                    </ul>
                </div>
            </div>
            {{--  <div class="col-auto text-end pe-0 font-size-0">
                <div class="header-search-icon search-form-wrapper">
                    <a href="javascript:void(0)" class="search-form-icon header-search-form"><i
                            class="feather icon-feather-search"></i></a>
                    <!-- start search input -->
                    <div class="form-wrapper">
                        <button title="Close" type="button" class="search-close alt-font">
                            ×
                        </button>
                        <form id="search-form" role="search" method="get" class="search-form text-start"
                            action="search-result.html">
                            <div class="search-form-box">
                                <span class="search-label alt-font text-small text-uppercase text-medium-gray">What are
                                    you looking
                                    for?</span>
                                <input class="search-input alt-font" id="search-form-input5e219ef164995"
                                    placeholder="Enter your keywords..." name="s" value=""
                                    type="text" autocomplete="off" />
                                <button type="submit" class="search-button">
                                    <i class="feather icon-feather-search" aria-hidden="true"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- end search input -->
                </div>
            </div>  --}}
        </div>
    </nav>
</header>
