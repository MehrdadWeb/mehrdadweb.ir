<!-- سمت کاربر - front end 
Route::get('/article/{article}', '\App\Http\Controllers\front\ArticleController@show')->name('article');
-->
@extends('front.index')
@section('content')
    <section id="intro2" class="clearfix"></section><!-- #intro -->
    <!-- register صفحه main -->
    <main class="container main2">
        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb bgcolor">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">خانه</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('articles') }}">مطالب</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $article->name }}</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-center ">
            <div class="container">
                <div>
                    <h1>{{ $article->name }}</h1>
                </div>
                <div>
                    <ul>
                        <!-- مطلب -->
                        <li>نویسنده:{{ $article->user->name }}</li>
                        <li>تاریخ:{!! jdate($article->created_at)->format('%Y/%m/%d') !!}</li>
                        <li>بازید:{{ $article->hit }}</li>
                    </ul>
                </div>
                <div>
                    <p>{!! $article->description !!}</p>
                </div>
            </div>
        </div>
        <div>
            <hr>
            @include('front.message')
            <!-- کامنت -->
            <form action="{{ route('commnet.store', $article->slug) }}" class="form-group" method="POST">
                @csrf
                <div class="row">
                    @auth
                        <!-- اگر کاربر لاگین شده -->
                        <!-- name of comment -->
                        <div class="form-group col-md-6">
                            <label for="name">نام:</label>
                            <input class="form-control" type="text" id="name" name="name" value="{{ Auth::user()->name }}"
                                readonly>
                        </div>
                        <!-- email of comment -->
                        <div class="form-group col-md-6">
                            <label for="email">ایمیل:</label>
                            <input class="form-control" type="text" id="email" name="email" value="{{ Auth::user()->email }}"
                                readonly>
                        </div>
                    @else
                        <div class="form-group col-md-6">
                            <label for="name">نام:</label>
                            <input class="form-control" type="text" id="name" name="name" value="{{ old('name') }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">ایمیل:</label>
                            <input class="form-control" type="text" id="email" name="email" value="{{ old('email') }}">
                        </div>
                    @endauth

                </div>
                <div class="form-group">
                    <!-- body of comment -->
                    <label for="body">متن نظر شما</label>
                    <textarea class="form-control" class="form-control" name="body" id="body" cols="30" rows="10"
                        value="{{ old('body') }}"></textarea>
                </div>
                <div class="form-group">
                    <label for="body">تصویر امنیتی</label>
                    {!! htmlFormSnippet() !!}
                </div>
                <button class="btn btn-primary" type="submit">ارسال نظر</button>
            </form>
        </div>

        <!-- نمایش کامنت ها برای کاربران،در بخش کاربری -->
        @foreach ($comments as $comment)
            <div>
                <ul>
                    <li>نویسنده: {{ $comment->name }}</li>
                    <li>ایمیل: {{ $comment->email }}</li>
                </ul>
                <div>
                    متن نظر: {{ $comment->body }}
                </div>
            </div>
            <hr>
        @endforeach
    </main>
@endsection
