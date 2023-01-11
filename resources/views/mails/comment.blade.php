<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body dir="rtl">
    با سلام خدمت شما کاربر گرامی

    <p>کامنت شما دریافت شد با جزئیات زیر:</p>
    <p>
        <span style="color:red;">نام ارسال کننده:</span> {{ $userName }}
        <br>
        <span style="color:red;">متن کامنت شما:</span> {{ $commentBody }}
        <br>
        <span style="color:red;">ارسال شده برای مطلب:</span> {{ $articleTitle}} 
    </p>
    <hr>
    کامنت شما پس از تایید مدیریت سایت ، نمایش داده میشود
    <hr>
    <a href="http://mehrdadweb.ir/">وبسایت مهندس مهرداد محمدی</a>
    این ایمیل به صورت خودکار ارسال شده است و از پاسخگویی به آن خودداری بفرمایید
</body>
</html>