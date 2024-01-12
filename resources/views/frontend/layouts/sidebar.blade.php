<!-- ======= Mobile nav toggle button ======= -->
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex flex-column">

        <div class="profile">
            <img
                src="{{isset($settings)&&$settings->avatar_img?asset('storage/'.$settings->avatar_img): asset('img/avatar.jpg')}}"
                alt="" class="img-fluid rounded-circle">
            <h1 class="text-light"><a href="{{route('frontend')}}">@lang('Tung Nguyen')</a></h1>
            <div class="social-links mt-3 text-center">
                <a href="{{isset($settings)&&$settings->facebook_link?$settings->facebook_link: 'https://facebook.com/lonelycount'}}" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
                <a href="{{isset($settings)&&$settings->twitter_link?$settings->twitter_link: 'https://github.com/tungnguyenls2008'}}" class="github" target="_blank"><i class="bx bxl-github"></i></a>
                <a href="{{isset($settings)&&$settings->linkin_link?$settings->linkin_link: 'https://www.linkedin.com/in/tungnguyen0a280'}}" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="text-center">
                <a class="btn btn-primary"
                   href="{{route('language-switch')}}">{{app()->getLocale()=='en'?'VIE':'ENG'}}</a>
            </div>
        </div>
        <hr>
        <a href="{{isset($settings)&&$settings->cv_eng?asset('storage/'.$settings->cv_eng): asset('pdf/NGUYEN-DUC-TUNG-eng.pdf')}}" class="btn btn-outline-primary">Eng CV</a>
        <br>
        <a href="{{isset($settings)&&$settings->cv_vie?asset('storage/'.$settings->cv_vie): asset('pdf/NGUYEN-DUC-TUNG-vie.pdf')}}" class="btn btn-outline-primary">Vie CV</a>
        <hr>
        <nav id="navbar" class="nav-menu navbar">
            <ul>
                <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>@lang('Home')</span></a>
                </li>
                <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i>
                        <span>{{__('About')}}</span></a></li>
                <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>@lang('Resume')</span></a>
                </li>
                <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i>
                        <span>@lang('Portfolio')</span></a></li>
                <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>@lang('Services')</span></a>
                </li>
                <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>@lang('Contact')</span></a>
                </li>
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->
