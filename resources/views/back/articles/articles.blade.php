@extends('back.index')
@section('title')
    مدیریت - مدیریت مطالب
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
                <div class="col-12">
                    <div class="page-header">
                        <h4 class="page-title">
                            مدیریت مطالب
                        </h4>
                    </div>
                    <div class="float-right">
                        <a href="{{ route('admin.articles.create') }}" class="btn btn-success btn-fw">مطلب جدید</a>
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
                                        <th>نام مستعار - Slug</th>
                                        <th>نویسنده</th>
                                        <th>دسته بندی</th>
                                        <th>بازدید</th>
                                        <th>وضعیت</th>
                                        <th>مدیریت</th>
                                        <th>محتوا</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($articles as $article)
                                        @switch($article->status)
                                            @case(1)
                                                @php
                                                    $url = route('admin.articles.status', $article->id);
                                                    $status = '<a href="' . $url . '" class="badge badge-success">منتشر شده(فعال)</a>';
                                                @endphp
                                            @break
                                            @case(0)
                                                @php
                                                    $url = route('admin.articles.status', $article->id);
                                                    $status = '<a href="' . $url . '" class="badge badge-warning">منتشر نشده(غیرفعال)</a>';
                                                @endphp
                                            @break
                                        @endswitch
                                        <tr>
                                            <td>{{ $article->id }}</td> <!-- id -->
                                            <td>{{ $article->name }}</td> <!-- name -->
                                            <td>{{ $article->slug }}</td> <!-- Slug -->
                                            <td>{{ $article->user->name }}</td> <!-- نویسنده -->
                                            <td>
                                                <!-- دسته بندی -->
                                                @foreach ($article->categories()->pluck('name') as $category)
                                                    <span class="badge badge-warning">{{ $category }}</span>
                                                    <!-- میباشد categories از جدول name فیلد  $category
                                                             articles البته رکوردهایی که مربوط به جدول
                                                             می باشنده 
                                                             -->
                                                @endforeach
                                            </td>
                                            <td>{{ $article->hit }}</td> <!-- بازدید -->
                                            <td>{!! $status !!}</td> <!-- وضعیت -->
                                            <td>
                                                <!-- مدیریت -->
                                                <a href="{{ route('admin.articles.edit', $article->id) }}" class="ml-2">
                                                    <label class="badge badge-success">ویرایش</label>
                                                </a>

                                                <a href="{{ route('admin.articles.destroy', $article->id) }}"
                                                    onclick="return confirm('آیا آیتم مورد نظر حذف شود؟');">
                                                    <label class="badge badge-danger">حذف مطلب</label>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $articles->links() }}
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        @include('back.footer')
    </div>
@endsection
