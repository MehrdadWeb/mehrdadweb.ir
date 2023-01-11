{{-- Route::get('/project-1/forms/create', 'App\Http\Controllers\FormController@create')->name('forms.create'); --}}
@extends('front.index')
@section('title')
    Project-1- Create a form
@endsection
@section('content')
    @include('front.intro')
    <!-- صفحه اصلی main (font end) -->
    <main id="main">
        <section id="project-1">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb bgcolor">
                    <li class="breadcrumb-item"><a href="{{ route('forms') }}">ليست فرم ها</a></li>
                    <li class="breadcrumb-item active" aria-current="page">ايجاد فرم</li>
                </ol>
            </nav>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body border border-success">
                                @include('front.message')
                                {{-- ایجاد فرم --}}
                                <form action="{{ route('forms.store') }}" method="POST">
                                    <legend align="center">ساخت فرم</legend>
                                    @csrf
                                    <!-- مشخصات کاربر  -->
                                    <div class="form-group">
                                        <label for="user_id">نام کاربری : {{ Auth::user()->name }}</label>
                                        <input type="hidden" id="user_id" name="user_id"
                                            class="form-control @error('user_id') is-invalid @enderror"
                                            value="{{ Auth::user()->id }}">
                                        @error('user_id')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" id="user_name" name="user_name"
                                            class="form-control @error('user_name') is-invalid @enderror"
                                            value="{{ Auth::user()->name }}">
                                        @error('user_name')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <!-- نام فرم  -->
                                    <div class="form-group">
                                        <label for="name" class="d-inline">
                                            نام فرم :
                                        </label>
                                        <input type="text" id="name" name="name"
                                            class="form-control w-25 border border-info d-inline" @error('name') is-invalid
                                            @enderror" value="{{ old('name') }}" placeholder="نام فرم را وارد نمایید.">
                                        @error('name')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group" style="text-align: left;">
                                        <button type="submit" class="btn btn-success">اجرا</button>
                                        <a href="{{ route('forms') }}" class="btn btn-warning">بازگشت(انصراف)</a>
                                    </div>
                                </form>
                                {{-- <div class="form-group">
                                    <label for="operation">انتخاب عملیات:</label>
                                    <div id="output"></div>
                                    <select class="form-control w-25 border border-primary" id="operation" name="operation"
                                        style="width:400px">
                                        <option value="SELECT">SELECT</option>
                                        <option value="WHERE">WHERE</option>
                                        <option value="Order By" selected>Order By</option>
                                        <option value="DELETE">DELETE</option>
                                        <option value="UPDATE">UPDATE</option>
                                    </select>
                                </div>
         
                                <div class="form-group" style="text-align: left;">
                                    <button type="submit" class="btn btn-success">اجرا</button>

                                    <a href="{{ route('forms') }}" class="btn btn-warning">بازگشت(انصراف)</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
