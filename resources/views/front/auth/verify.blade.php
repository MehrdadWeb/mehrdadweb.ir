@extends('front.index')
@section('content')
    <section id="intro2" class="clearfix"></section><!-- #intro -->
    <!-- register صفحه main -->
    <main class="container main2">
        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb bgcolor">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">خانه</a></li>
                <li class="breadcrumb-item active" aria-current="page">فعالسازی حساب کاربری</li>
            </ol>
        </nav>

        @include('front.message')

        <div class="d-flex justify-content-center" dir="rtl" style="text-align: right;">

            <div class="card text-center">
                {{-- برای فعالسازی حساب کاربری خود روی دکمه زیر کلیک نمایید تا ایمیل فعالسازی برای شما ارسال شود --}}
                <hr>
                @if (session('resent'))
                    <div class="alert alert-success">
                        <h2 style="font-weight: bolder">
                            <strong>
                                ثبت نام شما با موفقیت انجام شد. {{ Auth::user()->name }} کاربر گرامی
                            </strong>
                        </h2>
                        یک ایمیل برای فعالسازی حساب کاربری شما به آدرس ایمیل ارسال شد.ایمیل خود را بررسی و
                        روی لینک
                        فعالسازی حساب کاربری کلیک نمایید
                    </div>
                @endif
                <div class="alert .alert-warning" style="direction: rtl">
                    <p>
                        <br>کاربر گرامی
                        {{ Auth::user()->name }}<br>
                        ایمیل فعالسازی حساب کاربری به آدرس ایمیل شما ارسال گردیده است،<br>
                        <strong>
                            لطفا جهت تکمیل ثبت نام به ایمیل خود مراجعه کنید و روی لینک فعالسازی حساب کاربری کلیک کنید.<br>
                        </strong>
                        <span style="direction: rtl">
                            (گر ایمیلی را در پوشه Inbox دریافت نکردید، ممکن است ایمیل مربوطه به عنوان اسپم شناخته شده و به
                            پوشه اسپم (Spam/Junk) و یا پوشه زباله (Delete)منتقل شده باشد.)
                        </span>
                    </p>

                    <form action="{{ route('verification.resend') }}" method="POST">
                        <fieldset>
                            <legend align="center">ارسال مجدد ایمیل فعالسازی</legend>
                            @csrf
                            <p>اگر ایمیل فعالسازی حساب کاربری فرستاده نشده بری روی دکمه زیر کلیک کنید.</p>
                            <button class="border border-primary btn btn-primary">ارسال مجدد ایمیل فعالسازی</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
