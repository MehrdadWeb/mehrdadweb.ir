@extends('back.index')

@section('title')
    مدیریت - نظرات
@endsection

@section('content')

    <!-- -->

    <!-- -->
    <div class="main-panel">
        <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
                <div class="col-12">
                    <div class="page-header">
                        <h4 class="page-title">
                            مدیریت نظرات
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
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>خلاصه نظر</th>
                                        <th>نویسنده کامنت</th>
                                        <th>برای مطلب شماره</th>
                                        <th>برای مطب</th
                                        <th>تاریخ ثبت</th>
                                        <th>ساعت ثبت</th>
                                        <th>وضعیت</th>
                                        <th>مدیریت</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($comments as $comment)
                                        @switch($comment->status)
                                            @case(1)
                                                @php
                                                    $url = route('admin.comments.status', $comment->id); //تغییر وضعیت فعال به غیر فعال
                                                    $status = '<a href="' . $url . '" class="badge badge-success">منتشر شده(فعال)</a>';
                                                @endphp
                                            @break
                                            @case(0)
                                                @php
                                                    $url = route('admin.comments.status', $comment->id); //تغییر وضعیت غیرفعال به فعال
                                                    $status = '<a href="' . $url . '" class="badge badge-warning">منتشر نشده(غیرفعال)</a>';
                                                @endphp
                                            @break
                                        @endswitch
                                        <tr>
                                            <td>{{ $comment->id }}</td> <!-- id -->
                                            <td>{!! mb_substr($comment->body, 0, 50) !!}</td> <!-- خلاصه نظر -->
                                            <td>{{ $comment->name }}</td> <!-- نویسنده‌ی کامنت -->
                                            <td>{{ $comment->article_id }}</td> <!-- برای مطلب -->
                                            <td>{{ $comment->article_name }}</td> <!-- برای مطلب -->
                                            <td>{!! jdate($comment->created_at)->format('%A %Y/%m/%d') !!}</td> <!-- تاریخ ثبت -->
                                            <td>{!! jdate($comment->created_at)->format('H:i:s') !!}</td> <!-- تاریخ ثبت -->
                                            <td>{!! $status !!}</td> <!-- وضعیت -->
                                            <td>
                                                <!-- مدیریت -->

                                                <a href="{{ route('admin.comments.edit', $comment->id) }}" class="ml-2">
                                                    <label class="badge badge-success">ویرایش</label>
                                                </a>

                                                <a href="{{ route('admin.comments.destroy', $comment->id) }}"
                                                    onclick="return confirm('آیا آیتم مورد نظر حذف شود؟');">
                                                    <label class="badge badge-danger">حذف مطلب</label>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $comments->links() }}
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        @include('back.footer')
    </div>
@endsection
