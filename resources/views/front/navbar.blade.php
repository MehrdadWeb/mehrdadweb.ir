<header id="header">
    <div id="topbar">
        <div class="container">
            <div class="social-links">
                <a href="https://twitter.com/mehrdadmmg2012" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="ttps://www.facebook.com/mehrdad.mohammadii7/" class="facebook"><i
                        class="fa fa-facebook"></i></a>
                <a href="https://www.linkedin.com/in/mehrdad-mohammadi7/" class="linkedin"><i
                        class="fa fa-linkedin"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-phone"></i></a>
                <a href="https://t.me/mohammadi90" class="linkedin"><i class="fa fa-telegram"></i></a>
                <a href="https://www.instagram.com/mehrdad.mohammadi7/" class="instagram"><i
                        class="fa fa-instagram"></i></a>
            </div>
        </div>
    </div>

    <div class="container">
        @include('front.message')
        <div class="logo float-left">
            <!-- Uncomment below if you prefer to use an image logo -->
            <h1 class="text-light"><a href="http://mehrdadweb.ir/" class="scrollto"><span>Mehrdad&nbsp;Web</span></a></h1>
            <!-- <a href="#header" class="scrollto"><img src="front/img/logo.png" alt="" class="img-fluid"></a> -->
        </div>

        <nav class="main-nav float-right d-none d-lg-block"><!-- .main-nav -->
            <ul>
                <li class="active"><a href="/">خانه</a></li>
                <li><a href="#about">درباره ما</a></li>
                <li><a href="#services">خدمات</a></li>
                <li><a href="#skills">مهارت ها</a></li>
                <li><a href="#portfolio">نمونه کارها</a></li>
                <li><a href="#testimonials">گالری</a></li>
                <li><a href="#team">تیم ما</a></li>
                <!--<li><a href="#clients">مشتریان</a></li>-->
                <!--<li><a href="#pricing">قیمت ها</a></li>-->
                <!--<li><a href="#faq">سوالات متداول</a></li>-->
                <li><a href="{{ route('articles') }}">مطالب</a></li>
                <li class="drop-down">
                    <a href="#">منوی کاربری</a>
                    <ul>
                        <!--1
                        {{-- @if (!Auth::guest())
                        <li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger">خروج</button>
                            </form>    
                        </li> 
                        @else
                            <li><a href="{{ route('register') }}">ثبت نام</a></li><!-- //url 'register' -->
                            <!--<li><a href="{{ route('login') }}">ورود</a></li>-->
                        @endif --}}-->
                        <!--2-->
                        @auth
                            <li><a href="{{ route('profile', Auth::user()->id) }}">پروفایل کاربری</a></li>
                            @if (Auth::user()->role == 1)
                                <!--{{-- auth()->user()->role == 1 --}} -->
                                <li class="drop-down"><a href="">پروژه‌ها</a>
                                    <ul>
                                        <li><a href="{{ route('project-1') }}" target="_blank">پروژه-1</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('admin.index') }}" target="_blank">پنل مدیریت</a></li>
                            @endif
                            <li>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">خروج</button>
                                </form>
                            </li>
                        @else
                            <li><a href="{{ route('register') }}">ثبت نام</a></li><!-- //url 'register' -->
                            <li><a href="{{ route('login') }}">ورود</a></li>
                        @endauth
                    </ul>
                </li>
                    <li class="drop-down"><a href="">پروژه‌ها</a>
                    <ul>
                        <li><a href="{{ route('URLShortener') }}" target="_blank">کوتاه کننده لینک</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('biography') }}" target="_blank">بیوگرافی</a></li>
                </li>
                <li class="drop-down"><a href="{{ route('mehrdadarticles') }}">آموزش های مهرداد</a>
                    <ul>
                        <li><a href="#" target="_blank">معرفی کتاب</a></li>
                        <li><a href="#" target="_blank">دانلود کتاب</a></li>
                        <li><a href="#" target="_blank">طراحی وب</a></li>
                        <li class="drop-down"><a href="#" target="_blank">رمز ارزها و متا</a>
                            <ul>
                                <li><a href="https://s21.picofile.com/file/8446370484/NFT.pdf.html" target="_blank">NFT</a></li>
                                <li><a href="https://s21.picofile.com/file/8446873300/%D8%B1%D9%85%D8%B2%D8%A7%D8%B1%D8%B2%D9%87%D8%A7.pdf.html" target="_blank">CryptoCurrency</a></li>
                                <li><a href="https://s20.picofile.com/file/8446873242/%D8%A8%D9%84%D8%A7%DA%A9_%DA%86%DB%8C%D9%86.pdf.html" target="_blank">BlockChain</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#footer">ارتباط با ما</a></li>
            </ul>
        </nav><!-- .main-nav -->
        
        <nav class="main-md-nav" style="float: left;"><!-- .main-md-nav -->
            <ul>
                <li class="drop-down sm-4"><a href="#">پروژه‌ها</a>
                    <ul>
                        <li><a href="{{ route('URLShortener') }}" target="_blank">کوتاه کننده لینک</a></li>
                    </ul>
                </li>
                <li class="drop-down sm-4"><a href="#">منوی کاربری</a>
                    <ul>
                        @auth
                            <li><a href="{{ route('profile', Auth::user()->id) }}">پروفایل کاربری</a></li>
                            @if (Auth::user()->role == 1)
                                <!--{{-- auth()->user()->role == 1 --}} -->
                                <li class="drop-down"><a href="">پروژه‌ها</a>
                                    <ul>
                                        <li><a href="{{ route('project-1') }}" target="_blank">پروژه-1</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('admin.index') }}" target="_blank">پنل مدیریت</a></li>
                            @endif
                                <li>
                                <form action="{{ route('logout') }}" method="post">
                            @csrf
                                <button type="submit" class="btn btn-danger">خروج</button>
                                </form>
                                </li>
                        @else
                            <li><a href="{{ route('register') }}">ثبت نام</a></li><!-- //url 'register' -->
                            <li><a href="{{ route('login') }}">ورود</a></li>
                        @endauth
                    </ul>
                </li>
                <li class="sm-4"><a href="{{ route('biography') }}" target="_blank">بیوگرافی</a></li>
                </li>
                <li class="drop-down"><a href="">آموزش های مهرداد</a>
                    <ul>
                        <li><a href="#" target="_blank">معرفی کتاب</a></li>
                        <li><a href="#" target="_blank">دانلود کتاب</a></li>
                        <li><a href="#" target="_blank">طراحی وب</a></li>
                        <li class="drop-down"><a href="#" target="_blank">رمز ارزها و متا</a>
                            <ul>
                                <li><a href="https://s21.picofile.com/file/8446370484/NFT.pdf.html" target="_blank">NFT</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav><!-- .main-md-nav -->
    </div>
</header>
