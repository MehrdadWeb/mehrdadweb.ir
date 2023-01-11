@extends('back.index')

@section('title')
    پنل مدیریت - مدیریت نمونه کارها
@endsection

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
                <div class="col-12">
                    <div class="page-header">
                        <h4 class="page-title">مدیریت نمونه کارها</h4>

                    </div>
                    <div class=" float-right">
                        <a href="{{ route('admin.portfolios.create') }}" class="btn btn-success btn-fw  ">نمونه کار
                            جدید</a>
                    </div>
                </div>

            </div>
            <!-- Page Title Header Ends-->


            <div class="row">


                <div class="col-lg-12 grid-margin stretch-card">

                    <div class="card">

                        <div class="card-body">
                            @include('back.message')

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>نام</th>
                                        <th>تگ</th>
                                        <th>لینک</th>
                                        <th>توضیحات</th>
                                        <th>وضعیت</th>
                                        <th>مدیریت</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($portfolios as $portfolio)
                                        @switch($portfolio->status)
                                            @case(1)
                                                @php
                                                    $url = route('admin.portfolios.status', $portfolio->id);
                                                    $status = '<a href="' . $url . '" class="badge badge-success">منتشر شده(فعال)</a>';
                                                @endphp
                                            @break
                                            @case(0)
                                                @php
                                                    $url = route('admin.portfolios.status', $portfolio->id);
                                                    $status = '<a href="' . $url . '" class="badge badge-warning">منتشر نشده(غیرفعال)</a>';
                                                @endphp
                                            @break
                                        @endswitch
                                        <tr>
                                            <td>{{ $portfolio->name }}</td>
                                            <!--نام -->
                                            <td>{{ $portfolio->tag }}</td> <!-- تگ-->
                                            <td>{{ $portfolio->link }}</td>
                                            <!--لینک -->
                                            <td>{{ $portfolio->description }}</td>
                                            <!--توضیحات -->
                                            <td>{!! $status !!}</td> <!-- وضعیت -->
                                            <td>
                                                <!--مدیریت-->
                                                <a href="{{ route('admin.portfolios.edit', $portfolio->id) }}"
                                                    class="badge badge-success">ویرایش</a>

                                                <a href="{{ route('admin.portfolios.destroy', $portfolio->id) }}"
                                                    onclick="return confirm('آیا آیتم مورد نظر حذف شود');"
                                                    class="badge badge-warning"> حذف </a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div>
                        {{ $portfolios->links() }}
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        @include('back.footer')
    </div>
@endsection
