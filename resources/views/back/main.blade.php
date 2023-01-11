@extends('back.index')
@section('title')
    آموزش لاراول بخش مدیریت
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
                <div class="col-12">
                    <div class="page-header">
                        <h4 class="page-title">پنل مدیریت</h4>
                        @include('back.message')
                    </div>
                </div>

            </div>
            <!-- Page Title Header Ends-->
            <div class="row">
                صفحه ی نخست - ادمین برای نمایش گزارشات
            </div>
        </div>
        <!-- content-wrapper ends -->
        @include('back.footer')
    </div>
@endsection
