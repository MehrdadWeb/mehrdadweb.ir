@extends('back.index')

@section('title')
    پنل مدیریت - مدیریت خدمات
@endsection

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
                <div class="col-12">
                    <div class="page-header">
                        <h4 class="page-title">مدیریت خدمات</h4>

                    </div>
                    <div class=" float-right">
                        <a href="{{ route('admin.services.create') }}" class="btn btn-success btn-fw  ">
                            خدمات جدید
                        </a>
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
                                        <th>کلاس آیکون</th>
                                        <th>رنگ آیکون</th>
                                        <th>مدیریت</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($services as $service)
                                        @switch($service->status)
                                            @case(1)
                                                @php
                                                    $url = route('admin.services.status', $service->id);
                                                    $status = '<a href="' . $url . '" class="badge badge-success">منتشر شده(فعال)</a>';
                                                @endphp
                                            @break
                                            @case(0)
                                                @php
                                                    $url = route('admin.services.status', $service->id);
                                                    $status = '<a href="' . $url . '" class="badge badge-warning">منتشر نشده(غیرفعال)</a>';
                                                @endphp
                                            @break
                                        @endswitch
                                        <tr>
                                            <td>{{ $service->name }}</td>
                                            <!--نام -->
                                            <td>{{ $service->tag }}</td> <!-- تگ-->
                                            <td>{{ $service->link }}</td>
                                            <!--لینک -->
                                            <td>{!! mb_substr($service->description, 0, 50) !!}</td>
                                            <!--توضیحات -->
                                            <td>{!! $status !!}</td> <!-- وضعیت -->
                                            <!--کلاس آیکون -->
                                            <td>{{ $service->icon_class }}</td>
                                            <!--رنگ آیکون -->
                                            <td>{{ $service->icon_color }}</td>
                                            <td>
                                                <!--مدیریت-->
                                                <a href="{{ route('admin.services.edit', $service->id) }}"
                                                    class="badge badge-success">ویرایش</a>

                                                <a href="{{ route('admin.services.destroy', $service->id) }}"
                                                    onclick="return confirm('آیا آیتم مورد نظر حذف شود');"
                                                    class="badge badge-warning"> حذف </a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div>
                        {{ $services->links() }}
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        @include('back.footer')
    </div>
@endsection
