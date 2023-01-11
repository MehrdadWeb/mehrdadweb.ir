@extends('back.index')
@section('title')
    پنل دسته بندی ها - مدیریت دسته بندی ها
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
                <div class="col-12">
                    <div class="page-header">
                        <h4 class="page-title">میریت دسته بندی ها</h4>
                    </div>
                    <div class="float-right">
                        <a href="{{ route('admin.categories.create') }}" class="btn btn-success btn-fw">دسته بندی جدید</a>
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
                                        <th>نام</th>
                                        <th>نام مستعار - Slug</th>
                                        <th>مدیریت</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->slug }}</td>
                                            <td>  
                                            <a href="{{ route('admin.categories.edit', $category->id) }}" class="ml-2">
                                                <label class="badge badge-success">ویرایش</label>
                                            </a>

                                            <a href="{{ route('admin.categories.destroy', $category->id) }}"
                                                onclick="return confirm('آیا آیتم مورد نظر حذف شود؟');">
                                                <label class="badge badge-danger">حذف</label>
                                            </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        @include('back.footer')
    </div>
@endsection
