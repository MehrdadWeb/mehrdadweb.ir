@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>
                {{$error}} <!-- for(i=,i<length,i++){ echo $errors->any()[i] } -->
            </li>
        @endforeach
    </ul>
</div>
@endif

@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

@if(session('warning'))
    <div class="alert alert-success">
       یک خطا رخ داد ، کد خطا: {{session('warning')}}
    </div>
@endif