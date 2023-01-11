<!--Route::get('/login',\App\Http\Controllers\Auth\LoginController@showLoginForm)->name('login'); http://mehrdadweb.ir/login/-->
@extends('front.index')
@section('content')
    <section id="intro2" class="clearfix"></section><!-- #intro -->
    <!-- register صفحه main -->
    <main class="container main2">
        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb bgcolor">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">خانه</a></li>
                <li class="breadcrumb-item active" aria-current="page">پروژه-1</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-center">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">ایمیل</label>
                    <input type="text" id="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}">
                    <!--1. directlyمستقیما-->
                    @error('email')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">رمز ورود</label>
                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password">
                    <!--1. directlyمستقیما-->
                    @error('password')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-check">
                    <label class="form-check-label" for="remember">مرا بخاطر بسپار</label>
                    <input type="checkbox" class="form-check-input" name="checkbox" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">ورود</button>
                    <a href="{{ route('home') }}" class="btn btn-warning">بازگشت(انصراف)</a>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </main>
@endsection
