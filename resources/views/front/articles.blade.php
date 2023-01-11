<!-- سمت کاربر - front end 
Route::get('/articles', '\App\Http\Controllers\front\ArticleController@index')->name('articles');
-->
@extends('front.index')
@section('content')
    <section id="intro2" class="clearfix"></section><!-- #intro -->
    <!-- register صفحه main -->
    <main class="container main2">
        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb bgcolor">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">خانه</a></li>
                <li class="breadcrumb-item active" aria-current="page">مطالب</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-center ">
            <div class="row ">
                @foreach ($articles as $article)
                    <div class="col-sm-3 m-4">
                        <img src="<?php echo '/photos/1/thumbs/' . basename($article->image); ?>" alt="myImage" class="" style="margin-top:15px;max-height:100px;">
                        <h3><a href="{{ route('article', $article->slug) }}">{{ $article->name }}</a></h3>
                        <div>
                            <ul>
                                <!-- تیتر مطلب -->
                                <li>نویسنده:{{ $article->user->name }}</li>
                                <li>تاریخ:{!! jdate($article->created_at)->format('%Y/%m/%d') !!}</li>
                                <li>بازید:{{ $article->hit }}</li>
                            </ul>
                        </div>
                        <!-- خلاصه ای از این مطب Str::substr -->
                        <p class="ml-1"><?php echo mb_substr(strip_tags($article->description), 0, 200, 'UTF8') . '. . .'; ?></p>
                    </div>
                @endforeach
            </div>

        </div>
        <div>{{ $articles->links() }}</div>
    </main>
@endsection
