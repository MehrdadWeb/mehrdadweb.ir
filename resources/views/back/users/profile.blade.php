@extends('back.index')
@section('title')
    ویراریش کاربر
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
                <div class="col-12">
                    <div class="page-header">
                        <h4 class="page-title">ویرایش کاربران</h4>
                    </div>
                </div>

            </div>
            <!-- Page Title Header Ends-->
            <div class="row">
                <div class="col-sm-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin.profileupdate', $user->id) }}" method="POST">
                                @csrf
                                <!-- name -->
                                <div class="form-group">
                                    <label for="name">نام و نام خانوادگی</label>
                                    <input type="text" id="name" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ $user->name }}">
                                    <!--1. directlyمستقیما-->
                                    @error('name')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <!-- email -->
                                <div class="form-group">
                                    <label for="email">ایمیل</label>
                                    <input type="text" id="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ $user->email }}">
                                    <!--1. directlyمستقیما-->
                                    @error('email')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <!-- phone -->
                                <div class="form-group">
                                    <label for="phone">تلفن</label>
                                    <input type="tel" id="phone" class="form-control @error('phone') is-invalid @enderror"
                                        name="phone" value="{{ $user->phone }}">
                                    @error('phone')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <!-- password -->
                                <div class="form-group">
                                    <label for="password">رمز ورود</label>
                                    <input type="password" id="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password">
                                    @error('password')
                                        <div class=" alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <!-- password_confirmation -->
                                <div class="form-group">
                                    <label for="password_confirmation">تکرار رمز ورود</label>
                                    <input type="password" id="password_confirmation"
                                        class="form-control @error('password_confirmation') is-invalid @enderror"
                                        name="password_confirmation">
                                    <!--1. directlyمستقیما-->
                                    @error('password_confirmation')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">ویرایش پروفایل</button>
                                    <a href="{{ route('admin.users') }}" class="btn btn-warning">بازگشت(انصراف)</a>
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
