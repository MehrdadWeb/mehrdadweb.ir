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
                    <li class="breadcrumb-item"><a href="{{ route('forms') }}">ليست فرم ها</a></li>
                    <li class="breadcrumb-item active" aria-current="page">ايجاد فرم</li>
                </ol>
            </nav>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body border border-danger">
                                @include('front.message')
                                <form action="{{ route('queries.store') }}" method="POST">
                                    <!-- forms.store -->
                                    @csrf
                                    <!-- نام فرم  -->
                                    <div class="form-group text-center">
                                        <label for="name">
                                            نام فرم
                                        </label>
                                        <input type="text" id="name" name="name"
                                            class="form-control w-25 border border-info" @error('name') is-invalid
                                            @enderror" style="margin-right: auto;margin-left: auto;"
                                            value="{{ old('name') }}">
                                        @error('name')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <hr style="border-top: 1px solid red">
                                    <!-- آيدي كاربر -->
                                    <div class="form-group">
                                        <label for="user_id">
                                            آيدي كاربر
                                        </label>
                                        <input type="text" id="user_id" name="user_id"
                                            class="d-inline form-control w-25 border border-primary @error('user_id') is-invalid @enderror"
                                            value="{{ old('user_id') }}">
                                        @error('user_id')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <!-- انتخاب ديتابيس databases -->
                                    <div class="form-group">
                                        <label for="database">انتخاب ديتابيس:</label>
                                        <div id="output"></div>
                                        <select class="form-control w-25 border border-primary" id="database"
                                            name="database" style="width:400px">
                                            @foreach ($databases as $database)
                                                <option value="{{ $database->dbname }}" <?php echo 'selected'; ?>>
                                                    {{ $database->dbname }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group" style="text-align: left;">
                                        <button type="submit" class="btn btn-success">اجرا</button>
                                        <a href="{{ route('forms') }}" class="btn btn-warning">بازگشت(انصراف)</a>
                                    </div>
                                </form>

                                <hr style="border-top: 1px solid rgb(47, 30, 196)">
<p>salam</p>
                                    <!-- آيدي محصول -->
                                    <div class="form-group">
                                        <label for="product_id">
                                            آيدي محصول
                                        </label>
                                        <input type="text" id="product_id" name="product_id"
                                            class="form-control w-25 border border-primary @error('product_id') is-invalid @enderror"
                                            value="{{ old('product_id') }}">
                                        @error('product_id')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <!-- نام محصول -->
                                    <div class="form-group">
                                        <label for="user_id">
                                            نام محصول
                                        </label>
                                        <input type="text" id="product_name" name="product_name"
                                            class="form-control w-25 border border-primary @error('product_name') is-invalid @enderror"
                                            value="{{ old('product_name') }}">
                                        @error('product_name')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <!--  نوع عملیات -->
                                    <div class="form-group">
                                        <label for="operation">انتخاب عملیات:</label>
                                        <div id="output"></div>
                                        <select class="form-control w-25 border border-primary" id="operation"
                                            name="operation" style="width:400px">
                                            <option value="SELECT">SELECT</option>
                                            <option value="WHERE">WHERE</option>
                                            <option value="Order By" selected>Order By</option>
                                            <option value="DELETE">DELETE</option>
                                            <option value="UPDATE">UPDATE</option>
                                        </select>
                                    </div>
                                    <!-- انتخاب ديتابيس databases -->
                                    <div class="form-group">
                                        <label for="databases">انتخاب ديتابيس:</label>
                                        <div id="output"></div>
                                        <select class="form-control w-25 border border-primary" id="databases"
                                            name="databases" style="width:400px">
                                            @foreach ($databases as $database)
                                                <option value="{{ $database->dbname }}" <?php echo 'selected'; ?>>
                                                    {{ $database->dbname }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group" style="text-align: left;">
                                        <button type="submit" class="btn btn-success">اجرا</button>
                                        
                                        <a href="{{ route('forms') }}" class="btn btn-warning"  >بازگشت(انصراف)</a>
                                    </div>

                                <button type="submit" class="btn btn-success" id="querybutton">2اجرا</button>
                                <button id="hide">Hide</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
