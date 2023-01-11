{{-- Route::get('/project-1/queries/create', 'App\Http\Controllers\QueryController@create')->name('queries.create'); --}}
@extends('front.index')

@section('title')
    ایجاد و ثبت کوئری
@endsection

@section('content')

    @include('front.intro')

    <!-- صفحه اصلی main (font end) -->
    <main id="main">
        <section id="project-1">
            <div class="container border border-success">
                <form action="{{ route('queries.store') }}" method="POST">
                    <legend align="center">ثبت کوئری</legend>
                    @csrf
                    <!-- مشخصات کاربر  -->
                    <div class="form-group">
                        <label for="user_id">نام کاربری : {{ Auth::user()->name }}</label>
                        <input type="hidden" id="user_id" name="user_id"
                            class="form-control @error('user_id') is-invalid @enderror" value="{{ Auth::user()->id }}">
                        @error('user_id')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="hidden" id="user_name" name="user_name"
                            class="form-control @error('user_name') is-invalid @enderror" value="{{ Auth::user()->name }}">
                        @error('user_name')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <!-- عنوان کوئری -->
                    <div class="form-group">
                        <label for="name">عنوان کوئری :</label>
                        <input type="text" id="name" name="name" class="form-control w-25 border border-info d-inline"
                            @error('name') is-invalid @enderror" value="{{ old('name') }}"
                            placeholder="عنوان کوئری را وارد نمایید.">
                        @error('name')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <!-- متن کوئری -->
                    <div class="form-group">
                        <label for="query">متن کوئری : </label>
                        <input type="text" id="query" name="query" class="form-control w-25 border border-info d-inline"
                            @error('query') is-invalid @enderror" value="{{ old('query') }}"
                            placeholder="متن کوئری را وارد نمایید.">
                        @error('query')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group" style="text-align: right;">
                        <button type="submit" class="btn btn-success">ذخیره‌ی کوئری</button>
                    </div>
                </form>
            </div>
        </section>
    </main>

@endsection
