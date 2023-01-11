@extends('back.index')

@section('title')
    ویرایش خدمات
@endsection

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
                <div class="col-12">
                    <div class="page-header">
                        <h4 class="page-title">ویرایش خدمات</h4>
                    </div>
                </div>

            </div>
            <!-- Page Title Header Ends-->


            <div class="row">


                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            @include('back.message')

                            <form action="{{ route('admin.services.update', $service->id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">نام خدمات</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ $service->name }}">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="link">لینک خدمات</label>
                                    <input type="text" class="form-control @error('link') is-invalid @enderror" name="link"
                                        value="{{ $service->link }}">
                                    @error('link')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="tag">تگ</label>
                                    <input type="text" class="form-control @error('tag') is-invalid @enderror" name="tag"
                                        value="{{ $service->tag }}">
                                    @error('tag')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="title">توضیحات</label>
                                    <textarea type="text" class="form-control @error('description') is-invalid @enderror"
                                        name="description">{{ $service->description }}</textarea>
                                    @error('description')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- status وضعیت -->
                                <div class="form-group">
                                    <label for="status">وضعیت</label>
                                    <select id="status" name="status" class="form-control">
                                        <option value="0" @php
                                        if ($service->status == 0) {
                                            echo 'selected';
                                        }
                                    @endphp>منتشر نشده</option>
                                        <option value="1" selected>منتشر شده</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="icon_class">کلاس آیکون</label>
                                    <input type="text" class="form-control @error('icon_class') is-invalid @enderror"
                                        name="icon_class" value="{{ $service->icon_class }}">
                                    @error('icon_class')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="icon_bgcolor">رنگ پس زمینه آیکون</label>
                                    <input type="text" class="form-control @error('icon_bgcolor') is-invalid @enderror"
                                        name="icon_bgcolor" value="{{ $service->icon_bgcolor }}">
                                    @error('icon_bgcolor')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="icon_color">رنگ آیکون</label>
                                    <input type="text" class="form-control @error('icon_color') is-invalid @enderror"
                                        name="icon_color" value="{{ $service->icon_color }}">
                                    @error('icon_color')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!--<div class="input-group">
                                            <span class="input-group-btn">
                                                <a href="#" id="lfm" data-input="image" data-preview="holder"
                                                    class="btn btn-primary">
                                                    <i class="fa fa-picture-o"></i> انتخاب
                                                </a>
                                            </span>
                                            <input id="image" class="form-control" type="text" name="image"
                                                value="$portfolio->image ">
                                        </div>
                                        <img id="holder" style="margin-top:15px;max-height:100px;" src="$portfolio->image "> -->

                                <div class="input-group">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary btn-primary" type="button"
                                            id="button-image">
                                             انتخاب تصویر شاخص
                                        </button>
                                    </div>
                                    <input type="text" id="image_label" class="form-control bg-success" name="image"
                                        aria-label="Image" aria-describedby="button-image" data-preview="holder"
                                        value="{{ $service->image }}">
                                    <hr>
                                    <!--<input id="image" class="form-control" type="text" name="image1"
                                            value="$article->image">-->
                                </div>
                                <img id="holder" style="margin-top:15px;max-height:100px;" src="{{ $service->image }}">
                                <hr>

                                <div class="form-group">
                                    <label for="title"></label>
                                    <button type="submit" class="btn btn-success">ویرایش</button>
                                    <a href="{{ route('admin.services') }}" class="btn btn-warning"> انصراف </a>
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
