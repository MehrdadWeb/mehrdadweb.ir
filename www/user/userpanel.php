<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<!--<html lang="en">  English -->
<html lang="fa">
<head>
    <meta name="author" content="Mehrdad Mohammadi" />
    <title>پنل کاربری</title>
    <link rel="stylesheet" href="/front/css/userpanel.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="jquery-3.5.1.min.js"></script>
    <script type="application/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/jquery-1.8.1.js"></script>
    <script language="javascript" type="text/javascript" src="http://mehrdadweb.ir/front/js/register.js"></script>
    <!-- ====== 3(bootstrap icons from fontawesome) ====== -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- ====== 4(bootstrap) ====== -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- ====== 5(favicon) ====== -->
    <link rel="apple-touch-icon" sizes="180x180" href="/front/img/URLShortener/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/front/img/URLShortener/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/front/img/URLShortener/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/front/img/URLShortener/favicon-96x96.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
<script>    
$(document).ready(function(){
        $("#login_span").click(function(){
        $("#login_dropdown_list").toggle(500);
        $("#pointy").toggle(500);
        });
        $("#button4").click(function(){
            //alert("Goodbye!");
            //$(this).parents(".ex").hide("slow");
            var txt = $("#longlink").val();
            $.post("/shortlink/shortlink1.php",{suggest: txt}, function(result){
                    $("#shortlink2").hide();
                    $("#shortlink4").show();
                    $("#shortlink4").html(result);
            });
        });

        /* ورود کاربر*/
        $("#login_button").click(function(){
            if($("#user_emial_login").val().trim() == "" ){
                $("#user_emial_login").css("background-color", "red");
                $('#user_emial_login').attr("placeholder","لطفا ایمیل را وارد کنید.");
            }else if($("#pass_login").val().trim() == ""){
                $("#pass_login").css("background-color", "red");
                $('#pass_login').attr("placeholder","لطفا پسورد را وارد کنید.");
            }else if($("#pass_login").val().trim().length < 6){
                $("#pass_login").val('');
                $("#pass_login").css("background-color", "red");
                $("#pass_login").attr("placeholder","حداقل طول کلمه عبور باید ۶ حرف باشد." );
            }else{
                $.ajax({
                    url:'http://mehrdadweb.ir/urlshortner-login/dologin.php',
                    type:'POST',
                    success: function (res){
                        if(res.trim() == ""){
                            alert('!!! wrong password 3 times and your access denied for 1 hour');
                            $("#header_btns_online").empty(res);
                           // $("#login_dropdown_list").hide();
                        }else{
                            $("#header_login").hide();
                            $("#header_btns_online").html(res);
                            $("#header_btns_online").css("color", "red");
                        }
                        

                    },
                    error: function (res){
                      alert('no no');
                      $("#demo2").html( "bad" );
                    },
                    data: {type: "check",user_emial_login:$("#user_emial_login").val().trim() , pass_login:$("#pass_login").val().trim() , RememberCheckbox:$("#RememberCheckbox").val().trim()}            
               
                  });
            }
           
        });
                    $.ajax({
                       url:'http://mehrdadweb.ir/home.php',
                       type:'POST',
                       success: function (res) {
                           if($("#header_btns_online").html(res)){
                              //$("#header_login").hide(); 
                           }
                        //$("#header_login").hide();
                        $("#header_btns_online").html(res);
                        $("#header_btns_online").css("color", "red");
                       },
                       error: function (res){
                          alert('no no');
                          $("#demo2").html( "bad" );
                       },
                       //data: {type: "check",user_emial_login:$("#user_emial_login").val().trim() , pass_login:$("#pass_login").val().trim() , RememberCheckbox:$("#RememberCheckbox").val().trim()}            
                       
                    }); 
        $("#switch1").click(function(){
                if($("body").hasClass('firstbg'))
                {
                    $("body").addClass('secondbg').removeClass('firstbg');
                    $("#moon").attr("src","/front/img/URLShortener/sun.png");
                    $("#button1").css("background-image","url(/front/img/URLShortener/bglinkshortener.png)");
                    $("#button1").css("color", "white");
                    $("#id05").css("color", "white");
                    $("#text3").css("background-color", "#FFC107");
                    $("#id01").css("color", "white");$("#id02").css("color", "white");
                    $("#articlcolor").addClass("addborder");$("#footerborder1").addClass("footerborderclass");$("#footerborder2").addClass("footerborderclass");
                    $("#h3color").css("color", "white");$("#h5color").css("color", "white");$("#articlcolor div div div a span").css("color", "white");
                    $("#navbardrop").css("color", "yellow");$("#shortlink2").css("background-color", "white");
                    $("#linkcolor2").css("color", "yellow");$("#linkcolor3").css("color", "yellow");$("#linkcolor4").css("color", "yellow");
                    $("#linkcolor5").css("color", "yellow");$("#linkcolor6").css("color", "yellow");$("#switch2").css("color", "yellow");
                }
                else{
                    $("body").addClass('firstbg').removeClass('secondbg');
                    $("#moon").attr("src","/front/img/URLShortener/moon.png");
                    $("#button1").css("background-image","linear-gradient(to left, rgba(108, 117, 125, 0.22) , rgba(84, 91, 98, 0.04))");
                    $("#button1").css("background-color","#f8f9fa");$("#button1").css("color","black");                    
                    $("#id03").css("color", "red");
                   
                    $("#id05 ").css("color", "black");
                    $("#id01").css("color", "black");$("#id02").css("color", "black");
                    $("#articlcolor").removeClass("addborder");$("#footerborder1").removeClass("footerborderclass");$("#footerborder2").removeClass("footerborderclass");
                    $("#h3color").css("color", "black");$("#h5color").css("color", "black");$("#articlcolor div a span").css("color", "black");
                    $("#navbardrop").css("color", "black");$("#shortlink2").css("background-color", "white");
                    $("#linkcolor2").css("color", "black");$("#linkcolor3").css("color", "black");$("#linkcolor4").css("color", "black");
                    $("#linkcolor5").css("color", "black");$("#linkcolor6").css("color", "black");$("#switch2").css("color", "black");
                }
            
        });       
        $("#switch3").click(function(){
                if($("body").hasClass('firstbg'))
                {
                    $("body").addClass('secondbg').removeClass('firstbg');
                    $("#moon").attr("src","/front/img/URLShortener/sun.png");
                    $("#button1").css("background-image","url(/front/img/URLShortener/bglinkshortener.png)");
                    $("#button1").css("color", "white");
                    $("#id05").css("color", "white");$("#id06").css("color", "red");
                    $("#text3").css("background-color", "#FFC107");
                    $("#id01").css("color", "white");$("#id02").css("color", "white");
                    $("#articlcolor").addClass("addborder");$("#footerborder1").addClass("footerborderclass");$("#footerborder2").addClass("footerborderclass");
                    $("#h3color").css("color", "white");$("#h5color").css("color", "white");$("#articlcolor div div div a span").css("color", "white");
                    $("#navbardrop").css("color", "yellow");$("#shortlink2").css("background-color", "white");
                    $("#linkcolor2").css("color", "yellow");$("#linkcolor3").css("color", "yellow");$("#linkcolor4").css("color", "yellow");
                    $("#linkcolor5").css("color", "yellow");$("#linkcolor6").css("color", "yellow");$("#switch2").css("color", "yellow");
                }
                else{
                    $("body").addClass('firstbg').removeClass('secondbg');
                    $("#moon").attr("src","/front/img/URLShortener/moon.png");
                    $("#button1").css("background-image","linear-gradient(to left, rgba(108, 117, 125, 0.22) , rgba(84, 91, 98, 0.04))");
                    $("#button1").css("background-color","#f8f9fa");$("#button1").css("color","black");                    
                    $("#id03").css("color", "red");
                   
                    $("#id05 ").css("color", "black");$("#id06 span").css("color", "red");
                    $("#id01").css("color", "black");$("#id02").css("color", "black");
                    $("#articlcolor").removeClass("addborder");$("#footerborder1").removeClass("footerborderclass");$("#footerborder2").removeClass("footerborderclass");
                    $("#h3color").css("color", "black");$("#h5color").css("color", "black");$("#articlcolor div a span").css("color", "black");
                    $("#navbardrop").css("color", "black");$("#shortlink2").css("background-color", "white");
                    $("#linkcolor2").css("color", "black");$("#linkcolor3").css("color", "black");$("#linkcolor4").css("color", "black");
                    $("#linkcolor5").css("color", "black");$("#linkcolor6").css("color", "black");$("#switch2").css("color", "black");
                }
            
        });         
         $('[data-toggle="tooltip"]').tooltip(); 
          
        $("#button1").click(function(){
              $("#text4").toggle(500);
        });   
        /*$("#id07").click(function(){
            $.ajax({
                url:'http://www.mehrdadweb.ir/login/do_login.php',
                type:'POST',
                success: function (res) {

                },
                error: function (res){
                    alert('no no');
                    $("#demo2").html( "bad" );
                },
                data: {type: "check",user_emial_login:$("#user_emial_login").val().trim()}            
            });
        });*/

});//$(document).ready(function(){
</script>    
</head>
<body class="firstbg">
<!-- ====== row ====== -->
<div class="row mx-0 rwo_767_576"><!-- mx-0 طلایی -->  
    <!-- ====== COLUMN 1 ====== -->
    <div class="col-sm-10 px-0"><!-- px-0 طلایی -->
        <!-- ====== 1.header ====== -->
        <h1 class="header_class mb-5">
            <a class="text-decoration-none" href="http://mehrdadweb.ir">
                <img src="/front/img/URLShortener/logo.png" class="img1">
            </a>
        </h1>
        <!-- ====== END-1.header ====== -->
        <!-- ====== 2.main-1 ====== -->
        <div style="">
            <!-- ====== main-3 ====== -->
            <?php
                    /*if(isset($_POST['logout']))
                    {
                        unset($_SESSION['email']);
                    }*/
            ?>
            <!--<div class="box8 box9 text-right" id="id07" onclick="javascript:window.location='http://mehrdadweb.ir/login/logout.php'">-->
            <!--    <img alt="خروج" src="/front/img/URLShortener/exit_ico.png" id="signout2">-->
            <!--    <button class="box10" id="id08" dir="rtl">-->
            <!--      خروج از حساب و پنل کاربری-->
            <!--    </button>-->
            <!--    <input type="checkbox" name="SignoutCheck" id="SignoutCheck" value="SignOut!" style="display:none;">-->
            <!--</div>-->
            <!-- ====== main-1-1 ====== -->    
            <div class="text1 text-right" dir="rtl">
                <div class="box8 box9 text-right" id="id07" onclick="javascript:window.location='http://mehrdadweb.ir/urlshortner-login/logout.php'">
                <img alt="خروج" src="/front/img/URLShortener/exit_ico.png" id="signout2">
                <button class="box10" id="id08" dir="rtl">
                  خروج از حساب و پنل کاربری
                </button>
                <input type="checkbox" name="SignoutCheck" id="SignoutCheck" value="SignOut!" style="display:none;">
                </div>
                <p class="text-right pr-5 pt-3" id="id01"> کاربر گرامی <span style="color:red;"><?php echo $_GET['id'];?></span></p>               
                <input style="display:none" type="text" name="usernamee" id="usernamee" value="<?php echo $_GET['id'];?>">
            </div>
            <!-- ====== main-1-2 ====== -->
            <div class="form-group">
                <h3 class="text2" id="h3color"><label for="longurl" dir="rtl">آدرسی را که می‌خواهید کوتاه شود،وارد کنید:</label></h3>
                <div class="d-flex flex-md-row justify-content-center align-content-center flex-container">
                    <input class="d-md-inline input1" type="text" id="longlink" name="longlink" value="" placeholder="http://mehrdadweb.ir/sample-long-url">
                    <button class="button d-md-inline" id="button4">کوتاه کن</button>
                </div>
                <div class="box1 mx-auto" id="shortlink2">
                <div class="box2 d-inline" id="shortlink3">http://mehrdadweb.ir/</div>
                    <input class="input2 d-inline" type="text" id="shortlink" name="shortlink" value="" placeholder="آدرس کوتاه دلخواه ">
                </div>
                <div class="box1 mx-auto" style="display:none;" id="shortlink4"></div>
            </div>
        </div>
        <!-- ====== END-2.main-1 ====== -->
        <!-- ====== 3.main-2 ====== -->
        <div class="d-flex secondarticle flex-column  justify-content-center align-content-center" style="margin-bottom: 100px;" dir="rtl" id="articlcolor">
        <!-- ====== 1th secondarticle ====== -->
        <h5 class="text3" id="h5color">با <span><strong>کوتاه کننده لینک</strong> </span>می‌توانید لینک‌های طولانی را به لینک‌های کوتاه و دلخواه تبدیل کنید تا به راحتی و بهترین شکل از طریق پیامک یا در اینستاگرام و ... به اشتراک بگذارید.</h5>
        <!-- ====== 2th secondarticle ====== -->
        <div class="secondarticle1 mt-2" dir="rtl">
            <!-- ====== 1 ====== -->
            <div class="d-flex justify-content-center align-content-center flex-wrap " >
                <div class="p-2">
                    <a class="text-decoration-none" href="#" data-toggle="tooltip" data-placement="top" title="امکان کوتاه کردن بی نهایت لینک به رایگان">
                       <img src="/front/img/URLShortener/icons8-checkmark-26.png" class="icon1" title><span class="icon2" id="articlcolor1">نامحدود و رایگان</span> 
                    </a>
                </div>
                <div class="p-2 ">
                    <a class="text-decoration-none" href="#" data-toggle="tooltip" data-placement="top" title="الینک های کوتاهشه محدودیت زمانی ندارد">
                       <img src="/front/img/URLShortener/icons8-checkmark-26.png" class="icon1"><span class="icon2" id="articlcolor2">لینک های دائمی</span> 
                    </a>
                </div>
                <div class="p-2 ">
                    <a class="text-decoration-none" href="#" data-toggle="tooltip" data-placement="top" title="پایداری(آپ تایم )بالا و دسترسی سریع">
                       <img src="/front/img/URLShortener/icons8-checkmark-26.png" class="icon1"><span class="icon2" id="articlcolor3">نپایدار و پرسرعت</span> 
                    </a>                    
                </div>
            </div>   
            <!-- ====== 2 ====== -->
            <div class="d-flex justify-content-center align-content-center flex-wrap ">    
                <div class="p-2">
                    <a class="text-decoration-none" href="#" data-toggle="tooltip" data-placement="top" title="امکان مشاهده آمار لینک کوتاه شده">
                       <img src="/front/img/URLShortener/icons8-checkmark-26.png" class="icon1"><span class="icon2" id="articlcolor4">نمایش آمار لینک</span> 
                    </a>                      
                </div>
                <div class="p-2">
                    <a class="text-decoration-none" href="#" data-toggle="tooltip" data-placement="top" title="سالها فعالیت و مورد اعتماد صدها برند">
                       <img src="/front/img/URLShortener/icons8-checkmark-26.png" class="icon1"><span class="icon2" id="articlcolor5">قدیمی و قابل اعتماد</span>
                    </a>                    
                </div>
                <div class="p-2">
                    <a class="text-decoration-none" href="#" data-toggle="tooltip" data-placement="top" title="امکان انتخاب آدرس دلخوته برای لینک کوتاه">
                       <img src="/front/img/URLShortener/icons8-checkmark-26.png" class="icon1"><span class="icon2" id="articlcolor6">لینک کوتاه دلخواه</span>
                    </a>                    
                </div>
            </div>   
            <!-- ====== 3 ====== -->
            <div class="d-flex justify-content-center align-content-center flex-wrap ">
                <div class="p-2">
                    <a class="text-decoration-none" href="#" data-toggle="tooltip" data-placement="top" title="کوتاه کردن لینک با یک کلیک بی نیاز به ثبت نام">
                       <img src="/front/img/URLShortener/icons8-checkmark-26.png" class="icon1"><span class="icon2">بی نیاز از ثبت نام</span>
                    </a>                    
                </div>
                <div class="p-2">
                    <a class="text-decoration-none" href="#" data-toggle="tooltip" data-placement="top" title="عدم نمایش تبلیغات قبل از باز شدن لینک">
                       <img src="/front/img/URLShortener/icons8-checkmark-26.png" class="icon1"><span class="icon2">عدم نمایش صفحه تبلیغاتی</span>
                    </a>                    
                </div>
                <div class="p-2">
                    <a class="text-decoration-none" href="#" data-toggle="tooltip" data-placement="top" title="پاسخگوی سوالات و شنونده نظرات شما هستیم">
                       <img src="/front/img/URLShortener/icons8-checkmark-26.png" class="icon1"><span class="icon2">نپشتیبانی پاسخگو</span>
                    </a>                    
                </div>
            </div>            
        </div>
        <!-- ====== 3th secondarticle ====== -->
        <div class="thirdarticle1 mt-2 mx-auto" dir="rtl">
            <!-- ====== 1-3th secondarticle ======  -->
            <div class="box7 mb-5 mx-auto" id="id03">
                <a style="font-size: 15px;color:black" class="text-decoration-none font-weight-bolder" href="http://www.mehrdadweb.ir/user/usertable.php?id=<?php echo $_GET['id'];?>">
                    <p id="id05" style="font-size: 15px;color:black" dir="ltr">
                        <span id="id06" style="color:red"><?php echo $_GET['id'];?></span> : مشاهده لیست لینک های خود،کاربر
                    </p>
                </a>                 
            </div>
            <!-- ====== 2-3th secondarticle ====== -->
            <button class="box3 mb-5" id="button1">
                ویژگی‌ها و امکانات سایت کوتاه کننده لینک
            </button>
            <!-- ====== 3-3th secondarticle ====== -->
            <div class="text4 mb-5 mx-auto" id="text4" style="display:none;">
                <h4 class="mb-2">امکان کوتاه کردن بی‌نهایت لینک به رایگان</h4>     
                <h4 class="mb-2">لینک‌های کوتاه شده محدودیت زمانی ندارد</h4> 
                <h4 class="mb-2">پایداری (آپ‌تایم) بالا و دسترسی سریع</h4> 
                <h4 class="mb-2">امکان مشاهده آمار بازدید لینک کوتاه شده</h4> 
                <h4 class="mb-2">8سال سابقه فعالیت و مورد اعتماد صد‌ها برند</h4> 
                <h4 class="mb-2">مکان انتخاب آدرس دلخواه برای لینک کوتاه</h4> 
                <h4 class="mb-2">کوتاه کردن لینک با یک کلیک بی‌نیاز به ثبت‌نام</h4> 
                <h4 class="mb-2">عدم نمایش تبلیغات قبل از باز شدن لینک</h4> 
                <h4 class="mb-5">پاسخگوی سوالات و شنونده نظرات شما هستیم</h4>
            </div>
            <!-- ====== 4-3th secondarticle ====== -->
            <button class="box4 mb-5" id="button2">
                <a style="color:black" class="text-decoration-none" href="http://mehrdadweb.ir/" target="_blank" >  مهرداد وب | طراحی حرفه ای سایت و فروشگاه اینترنتی </a>
            </button>
            <!-- ====== 5-3th secondarticle ====== -->
            <button class="box5 mb-5" id="button3" >
                <a style="color:black" class="text-decoration-none" href="https://www.instagram.com/mehrdad.mohammadi7/" target="_blank" >
                ما را در اینستاگرام دنبال کنید
                </a>
            </button> 
            <!-- ====== 6-3th secondarticle ====== -->
            <div class="box6 mb-1 mx-auto" id="switch3" style="width:32px;height:32px;background-color: #f8f9fa;">
                <img style="width:32px;height:32px" class="moon_sun" src="/front/img/URLShortener/moon.png" id="moon">
            </div>  
        </div>
        <!-- ====== END - 3th secondarticle ====== -->
    </div>
        <!-- ====== END-3.main-2 ====== -->
        <!-- ====== FOOTER ====== -->
        <!-- ====== footer1 ====== -->
        <div class="container-fluid mt-5 footer1" dir="rtl" id="footerborder1">
                        <!-- ====== footer1-1 ====== -->
                        <div class="d-flex  justify-content-center align-content-center">
                            <div>
                                <a class="text-warning " href="#">
                                     گزارش تخلف
                                </a>
                            </div>
                            <div style="color:gray;">&#x2502;</div>
                            <div>
                                <a class="text-warning" href="#">
                                      ساخت UTM
                                </a>
                            </div>
                            <div style="color:gray;">&#x2502;</div>
                            <div>
                                <a class="text-warning" href="#">
                                       شرایط و قوانین
                                </a>                
                            </div>
                        </div>
                        <!-- ====== footer1-2 ====== -->
                        <div class="row">
                            <p class="p1">
                        کلیه حقوق محفوظ است ~ 2021 - 2020 &#169;طراحی و ارائه شده توسط <a class="text-decoration-none" href="http://mehrdadweb.ir/" target="_blank">مهندس مهرداد محمدی</a>
                            </p>
                        </div>
                    </div>
        <!-- ====== endfooter1 ====== -->
        <!-- ====== footer2 ====== -->
        <div class=" mt-5 footer2" dir="rtl" id="footerborder2">
                        <!-- ====== footer2-1 ====== -->
                        <div class="d-flex  justify-content-center align-content-center">
                            <div>
                                <a class="text-warning c1" href="#">
                                    کوتاه کننده لینک
                                </a>
                            </div>
                            <div style="color:gray;">&#x2502;</div>
                            <div>
                                <a class="text-warning" href="#">
                                      آمار لینک
                                </a>
                            </div>
                            <div style="color:gray;">&#x2502;</div>
                            <div>
                                <a class="text-warning" href="#">
                                       قوانین
                                </a>                
                            </div>
                                        <div style="color:gray;">&#x2502;</div>
                            <div>
                                <a class="text-warning" href="#">
                                       پشتیبانی وتماس
                                </a>                
                            </div>
                        </div>    
                        <!-- ====== footer2-2 ====== -->
                        <div class="row">
                            <p class="p1">
                            کلیه حقوق محفوظ است ~ 2020 - 2012 &#169;راحی و ارائه شده توسط <a class="text-decoration-none" href="http://mehrdadweb.ir/" target="_blank">مهندس مهرداد محمدی</a>
                            </p>
                        </div>    
                    </div>     
        <!-- ====== endfooter2 ====== -->
        <!-- ====== End-FOOTER ====== -->                
        </div>
    <!-- ====== END-COLUMN 1 ====== -->
    <!-- ====== COLUMN 2 ====== -->
    <div class="col-sm-2 secondcolumn border border-left-0 border-right-0 px-0 box_shadow "><!-- px-0 طلایی -->
        <!-- ====== NAV ======  -->
        <nav class="sidenav  border border-left-0 border-right-0 border-bottom-0 pt-5 d-flex flex-column" id="secondcolumn" dir="rtl" style="height: 100vh;">
                <!-- ====== flexitem0 ====== -->
                <div class="border border-left-0 border-right-0  c3 text-center active" style="right: 0; z-index:3;">
                    <div class="d-inline list-unstyled align-self-center text-decoration-none flex_item font-weight-bolder" style="z-index:3;">
                        <li class="nav-item dropdown" style="z-index:3;">
                            <a class="nav-link dropdown-toggle d-inline text-decoration-none flex_item" href="#" id="navbardrop" data-toggle="dropdown" style="z-index:3;" >پروژه ها</a>
                            <ul class="dropdown-menu" style="z-index:3;">
                                <li>
                                    <a class="dropdown-item" style="color:red;" href="http://mehrdadweb.ir/projects/linkshortner(1-1).html" target="_blank" data-toggle="tooltip" data-placement="top" title="پروژه کوتاه کردن لینک بدون فریم ورک" dir="rtl">
                                            1.پروژه کوتاه کردن لینک
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" style="color:red;" href="http://mehrdadweb.ir/projects/linkshortner(1-2).html" data-toggle="tooltip" data-placement="top" title="پروژه کوتاه کردن لینک با فریم ورک بوت استرپ">
                                            2.پروژه کوتاه کردن لینک
                                    </a>    
                                </li>
                                <li>
                                    <a class="dropdown-item" style="color:red;" href="http://mehrdadweb.ir/projects/linkshortner(1-3).html" target="_blank" data-toggle="tooltip" data-placement="top" title="پروژه کوتاه کردن لینک " dir="rtl"> 
                                            3.پروژه کوتاه کردن لینک
                                    </a>
                                </li>                                    
                            </ul>
                        </li>                             
                    </div>    
                </div>
                <!-- ====== flexitem1 ====== -->
                <div class="border border-left-0  border-right-0 c4  text-center active" style="right: 0;">
                        <span class="d-inline icon ml-2">
                            <img src="/front/img/URLShortener/home1.png" class="icon" style="width: 20px; height: 30px; margin-bottom: 5PX; padding-bottom: 4px;">
                        </span>                    
                        <a class="menu-item d-inline align-self-center text-decoration-none flex_item font-weight-bolder" href="http://www.mehrdadweb.ir/user/usertable.php?id=<?php echo $_GET['id'];?>">
                            <span id="linkcolor2" style="font-size: 15px;" class="">
                                 مشاهده لیست لینک های خود،کاربر<span style="color:red;"><?php echo $_GET['id'];?></span>
                            </span>
                        </a>    
                </div>
                <!-- ====== flexitem2 ====== --> 
                <div class="border border-left-0 border-right-0 c3 text-center">
                        <span class="d-inline icon ml-2">
                            <img src="/front/img/URLShortener/bar-chart.png" class="icon" style="width: 20px; height: 30px; margin-bottom: 5PX; padding-bottom: 4px;">
                        </span>                    
                        <a title="مشاهده آمار لینک کوتاه شده" href="http://mehrdadweb.ir/shortlink/linkshortener.html" class="menu-item d-inline align-self-center text-decoration-none flex_item font-weight-bolder" >
                            <span id="linkcolor3" style="font-size: 16px;">آمار بازدید لینک</span>
                        </a>
                </div>
                <!-- ====== flexitem3 ====== -->
                <div class="border border-left-0 border-right-0 c3 text-center">
                        <span class="d-inline icon ml-2">
                            <img src="/front/img/URLShortener/star.png" class="icon" style="width: 20px; height: 30px; margin-bottom: 5PX; padding-bottom: 4px;">
                        </span>                     
                        <a title="آسان کوتاه کن" href="http://mehrdadweb.ir/shortlink/linkshortener.html" class="menu-item d-inline align-self-center text-decoration-none flex_item font-weight-bolder" >
                            <span id="linkcolor4" style="font-size: 16px;">آسان کوتاه کن</span>
                        </a>
                </div>
                <!-- ====== flexitem4 ====== -->
                <div class="border border-left-0  border-right-0 text-center c3">
                        <span class="d-inline icon ml-2">
                            <img src="/front/img/URLShortener/four-squares-button-of-view-options.png" class="icon" style="width: 20px; height: 30px; margin-bottom: 5PX; padding-bottom: 4px;">
                        </span>                     
                        <a title="کیو آر کد بساز" href="http://mehrdadweb.ir/shortlink/linkshortener.html" class="menu-item d-inline align-self-center text-decoration-none flex_item font-weight-bolder" >
                            <span id="linkcolor5" style="font-size: 16px;">کیو آر کد بساز</span>
                        </a>
                </div>
                <!-- ====== flexitem5 ====== -->
                <div class="border border-left-0 border-right-0  text-center c3">
                        <span class="d-inline icon ml-2">
                            <img src="/front/img/URLShortener/email.png" class="icon" style="width: 20px; height: 30px; margin-bottom: 5PX; padding-bottom: 4px;">
                        </span>                      
                    <a title="پشتیبانی و تماس" href="http://mehrdadweb.ir/contact/contact.php" class="menu-item d-inline align-self-center text-decoration-none flex_item font-weight-bolder">
                            <span id="linkcolor6" style="font-size: 16px;">پشتیبانی و تماس</span>
                        </a>
                </div>
                <!-- ====== flexitem6 ====== </section>-->
                <div class="border border-left-0 border-right-0  text-center c3">
                        <div class="custom-control custom-switch c" >
                            <input type="checkbox" class="d-inline custom-control-input c1 rtl" id="switch1" name="example">
                            <label class="d-inline custom-control-label c2" for="switch1" id="switch2"  style="font-size: 16px;">مدرن و روشن</label>
                        </div>
                </div>
        </nav>
        <!-- ====== END-NAV </div>======  -->
    </div>
    <!-- ====== END-COLUMN 2 ====== -->
</div>
<!-- ====== END-row ====== -->
</body>
</html>

