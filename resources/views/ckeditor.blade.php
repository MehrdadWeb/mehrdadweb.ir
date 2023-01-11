<!DOCTYPE html>
<html lang="fa-IR">
<head>
    <title>آموزش استفاده از ckeditor همراه با آپلود عکس در لاراول 6 - تجاری اپ</title>
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
    <style>
        body {
            direction: rtl;
            text-align: right;
        }
        h1 {
            font-size: 22px;
        }
    </style>
</head>
<body>
 
<h1>آموزش استفاده از ckeditor همراه با آپلود عکس در لاراول 6 - تجاری اپ</h1>
<textarea name="editor1"></textarea>
 
<script>
    CKEDITOR.replace('editor1', {
        language: 'fa',
        content: 'fa',
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>
 
</body>
</html>