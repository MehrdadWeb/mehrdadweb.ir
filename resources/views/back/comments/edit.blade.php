@extends('back.index')
@section('title')
    ویرایش نظر
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
                <div class="col-12">
                    <div class="page-header">
                        <h4 class="page-title">
                            ویرایش نظر: {{ $comment->name }}
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
                            <form action="{{ route('admin.comments.update', $comment->id) }}" method="POST">
                                @csrf
                                <!-- name نام مطلب -->
                                <div class="form-group">
                                    <label for="name">نام</label>
                                    <input type="text" id="name" name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ $comment->name }}">
                                    @error('name')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <!-- email -->
                                <div class="form-group">
                                    <label for="email">ایمیل</label>
                                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ $comment->email }}">

                                    @error('email')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <!-- description محتوای مطلب -->
                                <div class="form-group">
                                    <label for="editor">محتوای نظر</label>
                                    <textarea id="editor" type="text" name="body"
                                        class="form-control @error('body') is-invalid @enderror">
                                                                {{ $comment->body }}
                                                    </textarea>
                                    @error('body')
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
                                        <option value="1" @php
                                            if ($comment->status == 1) {
                                                echo 'selected';
                                            }
                                        @endphp>
                                        منتشر شده
                                        </option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">ویرایش</button>
                                    <a href="{{ route('admin.comments') }}" class="btn btn-warning">بازگشت(انصراف)</a>
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

