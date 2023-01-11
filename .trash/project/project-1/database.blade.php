<!--
Route::get('/project-1', 'App\Http\Controllers\ProjectController@index')->name('project-1')->middleware('CheckRole');
-->
@extends('front.index')

@section('title')
    @php
    echo 'دیتابیس : ' . $database->dbname;
    @endphp
@endsection

@section('content')

    @include('front.intro')

    <!-- صفحه اصلی main (font end) -->
    <main id="main">
        <section id="project-1">
            <div class="container">
                <section id="listDB">
                    <div class="row">
                        <div class="col-sm-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    @include('front.message')
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>host</th>
                                                <th>port</th>
                                                <th>dbname</th>
                                                <th>username</th>
                                                <th>password</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $database->id }}</td>
                                                <td>{{ $database->host }}</td>
                                                <td>{{ $database->port }}</td>
                                                <td>{{ $database->dbname }}</td>
                                                <td>{{ $database->username }}</td>
                                                <td>{{ $database->password }}</td>
                                                <!--<td>
                                                                                        <a href="{{ route('databases.edit', $database->id) }}" class="ml-2">
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
                                                                                    </td>-->
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                <h3 class="project-1-showdb-h3" dir="ltr">کوئری را وارد نمایید</h3>
                <section id="query-section" style="text-align: left;" dir="ltr">
                    <input type="text" id="userquery" name="userquery" value="" placeholder="Enter your query here">
                    <button type="submit" class="btn btn-success" id="querybutton">
                        <a href="{{ route('queries.run', $database->id) }}" style="color: aliceblue;">اجراي كوئري</a>
                    </button>
                    <hr>
                    <form action="{{ route('queries.store', $database->id) }}" method="POST">
                        @csrf
                        <div class="form-group" style="text-align: left;">
                            <label for="query">کوئری</label>
                            <textarea type="text" id="query" name="query" class="form-control mt-3" dir="ltr" rows="7"
                                cols="70">
                                            {{ old('query') }}
                            </textarea>
                        </div>
                        <div class="form-group" style="text-align: right;">
                            <button type="submit" class="btn btn-success">ذخیره‌ی کوئری</button>
                        </div>
                    </form>
                    <button type="submit" class="btn btn-success">
                        <a href="{{ route('queries.run', $database->id) }}" style="color: aliceblue;">اجراي كوئري</a>
                    </button>
                </section>
                <section id="output3">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>query</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="output4"></td>

                            </tr>

                        </tbody>
                    </table>
                </section>
            </div>
        </section>
    </main>

@endsection
