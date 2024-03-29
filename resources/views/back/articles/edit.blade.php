@extends('back.index')
@section('title')
    ویرایش مطلب
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
                <div class="col-12">
                    <div class="page-header">
                        <h4 class="page-title">
                            ویرایش مطلب: {{ $article->slug }}
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
                            <form action="{{ route('admin.articles.update', $article->id) }}" method="POST">
                                @csrf
                                <!-- name نام مطلب -->
                                <div class="form-group">
                                    <label for="name">نام مطلب</label>
                                    <input type="text" id="name" name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ $article->name }}">
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
                                        name="slug" value="{{ $article->slug }}">

                                    @error('slug')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <!-- description محتوای مطلب -->
                                <div class="form-group">
                                    <label for="description">محتوای مطلب</label>
                                    <textarea id="editor" name="description" type="text"
                                        class="form-control @error('description') is-invalid @enderror">
                                        {{$article->description}}
                                    </textarea>
                                    @error('description')
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
                                            if ($article->status == 1) {
                                                echo 'selected';
                                            }
                                        @endphp>منتشر شده</option>
                                    </select>
                                </div>

                                <!-- categoies انتخاب دسته بندی -->
                                <div class="form-group">
                                    <label for="categories">انتخاب دسته بندی</label>
                                    <div id="output"></div>

                                    <select class="chosen-select" id="categories" name="categories[]" multiple
                                        style="width:400px">
                                        @foreach ($categories as $cat_id => $cat_name)
                                            <option value="{{ $cat_id }}" 
                                            <?php if (
                                                in_array($cat_id, $article->categories->pluck('id')->toArray())
                                                ) echo 'selected' ?>>
                                            {{ $cat_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                               
                                <!-- user_id نویسنده -->
                                <div class="form-group">
                                    <label for="user_id">نویسنده : {{ Auth::user()->name }}</label>
                                    <input type="hidden" id="user_id" name="user_id"
                                        class="form-control @error('slug') is-invalid @enderror"
                                        value="{{ Auth::user()->id }}">
                                </div>



                                <!-- image 
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <a href="#" id="lfm" data-input="image" data-preview="holder"
                                            class="btn btn-primary">
                                            <i class="fa fa-picture-o"></i> انتخاب
                                        </a>
                                    </span>
                                    <input id="image" class="form-control" type="text" name="image"
                                        value=" $article->image ">
                                </div>
                                <img id="holder" style="margin-top:15px;max-height:100px;" src=" $article->image ">-->
                                <div class="input-group">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary btn-primary" type="button"
                                            id="button-image">انتخاب</button>
                                    </div>
                                    <input type="text" id="image_label" class="form-control bg-success" name="image" aria-label="Image"
                                        aria-describedby="button-image" data-preview="holder" value="{{$article->image}}">
                                    <hr>
                                    <!--<input id="image" class="form-control" type="text" name="image1"
                                    value="$article->image">-->
                                </div>
                                <img id="holder" style="margin-top:15px;max-height:100px;" src="{{$article->image}}">
                                <hr>


                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">ویرایش</button>
                                    <a href="{{ route('admin.articles') }}" class="btn btn-warning">بازگشت(انصراف)</a>
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
@section('js')
    <script>
        $('.chosen-select').chosen();
    </script>
@endsection
