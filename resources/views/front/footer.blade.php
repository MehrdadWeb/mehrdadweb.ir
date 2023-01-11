<footer id="footer" class="section-bg">
    <div class="footer-top">
        <div class="container">

            <div class="row">

                <div class="col-lg-7">

                    <div class="row">

                        <div class="col-sm-7">

                            <div class="footer-info" style="text-align: left;">
                                <h3>Mehrdad&nbsp;Web</h3>
                                <p>
                                    I am a full stack web developer and work with Laravel framework based on PHP language
                                </p>
                            </div>

                            <div class="footer-newsletter" style="text-align: left;">
                                <div class="social-links mb-4" style="text-align: left;" dir="ltr">
                                    <h4>social links<br>
                                    من را در شبکه های اجتماعی دنبال کنید</h4>
                                    <a href="https://twitter.com/mehrdadmmg2012" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="https://www.facebook.com/mehrdad.mohammadii7/" class="facebook"><i
                                            class="fa fa-facebook"></i></a>
                                    <a href="https://www.linkedin.com/in/mehrdad-mohammadi7/" class="linkedin"><i
                                            class="fa fa-linkedin"></i></a>
                                    <a href="09353408373" class="linkedin" title="09353408373"><i
                                            class="fa fa-phone"></i></a>
                                    <a href="https://t.me/mohammadi90" class="linkedin"><i class="fa fa-telegram"></i></a>
                                    <a href="https://www.instagram.com/mehrdad.mohammadi7/" class="instagram"><i
                                            class="fa fa-instagram"></i></a>
                                </div>
                                <h4>Our Newsletter عضویت در خبرنامه</h4>
                                <!--<form action="'newsletter'" class="form-group" method="post">
                                    <input type="email" name="email">
                                    <button type="submit" class="btn btn-success">Subscribe</button>
                                </form> style="text-align: left;"-->
                                <div class="container">
                                    @if (\Session::has('success'))
                                        <div class="alert alert-success">
                                            <p>{{ \Session::get('success') }}</p>
                                        </div>
                                        <br />
                                    @endif
                                    @if (\Session::has('failure'))
                                        <div class="alert alert-danger">
                                            <p>{{ \Session::get('failure') }}</p>
                                        </div>
                                        <br />
                                    @endif
                                    <form method="post" action="{{ route('newsletter.store') }}" class="form-group" style="text-align: left;direction: ltr;">
                                        @csrf
                                        <input type="email" class="form-control ml-5 mb-2" name="email"
                                            placeholder="enter email ایمیل را وارد کنید">
                                        <button type="submit" class="btn btn-success">
                                            عضویت
                                            در خبرنامه
                                        </button>
                                    </form>
                                </div>
                            </div><!-- footer-newsletter -->

                        </div>

                        <div class="col-sm-5">
                            <div class="footer-links" style="text-align: left;">
                                <h4 dir="ltr">Useful Links لینک های مفید</h4>
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="#about">About us</a></li>
                                    <li><a href="#services">Services</a></li>
                                    <li><a href="#">Terms of service</a></li>
                                    <li><a href="#">Privacy policy</a></li>
                                </ul>
                            </div>

                            <div class="footer-links" style="text-align: left;">
                                <h4>Contact Us ارتباط با ما</h4>
                                <p>
                                    <strong>Phone:</strong>+98 9353408373<br>
                                    <strong>Email:</strong>mehrdadmmg2012@gmail.com<br>
                                </p>
                            </div>

                            

                        </div>

                    </div>

                </div>

                <div class="col-lg-5">

                    <div class="form" dir="ltr" style="text-align: left;">

                        <h4 dir="ltr" style="text-align: left;">
                            Send us a message ارتباط با مهرداد محمدی
                        </h4>
                        @if (\Session::has('success'))
                            <div class="alert alert-success">
                                <p>{{ \Session::get('success') }}</p>
                            </div>
                            <br />
                        @endif
                        @if (\Session::has('failure'))
                            <div class="alert alert-danger">
                                <p>{{ \Session::get('failure') }}</p>
                            </div>
                            <br />
                        @endif
                        <!--  role="form" class="contactForm" -->
                        <form action="{{ route('sendmessage') }}" method="POST" dir="ltr" style="text-align: left;">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name نام" data-rule="minlen:4"
                                    data-msg="Please enter at least 4 chars" value="{{ old('name') }}"/>
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email ایمیل خود را وارد کنید" data-rule="email"
                                    data-msg="Please enter a valid email" value="{{ old('email') }}"/>
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" name="phone" id="phone"
                                    placeholder="Phone شماره تلفن" data-rule="phone"
                                    data-msg="Please enter a valid phone" value="{{ old('phone') }}"/>
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control @error('subject') is-invalid @enderror"
                                    name="subject" id="subject" placeholder="Subject موضوع" data-rule="minlen:4"
                                    data-msg="Please enter at least 8 chars of subject" value="{{ old('subject') }}"/>
                                <div class="validation"></div>
                                @error('subject')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea class="form-control @error('description') is-invalid @enderror"
                                    name="description" id="description" rows="5" data-rule="required"
                                    data-msg="Please write something for us" placeholder="Message متن پیام" value="{{ old('description') }}"></textarea>
                                <div class="validation"></div>
                                @error('description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div id="sendmessage">Your message has been sent. Thank you! پیام شما ارسال خواهد شد با
                                تشکر</div>
                            <div id="errormessage">Oops!</div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success" dir="ltr">
                                    Send Message ارسال پیام
                                </button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>Mehrdad&nbsp;Web.ir</strong>. All Rights Reserved
        </div>
    </div>
</footer>
