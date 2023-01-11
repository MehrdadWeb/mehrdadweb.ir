
@extends('back.index')
@section('title')
    ویرایش دسته بندی ها
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
                <div class="col-12">
                    <div class="page-header">
                        <h4 class="page-title"></h4>ویرایش دسته بندی ها</h4>
                    </div>
                </div>
            </div>
            <!-- Page Title Header Ends-->
            <div class="row">
                <div class="col-sm-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            @include('back.message')
                            <form action="{{ route('admin.categories.update',$category->id) }}" method="POST">
                                @csrf
                                <!-- name -->
                                <div class="form-group">
                                    <label for="name">
                                        نام دسته بندی
                                    </label>
                                    <input type="text" id="name" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ $category->name }}">
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
                                        name="slug" value="{{ $category->slug }}">

                                    @error('email')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">ویرایش</button>
                                    <a href="{{ route('admin.categories') }}" class="btn btn-warning">بازگشت(انصراف)</a>
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