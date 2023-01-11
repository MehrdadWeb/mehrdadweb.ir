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
        <!--==========================
                                                                                            1-
                                                                                            ============================-->
        {{-- @include('front.project.') --}}
        <section id="project-1">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb bgcolor">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">خانه</a></li>
                    <li class="breadcrumb-item active" aria-current="page">ثبت نام</li>
                </ol>
            </nav>
            <div class="container">
                <!-- 1.ایجاد فرم -->
                <button type="submit" class="btn btn-success m-2">
                    <a href="{{ route('forms.create') }}" class="btn1" target="_blank"><b>ایجاد فرم</b></a>
                </button><br>
                <!-- 2.ایجاد کوئری -->
                <button type="submit" class="btn btn-success m-2">
                    <a href="{{ route('queries.create') }}" class="btn1" target="_blank"><b>ایجاد کوئری</b></a>
                </button><br>
                <!-- 3.ثبت کوئری در فرم -->
                <button type="submit" class="btn btn-success m-2">
                    <a href="{{ route('project1.create') }}" class="btn1" target="_blank"><b>ثبت کوئری در
                            فرم</b></a>
                </button><br>
                <!-- 4.ثبت دیتابیس جدید -->
                <button type="submit" class="btn btn-success m-2">
                    <a href="{{ route('databases.create') }}" class="btn1" target="_blank"><b>ثبت دیتابیس
                            جدید</b></a>
                </button><br>
                <!-- لیست فرم ها -->
                <button type="submit" class="btn btn-success m-2">
                    <a href="{{ route('forms') }}" class="btn1" target="_blank"><b>ليست فرم ها</b></a>
                </button>
                <!-- لیست دیتابیس های ثبت شده -->
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
                    <button type="submit" class="btn btn-info">دیتابیس مورد نظر خود را انتخاب کنید</button>
                    <button type="submit" class="btn btn-success">اجرای کوئری</button>
                </section>
                <!--<section id="query-section" style="text-align: left;direction: ltr;">-->
                <!--    <div class="container">-->
                <!--        <h4>SELECT</h4>-->
                <!--        <div class="m-3">SELECT column_name(s)FROM table_name (Databese_name)</div>-->
                <!--        <div class="m-3">-->
                <!--            <diV>-->
                <!--                SELECT-->
                <!--                <input type="text" id="userquery1" name="userquery1" value="" placeholder="column_name(s)"-->
                <!--                    style="width: 130px;">-->
                <!--                FROM-->
                <!--                <input type="text" id="userquery2" name="userquery2" value="" placeholder="table_name"-->
                <!--                    style="width: 110px;">-->
                <!--            </diV>-->
                <!--            <div class="mt-2">-->
                <!--                <label for="categories">Databese_name:</label>-->
                <!--                <select class="" id="databases" name="databases" style="width:400px">-->
                <!--                    @foreach ($databases as $database)-->
                <!--                        <option value="{{ $database->dbname }}" <?php echo 'selected'; ?>>-->
                <!--                            {{ $database->dbname }}-->
                <!--                        </option>-->
                <!--                    @endforeach-->
                <!--                </select>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--        <h4>WHERE</h4>-->
                <!--        <div class="m-3">SELECT column_name(s) FROM table_name WHERE column_name operator value-->
                <!--            (Databese_name)</div>-->
                <!--        <h4>Order By</h4>-->
                <!--        <div class="m-3">SELECT column_name(s) FROM table_name ORDER BY column_name(s) ASC|DESC-->
                <!--            (Databese_name)</div>-->
                <!--        <h4>DELETE</h4>-->
                <!--        <div class="m-3">DELETE FROM table_name WHERE some_column = some_value (Databese_name)</div>-->
                <!--        <h4>UPDATE</h4>-->
                <!--        <div class="m-3">UPDATE table_name SET column1=value, column2=value2,... WHERE-->
                <!--            some_column=some_value (Databese_name)</div>-->
                <!--    </div>-->
                <!--</section>-->
            </div>
        </section>
    </main>
@endsection
