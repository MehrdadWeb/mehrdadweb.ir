@extends('back.index')
@section('title')
    دسته بندی جدید
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
                <div class="col-12">
                    <div class="page-header">
                        <h4 class="page-title">دسته بندی جدید</h4>
                    </div>
                </div>

            </div>
            <!-- Page Title Header Ends-->
            <div class="row">
                <div class="col-sm-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            @include('back.message')
                            <form action="{{ route('admin.categories.store')}}" method="POST">
                                @csrf
                                <!-- name -->
                                <div class="form-group">
                                    <label for="name">
                                        نام مطلب  
                                    </label>
                                    <input type="text" id="name" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}">
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

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">ذخیره</button>
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
