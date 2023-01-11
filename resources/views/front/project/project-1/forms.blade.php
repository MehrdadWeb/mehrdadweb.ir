{{-- Route::get('/project-1/forms', 'App\Http\Controllers\FormController@index')->name('forms'); --}}
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
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">خانه</a></li>
                    <li class="breadcrumb-item active" aria-current="page">ثبت نام</li>
                </ol>
            </nav>
            <div class="container">
                <!-- ایجاد فرم -->
                <button type="submit" class="btn btn-success m-2">
                    <a href="{{ route('forms.create') }}" class="btn1" target="_blank"><b>ایجاد فرم</b></a>
                </button><br>
                {{-- لیست دیتابیس های ثبت شده --}}
                <section id="list_of_DB">
                    <h3 class="project-1-showdb-h3">لیست دیتابیس های ثبت شده</h3>
                    <div class="row">
                        <div class="col-sm-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    @include('front.message')
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>servername</th>
                                                <th>host</th>
                                                <th>port</th>
                                                <th>dbname</th>
                                                <th>username</th>
                                                <th>password</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($databases as $database)
                                                <tr>
                                                    <td>{{ $database->id }}</td>
                                                    <td>{{ $database->servername }}</td>
                                                    <td>{{ $database->host }}</td>
                                                    <td>{{ $database->port }}</td>
                                                    <td>{{ $database->dbname }}</td>
                                                    <td>{{ $database->username }}</td>
                                                    <td>{{ $database->password }}</td>
                                                    <td>
                                                        <a href="{{ route('databases.edit', $database->id) }}"
                                                            class="ml-2">
                                                            <label class="badge badge-success">ویرایش</label>
                                                        </a>

                                                        <a href="{{ route('databases.destroy', $database->id) }}"
                                                            onclick="return confirm('آیا دیتابیس مورد نظر حذف شود؟');">
                                                            <label class="badge badge-danger">حذف</label>
                                                        </a>
                                                        <a href="{{ route('databases.select', $database->id) }}"
                                                            target="_blank" class="ml-2">
                                                            <label class="badge badge-primary">انتخاب</label>
                                                        </a>
                                                        <a href="{{ route('queries.create', $database->id) }}"
                                                            target="_blank" class="ml-2">
                                                            <label class="badge badge-primary">query</label>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                {{ $databases->links() }}
                            </div>
                        </div>
                    </div>
                </section>
                {{-- لیست فرم ها --}}
                <section id="list_of_Forms">
                    <h3 class="project-1-showdb-h3">ليست فرم ها</h3>
                    <div class="row">
                        <div class="col-sm-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    @include('front.message')
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($forms as $form)
                                                <tr>
                                                    <td>{{ $form->id }}</td>
                                                    <td>{{ $form->name }}</td>
                                                    <td>
                                                        <a href="{{ route('databases.edit', $form->id) }}"
                                                            class="ml-2">
                                                            <label class="badge badge-success">ویرایش</label>
                                                        </a>

                                                        <a href="{{ route('databases.destroy', $form->id) }}"
                                                            onclick="return confirm('آیا دیتابیس مورد نظر حذف شود؟');">
                                                            <label class="badge badge-danger">حذف</label>
                                                        </a>
                                                        <a href="{{ route('databases.select', $form->id) }}"
                                                            target="_blank" class="ml-2">
                                                            <label class="badge badge-primary">انتخاب</label>
                                                        </a>
                                                        <a href="{{ route('queries.create', $form->id) }}"
                                                            target="_blank" class="ml-2">
                                                            <label class="badge badge-primary">query</label>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                {{ $forms->links() }}
                            </div>
                        </div>
                    </div>
                </section>
               
            </div>
        </section>
    </main>
@endsection
