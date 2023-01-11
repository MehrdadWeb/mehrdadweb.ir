/*=============== 1-Username VALIDATION  ===============*/
function CheckUsername(input) {
    if ($(input).val().trim() == "") {
        $("#username_alert").html("لطفا نام کاربری را وارد کنید.");
        $("#username_check").css("background-image", "url('/front/img/URLShortener/input-cross.png')");
    } else {
        $.ajax({
            url: '/registration/register.php',
            type: 'POST',
            success: function(res) {
                if (res.trim() == 'structure_username_error') {
                    $("#username_alert").html("نام کاربری باید فقط شامل تمامی حروف انگلیسی و اعداد باشد.");
                    $("#username_check").css("background-image", "url('/front/img/URLShortener/input-cross.png')");
                    $('#username_check').attr("data-status", "0");
                } else if (res.trim() == 'username_exists') {
                    $("#username_alert").html("این نام کاربری موجود میباشد لطفا نام جدیدی وارد کنید.");
                    $("#username_check").css("background-image", "url('/front/img/URLShortener/input-cross.png')");
                    $('#username_check').attr("data-status", "0");
                } else {
                    $("#username_check").css("background-image", "url('/front/img/URLShortener/input-tick.png')");
                    $("#username_alert").html("");
                    $('#username_check').attr("data-status", "1");
                }
            },
            error: function(res) {
                alert('error (could not send the request to register.php) in username');
            },
            data: {
                type: "check",
                username: $(input).val()
            }

        });
    }

}

/*=============== 2-Email VALIDATION ===============*/
function CheckEmail(input) {
    if ($(input).val().trim() == "") {
        $("#email_alert").html("لطفا ایمیل خود را وارد کنید.");
        $("#email_check").css("background-image", "url('/front/img/URLShortener/input-cross.png')");
    } else {
        $.ajax({
            url: '/registration/register.php',
            type: 'POST',
            success: function(res) {
                if (res.trim() == 'structure_email_error') {
                    $("#email_alert").html("ساختار ایمیل شما قابل قبول نیست.");
                    $("#email_check").css("background-image", "url('/front/img/URLShortener/input-cross.png')");
                    $('#email_check').attr("data-status", "0");
                } else if (res.trim() == 'email_exists') {
                    $("#email_alert").html("ایمیل وارد شده موجود می باشد.");
                    $("#email_check").css("background-image", "url('/front/img/URLShortener/input-cross.png')");
                    $('#email_check').attr("data-status", "0");
                } else {
                    $("#email_check").css("background-image", "url('/front/img/URLShortener/input-tick.png')");
                    $("#email_alert").html("");
                    $('#email_check').attr("data-status", "1");
                }
            },
            error: function(res) {
                alert('error (could not send the request to register.php) in email');
            },
            data: {
                type: "check",
                email: $(input).val()
            }

        });
    }
}

/*=============== 3-Password VALIDATION ===============*/
function CheckPassword(input) {
    if ($(input).val().trim() == "") {
        $("#password_alert").html("کلمه عبور انتخابی خود را وارد کنید.");
        $("#password_check").css("background-image", "url('/front/img/URLShortener/input-cross.png')");
        $('#password_check').attr("data-status", "0");
    } else if ($(input).val().trim().length < 6) {
        $("#password_alert").html("حداقل طول کلمه عبور باید ۶ حرف باشد.");
        $("#password_check").css("background-image", "url('/front/img/URLShortener/input-cross.png')");
        $('#password_check').attr("data-status", "0");
    } else { //وقتی پسورد اوکی باشد
        $("#password_check").css("background-image", "url('/front/img/URLShortener/input-tick.png')");
        $("#password_alert").html("");
        $('#password_check').attr("data-status", "1");
    }

}
/*=============== 4 ===============*/
function CheckCode(input) {
    if ($(input).val().trim() == "") {
        $("#code_alert").html("خواهشا کد امنیتی  را وارد کنید.");
        $("#code_check").css("background-image", "url('/front/img/URLShortener/input-cross.png')");
    } else {
        $("#code_check").css("background-image", "url('/front/img/URLShortener/input-tick.png')");
        $("#code_alert").html("");
        $('#code_check').attr("data-status", "1");
    }
}
/*=============== 5-sendemail.php===============*/
function RegisterMe() {
    //alert('error');
    CheckUsername("#username_input"); // 1-Username VALIDATION 
    CheckEmail("#email_input"); // 2-Email VALIDATION
    CheckPassword("#password_input"); // 3-Password VALIDATION

    if ($('#password_check').attr("data-status") == "1" &&
        $('#username_check').attr("data-status") == "1" &&
        $('#email_check').attr("data-status") == "1") {
        $.ajax({
            url: '/registration/register.php',
            type: 'POST',
            success: function(res) {
                if (res.trim() == 'New record created successfully') {
                    // $("#header_notice").empty();
                    $("#header_notice").html("کاربر گرامی ثبت نام شما با موفقیت انجام شد لطفا به ایمیل خود مراجعه کرده و بر روی لینک فعالسازی کلیک کنید");
                    $("#header_notice_check").css("background-image", "url('/front/img/URLShortener/input-tick.png')");
                    }
            },
            error: function(res) {
                alert('error ثبت نام نشدیدها');
            },
            data: {
                type: "register",
                username: $("#username_input").val().trim(),
                email: $("#email_input").val().trim(),
                password: $("#password_input").val().trim(),
                codee: $("#code_input").val().trim()
            }
        });
    }
}
/*=============== 7 ===============*/
function RemindMe() {
    //alert('hello');
    CheckPassword('#passwrd');
    CheckCode('#code');
    if (($('#password_check').attr("data-status") == "1") && ($('#code_check').attr("data-status") == "1")) {
        $.ajax({

            url: 'http://mehrdadweb.ir/registration/sendemail.php',
            type: 'POST',
            success: function(res) {
                if (res.trim() == 'New record created successfully') {
                    $("#header_notice").empty();
                    $("#header_notice").html("کاربر گرامی ثبت نام شما با موفقیت انجام شد.");
                    $("#header_notice_check").css("background-image", "url('/front/img/URLShortener/input-tick.png')");
                } 
            },
            error: function(res) {
                alert('error');
            },
            data: {
                type: "remind",
                email: $("#email").val().trim(),
                passwrd: $("#passwrd").val().trim(),
                code: $("#code").val().trim()
            }

        });
    }
}
/*=============== 8 ===============*/
function ResendActivationEmail() {
    $.ajax({
        url: './resend.php',
        type: 'POST',
        success: function(res) {

            if (res.trim() == 'done') {
                $("#header_notice h2").empty();
                $("#header_notice h2").html("Ø§ÛŒÙ…ÛŒÙ„ ÙØ¹Ø§Ù„ Ø³Ø§Ø²ÛŒ Ø¨Ø§ Ù…ÙˆÙÙ‚ÛŒØª Ø§Ø±Ø³Ø§Ù„ Ø´Ø¯.");
            } else {
                $("#header_notice h2").empty();
                $("#header_notice h2").html("Ø§ÛŒÙ…ÛŒÙ„ ÙØ¹Ø§Ù„ Ø³Ø§Ø²ÛŒ Ø¨Ø§ Ø®Ø·Ø§ Ù…ÙˆØ§Ø¬Ù‡ Ø´Ø¯.");
            }
        },
        error: function(res, err) {
            alert(res);
        },
        data: {
            type: "resend",
            email: $("#email").val().trim(),
            code: $("#code").val().trim()
        }

    });
}