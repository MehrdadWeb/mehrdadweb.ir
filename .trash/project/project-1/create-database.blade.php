<!--
Route::get('/project-1', 'App\Http\Controllers\ProjectController@index')->name('project-1')->middleware('CheckRole');
-->
@extends('front.index')

@section('title')
    Project-1
@endsection

@section('content')

    @include('front.intro')

    <!-- صفحه اصلی main (font end) -->
    <main id="main">
        <section id="project-1">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb bgcolor">
                    <li class="breadcrumb-item"><a href="{{ route('project-1') }}">ليست ديتابيس ها</a></li>
                    <li class="breadcrumb-item active" aria-current="page">ثبت ديتابيس جديد</li>
                </ol>
            </nav>
            <div class="container">
                <section id="regitserDB">
                    <h3 class="project-1-showdb-h3">
                        فرم ثبت دیتابیس جديد
                    </h3>
                    <h4>اطلاعات مورد نیاز برای ثبت در دیتابیس اصلی</h4>
                    <div class="d-flex justify-content-center" dir="ltr">
                        <form action="{{ route('databases.store') }}" method="POST">
                            @csrf
                            <!-- host -->
                            <div class="form-group">
                                <label for="host">host</label>
                                <input type="text" id="host" class="form-control @error('host') is-invalid @enderror"
                                    name="host" value="{{ old('host') }}">
                                @error('host')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- port -->
                            <div class="form-group">
                                <label for="port">port</label>
                                <input type="number" id="port" class="form-control @error('port') is-invalid @enderror"
                                    name="port" value="{{ old('port') }}">
                                @error('port')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- dbname -->
                            <div class="form-group">
                                <label for="dbname">dbname نام دیتابیس</label>
                                <input type="text" id="dbname" class="form-control @error('dbname') is-invalid @enderror"
                                    name="dbname" value="{{ old('dbname') }}">
                                @error('dbname')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- username -->
                            <div class="form-group">
                                <label for="username">username نام کاربری</label>
                                <input type="text" id="username"
                                    class="form-control @error('username') is-invalid @enderror" name="username"
                                    value="{{ old('username') }}">
                                @error('username')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- password  -->
                            <div class="form-group">
                                <label for="password">password رمز ورود به دیتابیس</label>
                                <input type="password" id="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password">
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
                                <button type="submit" class="btn btn-success">ذخیره</button>
                                <a href="{{ route('home') }}" class="btn btn-warning">بازگشت(انصراف)</a>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </section>
    </main>

@endsection
