{{-- Route::get('/project-1/register-query-form', 'App\Http\Controllers\Project1Controller@create')->name('project1.create'); --}}
@extends('front.index')

@section('title')
    Project-1
@endsection

@section('content')

    @include('front.intro')

    <!-- صفحه اصلی main (font end) -->
    <main id="main">
        @include('front.message')
        <section id="project-1">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb bgcolor">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">خانه</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('project-1') }}">پروژه-1</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('project1.create') }}">ثبت
                            کوئری در فرم</a></li>
                </ol>
            </nav>
            <div class="container">
                @include('front.message')
                <div class="border border-success p-5">
                    <form action="{{ route('project1.store') }}" method="POST">
                        @csrf
                        <legend align="center">ثبت کوئری در فرم</legend>
                        {{-- انتخاب کوئری --}}
                        <div class="form-group d-inline-block">
                            <label for="queries">لیست کوئری ها</label>
                            <div id="output"></div>
                            <select class="chosen-select" id="queries" name="queries[]" multiple style="width:400px">
                                @foreach ($queries as $query_id => $query_name)
                                    <option value="{{ $query_id }}">{{ $query_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        {{-- انتخاب فرم --}}
                        <div class="form-group d-inline-block">
                            <label for="forms">لیست فرم ها</label>
                            <div id="output"></div>
                            <select class="chosen-select" id="forms" name="forms[]" multiple style="width:400px">
                                @foreach ($forms as $form_id => $form_name)
                                    <option value="{{ $form_id }}">{{ $form_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">ذخیره</button>
                            <a href="{{ route('project-1') }}" class="btn btn-warning">بازگشت(انصراف)</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
@section('js')
    <script>
        //chosen-select
        $('.chosen-select').chosen();
    </script>
@endsection
