@extends('back.index')
@section('title')
    مطلب جدید
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
                <div class="col-12">
                    <div class="page-header">
                        <h4 class="page-title">
                            مطلب جدید
                        </h4>
                    </div>
                </div>

            </div>
            <!-- Page Title Header Ends-->
            <div class="row">
                <div class="col-sm-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            @include('back.message')
                            <form action="{{ route('admin.articles.store') }}" method="POST">
                                @csrf
                                <!-- name نام دسته بندی  -->
                                <div class="form-group">
                                    <label for="name">
                                        مطلب جدید
                                    </label>
                                    <input type="text" id="name" name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name') }}">
                                    @error('name')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <!-- slug -->
                                <div class="form-group">
                                    <label for="email">نام مستعار - Slug</label>
                                    <input type="slug" id="slug" class="form-control @error('slug') is-invalid @enderror"
                                        name="slug" value="{{ old('slug') }}">

                                    @error('email')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <!-- description محتوای مطلب editor-->
                                <div class="form-group">
                                    <label for="description">محتوای مطلب</label>
                                    <textarea id="editor" type="text" name="description"
                                        class="form-control @error('description') is-invalid @enderror my-editor ckeditor">
                                            {{ old('description') }}
                                        </textarea>
                                    @error('description')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <!-- status وضعیت -->
                                <div class="form-group">
                                    <label for="status">وضعیت</label>
                                    <select id="status" name="status" class="form-control">
                                        <option value="0">منتشر نشده</option>
                                        <option value="1">منتشر شده</option>
                                    </select>
                                </div>

                                <!-- categoies انتخاب دسته بندی -->
                                <div class="form-group">
                                    <label for="categories">انتخاب دسته بندی</label>
                                    <div id="output"></div>
                                    <select class="chosen-select" id="categories" name="categories[]" multiple
                                        style="width:400px">
                                        @foreach ($categories as $cat_id => $cat_name)
                                            <option value="{{ $cat_id }}">{{ $cat_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- user_id نویسنده -->
                                <div class="form-group">
                                    <label for="user_id">نویسنده : {{ Auth::user()->name }}</label>
                                    <input type="hidden" id="user_id" name="user_id"
                                        class="form-control @error('slug') is-invalid @enderror"
                                        value="{{ Auth::user()->id }}">
                                </div>
                                <!-- image1
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <a href="#" id="lfm" data-input="image" data-preview="holder"
                                                            class="btn btn-primary">
                                                            <i class="fa fa-picture-o"></i> انتخاب
                                                        </a>
                                                    </span>
                                                    <input id="image" class="form-control" type="text" name="image">
                                                </div>-->
                                <!-- image2 -->
                                <div class="input-group">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary btn-primary" type="button"
                                            id="button-image">انتخاب</button>
                                    </div>
                                    <input type="text" id="image_label" class="form-control bg-success" name="image"
                                        aria-label="Image" aria-describedby="button-image" data-preview="holder">
                                </div>
                                <div class="bg-warning">
                                    <img id="holder" style="margin-top:15px;max-height:100px;">
                                </div>

                                <hr>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">ذخیره</button>
                                    <a href="{{ route('admin.articles') }}" class="btn btn-warning">بازگشت(انصراف)</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        @include('back.footer')
    </div>
@endsection
@section('js')
    <script>
        //chosen-select
        $('.chosen-select').chosen();
    </script>
@endsection
