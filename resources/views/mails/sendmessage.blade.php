<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body dir="rtl">
    <a href="http://mehrdadweb.ir/">وبسایت مهندس مهرداد محمدی</a><br><br><hr>
    درود بر مدیر سایت،<br>
    <span style="color:red;">کاربری با نام : </span>{{ $name }}<br>
    <span style="color:red;">ایمیل: </span>{{ $email }}<br>
    <span style="color:red;">شماره تماس: </span>{{ $phone }}<br><br><hr>
    پیامی با موضوع:<br>
    <p>{{ $subject }}</p>
    <hr>
    برای شما ارسال نموده است.
</body>

</html>
