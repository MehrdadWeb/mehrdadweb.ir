$(document).ready(function () {
    // Add scrollspy to <body>
    var HeightSection1 = $("#section1").height();
    var HeightSection2 = $("#section2").height();
    var HeightSection3 = $("#section3").height();
    var HeightSection41 = $("#section41").height();
    var TopSection3 = HeightSection1 + HeightSection2;
    var BottomSection3 = TopSection3 + HeightSection3;
    var ActiveCircleBar = false;
    var Animation = 3200;
    // Add smooth scrolling on all links inside the navbar
    $(window).scroll(function () {
        var scroll = $(document).scrollTop();
        if (scroll >= TopSection3 && ActiveCircleBar == false) {
            ActiveCircleBar = true;
            /**************************************************/
            $('body').scrollspy({target: ".navbar", offset: 50});
            var Width = $(window).width();
            var CircleWidth = GetCircleWidth(Width);
            /* Skill CircleBar*/
            $('.first.circle').circleProgress({
                value: 0.95,
                startAngle: -Math.PI,
                animation: {
                    duration: 2200,
                    easing: 'circleProgressEasing'
                },
                size: CircleWidth,
                fill: {
                    gradient: ['#e0d55f', '#57e6aa']
                },
            }).on('circle-animation-progress', function (event, progress) {
                $(this).find("strong").html(parseInt(100 * 0.95) + '<i>%</i>');
            });
            $('.second.circle').circleProgress({
                value: 0.9,
                startAngle: -Math.PI,
                animation: {
                    duration: 2200,
                    easing: 'circleProgressEasing'
                },
                size: CircleWidth,
                fill: {
                    gradient: ['#e0d55f', '#57e6aa']
                },
            }).on('circle-animation-progress', function (event, progress) {
                $(this).find("strong").html(parseInt(100 * 0.9) + '<i>%</i>');
            });
            $('.third.circle').circleProgress({
                value: 0.6,
                startAngle: -Math.PI,
                animation: {
                    duration: 2200,
                    easing: 'circleProgressEasing'
                },
                size: CircleWidth,
                fill: {
                    gradient: ['#e0d55f', '#57e6aa']
                },
            }).on('circle-animation-progress', function (event, progress) {
                $(this).find("strong").html(parseInt(100 * 0.6) + '<i>%</i>');
            });
            $('.fourth.circle').circleProgress({
                value: 0.9,
                startAngle: -Math.PI,
                animation: {
                    duration: 2200,
                    easing: 'circleProgressEasing'
                },
                size: CircleWidth,
                fill: {
                    gradient: ['#e0d55f', '#57e6aa']
                },
            }).on('circle-animation-progress', function (event, progress) {
                $(this).find("strong").html(parseInt(100 * 0.9) + '<i>%</i>');
            });
            $('.fifth.circle').circleProgress({
                value: 0.8,
                startAngle: -Math.PI,
                animation: {
                    duration: 2200,
                    easing: 'circleProgressEasing'
                },
                size: CircleWidth,
                fill: {
                    gradient: ['#e0d55f', '#57e6aa']
                },
            }).on('circle-animation-progress', function (event, progress) {
                $(this).find("strong").html(parseInt(100 * 0.8) + '<i>%</i>');
            });
            $('.sixth.circle').circleProgress({
                value: 0.7,
                startAngle: -Math.PI,
                animation: {
                    duration: 2200,
                    easing: 'circleProgressEasing'
                },
                size: CircleWidth,
                fill: {
                    gradient: ['#e0d55f', '#57e6aa']
                },
            }).on('circle-animation-progress', function (event, progress) {
                $(this).find("strong").html(parseInt(100 * 0.7) + '<i>%</i>');
            });
            $('.seventh.circle').circleProgress({
                value: 0.6,
                startAngle: -Math.PI,
                animation: {
                    duration: 2200,
                    easing: 'circleProgressEasing'
                },
                size: CircleWidth,
                fill: {
                    gradient: ['#e0d55f', '#57e6aa']
                },
            }).on('circle-animation-progress', function (event, progress) {
                $(this).find("strong").html(parseInt(100 * 0.6) + '<i>%</i>');
            });
            $('.eighth.circle').circleProgress({
                value: 0.8,
                startAngle: -Math.PI,
                animation: {
                    duration: 2200,
                    easing: 'circleProgressEasing'
                },
                size: CircleWidth,
                fill: {
                    gradient: ['#e0d55f', '#57e6aa']
                },
            }).on('circle-animation-progress', function (event, progress) {
                $(this).find("strong").html(parseInt(100 * 0.8) + '<i>%</i>');
            });
            /**************************************************/
        } else if (scroll < TopSection3 && ActiveCircleBar == true) {
            ActiveCircleBar = false;
        }

    });
    $("#myNavbar a").on('click', function (event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function () {

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        }  // End if
    });
});
function GetCircleWidth(WindowWidth) {
    if (WindowWidth < 768) {
        return 90;
    } else if (WindowWidth < 992) {
        return 140;
    } else if (WindowWidth < 1200) {
        return 140;
    } else if (WindowWidth >= 1200) {
        return 150;
    }
}
$("#SendMessage").click(function(){
    var Phone = $('[name="Phone"]').val();
    var Subject = $('[name="Subject"]').val();
    var Fullname = $('[name="Fullname"]').val();
    var Email = $('[name="Email"]').val();
    var Text = $('[name="Text"]').val();
    if (Empty(Phone) || Empty(Subject) || Empty(Fullname) || Empty(Email) || Empty(Text)) {
        AlertBootstrapTemplate('alert-danger', Erorr('Empty'));
        return;
    } else {
        if (!CheckEmailAlgorithm('email', Email)) {
            AlertBootstrapTemplate('alert-danger', Erorr('NotCurrent'));
        } else {
            $.ajax({
                url: 'process.php',
                type: 'POST',
                datatype: 'HTML',
                data: {Phone: Phone, Subject: Subject, Fullname: Fullname, Email: Email, Text: Text, work: 'SendMessage'},
                success: function (e) {
                    if (e) {
                        AlertBootstrapTemplate('alert-success', Erorr('MessageSendSuccess'));
                    } else {
                        AlertBootstrapTemplate('alert-danger', Erorr('MessageSendFailed'));
                    }
                },
                error: function () {
                    alert("no");
                }
            });
        }
    }
});
function CheckEmailAlgorithm(type, input) {
    var check;
    (type == 'email' ? check = "@." : '');
    var j = 0;
    if (input == '')
    {
        return true;
    }
    for (var i = 0; i < input.length; i++)
    {
        if (j != check.length - 1)
        {
            if (check[j] == input[i])
            {
                j++;
            }
        } else
        {
            if (check[j] == input[i])
            {
                return true;
            }
        }
    }
    return false;
}
function Empty(variable) {
    if (variable == '' || variable == null || variable.length <= 0)
    {
        return true
    } else {
        return false;
    }
}
function Erorr(variable) {
    var Comment = "";
    switch (variable) {
        case 'EditUserSuccess':
            Comment = "اطلاعات با موفقیت در سیستم ثبت گردید";
            break;
        case "IsNotValid":
            Comment = "لطفا ابتدا وارد سیستم شوید";
            break;
        case 'NoBank':
            Comment = "خزانه خالی است";
            break;
        case 'NotProduct':
            Comment = "تعداد کالاهای در خواستی بیشتر از مقدار موجود در سیستم می باشد";
            break;
        case 'Empty':
            Comment = "لطفا فیلدها را پر نمایید";
            break;
        case 'NotMatch':
            Comment = "نام کاربری/رمز عبور  اشتباه است";
            break;
        case 'NotCurrent':
            Comment = "لطفا فیلدها را به صورت صحیح پر نمایید";
            break;
        case 'NotCurrentDiscount':
            Comment = "کد تخفیف صحیح نمی باشد";
            break;
        case 'ExprationDownloadFile':
            Comment = "مهلت دریافت فایل به پایان رسیده است";
            break;
        case 'NotLogin':
            Comment = "لطفا اعتبار سنجی را انجام دهید";
            break;
        case 'IsRecord':
            Comment = "این کاربر در سیستم وجود دارد";
            break;
        case 'NotMatchPassword':
            Comment = "رمز عبور و تکرار آن با هم مطابقت ندارد";
            break;
        case 'RegisterSuccess':
            Comment = "اطلاعات با موفقیت در سیستم ثبت شد";
            break;
        case 'AddProduct':
            Comment = "کالا به لیست خرید اضافه گردید";
            break;
        case 'AddToBasket':
            Comment = "فایل مورد نظر شما به سبد خرید اضافه شد";
            break;
        case 'IsInBasket':
            break;

    }
    return Comment;
}
function AlertBootstrapTemplate(ClassColor, Comment) {
    /*** This Function Require To Bootstrap FrameWork ***/
    var Alert = '<div class="text-center alert ' + ClassColor + ' fade in">';
    Alert += '<strong class="ErorrTextAlert text-center">!' + Comment + '</strong>';
    Alert += '</div>';
    $("#ErorrComment").append(Alert);
    window.setTimeout(DestroyAlertTag, 3000);
}
function DestroyAlertTag() {
    $("#ErorrComment").empty();
}