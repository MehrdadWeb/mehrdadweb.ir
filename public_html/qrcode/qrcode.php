<!doctype html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>کیو آر کد ساز | ابزار ساخت بارکد حرفه ای</title>
    <meta name="description" content="ابزار تولید کیو آر کد">
    <meta name="keywords" content="qrcode, کیوآرکد, کد کیو آر">
    <link rel="shortcut icon" href="http://mehrdadweb.ir/front/img/URLShortener/favicon.ico">
    <link href="http://mehrdadweb.ir/front/bootstrap/rtl/bootstrap.min.css" rel="stylesheet">
    <link href="http://mehrdadweb.ir/front/css/font-awesome.min.css" rel="stylesheet">
    <script src="http://mehrdadweb.ir/front/js/jquery-3.5.1.min.js"></script>
    <link href="http://mehrdadweb.ir/front/js/spectrum/spectrum.min.css" rel="stylesheet">
    <link href="http://mehrdadweb.ir/front/css/qrcode.css" rel="stylesheet">
    <style type="text/css">
        a,
        .btn-link {
            color: #12232f;
        }

        .text-primary {
            color: #12232f !important;
        }

        .navbar-nav a,
        .navbar-nav .nav-link,
        .navbar-toggler {
            color: #F6F6F6;
        }

        a:hover,
        a:active,
        a:focus,
        .btn-link:hover,
        .btn-link:active,
        .btn-link:focus,
        .dropdown-menu a.dropdown-item {
            color: #0d1921;
        }

        .bg-primary,
        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link,
        label.custom-file-label:after {
            color: #F6F6F6;
            background-color: #12232f !important;
        }

        a.dropdown-item.active,
        a.dropdown-item:active {
            -webkit-box-shadow: inset 4px 0 0 0 #12232f;
            box-shadow: inset 4px 0 0 0 #12232f;
            background-color: transparent;
        }

        .btn-primary,
        .btn-primary:disabled {
            border-color: #12232f;
            background-color: #12232f;
            color: #F6F6F6;
        }

        .btn-outline-primary,
        .btn-outline-primary:disabled {
            border-color: #12232f;
            color: #12232f;
        }

        .btn-primary:hover,
        .btn-primary:active,
        .btn-primary:focus,
        .btn-primary:not(:disabled):not(.disabled).active,
        .btn-primary:not(:disabled):not(.disabled):active,
        .show>.btn-primary.dropdown-toggle,
        .btn-outline-primary:hover,
        .btn-outline-primary:active,
        .btn-outline-primary:focus,
        .btn-outline-primary:not(:disabled):not(.disabled).active,
        .btn-outline-primary:not(:disabled):not(.disabled):active,
        .show>.btn-outline-primary.dropdown-toggle {
            border-color: #0d1921;
            background-color: #0d1921;
            color: #F6F6F6;
        }

        .btn-outline-light {
            border-color: #F6F6F6;
            color: #F6F6F6;
        }

        .btn-outline-light:hover,
        .btn-outline-light:active,
        .btn-outline-light:focus,
        .btn-outline-light:not(:disabled):not(.disabled).active,
        .btn-outline-light:not(:disabled):not(.disabled):active,
        .show>.btn-outline-light.dropdown-toggle {
            background-color: #F6F6F6;
            border-color: #F6F6F6;
            color: #12232f;
        }
    </style>
    <script>
        $(document).ready(function() {
            // $("button").toggle(500);
            $("#button1").click(function() {
                if ($("button").hasClass('collapsed')){
                    $("button").removeClass('collapsed');
                    $("button").attr("aria-expanded","true");
                    $("#collapseColors").addClass('show');
                }else{
                    $("button").addClass('collapsed');
                    $("button").attr("aria-expanded","false");
                    $("#collapseColors").removeClass('show');
                }
            });
            $("#button2").click(function() {
                
                if ($("button").hasClass('collapsed')){
                    $("button").removeClass('collapsed');
                    $("button").attr("aria-expanded","true");
                    $("#collapseStyle").addClass('show');
                }else{
                    $("button").addClass('collapsed');
                    $("button").attr("aria-expanded","false");
                    $("#collapseStyle").removeClass('show');
                }
            });
            $("#button3").click(function() {
                if ($("button").hasClass('collapsed')){
                    $("button").removeClass('collapsed');
                    $("button").attr("aria-expanded","true");
                    $("#collapseWatermark").addClass('show');
                }else{
                    $("button").addClass('collapsed');
                    $("button").attr("aria-expanded","false");
                    $("#collapseWatermark").removeClass('show');
                }
            });
            $("#button4").click(function() {
                if ($("button").hasClass('collapsed')){
                    $("button").removeClass('collapsed');
                    $("button").attr("aria-expanded","true");
                    $("#collapseOptions").addClass('show');
                }else{
                    $("button").addClass('collapsed');
                    $("button").attr("aria-expanded","false");
                    $("#collapseOptions").removeClass('show');
                }
            });
            
            $("#color2").click(function(){
              $("#color1").val() = $("#color2").val();
            });
        });
    </script>
</head>

<body class="qrcdr">
    <nav class="navbar bg-primary m-0 navbar-expand-sm navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#qrcdrNavbar"
            aria-controls="qrcdrNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="qrcdrNavbar">
            <div class="container">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://mehrdadweb.ir/URLShortener">کوتاه کننده لینک</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://mehrdadweb.ir">طراحی حرفه‌ای وب‌سایت</a>
                    </li>
                    <!--<li class="nav-item">-->
                    <!--    <a class="nav-link" target="_blank" href="https://negareno.com/whois">جستجوی دامنه</a>-->
                    <!--</li>-->
                    <!--<li class="langmenu nav-item dropdown">-->
                    <!--    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"-->
                    <!--        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i-->
                    <!--            class="fa fa-flag"></i></a>-->
                    <!--    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"><a-->
                    <!--            class="dropdown-item" href="?lang=en">en</a><a class="dropdown-item active"-->
                    <!--            href="?lang=fa">fa</a></div>-->
                    <!--</li>-->
                </ul>
            </div>
        </div>
    </nav>
    <div class="bg-primary position-relative">
        <div class="overlay-gradient"></div>
        <div class="container position-relative">
            <div class="row py-5">
                <div class="col">
                    <h1 class="display-1">کیو آر کد ساز</h1>
                    <p class="slogan">تبدیل راحت اطلاعات به بارکد، همراه با درج لوگو، سفارشی‌سازی و استایل‌های جذاب و
                        متنوع</p>
                </div>
            </div>
        </div>
    </div><input type="hidden" id="qrcdr-relative" value="">
    <div class="container">
        <div class="row mt-3">

            <div class="col-lg-4 order-last">
                <nav class="navbar sticky-top">
                    <div class="placeresult bg-light d-grid">
                        <div class="form-group text-center wrapresult">
                            <div class="resultholder">
                                <img class="img-fluid" src="http://mehrdadweb.ir/front/img/URLShortener/placeholder.svg" />
                                <div class="infopanel"></div>
                            </div>
                        </div>
                        <div class="preloader"><i class="fa fa-cog fa-spin"></i></div>
                        <input type="hidden" class="holdresult">
                        <button id="submit-button" class="btn btn-lg btn-block btn-primary ellipsis generate_qrcode rounded-0" disabled><i
                                class="fa fa-check"></i> ذخیره</button>
                        <div class="text-center mt-2 linksholder"></div>
                    </div>
                    <div class="py-3">
                        <p class="bg-warning p-3">رمزینه‌های ایجاد شده دائمی است و منقضی نمی‌شود!</p>
                    </div>
                </nav>
            </div><!-- col md-4-->

            <div class="col-lg-8 pt-3 mb-3">
                <div class="row">
                    <form role="form" class="qrcdr-form needs-validation w-100" novalidate>
                        <input type="submit" class="d-none">
                        <input type="hidden" name="section" id="getsec" value="#link">
                        <div class="col-12 pb-2">
                            <div class="row">
                                <div class="col-12">
                                    <ul class="nav nav-pills nav-fill" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#link" role="tab" data-bs-toggle="tab"
                                                data-toggle="tab"><i class="fa fa-link"></i> <span
                                                    class="d-inline-block d-sm-inline-block">لینک</span></a>
                                        </li>
                                        <!--<li class="nav-item">-->
                                        <!--    <a class="nav-link" href="#text" role="tab" data-bs-toggle="tab"-->
                                        <!--        data-toggle="tab"><i class="fa fa-align-left"></i> <span-->
                                        <!--            class="d-inline-block d-sm-inline-block">متن</span></a>-->
                                        <!--</li>-->
                                        <!--<li class="nav-item">-->
                                        <!--    <a class="nav-link" href="#email" role="tab" data-bs-toggle="tab"-->
                                        <!--        data-toggle="tab"><i class="fa fa-envelope-o"></i> <span-->
                                        <!--            class="d-inline-block d-sm-inline-block">ایمیل</span></a>-->
                                        <!--</li>-->
                                        <!--<li class="nav-item">-->
                                        <!--    <a class="nav-link" href="#tel" role="tab" data-bs-toggle="tab"-->
                                        <!--        data-toggle="tab"><i class="fa fa-phone"></i> <span-->
                                        <!--            class="d-inline-block d-sm-inline-block">تماس</span></a>-->
                                        <!--</li>-->
                                        <!--<li class="nav-item">-->
                                        <!--    <a class="nav-link" href="#sms" role="tab" data-bs-toggle="tab"-->
                                        <!--        data-toggle="tab"><i class="fa fa-mobile"></i> <span-->
                                        <!--            class="d-inline-block d-sm-inline-block">پیامک</span></a>-->
                                        <!--</li>-->
                                        <!--<li class="nav-item">-->
                                        <!--    <a class="nav-link" href="#wifi" role="tab" data-bs-toggle="tab"-->
                                        <!--        data-toggle="tab"><i class="fa fa-wifi"></i> <span-->
                                        <!--            class="d-inline-block d-sm-inline-block">وای‌فای</span></a>-->
                                        <!--</li>-->
                                        <!--<li class="nav-item">-->
                                        <!--    <a class="nav-link" href="#vcard" role="tab" data-bs-toggle="tab"-->
                                        <!--        data-toggle="tab"><i class="fa fa-list-alt"></i> <span-->
                                        <!--            class="d-inline-block d-sm-inline-block">کارت ویزیت</span></a>-->
                                        <!--</li>-->
                                    </ul>
                                </div>

                                <div class="col-12">
                                    <div class="tab-content mt-3" id="dataTabs">
                                        <div class="tab-pane fade show active" id="link">
                                            <h4>لینک</h4>
                                            <div class="form-group">
                                                <label for="malink">آدرس وب</label>

                                                <input type="text" name="link" id="malink" class="form-control"
                                                    placeholder="http://" required="required" value="" />
                                            </div>
                                        </div>
                                        <div class="tab-pane fade " id="text">
                                            <h4>متن</h4>
                                            <div class="row">
                                                <div class="col-12 form-group">
                                                    <label>پیام</label>
                                                    <textarea rows="3" name="data" class="form-control"
                                                        required="required" maxlength="1000"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade " id="email">
                                            <h4>ایمیل</h4>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label>ارسال به</label>
                                                    <input type="email" name="mailto" placeholder="E-Mail"
                                                        class="form-control" required="required">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label>موضوع</label>
                                                    <input type="text" name="subject" class="form-control"
                                                        required="required">
                                                </div>
                                                <div class="col-12 form-group">
                                                    <label>متن</label>
                                                    <textarea name="body" class="form-control" required="required"
                                                        maxlength="1000"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade " id="tel">
                                            <h4>شماره تلفن</h4>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>کد کشور</label>
                                                        <select class="form-select custom-select" name="countrycodetel">
                                                            <option value="" label="--">--</option>
                                                            <option value="7840" label="Abkhazia (+7 840)">Abkhazia (+7
                                                                840)</option>
                                                            <option value="7940" label="Abkhazia (+7 940)">Abkhazia (+7
                                                                940)</option>
                                                            <option value="93" label="Afghanistan (+93)">Afghanistan
                                                                (+93)</option>
                                                            <option value="355" label="Albania (+355)">Albania (+355)
                                                            </option>
                                                            <option value="213" label="Algeria (+213)">Algeria (+213)
                                                            </option>
                                                            <option value="1684" label="American Samoa (+1 684)">
                                                                American Samoa (+1 684)</option>
                                                            <option value="376" label="Andorra (+376)">Andorra (+376)
                                                            </option>
                                                            <option value="244" label="Angola (+244)">Angola (+244)
                                                            </option>
                                                            <option value="1264" label="Anguilla (+1 264)">Anguilla (+1
                                                                264)</option>
                                                            <option value="1268" label="Antigua and Barbuda (+1 268)">
                                                                Antigua and Barbuda (+1 268)</option>
                                                            <option value="54" label="Argentina (+54)">Argentina (+54)
                                                            </option>
                                                            <option value="374" label="Armenia (+374)">Armenia (+374)
                                                            </option>
                                                            <option value="297" label="Aruba (+297)">Aruba (+297)
                                                            </option>
                                                            <option value="247" label="Ascension (+247)">Ascension
                                                                (+247)</option>
                                                            <option value="61" label="Australia (+61)">Australia (+61)
                                                            </option>
                                                            <option value="672"
                                                                label="Australian External Territories (+672)">
                                                                Australian External Territories (+672)</option>
                                                            <option value="43" label="Austria (+43)">Austria (+43)
                                                            </option>
                                                            <option value="994" label="Azerbaijan (+994)">Azerbaijan
                                                                (+994)</option>
                                                            <option value="1242" label="Bahamas (+1 242)">Bahamas (+1
                                                                242)</option>
                                                            <option value="973" label="Bahrain (+973)">Bahrain (+973)
                                                            </option>
                                                            <option value="880" label="Bangladesh (+880)">Bangladesh
                                                                (+880)</option>
                                                            <option value="1246" label="Barbados (+1 246)">Barbados (+1
                                                                246)</option>
                                                            <option value="1268" label="Barbuda (+1 268)">Barbuda (+1
                                                                268)</option>
                                                            <option value="375" label="Belarus (+375)">Belarus (+375)
                                                            </option>
                                                            <option value="32" label="Belgium (+32)">Belgium (+32)
                                                            </option>
                                                            <option value="501" label="Belize (+501)">Belize (+501)
                                                            </option>
                                                            <option value="229" label="Benin (+229)">Benin (+229)
                                                            </option>
                                                            <option value="1441" label="Bermuda (+1 441)">Bermuda (+1
                                                                441)</option>
                                                            <option value="975" label="Bhutan (+975)">Bhutan (+975)
                                                            </option>
                                                            <option value="591" label="Bolivia (+591)">Bolivia (+591)
                                                            </option>
                                                            <option value="387" label="Bosnia and Herzegovina (+387)">
                                                                Bosnia and Herzegovina (+387)</option>
                                                            <option value="267" label="Botswana (+267)">Botswana (+267)
                                                            </option>
                                                            <option value="55" label="Brazil (+55)">Brazil (+55)
                                                            </option>
                                                            <option value="246"
                                                                label="British Indian Ocean Territory (+246)">British
                                                                Indian Ocean Territory (+246)</option>
                                                            <option value="1284"
                                                                label="British Virgin Islands (+1 284)">British Virgin
                                                                Islands (+1 284)</option>
                                                            <option value="673" label="Brunei (+673)">Brunei (+673)
                                                            </option>
                                                            <option value="359" label="Bulgaria (+359)">Bulgaria (+359)
                                                            </option>
                                                            <option value="226" label="Burkina Faso (+226)">Burkina Faso
                                                                (+226)</option>
                                                            <option value="257" label="Burundi (+257)">Burundi (+257)
                                                            </option>
                                                            <option value="855" label="Cambodia (+855)">Cambodia (+855)
                                                            </option>
                                                            <option value="237" label="Cameroon (+237)">Cameroon (+237)
                                                            </option>
                                                            <option value="1" label="Canada (+1)">Canada (+1)</option>
                                                            <option value="238" label="Cape Verde (+238)">Cape Verde
                                                                (+238)</option>
                                                            <option value="345" label="Cayman Islands (+345)">Cayman
                                                                Islands (+345)</option>
                                                            <option value="236" label="Central African Republic (+236)">
                                                                Central African Republic (+236)</option>
                                                            <option value="235" label="Chad (+235)">Chad (+235)</option>
                                                            <option value="56" label="Chile (+56)">Chile (+56)</option>
                                                            <option value="86" label="China (+86)">China (+86)</option>
                                                            <option value="61" label="Christmas Island (+61)">Christmas
                                                                Island (+61)</option>
                                                            <option value="61" label="Cocos-Keeling Islands (+61)">
                                                                Cocos-Keeling Islands (+61)</option>
                                                            <option value="57" label="Colombia (+57)">Colombia (+57)
                                                            </option>
                                                            <option value="269" label="Comoros (+269)">Comoros (+269)
                                                            </option>
                                                            <option value="242" label="Congo (+242)">Congo (+242)
                                                            </option>
                                                            <option value="243"
                                                                label="Congo, Dem. Rep. of (Zaire) (+243)">Congo, Dem.
                                                                Rep. of (Zaire) (+243)</option>
                                                            <option value="682" label="Cook Islands (+682)">Cook Islands
                                                                (+682)</option>
                                                            <option value="506" label="Costa Rica (+506)">Costa Rica
                                                                (+506)</option>
                                                            <option value="225" label="Ivory Coast (+225)">Ivory Coast
                                                                (+225)</option>
                                                            <option value="385" label="Croatia (+385)">Croatia (+385)
                                                            </option>
                                                            <option value="53" label="Cuba (+53)">Cuba (+53)</option>
                                                            <option value="599" label="Curacao (+599)">Curacao (+599)
                                                            </option>
                                                            <option value="537" label="Cyprus (+537)">Cyprus (+537)
                                                            </option>
                                                            <option value="420" label="Czech Republic (+420)">Czech
                                                                Republic (+420)</option>
                                                            <option value="45" label="Denmark (+45)">Denmark (+45)
                                                            </option>
                                                            <option value="246" label="Diego Garcia (+246)">Diego Garcia
                                                                (+246)</option>
                                                            <option value="253" label="Djibouti (+253)">Djibouti (+253)
                                                            </option>
                                                            <option value="1767" label="Dominica (+1 767)">Dominica (+1
                                                                767)</option>
                                                            <option value="1809" label="Dominican Republic (+1 809)">
                                                                Dominican Republic (+1 809)</option>
                                                            <option value="1829" label="Dominican Republic (+1 829)">
                                                                Dominican Republic (+1 829)</option>
                                                            <option value="1849" label="Dominican Republic (+1 849)">
                                                                Dominican Republic (+1 849)</option>
                                                            <option value="670" label="East Timor (+670)">East Timor
                                                                (+670)</option>
                                                            <option value="56" label="Easter Island (+56)">Easter Island
                                                                (+56)</option>
                                                            <option value="593" label="Ecuador (+593)">Ecuador (+593)
                                                            </option>
                                                            <option value="20" label="Egypt (+20)">Egypt (+20)</option>
                                                            <option value="503" label="El Salvador (+503)">El Salvador
                                                                (+503)</option>
                                                            <option value="240" label="Equatorial Guinea (+240)">
                                                                Equatorial Guinea (+240)</option>
                                                            <option value="291" label="Eritrea (+291)">Eritrea (+291)
                                                            </option>
                                                            <option value="372" label="Estonia (+372)">Estonia (+372)
                                                            </option>
                                                            <option value="251" label="Ethiopia (+251)">Ethiopia (+251)
                                                            </option>
                                                            <option value="500" label="Falkland Islands (+500)">Falkland
                                                                Islands (+500)</option>
                                                            <option value="298" label="Faroe Islands (+298)">Faroe
                                                                Islands (+298)</option>
                                                            <option value="679" label="Fiji (+679)">Fiji (+679)</option>
                                                            <option value="358" label="Finland (+358)">Finland (+358)
                                                            </option>
                                                            <option value="33" label="France (+33)">France (+33)
                                                            </option>
                                                            <option value="596" label="French Antilles (+596)">French
                                                                Antilles (+596)</option>
                                                            <option value="594" label="French Guiana (+594)">French
                                                                Guiana (+594)</option>
                                                            <option value="689" label="French Polynesia (+689)">French
                                                                Polynesia (+689)</option>
                                                            <option value="241" label="Gabon (+241)">Gabon (+241)
                                                            </option>
                                                            <option value="220" label="Gambia (+220)">Gambia (+220)
                                                            </option>
                                                            <option value="995" label="Georgia (+995)">Georgia (+995)
                                                            </option>
                                                            <option value="49" label="Germany (+49)">Germany (+49)
                                                            </option>
                                                            <option value="233" label="Ghana (+233)">Ghana (+233)
                                                            </option>
                                                            <option value="350" label="Gibraltar (+350)">Gibraltar
                                                                (+350)</option>
                                                            <option value="30" label="Greece (+30)">Greece (+30)
                                                            </option>
                                                            <option value="299" label="Greenland (+299)">Greenland
                                                                (+299)</option>
                                                            <option value="1473" label="Grenada (+1 473)">Grenada (+1
                                                                473)</option>
                                                            <option value="590" label="Guadeloupe (+590)">Guadeloupe
                                                                (+590)</option>
                                                            <option value="1671" label="Guam (+1 671)">Guam (+1 671)
                                                            </option>
                                                            <option value="502" label="Guatemala (+502)">Guatemala
                                                                (+502)</option>
                                                            <option value="224" label="Guinea (+224)">Guinea (+224)
                                                            </option>
                                                            <option value="245" label="Guinea-Bissau (+245)">
                                                                Guinea-Bissau (+245)</option>
                                                            <option value="595" label="Guyana (+595)">Guyana (+595)
                                                            </option>
                                                            <option value="509" label="Haiti (+509)">Haiti (+509)
                                                            </option>
                                                            <option value="504" label="Honduras (+504)">Honduras (+504)
                                                            </option>
                                                            <option value="852" label="Hong Kong SAR China (+852)">Hong
                                                                Kong SAR China (+852)</option>
                                                            <option value="248" label="Seychelles (+248)">Seychelles
                                                                (+248)</option>
                                                            <option value="354" label="Iceland (+354)">Iceland (+354)
                                                            </option>
                                                            <option value="91" label="India (+91)">India (+91)</option>
                                                            <option value="62" label="Indonesia (+62)">Indonesia (+62)
                                                            </option>
                                                            <option value="98" label="Iran (+98)">Iran (+98)</option>
                                                            <option value="964" label="Iraq (+964)">Iraq (+964)</option>
                                                            <option value="353" label="Ireland (+353)">Ireland (+353)
                                                            </option>
                                                            <option value="972" label="Israel (+972)">Israel (+972)
                                                            </option>
                                                            <option value="39" label="Italy (+39)">Italy (+39)</option>
                                                            <option value="1876" label="Jamaica (+1 876)">Jamaica (+1
                                                                876)</option>
                                                            <option value="81" label="Japan (+81)">Japan (+81)</option>
                                                            <option value="962" label="Jordan (+962)">Jordan (+962)
                                                            </option>
                                                            <option value="77" label="Kazakhstan (+7 7)">Kazakhstan (+7
                                                                7)</option>
                                                            <option value="254" label="Kenya (+254)">Kenya (+254)
                                                            </option>
                                                            <option value="686" label="Kiribati (+686)">Kiribati (+686)
                                                            </option>
                                                            <option value="850" label="North Korea (+850)">North Korea
                                                                (+850)</option>
                                                            <option value="82" label="South Korea (+82)">South Korea
                                                                (+82)</option>
                                                            <option value="965" label="Kuwait (+965)">Kuwait (+965)
                                                            </option>
                                                            <option value="996" label="Kyrgyzstan (+996)">Kyrgyzstan
                                                                (+996)</option>
                                                            <option value="856" label="Laos (+856)">Laos (+856)</option>
                                                            <option value="371" label="Latvia (+371)">Latvia (+371)
                                                            </option>
                                                            <option value="961" label="Lebanon (+961)">Lebanon (+961)
                                                            </option>
                                                            <option value="266" label="Lesotho (+266)">Lesotho (+266)
                                                            </option>
                                                            <option value="231" label="Liberia (+231)">Liberia (+231)
                                                            </option>
                                                            <option value="218" label="Libya (+218)">Libya (+218)
                                                            </option>
                                                            <option value="423" label="Liechtenstein (+423)">
                                                                Liechtenstein (+423)</option>
                                                            <option value="370" label="Lithuania (+370)">Lithuania
                                                                (+370)</option>
                                                            <option value="352" label="Luxembourg (+352)">Luxembourg
                                                                (+352)</option>
                                                            <option value="853" label="Macau SAR China (+853)">Macau SAR
                                                                China (+853)</option>
                                                            <option value="389" label="Macedonia (+389)">Macedonia
                                                                (+389)</option>
                                                            <option value="261" label="Madagascar (+261)">Madagascar
                                                                (+261)</option>
                                                            <option value="265" label="Malawi (+265)">Malawi (+265)
                                                            </option>
                                                            <option value="60" label="Malaysia (+60)">Malaysia (+60)
                                                            </option>
                                                            <option value="960" label="Maldives (+960)">Maldives (+960)
                                                            </option>
                                                            <option value="223" label="Mali (+223)">Mali (+223)</option>
                                                            <option value="356" label="Malta (+356)">Malta (+356)
                                                            </option>
                                                            <option value="692" label="Marshall Islands (+692)">Marshall
                                                                Islands (+692)</option>
                                                            <option value="596" label="Martinique (+596)">Martinique
                                                                (+596)</option>
                                                            <option value="222" label="Mauritania (+222)">Mauritania
                                                                (+222)</option>
                                                            <option value="230" label="Mauritius (+230)">Mauritius
                                                                (+230)</option>
                                                            <option value="262" label="Mayotte (+262)">Mayotte (+262)
                                                            </option>
                                                            <option value="52" label="Mexico (+52)">Mexico (+52)
                                                            </option>
                                                            <option value="691" label="Micronesia (+691)">Micronesia
                                                                (+691)</option>
                                                            <option value="1808" label="Midway Island (+1 808)">Midway
                                                                Island (+1 808)</option>
                                                            <option value="691" label="Micronesia (+691)">Micronesia
                                                                (+691)</option>
                                                            <option value="373" label="Moldova (+373)">Moldova (+373)
                                                            </option>
                                                            <option value="377" label="Monaco (+377)">Monaco (+377)
                                                            </option>
                                                            <option value="976" label="Mongolia (+976)">Mongolia (+976)
                                                            </option>
                                                            <option value="382" label="Montenegro (+382)">Montenegro
                                                                (+382)</option>
                                                            <option value="1664" label="Montserrat (+1664)">Montserrat
                                                                (+1664)</option>
                                                            <option value="212" label="Morocco (+212)">Morocco (+212)
                                                            </option>
                                                            <option value="95" label="Myanmar (+95)">Myanmar (+95)
                                                            </option>
                                                            <option value="264" label="Namibia (+264)">Namibia (+264)
                                                            </option>
                                                            <option value="674" label="Nauru (+674)">Nauru (+674)
                                                            </option>
                                                            <option value="977" label="Nepal (+977)">Nepal (+977)
                                                            </option>
                                                            <option value="31" label="Netherlands (+31)">Netherlands
                                                                (+31)</option>
                                                            <option value="599" label="Netherlands Antilles (+599)">
                                                                Netherlands Antilles (+599)</option>
                                                            <option value="1869" label="Nevis (+1 869)">Nevis (+1 869)
                                                            </option>
                                                            <option value="687" label="New Caledonia (+687)">New
                                                                Caledonia (+687)</option>
                                                            <option value="64" label="New Zealand (64)">New Zealand (64)
                                                            </option>
                                                            <option value="505" label="Nicaragua (+505)">Nicaragua
                                                                (+505)</option>
                                                            <option value="227" label="Niger (+227)">Niger (+227)
                                                            </option>
                                                            <option value="234" label="Nigeria (+234)">Nigeria (+234)
                                                            </option>
                                                            <option value="683" label="Niue (+683)">Niue (+683)</option>
                                                            <option value="672" label="Norfolk Island (+672)">Norfolk
                                                                Island (+672)</option>
                                                            <option value="1670"
                                                                label="Northern Mariana Islands (+1 670)">Northern
                                                                Mariana Islands (+1 670)</option>
                                                            <option value="47" label="Norway (+47)">Norway (+47)
                                                            </option>
                                                            <option value="968" label="Oman (+968)">Oman (+968)</option>
                                                            <option value="92" label="Pakistan (+92)">Pakistan (+92)
                                                            </option>
                                                            <option value="680" label="Palau (+680)">Palau (+680)
                                                            </option>
                                                            <option value="970" label="Palestinian Territory (+970)">
                                                                Palestinian Territory (+970)</option>
                                                            <option value="507" label="Panama (+507)">Panama (+507)
                                                            </option>
                                                            <option value="675" label="Papua New Guinea (+675)">Papua
                                                                New Guinea (+675)</option>
                                                            <option value="595" label="Paraguay (+595)">Paraguay (+595)
                                                            </option>
                                                            <option value="51" label="Peru (+51)">Peru (+51)</option>
                                                            <option value="63" label="Philippines (+63)">Philippines
                                                                (+63)</option>
                                                            <option value="48" label="Poland (+48)">Poland (+48)
                                                            </option>
                                                            <option value="351" label="Portugal (+351)">Portugal (+351)
                                                            </option>
                                                            <option value="1787" label="Puerto Rico (+1 787)">Puerto
                                                                Rico (+1 787)</option>
                                                            <option value="1939" label="Puerto Rico (+1 939)">Puerto
                                                                Rico (+1 939)</option>
                                                            <option value="974" label="Qatar (+974)">Qatar (+974)
                                                            </option>
                                                            <option value="262" label="Reunion (+262)">Reunion (+262)
                                                            </option>
                                                            <option value="40" label="Romania (+40)">Romania (+40)
                                                            </option>
                                                            <option value="7" label="Russia (+7)">Russia (+7)</option>
                                                            <option value="250" label="Rwanda (+250)">Rwanda (+250)
                                                            </option>
                                                            <option value="685" label="Samoa (+685)">Samoa (+685)
                                                            </option>
                                                            <option value="378" label="San Marino (+378)">San Marino
                                                                (+378)</option>
                                                            <option value="966" label="Saudi Arabia (+966)">Saudi Arabia
                                                                (+966)</option>
                                                            <option value="221" label="Senegal (+221)">Senegal (+221)
                                                            </option>
                                                            <option value="381" label="Serbia (+381)">Serbia (+381)
                                                            </option>
                                                            <option value="232" label="Sierra Leone (+232)">Sierra Leone
                                                                (+232)</option>
                                                            <option value="65" label="Singapore (+65)">Singapore (+65)
                                                            </option>
                                                            <option value="421" label="Slovakia (+421)">Slovakia (+421)
                                                            </option>
                                                            <option value="386" label="Slovenia (+386)">Slovenia (+386)
                                                            </option>
                                                            <option value="677" label="Solomon Islands (+677)">Solomon
                                                                Islands (+677)</option>
                                                            <option value="27" label="South Africa (+27)">South Africa
                                                                (+27)</option>
                                                            <option value="500"
                                                                label="South Georgia and the South Sandwich Islands (+500)">
                                                                South Georgia and the South Sandwich Islands (+500)
                                                            </option>
                                                            <option value="34" label="Spain (+34)">Spain (+34)</option>
                                                            <option value="94" label="Sri Lanka (+94)">Sri Lanka (+94)
                                                            </option>
                                                            <option value="249" label="Sudan (+249)">Sudan (+249)
                                                            </option>
                                                            <option value="597" label="Suriname (+597)">Suriname (+597)
                                                            </option>
                                                            <option value="268" label="Swaziland (+268)">Swaziland
                                                                (+268)</option>
                                                            <option value="46" label="Sweden (+46)">Sweden (+46)
                                                            </option>
                                                            <option value="41" label="Switzerland (+41)">Switzerland
                                                                (+41)</option>
                                                            <option value="963" label="Syria (+963)">Syria (+963)
                                                            </option>
                                                            <option value="886" label="Taiwan (+886)">Taiwan (+886)
                                                            </option>
                                                            <option value="992" label="Tajikistan (+992)">Tajikistan
                                                                (+992)</option>
                                                            <option value="255" label="Tanzania (+255)">Tanzania (+255)
                                                            </option>
                                                            <option value="66" label="Thailand (+66)">Thailand (+66)
                                                            </option>
                                                            <option value="670" label="Timor Leste (+670)">Timor Leste
                                                                (+670)</option>
                                                            <option value="228" label="Togo (+228)">Togo (+228)</option>
                                                            <option value="690" label="Tokelau (+690)">Tokelau (+690)
                                                            </option>
                                                            <option value="676" label="Tonga (+676)">Tonga (+676)
                                                            </option>
                                                            <option value="1868" label="Trinidad and Tobago (+1 868)">
                                                                Trinidad and Tobago (+1 868)</option>
                                                            <option value="216" label="Tunisia (+216)">Tunisia (+216)
                                                            </option>
                                                            <option value="90" label="Turkey (+90)">Turkey (+90)
                                                            </option>
                                                            <option value="993" label="Turkmenistan (+993)">Turkmenistan
                                                                (+993)</option>
                                                            <option value="1649"
                                                                label="Turks and Caicos Islands (+1 649)">Turks and
                                                                Caicos Islands (+1 649)</option>
                                                            <option value="688" label="Tuvalu (+688)">Tuvalu (+688)
                                                            </option>
                                                            <option value="256" label="Uganda (+256)">Uganda (+256)
                                                            </option>
                                                            <option value="380" label="Ukraine (+380)">Ukraine (+380)
                                                            </option>
                                                            <option value="971" label="United Arab Emirates (+971)">
                                                                United Arab Emirates (+971)</option>
                                                            <option value="44" label="United Kingdom (+44)">United
                                                                Kingdom (+44)</option>
                                                            <option value="1" label="United States (+1)">United States
                                                                (+1)</option>
                                                            <option value="598" label="Uruguay (+598)">Uruguay (+598)
                                                            </option>
                                                            <option value="1340" label="U.S. Virgin Islands (+1 340)">
                                                                U.S. Virgin Islands (+1 340)</option>
                                                            <option value="998" label="Uzbekistan (+998)">Uzbekistan
                                                                (+998)</option>
                                                            <option value="678" label="Vanuatu (+678)">Vanuatu (+678)
                                                            </option>
                                                            <option value="58" label="Venezuela (+58)">Venezuela (+58)
                                                            </option>
                                                            <option value="84" label="Vietnam (+84)">Vietnam (+84)
                                                            </option>
                                                            <option value="1808" label="Wake Island (+1 808)">Wake
                                                                Island (+1 808)</option>
                                                            <option value="681" label="Wallis and Futuna (+681)">Wallis
                                                                and Futuna (+681)</option>
                                                            <option value="967" label="Yemen (+967)">Yemen (+967)
                                                            </option>
                                                            <option value="260" label="Zambia (+260)">Zambia (+260)
                                                            </option>
                                                            <option value="255" label="Zanzibar (+255)">Zanzibar (+255)
                                                            </option>
                                                            <option value="263" label="Zimbabwe (+263)">Zimbabwe (+263)
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label>شماره تلفن</label>
                                                        <input type="number" name="tel" placeholder=""
                                                            class="form-control" required="required">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade " id="sms">
                                            <h4>پیامک</h4>
                                            <div class="row">
                                                <div class="col-md-4 form-group">
                                                    <label>کد کشور</label>
                                                    <select class="form-select custom-select" name="countrycodesms">
                                                        <option value="" label="--">--</option>
                                                        <option value="7840" label="Abkhazia (+7 840)">Abkhazia (+7 840)
                                                        </option>
                                                        <option value="7940" label="Abkhazia (+7 940)">Abkhazia (+7 940)
                                                        </option>
                                                        <option value="93" label="Afghanistan (+93)">Afghanistan (+93)
                                                        </option>
                                                        <option value="355" label="Albania (+355)">Albania (+355)
                                                        </option>
                                                        <option value="213" label="Algeria (+213)">Algeria (+213)
                                                        </option>
                                                        <option value="1684" label="American Samoa (+1 684)">American
                                                            Samoa (+1 684)</option>
                                                        <option value="376" label="Andorra (+376)">Andorra (+376)
                                                        </option>
                                                        <option value="244" label="Angola (+244)">Angola (+244)</option>
                                                        <option value="1264" label="Anguilla (+1 264)">Anguilla (+1 264)
                                                        </option>
                                                        <option value="1268" label="Antigua and Barbuda (+1 268)">
                                                            Antigua and Barbuda (+1 268)</option>
                                                        <option value="54" label="Argentina (+54)">Argentina (+54)
                                                        </option>
                                                        <option value="374" label="Armenia (+374)">Armenia (+374)
                                                        </option>
                                                        <option value="297" label="Aruba (+297)">Aruba (+297)</option>
                                                        <option value="247" label="Ascension (+247)">Ascension (+247)
                                                        </option>
                                                        <option value="61" label="Australia (+61)">Australia (+61)
                                                        </option>
                                                        <option value="672"
                                                            label="Australian External Territories (+672)">Australian
                                                            External Territories (+672)</option>
                                                        <option value="43" label="Austria (+43)">Austria (+43)</option>
                                                        <option value="994" label="Azerbaijan (+994)">Azerbaijan (+994)
                                                        </option>
                                                        <option value="1242" label="Bahamas (+1 242)">Bahamas (+1 242)
                                                        </option>
                                                        <option value="973" label="Bahrain (+973)">Bahrain (+973)
                                                        </option>
                                                        <option value="880" label="Bangladesh (+880)">Bangladesh (+880)
                                                        </option>
                                                        <option value="1246" label="Barbados (+1 246)">Barbados (+1 246)
                                                        </option>
                                                        <option value="1268" label="Barbuda (+1 268)">Barbuda (+1 268)
                                                        </option>
                                                        <option value="375" label="Belarus (+375)">Belarus (+375)
                                                        </option>
                                                        <option value="32" label="Belgium (+32)">Belgium (+32)</option>
                                                        <option value="501" label="Belize (+501)">Belize (+501)</option>
                                                        <option value="229" label="Benin (+229)">Benin (+229)</option>
                                                        <option value="1441" label="Bermuda (+1 441)">Bermuda (+1 441)
                                                        </option>
                                                        <option value="975" label="Bhutan (+975)">Bhutan (+975)</option>
                                                        <option value="591" label="Bolivia (+591)">Bolivia (+591)
                                                        </option>
                                                        <option value="387" label="Bosnia and Herzegovina (+387)">Bosnia
                                                            and Herzegovina (+387)</option>
                                                        <option value="267" label="Botswana (+267)">Botswana (+267)
                                                        </option>
                                                        <option value="55" label="Brazil (+55)">Brazil (+55)</option>
                                                        <option value="246"
                                                            label="British Indian Ocean Territory (+246)">British Indian
                                                            Ocean Territory (+246)</option>
                                                        <option value="1284" label="British Virgin Islands (+1 284)">
                                                            British Virgin Islands (+1 284)</option>
                                                        <option value="673" label="Brunei (+673)">Brunei (+673)</option>
                                                        <option value="359" label="Bulgaria (+359)">Bulgaria (+359)
                                                        </option>
                                                        <option value="226" label="Burkina Faso (+226)">Burkina Faso
                                                            (+226)</option>
                                                        <option value="257" label="Burundi (+257)">Burundi (+257)
                                                        </option>
                                                        <option value="855" label="Cambodia (+855)">Cambodia (+855)
                                                        </option>
                                                        <option value="237" label="Cameroon (+237)">Cameroon (+237)
                                                        </option>
                                                        <option value="1" label="Canada (+1)">Canada (+1)</option>
                                                        <option value="238" label="Cape Verde (+238)">Cape Verde (+238)
                                                        </option>
                                                        <option value="345" label="Cayman Islands (+345)">Cayman Islands
                                                            (+345)</option>
                                                        <option value="236" label="Central African Republic (+236)">
                                                            Central African Republic (+236)</option>
                                                        <option value="235" label="Chad (+235)">Chad (+235)</option>
                                                        <option value="56" label="Chile (+56)">Chile (+56)</option>
                                                        <option value="86" label="China (+86)">China (+86)</option>
                                                        <option value="61" label="Christmas Island (+61)">Christmas
                                                            Island (+61)</option>
                                                        <option value="61" label="Cocos-Keeling Islands (+61)">
                                                            Cocos-Keeling Islands (+61)</option>
                                                        <option value="57" label="Colombia (+57)">Colombia (+57)
                                                        </option>
                                                        <option value="269" label="Comoros (+269)">Comoros (+269)
                                                        </option>
                                                        <option value="242" label="Congo (+242)">Congo (+242)</option>
                                                        <option value="243" label="Congo, Dem. Rep. of (Zaire) (+243)">
                                                            Congo, Dem. Rep. of (Zaire) (+243)</option>
                                                        <option value="682" label="Cook Islands (+682)">Cook Islands
                                                            (+682)</option>
                                                        <option value="506" label="Costa Rica (+506)">Costa Rica (+506)
                                                        </option>
                                                        <option value="225" label="Ivory Coast (+225)">Ivory Coast
                                                            (+225)</option>
                                                        <option value="385" label="Croatia (+385)">Croatia (+385)
                                                        </option>
                                                        <option value="53" label="Cuba (+53)">Cuba (+53)</option>
                                                        <option value="599" label="Curacao (+599)">Curacao (+599)
                                                        </option>
                                                        <option value="537" label="Cyprus (+537)">Cyprus (+537)</option>
                                                        <option value="420" label="Czech Republic (+420)">Czech Republic
                                                            (+420)</option>
                                                        <option value="45" label="Denmark (+45)">Denmark (+45)</option>
                                                        <option value="246" label="Diego Garcia (+246)">Diego Garcia
                                                            (+246)</option>
                                                        <option value="253" label="Djibouti (+253)">Djibouti (+253)
                                                        </option>
                                                        <option value="1767" label="Dominica (+1 767)">Dominica (+1 767)
                                                        </option>
                                                        <option value="1809" label="Dominican Republic (+1 809)">
                                                            Dominican Republic (+1 809)</option>
                                                        <option value="1829" label="Dominican Republic (+1 829)">
                                                            Dominican Republic (+1 829)</option>
                                                        <option value="1849" label="Dominican Republic (+1 849)">
                                                            Dominican Republic (+1 849)</option>
                                                        <option value="670" label="East Timor (+670)">East Timor (+670)
                                                        </option>
                                                        <option value="56" label="Easter Island (+56)">Easter Island
                                                            (+56)</option>
                                                        <option value="593" label="Ecuador (+593)">Ecuador (+593)
                                                        </option>
                                                        <option value="20" label="Egypt (+20)">Egypt (+20)</option>
                                                        <option value="503" label="El Salvador (+503)">El Salvador
                                                            (+503)</option>
                                                        <option value="240" label="Equatorial Guinea (+240)">Equatorial
                                                            Guinea (+240)</option>
                                                        <option value="291" label="Eritrea (+291)">Eritrea (+291)
                                                        </option>
                                                        <option value="372" label="Estonia (+372)">Estonia (+372)
                                                        </option>
                                                        <option value="251" label="Ethiopia (+251)">Ethiopia (+251)
                                                        </option>
                                                        <option value="500" label="Falkland Islands (+500)">Falkland
                                                            Islands (+500)</option>
                                                        <option value="298" label="Faroe Islands (+298)">Faroe Islands
                                                            (+298)</option>
                                                        <option value="679" label="Fiji (+679)">Fiji (+679)</option>
                                                        <option value="358" label="Finland (+358)">Finland (+358)
                                                        </option>
                                                        <option value="33" label="France (+33)">France (+33)</option>
                                                        <option value="596" label="French Antilles (+596)">French
                                                            Antilles (+596)</option>
                                                        <option value="594" label="French Guiana (+594)">French Guiana
                                                            (+594)</option>
                                                        <option value="689" label="French Polynesia (+689)">French
                                                            Polynesia (+689)</option>
                                                        <option value="241" label="Gabon (+241)">Gabon (+241)</option>
                                                        <option value="220" label="Gambia (+220)">Gambia (+220)</option>
                                                        <option value="995" label="Georgia (+995)">Georgia (+995)
                                                        </option>
                                                        <option value="49" label="Germany (+49)">Germany (+49)</option>
                                                        <option value="233" label="Ghana (+233)">Ghana (+233)</option>
                                                        <option value="350" label="Gibraltar (+350)">Gibraltar (+350)
                                                        </option>
                                                        <option value="30" label="Greece (+30)">Greece (+30)</option>
                                                        <option value="299" label="Greenland (+299)">Greenland (+299)
                                                        </option>
                                                        <option value="1473" label="Grenada (+1 473)">Grenada (+1 473)
                                                        </option>
                                                        <option value="590" label="Guadeloupe (+590)">Guadeloupe (+590)
                                                        </option>
                                                        <option value="1671" label="Guam (+1 671)">Guam (+1 671)
                                                        </option>
                                                        <option value="502" label="Guatemala (+502)">Guatemala (+502)
                                                        </option>
                                                        <option value="224" label="Guinea (+224)">Guinea (+224)</option>
                                                        <option value="245" label="Guinea-Bissau (+245)">Guinea-Bissau
                                                            (+245)</option>
                                                        <option value="595" label="Guyana (+595)">Guyana (+595)</option>
                                                        <option value="509" label="Haiti (+509)">Haiti (+509)</option>
                                                        <option value="504" label="Honduras (+504)">Honduras (+504)
                                                        </option>
                                                        <option value="852" label="Hong Kong SAR China (+852)">Hong Kong
                                                            SAR China (+852)</option>
                                                        <option value="248" label="Seychelles (+248)">Seychelles (+248)
                                                        </option>
                                                        <option value="354" label="Iceland (+354)">Iceland (+354)
                                                        </option>
                                                        <option value="91" label="India (+91)">India (+91)</option>
                                                        <option value="62" label="Indonesia (+62)">Indonesia (+62)
                                                        </option>
                                                        <option value="98" label="Iran (+98)">Iran (+98)</option>
                                                        <option value="964" label="Iraq (+964)">Iraq (+964)</option>
                                                        <option value="353" label="Ireland (+353)">Ireland (+353)
                                                        </option>
                                                        <option value="972" label="Israel (+972)">Israel (+972)</option>
                                                        <option value="39" label="Italy (+39)">Italy (+39)</option>
                                                        <option value="1876" label="Jamaica (+1 876)">Jamaica (+1 876)
                                                        </option>
                                                        <option value="81" label="Japan (+81)">Japan (+81)</option>
                                                        <option value="962" label="Jordan (+962)">Jordan (+962)</option>
                                                        <option value="77" label="Kazakhstan (+7 7)">Kazakhstan (+7 7)
                                                        </option>
                                                        <option value="254" label="Kenya (+254)">Kenya (+254)</option>
                                                        <option value="686" label="Kiribati (+686)">Kiribati (+686)
                                                        </option>
                                                        <option value="850" label="North Korea (+850)">North Korea
                                                            (+850)</option>
                                                        <option value="82" label="South Korea (+82)">South Korea (+82)
                                                        </option>
                                                        <option value="965" label="Kuwait (+965)">Kuwait (+965)</option>
                                                        <option value="996" label="Kyrgyzstan (+996)">Kyrgyzstan (+996)
                                                        </option>
                                                        <option value="856" label="Laos (+856)">Laos (+856)</option>
                                                        <option value="371" label="Latvia (+371)">Latvia (+371)</option>
                                                        <option value="961" label="Lebanon (+961)">Lebanon (+961)
                                                        </option>
                                                        <option value="266" label="Lesotho (+266)">Lesotho (+266)
                                                        </option>
                                                        <option value="231" label="Liberia (+231)">Liberia (+231)
                                                        </option>
                                                        <option value="218" label="Libya (+218)">Libya (+218)</option>
                                                        <option value="423" label="Liechtenstein (+423)">Liechtenstein
                                                            (+423)</option>
                                                        <option value="370" label="Lithuania (+370)">Lithuania (+370)
                                                        </option>
                                                        <option value="352" label="Luxembourg (+352)">Luxembourg (+352)
                                                        </option>
                                                        <option value="853" label="Macau SAR China (+853)">Macau SAR
                                                            China (+853)</option>
                                                        <option value="389" label="Macedonia (+389)">Macedonia (+389)
                                                        </option>
                                                        <option value="261" label="Madagascar (+261)">Madagascar (+261)
                                                        </option>
                                                        <option value="265" label="Malawi (+265)">Malawi (+265)</option>
                                                        <option value="60" label="Malaysia (+60)">Malaysia (+60)
                                                        </option>
                                                        <option value="960" label="Maldives (+960)">Maldives (+960)
                                                        </option>
                                                        <option value="223" label="Mali (+223)">Mali (+223)</option>
                                                        <option value="356" label="Malta (+356)">Malta (+356)</option>
                                                        <option value="692" label="Marshall Islands (+692)">Marshall
                                                            Islands (+692)</option>
                                                        <option value="596" label="Martinique (+596)">Martinique (+596)
                                                        </option>
                                                        <option value="222" label="Mauritania (+222)">Mauritania (+222)
                                                        </option>
                                                        <option value="230" label="Mauritius (+230)">Mauritius (+230)
                                                        </option>
                                                        <option value="262" label="Mayotte (+262)">Mayotte (+262)
                                                        </option>
                                                        <option value="52" label="Mexico (+52)">Mexico (+52)</option>
                                                        <option value="691" label="Micronesia (+691)">Micronesia (+691)
                                                        </option>
                                                        <option value="1808" label="Midway Island (+1 808)">Midway
                                                            Island (+1 808)</option>
                                                        <option value="691" label="Micronesia (+691)">Micronesia (+691)
                                                        </option>
                                                        <option value="373" label="Moldova (+373)">Moldova (+373)
                                                        </option>
                                                        <option value="377" label="Monaco (+377)">Monaco (+377)</option>
                                                        <option value="976" label="Mongolia (+976)">Mongolia (+976)
                                                        </option>
                                                        <option value="382" label="Montenegro (+382)">Montenegro (+382)
                                                        </option>
                                                        <option value="1664" label="Montserrat (+1664)">Montserrat
                                                            (+1664)</option>
                                                        <option value="212" label="Morocco (+212)">Morocco (+212)
                                                        </option>
                                                        <option value="95" label="Myanmar (+95)">Myanmar (+95)</option>
                                                        <option value="264" label="Namibia (+264)">Namibia (+264)
                                                        </option>
                                                        <option value="674" label="Nauru (+674)">Nauru (+674)</option>
                                                        <option value="977" label="Nepal (+977)">Nepal (+977)</option>
                                                        <option value="31" label="Netherlands (+31)">Netherlands (+31)
                                                        </option>
                                                        <option value="599" label="Netherlands Antilles (+599)">
                                                            Netherlands Antilles (+599)</option>
                                                        <option value="1869" label="Nevis (+1 869)">Nevis (+1 869)
                                                        </option>
                                                        <option value="687" label="New Caledonia (+687)">New Caledonia
                                                            (+687)</option>
                                                        <option value="64" label="New Zealand (64)">New Zealand (64)
                                                        </option>
                                                        <option value="505" label="Nicaragua (+505)">Nicaragua (+505)
                                                        </option>
                                                        <option value="227" label="Niger (+227)">Niger (+227)</option>
                                                        <option value="234" label="Nigeria (+234)">Nigeria (+234)
                                                        </option>
                                                        <option value="683" label="Niue (+683)">Niue (+683)</option>
                                                        <option value="672" label="Norfolk Island (+672)">Norfolk Island
                                                            (+672)</option>
                                                        <option value="1670" label="Northern Mariana Islands (+1 670)">
                                                            Northern Mariana Islands (+1 670)</option>
                                                        <option value="47" label="Norway (+47)">Norway (+47)</option>
                                                        <option value="968" label="Oman (+968)">Oman (+968)</option>
                                                        <option value="92" label="Pakistan (+92)">Pakistan (+92)
                                                        </option>
                                                        <option value="680" label="Palau (+680)">Palau (+680)</option>
                                                        <option value="970" label="Palestinian Territory (+970)">
                                                            Palestinian Territory (+970)</option>
                                                        <option value="507" label="Panama (+507)">Panama (+507)</option>
                                                        <option value="675" label="Papua New Guinea (+675)">Papua New
                                                            Guinea (+675)</option>
                                                        <option value="595" label="Paraguay (+595)">Paraguay (+595)
                                                        </option>
                                                        <option value="51" label="Peru (+51)">Peru (+51)</option>
                                                        <option value="63" label="Philippines (+63)">Philippines (+63)
                                                        </option>
                                                        <option value="48" label="Poland (+48)">Poland (+48)</option>
                                                        <option value="351" label="Portugal (+351)">Portugal (+351)
                                                        </option>
                                                        <option value="1787" label="Puerto Rico (+1 787)">Puerto Rico
                                                            (+1 787)</option>
                                                        <option value="1939" label="Puerto Rico (+1 939)">Puerto Rico
                                                            (+1 939)</option>
                                                        <option value="974" label="Qatar (+974)">Qatar (+974)</option>
                                                        <option value="262" label="Reunion (+262)">Reunion (+262)
                                                        </option>
                                                        <option value="40" label="Romania (+40)">Romania (+40)</option>
                                                        <option value="7" label="Russia (+7)">Russia (+7)</option>
                                                        <option value="250" label="Rwanda (+250)">Rwanda (+250)</option>
                                                        <option value="685" label="Samoa (+685)">Samoa (+685)</option>
                                                        <option value="378" label="San Marino (+378)">San Marino (+378)
                                                        </option>
                                                        <option value="966" label="Saudi Arabia (+966)">Saudi Arabia
                                                            (+966)</option>
                                                        <option value="221" label="Senegal (+221)">Senegal (+221)
                                                        </option>
                                                        <option value="381" label="Serbia (+381)">Serbia (+381)</option>
                                                        <option value="232" label="Sierra Leone (+232)">Sierra Leone
                                                            (+232)</option>
                                                        <option value="65" label="Singapore (+65)">Singapore (+65)
                                                        </option>
                                                        <option value="421" label="Slovakia (+421)">Slovakia (+421)
                                                        </option>
                                                        <option value="386" label="Slovenia (+386)">Slovenia (+386)
                                                        </option>
                                                        <option value="677" label="Solomon Islands (+677)">Solomon
                                                            Islands (+677)</option>
                                                        <option value="27" label="South Africa (+27)">South Africa (+27)
                                                        </option>
                                                        <option value="500"
                                                            label="South Georgia and the South Sandwich Islands (+500)">
                                                            South Georgia and the South Sandwich Islands (+500)</option>
                                                        <option value="34" label="Spain (+34)">Spain (+34)</option>
                                                        <option value="94" label="Sri Lanka (+94)">Sri Lanka (+94)
                                                        </option>
                                                        <option value="249" label="Sudan (+249)">Sudan (+249)</option>
                                                        <option value="597" label="Suriname (+597)">Suriname (+597)
                                                        </option>
                                                        <option value="268" label="Swaziland (+268)">Swaziland (+268)
                                                        </option>
                                                        <option value="46" label="Sweden (+46)">Sweden (+46)</option>
                                                        <option value="41" label="Switzerland (+41)">Switzerland (+41)
                                                        </option>
                                                        <option value="963" label="Syria (+963)">Syria (+963)</option>
                                                        <option value="886" label="Taiwan (+886)">Taiwan (+886)</option>
                                                        <option value="992" label="Tajikistan (+992)">Tajikistan (+992)
                                                        </option>
                                                        <option value="255" label="Tanzania (+255)">Tanzania (+255)
                                                        </option>
                                                        <option value="66" label="Thailand (+66)">Thailand (+66)
                                                        </option>
                                                        <option value="670" label="Timor Leste (+670)">Timor Leste
                                                            (+670)</option>
                                                        <option value="228" label="Togo (+228)">Togo (+228)</option>
                                                        <option value="690" label="Tokelau (+690)">Tokelau (+690)
                                                        </option>
                                                        <option value="676" label="Tonga (+676)">Tonga (+676)</option>
                                                        <option value="1868" label="Trinidad and Tobago (+1 868)">
                                                            Trinidad and Tobago (+1 868)</option>
                                                        <option value="216" label="Tunisia (+216)">Tunisia (+216)
                                                        </option>
                                                        <option value="90" label="Turkey (+90)">Turkey (+90)</option>
                                                        <option value="993" label="Turkmenistan (+993)">Turkmenistan
                                                            (+993)</option>
                                                        <option value="1649" label="Turks and Caicos Islands (+1 649)">
                                                            Turks and Caicos Islands (+1 649)</option>
                                                        <option value="688" label="Tuvalu (+688)">Tuvalu (+688)</option>
                                                        <option value="256" label="Uganda (+256)">Uganda (+256)</option>
                                                        <option value="380" label="Ukraine (+380)">Ukraine (+380)
                                                        </option>
                                                        <option value="971" label="United Arab Emirates (+971)">United
                                                            Arab Emirates (+971)</option>
                                                        <option value="44" label="United Kingdom (+44)">United Kingdom
                                                            (+44)</option>
                                                        <option value="1" label="United States (+1)">United States (+1)
                                                        </option>
                                                        <option value="598" label="Uruguay (+598)">Uruguay (+598)
                                                        </option>
                                                        <option value="1340" label="U.S. Virgin Islands (+1 340)">U.S.
                                                            Virgin Islands (+1 340)</option>
                                                        <option value="998" label="Uzbekistan (+998)">Uzbekistan (+998)
                                                        </option>
                                                        <option value="678" label="Vanuatu (+678)">Vanuatu (+678)
                                                        </option>
                                                        <option value="58" label="Venezuela (+58)">Venezuela (+58)
                                                        </option>
                                                        <option value="84" label="Vietnam (+84)">Vietnam (+84)</option>
                                                        <option value="1808" label="Wake Island (+1 808)">Wake Island
                                                            (+1 808)</option>
                                                        <option value="681" label="Wallis and Futuna (+681)">Wallis and
                                                            Futuna (+681)</option>
                                                        <option value="967" label="Yemen (+967)">Yemen (+967)</option>
                                                        <option value="260" label="Zambia (+260)">Zambia (+260)</option>
                                                        <option value="255" label="Zanzibar (+255)">Zanzibar (+255)
                                                        </option>
                                                        <option value="263" label="Zimbabwe (+263)">Zimbabwe (+263)
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <label>شماره تلفن</label>
                                                    <input type="number" name="sms" placeholder="" class="form-control"
                                                        required="required">
                                                </div>
                                                <div class="col-12 form-group">
                                                    <label>پیام</label>
                                                    <textarea rows="3" name="bodysms" class="form-control"
                                                        maxlength="160"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade " id="wifi">
                                            <h4>وای‌فای</h4>
                                            <div class="row form-group">
                                                <div class="col-md-4">
                                                    <label>نام شبکه</label>
                                                    <input type="text" name="ssid" placeholder="SSID"
                                                        class="form-control" required="required">
                                                </div>
                                                <div class="col-md-4">
                                                    <label>نوع شبکه</label>
                                                    <select class="form-select custom-select" name="networktype">
                                                        <option value="WEP">WEP</option>
                                                        <option value="WPA">WPA/WPA2</option>
                                                        <option value="">No encryption</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>رمز</label>
                                                    <input type="text" name="wifipass" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-12">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="wifihidden" name="wifihidden">
                                                        <label class="custom-control-label"
                                                            for="wifihidden">مخفی</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade " id="vcard">
                                            <h4>کارت ویزیت</h4>
                                            <div class="row">
                                                <div class="col-12 form-group">
                                                    <label>نسخه</label>
                                                    <select class="form-select custom-select" name="vversion">
                                                        <option value="2.1">2.1</option>
                                                        <option value="3.0">3.0</option>
                                                        <!--
                  <option value="4.0">4.0</option>
                    -->
                                                    </select>
                                                </div>

                                                <div class="col-md-2 form-group">
                                                    <label>عنوان</label>
                                                    <input type="text" name="vnametitle" class="form-control">
                                                </div>
                                                <div class="col-md-5 form-group">
                                                    <label>نام</label>
                                                    <input type="text" name="vname" class="form-control"
                                                        required="required">
                                                </div>
                                                <div class="col-md-5 form-group">
                                                    <label>نام خانوادگی</label>
                                                    <input type="text" name="vlast" class="form-control">
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <label>شماره منزل</label>
                                                    <div class="row no-gutters">
                                                        <div class="col-4">
                                                            <select class="form-select custom-select"
                                                                name="countrycodevphone">
                                                                <option value="" label="--">--</option>
                                                                <option value="7840" label="Abkhazia (+7 840)">Abkhazia
                                                                    (+7 840)</option>
                                                                <option value="7940" label="Abkhazia (+7 940)">Abkhazia
                                                                    (+7 940)</option>
                                                                <option value="93" label="Afghanistan (+93)">Afghanistan
                                                                    (+93)</option>
                                                                <option value="355" label="Albania (+355)">Albania
                                                                    (+355)</option>
                                                                <option value="213" label="Algeria (+213)">Algeria
                                                                    (+213)</option>
                                                                <option value="1684" label="American Samoa (+1 684)">
                                                                    American Samoa (+1 684)</option>
                                                                <option value="376" label="Andorra (+376)">Andorra
                                                                    (+376)</option>
                                                                <option value="244" label="Angola (+244)">Angola (+244)
                                                                </option>
                                                                <option value="1264" label="Anguilla (+1 264)">Anguilla
                                                                    (+1 264)</option>
                                                                <option value="1268"
                                                                    label="Antigua and Barbuda (+1 268)">Antigua and
                                                                    Barbuda (+1 268)</option>
                                                                <option value="54" label="Argentina (+54)">Argentina
                                                                    (+54)</option>
                                                                <option value="374" label="Armenia (+374)">Armenia
                                                                    (+374)</option>
                                                                <option value="297" label="Aruba (+297)">Aruba (+297)
                                                                </option>
                                                                <option value="247" label="Ascension (+247)">Ascension
                                                                    (+247)</option>
                                                                <option value="61" label="Australia (+61)">Australia
                                                                    (+61)</option>
                                                                <option value="672"
                                                                    label="Australian External Territories (+672)">
                                                                    Australian External Territories (+672)</option>
                                                                <option value="43" label="Austria (+43)">Austria (+43)
                                                                </option>
                                                                <option value="994" label="Azerbaijan (+994)">Azerbaijan
                                                                    (+994)</option>
                                                                <option value="1242" label="Bahamas (+1 242)">Bahamas
                                                                    (+1 242)</option>
                                                                <option value="973" label="Bahrain (+973)">Bahrain
                                                                    (+973)</option>
                                                                <option value="880" label="Bangladesh (+880)">Bangladesh
                                                                    (+880)</option>
                                                                <option value="1246" label="Barbados (+1 246)">Barbados
                                                                    (+1 246)</option>
                                                                <option value="1268" label="Barbuda (+1 268)">Barbuda
                                                                    (+1 268)</option>
                                                                <option value="375" label="Belarus (+375)">Belarus
                                                                    (+375)</option>
                                                                <option value="32" label="Belgium (+32)">Belgium (+32)
                                                                </option>
                                                                <option value="501" label="Belize (+501)">Belize (+501)
                                                                </option>
                                                                <option value="229" label="Benin (+229)">Benin (+229)
                                                                </option>
                                                                <option value="1441" label="Bermuda (+1 441)">Bermuda
                                                                    (+1 441)</option>
                                                                <option value="975" label="Bhutan (+975)">Bhutan (+975)
                                                                </option>
                                                                <option value="591" label="Bolivia (+591)">Bolivia
                                                                    (+591)</option>
                                                                <option value="387"
                                                                    label="Bosnia and Herzegovina (+387)">Bosnia and
                                                                    Herzegovina (+387)</option>
                                                                <option value="267" label="Botswana (+267)">Botswana
                                                                    (+267)</option>
                                                                <option value="55" label="Brazil (+55)">Brazil (+55)
                                                                </option>
                                                                <option value="246"
                                                                    label="British Indian Ocean Territory (+246)">
                                                                    British Indian Ocean Territory (+246)</option>
                                                                <option value="1284"
                                                                    label="British Virgin Islands (+1 284)">British
                                                                    Virgin Islands (+1 284)</option>
                                                                <option value="673" label="Brunei (+673)">Brunei (+673)
                                                                </option>
                                                                <option value="359" label="Bulgaria (+359)">Bulgaria
                                                                    (+359)</option>
                                                                <option value="226" label="Burkina Faso (+226)">Burkina
                                                                    Faso (+226)</option>
                                                                <option value="257" label="Burundi (+257)">Burundi
                                                                    (+257)</option>
                                                                <option value="855" label="Cambodia (+855)">Cambodia
                                                                    (+855)</option>
                                                                <option value="237" label="Cameroon (+237)">Cameroon
                                                                    (+237)</option>
                                                                <option value="1" label="Canada (+1)">Canada (+1)
                                                                </option>
                                                                <option value="238" label="Cape Verde (+238)">Cape Verde
                                                                    (+238)</option>
                                                                <option value="345" label="Cayman Islands (+345)">Cayman
                                                                    Islands (+345)</option>
                                                                <option value="236"
                                                                    label="Central African Republic (+236)">Central
                                                                    African Republic (+236)</option>
                                                                <option value="235" label="Chad (+235)">Chad (+235)
                                                                </option>
                                                                <option value="56" label="Chile (+56)">Chile (+56)
                                                                </option>
                                                                <option value="86" label="China (+86)">China (+86)
                                                                </option>
                                                                <option value="61" label="Christmas Island (+61)">
                                                                    Christmas Island (+61)</option>
                                                                <option value="61" label="Cocos-Keeling Islands (+61)">
                                                                    Cocos-Keeling Islands (+61)</option>
                                                                <option value="57" label="Colombia (+57)">Colombia (+57)
                                                                </option>
                                                                <option value="269" label="Comoros (+269)">Comoros
                                                                    (+269)</option>
                                                                <option value="242" label="Congo (+242)">Congo (+242)
                                                                </option>
                                                                <option value="243"
                                                                    label="Congo, Dem. Rep. of (Zaire) (+243)">Congo,
                                                                    Dem. Rep. of (Zaire) (+243)</option>
                                                                <option value="682" label="Cook Islands (+682)">Cook
                                                                    Islands (+682)</option>
                                                                <option value="506" label="Costa Rica (+506)">Costa Rica
                                                                    (+506)</option>
                                                                <option value="225" label="Ivory Coast (+225)">Ivory
                                                                    Coast (+225)</option>
                                                                <option value="385" label="Croatia (+385)">Croatia
                                                                    (+385)</option>
                                                                <option value="53" label="Cuba (+53)">Cuba (+53)
                                                                </option>
                                                                <option value="599" label="Curacao (+599)">Curacao
                                                                    (+599)</option>
                                                                <option value="537" label="Cyprus (+537)">Cyprus (+537)
                                                                </option>
                                                                <option value="420" label="Czech Republic (+420)">Czech
                                                                    Republic (+420)</option>
                                                                <option value="45" label="Denmark (+45)">Denmark (+45)
                                                                </option>
                                                                <option value="246" label="Diego Garcia (+246)">Diego
                                                                    Garcia (+246)</option>
                                                                <option value="253" label="Djibouti (+253)">Djibouti
                                                                    (+253)</option>
                                                                <option value="1767" label="Dominica (+1 767)">Dominica
                                                                    (+1 767)</option>
                                                                <option value="1809"
                                                                    label="Dominican Republic (+1 809)">Dominican
                                                                    Republic (+1 809)</option>
                                                                <option value="1829"
                                                                    label="Dominican Republic (+1 829)">Dominican
                                                                    Republic (+1 829)</option>
                                                                <option value="1849"
                                                                    label="Dominican Republic (+1 849)">Dominican
                                                                    Republic (+1 849)</option>
                                                                <option value="670" label="East Timor (+670)">East Timor
                                                                    (+670)</option>
                                                                <option value="56" label="Easter Island (+56)">Easter
                                                                    Island (+56)</option>
                                                                <option value="593" label="Ecuador (+593)">Ecuador
                                                                    (+593)</option>
                                                                <option value="20" label="Egypt (+20)">Egypt (+20)
                                                                </option>
                                                                <option value="503" label="El Salvador (+503)">El
                                                                    Salvador (+503)</option>
                                                                <option value="240" label="Equatorial Guinea (+240)">
                                                                    Equatorial Guinea (+240)</option>
                                                                <option value="291" label="Eritrea (+291)">Eritrea
                                                                    (+291)</option>
                                                                <option value="372" label="Estonia (+372)">Estonia
                                                                    (+372)</option>
                                                                <option value="251" label="Ethiopia (+251)">Ethiopia
                                                                    (+251)</option>
                                                                <option value="500" label="Falkland Islands (+500)">
                                                                    Falkland Islands (+500)</option>
                                                                <option value="298" label="Faroe Islands (+298)">Faroe
                                                                    Islands (+298)</option>
                                                                <option value="679" label="Fiji (+679)">Fiji (+679)
                                                                </option>
                                                                <option value="358" label="Finland (+358)">Finland
                                                                    (+358)</option>
                                                                <option value="33" label="France (+33)">France (+33)
                                                                </option>
                                                                <option value="596" label="French Antilles (+596)">
                                                                    French Antilles (+596)</option>
                                                                <option value="594" label="French Guiana (+594)">French
                                                                    Guiana (+594)</option>
                                                                <option value="689" label="French Polynesia (+689)">
                                                                    French Polynesia (+689)</option>
                                                                <option value="241" label="Gabon (+241)">Gabon (+241)
                                                                </option>
                                                                <option value="220" label="Gambia (+220)">Gambia (+220)
                                                                </option>
                                                                <option value="995" label="Georgia (+995)">Georgia
                                                                    (+995)</option>
                                                                <option value="49" label="Germany (+49)">Germany (+49)
                                                                </option>
                                                                <option value="233" label="Ghana (+233)">Ghana (+233)
                                                                </option>
                                                                <option value="350" label="Gibraltar (+350)">Gibraltar
                                                                    (+350)</option>
                                                                <option value="30" label="Greece (+30)">Greece (+30)
                                                                </option>
                                                                <option value="299" label="Greenland (+299)">Greenland
                                                                    (+299)</option>
                                                                <option value="1473" label="Grenada (+1 473)">Grenada
                                                                    (+1 473)</option>
                                                                <option value="590" label="Guadeloupe (+590)">Guadeloupe
                                                                    (+590)</option>
                                                                <option value="1671" label="Guam (+1 671)">Guam (+1 671)
                                                                </option>
                                                                <option value="502" label="Guatemala (+502)">Guatemala
                                                                    (+502)</option>
                                                                <option value="224" label="Guinea (+224)">Guinea (+224)
                                                                </option>
                                                                <option value="245" label="Guinea-Bissau (+245)">
                                                                    Guinea-Bissau (+245)</option>
                                                                <option value="595" label="Guyana (+595)">Guyana (+595)
                                                                </option>
                                                                <option value="509" label="Haiti (+509)">Haiti (+509)
                                                                </option>
                                                                <option value="504" label="Honduras (+504)">Honduras
                                                                    (+504)</option>
                                                                <option value="852" label="Hong Kong SAR China (+852)">
                                                                    Hong Kong SAR China (+852)</option>
                                                                <option value="248" label="Seychelles (+248)">Seychelles
                                                                    (+248)</option>
                                                                <option value="354" label="Iceland (+354)">Iceland
                                                                    (+354)</option>
                                                                <option value="91" label="India (+91)">India (+91)
                                                                </option>
                                                                <option value="62" label="Indonesia (+62)">Indonesia
                                                                    (+62)</option>
                                                                <option value="98" label="Iran (+98)">Iran (+98)
                                                                </option>
                                                                <option value="964" label="Iraq (+964)">Iraq (+964)
                                                                </option>
                                                                <option value="353" label="Ireland (+353)">Ireland
                                                                    (+353)</option>
                                                                <option value="972" label="Israel (+972)">Israel (+972)
                                                                </option>
                                                                <option value="39" label="Italy (+39)">Italy (+39)
                                                                </option>
                                                                <option value="1876" label="Jamaica (+1 876)">Jamaica
                                                                    (+1 876)</option>
                                                                <option value="81" label="Japan (+81)">Japan (+81)
                                                                </option>
                                                                <option value="962" label="Jordan (+962)">Jordan (+962)
                                                                </option>
                                                                <option value="77" label="Kazakhstan (+7 7)">Kazakhstan
                                                                    (+7 7)</option>
                                                                <option value="254" label="Kenya (+254)">Kenya (+254)
                                                                </option>
                                                                <option value="686" label="Kiribati (+686)">Kiribati
                                                                    (+686)</option>
                                                                <option value="850" label="North Korea (+850)">North
                                                                    Korea (+850)</option>
                                                                <option value="82" label="South Korea (+82)">South Korea
                                                                    (+82)</option>
                                                                <option value="965" label="Kuwait (+965)">Kuwait (+965)
                                                                </option>
                                                                <option value="996" label="Kyrgyzstan (+996)">Kyrgyzstan
                                                                    (+996)</option>
                                                                <option value="856" label="Laos (+856)">Laos (+856)
                                                                </option>
                                                                <option value="371" label="Latvia (+371)">Latvia (+371)
                                                                </option>
                                                                <option value="961" label="Lebanon (+961)">Lebanon
                                                                    (+961)</option>
                                                                <option value="266" label="Lesotho (+266)">Lesotho
                                                                    (+266)</option>
                                                                <option value="231" label="Liberia (+231)">Liberia
                                                                    (+231)</option>
                                                                <option value="218" label="Libya (+218)">Libya (+218)
                                                                </option>
                                                                <option value="423" label="Liechtenstein (+423)">
                                                                    Liechtenstein (+423)</option>
                                                                <option value="370" label="Lithuania (+370)">Lithuania
                                                                    (+370)</option>
                                                                <option value="352" label="Luxembourg (+352)">Luxembourg
                                                                    (+352)</option>
                                                                <option value="853" label="Macau SAR China (+853)">Macau
                                                                    SAR China (+853)</option>
                                                                <option value="389" label="Macedonia (+389)">Macedonia
                                                                    (+389)</option>
                                                                <option value="261" label="Madagascar (+261)">Madagascar
                                                                    (+261)</option>
                                                                <option value="265" label="Malawi (+265)">Malawi (+265)
                                                                </option>
                                                                <option value="60" label="Malaysia (+60)">Malaysia (+60)
                                                                </option>
                                                                <option value="960" label="Maldives (+960)">Maldives
                                                                    (+960)</option>
                                                                <option value="223" label="Mali (+223)">Mali (+223)
                                                                </option>
                                                                <option value="356" label="Malta (+356)">Malta (+356)
                                                                </option>
                                                                <option value="692" label="Marshall Islands (+692)">
                                                                    Marshall Islands (+692)</option>
                                                                <option value="596" label="Martinique (+596)">Martinique
                                                                    (+596)</option>
                                                                <option value="222" label="Mauritania (+222)">Mauritania
                                                                    (+222)</option>
                                                                <option value="230" label="Mauritius (+230)">Mauritius
                                                                    (+230)</option>
                                                                <option value="262" label="Mayotte (+262)">Mayotte
                                                                    (+262)</option>
                                                                <option value="52" label="Mexico (+52)">Mexico (+52)
                                                                </option>
                                                                <option value="691" label="Micronesia (+691)">Micronesia
                                                                    (+691)</option>
                                                                <option value="1808" label="Midway Island (+1 808)">
                                                                    Midway Island (+1 808)</option>
                                                                <option value="691" label="Micronesia (+691)">Micronesia
                                                                    (+691)</option>
                                                                <option value="373" label="Moldova (+373)">Moldova
                                                                    (+373)</option>
                                                                <option value="377" label="Monaco (+377)">Monaco (+377)
                                                                </option>
                                                                <option value="976" label="Mongolia (+976)">Mongolia
                                                                    (+976)</option>
                                                                <option value="382" label="Montenegro (+382)">Montenegro
                                                                    (+382)</option>
                                                                <option value="1664" label="Montserrat (+1664)">
                                                                    Montserrat (+1664)</option>
                                                                <option value="212" label="Morocco (+212)">Morocco
                                                                    (+212)</option>
                                                                <option value="95" label="Myanmar (+95)">Myanmar (+95)
                                                                </option>
                                                                <option value="264" label="Namibia (+264)">Namibia
                                                                    (+264)</option>
                                                                <option value="674" label="Nauru (+674)">Nauru (+674)
                                                                </option>
                                                                <option value="977" label="Nepal (+977)">Nepal (+977)
                                                                </option>
                                                                <option value="31" label="Netherlands (+31)">Netherlands
                                                                    (+31)</option>
                                                                <option value="599" label="Netherlands Antilles (+599)">
                                                                    Netherlands Antilles (+599)</option>
                                                                <option value="1869" label="Nevis (+1 869)">Nevis (+1
                                                                    869)</option>
                                                                <option value="687" label="New Caledonia (+687)">New
                                                                    Caledonia (+687)</option>
                                                                <option value="64" label="New Zealand (64)">New Zealand
                                                                    (64)</option>
                                                                <option value="505" label="Nicaragua (+505)">Nicaragua
                                                                    (+505)</option>
                                                                <option value="227" label="Niger (+227)">Niger (+227)
                                                                </option>
                                                                <option value="234" label="Nigeria (+234)">Nigeria
                                                                    (+234)</option>
                                                                <option value="683" label="Niue (+683)">Niue (+683)
                                                                </option>
                                                                <option value="672" label="Norfolk Island (+672)">
                                                                    Norfolk Island (+672)</option>
                                                                <option value="1670"
                                                                    label="Northern Mariana Islands (+1 670)">Northern
                                                                    Mariana Islands (+1 670)</option>
                                                                <option value="47" label="Norway (+47)">Norway (+47)
                                                                </option>
                                                                <option value="968" label="Oman (+968)">Oman (+968)
                                                                </option>
                                                                <option value="92" label="Pakistan (+92)">Pakistan (+92)
                                                                </option>
                                                                <option value="680" label="Palau (+680)">Palau (+680)
                                                                </option>
                                                                <option value="970"
                                                                    label="Palestinian Territory (+970)">Palestinian
                                                                    Territory (+970)</option>
                                                                <option value="507" label="Panama (+507)">Panama (+507)
                                                                </option>
                                                                <option value="675" label="Papua New Guinea (+675)">
                                                                    Papua New Guinea (+675)</option>
                                                                <option value="595" label="Paraguay (+595)">Paraguay
                                                                    (+595)</option>
                                                                <option value="51" label="Peru (+51)">Peru (+51)
                                                                </option>
                                                                <option value="63" label="Philippines (+63)">Philippines
                                                                    (+63)</option>
                                                                <option value="48" label="Poland (+48)">Poland (+48)
                                                                </option>
                                                                <option value="351" label="Portugal (+351)">Portugal
                                                                    (+351)</option>
                                                                <option value="1787" label="Puerto Rico (+1 787)">Puerto
                                                                    Rico (+1 787)</option>
                                                                <option value="1939" label="Puerto Rico (+1 939)">Puerto
                                                                    Rico (+1 939)</option>
                                                                <option value="974" label="Qatar (+974)">Qatar (+974)
                                                                </option>
                                                                <option value="262" label="Reunion (+262)">Reunion
                                                                    (+262)</option>
                                                                <option value="40" label="Romania (+40)">Romania (+40)
                                                                </option>
                                                                <option value="7" label="Russia (+7)">Russia (+7)
                                                                </option>
                                                                <option value="250" label="Rwanda (+250)">Rwanda (+250)
                                                                </option>
                                                                <option value="685" label="Samoa (+685)">Samoa (+685)
                                                                </option>
                                                                <option value="378" label="San Marino (+378)">San Marino
                                                                    (+378)</option>
                                                                <option value="966" label="Saudi Arabia (+966)">Saudi
                                                                    Arabia (+966)</option>
                                                                <option value="221" label="Senegal (+221)">Senegal
                                                                    (+221)</option>
                                                                <option value="381" label="Serbia (+381)">Serbia (+381)
                                                                </option>
                                                                <option value="232" label="Sierra Leone (+232)">Sierra
                                                                    Leone (+232)</option>
                                                                <option value="65" label="Singapore (+65)">Singapore
                                                                    (+65)</option>
                                                                <option value="421" label="Slovakia (+421)">Slovakia
                                                                    (+421)</option>
                                                                <option value="386" label="Slovenia (+386)">Slovenia
                                                                    (+386)</option>
                                                                <option value="677" label="Solomon Islands (+677)">
                                                                    Solomon Islands (+677)</option>
                                                                <option value="27" label="South Africa (+27)">South
                                                                    Africa (+27)</option>
                                                                <option value="500"
                                                                    label="South Georgia and the South Sandwich Islands (+500)">
                                                                    South Georgia and the South Sandwich Islands (+500)
                                                                </option>
                                                                <option value="34" label="Spain (+34)">Spain (+34)
                                                                </option>
                                                                <option value="94" label="Sri Lanka (+94)">Sri Lanka
                                                                    (+94)</option>
                                                                <option value="249" label="Sudan (+249)">Sudan (+249)
                                                                </option>
                                                                <option value="597" label="Suriname (+597)">Suriname
                                                                    (+597)</option>
                                                                <option value="268" label="Swaziland (+268)">Swaziland
                                                                    (+268)</option>
                                                                <option value="46" label="Sweden (+46)">Sweden (+46)
                                                                </option>
                                                                <option value="41" label="Switzerland (+41)">Switzerland
                                                                    (+41)</option>
                                                                <option value="963" label="Syria (+963)">Syria (+963)
                                                                </option>
                                                                <option value="886" label="Taiwan (+886)">Taiwan (+886)
                                                                </option>
                                                                <option value="992" label="Tajikistan (+992)">Tajikistan
                                                                    (+992)</option>
                                                                <option value="255" label="Tanzania (+255)">Tanzania
                                                                    (+255)</option>
                                                                <option value="66" label="Thailand (+66)">Thailand (+66)
                                                                </option>
                                                                <option value="670" label="Timor Leste (+670)">Timor
                                                                    Leste (+670)</option>
                                                                <option value="228" label="Togo (+228)">Togo (+228)
                                                                </option>
                                                                <option value="690" label="Tokelau (+690)">Tokelau
                                                                    (+690)</option>
                                                                <option value="676" label="Tonga (+676)">Tonga (+676)
                                                                </option>
                                                                <option value="1868"
                                                                    label="Trinidad and Tobago (+1 868)">Trinidad and
                                                                    Tobago (+1 868)</option>
                                                                <option value="216" label="Tunisia (+216)">Tunisia
                                                                    (+216)</option>
                                                                <option value="90" label="Turkey (+90)">Turkey (+90)
                                                                </option>
                                                                <option value="993" label="Turkmenistan (+993)">
                                                                    Turkmenistan (+993)</option>
                                                                <option value="1649"
                                                                    label="Turks and Caicos Islands (+1 649)">Turks and
                                                                    Caicos Islands (+1 649)</option>
                                                                <option value="688" label="Tuvalu (+688)">Tuvalu (+688)
                                                                </option>
                                                                <option value="256" label="Uganda (+256)">Uganda (+256)
                                                                </option>
                                                                <option value="380" label="Ukraine (+380)">Ukraine
                                                                    (+380)</option>
                                                                <option value="971" label="United Arab Emirates (+971)">
                                                                    United Arab Emirates (+971)</option>
                                                                <option value="44" label="United Kingdom (+44)">United
                                                                    Kingdom (+44)</option>
                                                                <option value="1" label="United States (+1)">United
                                                                    States (+1)</option>
                                                                <option value="598" label="Uruguay (+598)">Uruguay
                                                                    (+598)</option>
                                                                <option value="1340"
                                                                    label="U.S. Virgin Islands (+1 340)">U.S. Virgin
                                                                    Islands (+1 340)</option>
                                                                <option value="998" label="Uzbekistan (+998)">Uzbekistan
                                                                    (+998)</option>
                                                                <option value="678" label="Vanuatu (+678)">Vanuatu
                                                                    (+678)</option>
                                                                <option value="58" label="Venezuela (+58)">Venezuela
                                                                    (+58)</option>
                                                                <option value="84" label="Vietnam (+84)">Vietnam (+84)
                                                                </option>
                                                                <option value="1808" label="Wake Island (+1 808)">Wake
                                                                    Island (+1 808)</option>
                                                                <option value="681" label="Wallis and Futuna (+681)">
                                                                    Wallis and Futuna (+681)</option>
                                                                <option value="967" label="Yemen (+967)">Yemen (+967)
                                                                </option>
                                                                <option value="260" label="Zambia (+260)">Zambia (+260)
                                                                </option>
                                                                <option value="255" label="Zanzibar (+255)">Zanzibar
                                                                    (+255)</option>
                                                                <option value="263" label="Zimbabwe (+263)">Zimbabwe
                                                                    (+263)</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-8">
                                                            <input type="number" name="vphone" placeholder=""
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <label>شماره موبایل</label>
                                                    <div class="row no-gutters">
                                                        <div class="col-4">
                                                            <select class="form-select custom-select"
                                                                name="countrycodevmobile">
                                                                <option value="" label="--">--</option>
                                                                <option value="7840" label="Abkhazia (+7 840)">Abkhazia
                                                                    (+7 840)</option>
                                                                <option value="7940" label="Abkhazia (+7 940)">Abkhazia
                                                                    (+7 940)</option>
                                                                <option value="93" label="Afghanistan (+93)">Afghanistan
                                                                    (+93)</option>
                                                                <option value="355" label="Albania (+355)">Albania
                                                                    (+355)</option>
                                                                <option value="213" label="Algeria (+213)">Algeria
                                                                    (+213)</option>
                                                                <option value="1684" label="American Samoa (+1 684)">
                                                                    American Samoa (+1 684)</option>
                                                                <option value="376" label="Andorra (+376)">Andorra
                                                                    (+376)</option>
                                                                <option value="244" label="Angola (+244)">Angola (+244)
                                                                </option>
                                                                <option value="1264" label="Anguilla (+1 264)">Anguilla
                                                                    (+1 264)</option>
                                                                <option value="1268"
                                                                    label="Antigua and Barbuda (+1 268)">Antigua and
                                                                    Barbuda (+1 268)</option>
                                                                <option value="54" label="Argentina (+54)">Argentina
                                                                    (+54)</option>
                                                                <option value="374" label="Armenia (+374)">Armenia
                                                                    (+374)</option>
                                                                <option value="297" label="Aruba (+297)">Aruba (+297)
                                                                </option>
                                                                <option value="247" label="Ascension (+247)">Ascension
                                                                    (+247)</option>
                                                                <option value="61" label="Australia (+61)">Australia
                                                                    (+61)</option>
                                                                <option value="672"
                                                                    label="Australian External Territories (+672)">
                                                                    Australian External Territories (+672)</option>
                                                                <option value="43" label="Austria (+43)">Austria (+43)
                                                                </option>
                                                                <option value="994" label="Azerbaijan (+994)">Azerbaijan
                                                                    (+994)</option>
                                                                <option value="1242" label="Bahamas (+1 242)">Bahamas
                                                                    (+1 242)</option>
                                                                <option value="973" label="Bahrain (+973)">Bahrain
                                                                    (+973)</option>
                                                                <option value="880" label="Bangladesh (+880)">Bangladesh
                                                                    (+880)</option>
                                                                <option value="1246" label="Barbados (+1 246)">Barbados
                                                                    (+1 246)</option>
                                                                <option value="1268" label="Barbuda (+1 268)">Barbuda
                                                                    (+1 268)</option>
                                                                <option value="375" label="Belarus (+375)">Belarus
                                                                    (+375)</option>
                                                                <option value="32" label="Belgium (+32)">Belgium (+32)
                                                                </option>
                                                                <option value="501" label="Belize (+501)">Belize (+501)
                                                                </option>
                                                                <option value="229" label="Benin (+229)">Benin (+229)
                                                                </option>
                                                                <option value="1441" label="Bermuda (+1 441)">Bermuda
                                                                    (+1 441)</option>
                                                                <option value="975" label="Bhutan (+975)">Bhutan (+975)
                                                                </option>
                                                                <option value="591" label="Bolivia (+591)">Bolivia
                                                                    (+591)</option>
                                                                <option value="387"
                                                                    label="Bosnia and Herzegovina (+387)">Bosnia and
                                                                    Herzegovina (+387)</option>
                                                                <option value="267" label="Botswana (+267)">Botswana
                                                                    (+267)</option>
                                                                <option value="55" label="Brazil (+55)">Brazil (+55)
                                                                </option>
                                                                <option value="246"
                                                                    label="British Indian Ocean Territory (+246)">
                                                                    British Indian Ocean Territory (+246)</option>
                                                                <option value="1284"
                                                                    label="British Virgin Islands (+1 284)">British
                                                                    Virgin Islands (+1 284)</option>
                                                                <option value="673" label="Brunei (+673)">Brunei (+673)
                                                                </option>
                                                                <option value="359" label="Bulgaria (+359)">Bulgaria
                                                                    (+359)</option>
                                                                <option value="226" label="Burkina Faso (+226)">Burkina
                                                                    Faso (+226)</option>
                                                                <option value="257" label="Burundi (+257)">Burundi
                                                                    (+257)</option>
                                                                <option value="855" label="Cambodia (+855)">Cambodia
                                                                    (+855)</option>
                                                                <option value="237" label="Cameroon (+237)">Cameroon
                                                                    (+237)</option>
                                                                <option value="1" label="Canada (+1)">Canada (+1)
                                                                </option>
                                                                <option value="238" label="Cape Verde (+238)">Cape Verde
                                                                    (+238)</option>
                                                                <option value="345" label="Cayman Islands (+345)">Cayman
                                                                    Islands (+345)</option>
                                                                <option value="236"
                                                                    label="Central African Republic (+236)">Central
                                                                    African Republic (+236)</option>
                                                                <option value="235" label="Chad (+235)">Chad (+235)
                                                                </option>
                                                                <option value="56" label="Chile (+56)">Chile (+56)
                                                                </option>
                                                                <option value="86" label="China (+86)">China (+86)
                                                                </option>
                                                                <option value="61" label="Christmas Island (+61)">
                                                                    Christmas Island (+61)</option>
                                                                <option value="61" label="Cocos-Keeling Islands (+61)">
                                                                    Cocos-Keeling Islands (+61)</option>
                                                                <option value="57" label="Colombia (+57)">Colombia (+57)
                                                                </option>
                                                                <option value="269" label="Comoros (+269)">Comoros
                                                                    (+269)</option>
                                                                <option value="242" label="Congo (+242)">Congo (+242)
                                                                </option>
                                                                <option value="243"
                                                                    label="Congo, Dem. Rep. of (Zaire) (+243)">Congo,
                                                                    Dem. Rep. of (Zaire) (+243)</option>
                                                                <option value="682" label="Cook Islands (+682)">Cook
                                                                    Islands (+682)</option>
                                                                <option value="506" label="Costa Rica (+506)">Costa Rica
                                                                    (+506)</option>
                                                                <option value="225" label="Ivory Coast (+225)">Ivory
                                                                    Coast (+225)</option>
                                                                <option value="385" label="Croatia (+385)">Croatia
                                                                    (+385)</option>
                                                                <option value="53" label="Cuba (+53)">Cuba (+53)
                                                                </option>
                                                                <option value="599" label="Curacao (+599)">Curacao
                                                                    (+599)</option>
                                                                <option value="537" label="Cyprus (+537)">Cyprus (+537)
                                                                </option>
                                                                <option value="420" label="Czech Republic (+420)">Czech
                                                                    Republic (+420)</option>
                                                                <option value="45" label="Denmark (+45)">Denmark (+45)
                                                                </option>
                                                                <option value="246" label="Diego Garcia (+246)">Diego
                                                                    Garcia (+246)</option>
                                                                <option value="253" label="Djibouti (+253)">Djibouti
                                                                    (+253)</option>
                                                                <option value="1767" label="Dominica (+1 767)">Dominica
                                                                    (+1 767)</option>
                                                                <option value="1809"
                                                                    label="Dominican Republic (+1 809)">Dominican
                                                                    Republic (+1 809)</option>
                                                                <option value="1829"
                                                                    label="Dominican Republic (+1 829)">Dominican
                                                                    Republic (+1 829)</option>
                                                                <option value="1849"
                                                                    label="Dominican Republic (+1 849)">Dominican
                                                                    Republic (+1 849)</option>
                                                                <option value="670" label="East Timor (+670)">East Timor
                                                                    (+670)</option>
                                                                <option value="56" label="Easter Island (+56)">Easter
                                                                    Island (+56)</option>
                                                                <option value="593" label="Ecuador (+593)">Ecuador
                                                                    (+593)</option>
                                                                <option value="20" label="Egypt (+20)">Egypt (+20)
                                                                </option>
                                                                <option value="503" label="El Salvador (+503)">El
                                                                    Salvador (+503)</option>
                                                                <option value="240" label="Equatorial Guinea (+240)">
                                                                    Equatorial Guinea (+240)</option>
                                                                <option value="291" label="Eritrea (+291)">Eritrea
                                                                    (+291)</option>
                                                                <option value="372" label="Estonia (+372)">Estonia
                                                                    (+372)</option>
                                                                <option value="251" label="Ethiopia (+251)">Ethiopia
                                                                    (+251)</option>
                                                                <option value="500" label="Falkland Islands (+500)">
                                                                    Falkland Islands (+500)</option>
                                                                <option value="298" label="Faroe Islands (+298)">Faroe
                                                                    Islands (+298)</option>
                                                                <option value="679" label="Fiji (+679)">Fiji (+679)
                                                                </option>
                                                                <option value="358" label="Finland (+358)">Finland
                                                                    (+358)</option>
                                                                <option value="33" label="France (+33)">France (+33)
                                                                </option>
                                                                <option value="596" label="French Antilles (+596)">
                                                                    French Antilles (+596)</option>
                                                                <option value="594" label="French Guiana (+594)">French
                                                                    Guiana (+594)</option>
                                                                <option value="689" label="French Polynesia (+689)">
                                                                    French Polynesia (+689)</option>
                                                                <option value="241" label="Gabon (+241)">Gabon (+241)
                                                                </option>
                                                                <option value="220" label="Gambia (+220)">Gambia (+220)
                                                                </option>
                                                                <option value="995" label="Georgia (+995)">Georgia
                                                                    (+995)</option>
                                                                <option value="49" label="Germany (+49)">Germany (+49)
                                                                </option>
                                                                <option value="233" label="Ghana (+233)">Ghana (+233)
                                                                </option>
                                                                <option value="350" label="Gibraltar (+350)">Gibraltar
                                                                    (+350)</option>
                                                                <option value="30" label="Greece (+30)">Greece (+30)
                                                                </option>
                                                                <option value="299" label="Greenland (+299)">Greenland
                                                                    (+299)</option>
                                                                <option value="1473" label="Grenada (+1 473)">Grenada
                                                                    (+1 473)</option>
                                                                <option value="590" label="Guadeloupe (+590)">Guadeloupe
                                                                    (+590)</option>
                                                                <option value="1671" label="Guam (+1 671)">Guam (+1 671)
                                                                </option>
                                                                <option value="502" label="Guatemala (+502)">Guatemala
                                                                    (+502)</option>
                                                                <option value="224" label="Guinea (+224)">Guinea (+224)
                                                                </option>
                                                                <option value="245" label="Guinea-Bissau (+245)">
                                                                    Guinea-Bissau (+245)</option>
                                                                <option value="595" label="Guyana (+595)">Guyana (+595)
                                                                </option>
                                                                <option value="509" label="Haiti (+509)">Haiti (+509)
                                                                </option>
                                                                <option value="504" label="Honduras (+504)">Honduras
                                                                    (+504)</option>
                                                                <option value="852" label="Hong Kong SAR China (+852)">
                                                                    Hong Kong SAR China (+852)</option>
                                                                <option value="248" label="Seychelles (+248)">Seychelles
                                                                    (+248)</option>
                                                                <option value="354" label="Iceland (+354)">Iceland
                                                                    (+354)</option>
                                                                <option value="91" label="India (+91)">India (+91)
                                                                </option>
                                                                <option value="62" label="Indonesia (+62)">Indonesia
                                                                    (+62)</option>
                                                                <option value="98" label="Iran (+98)">Iran (+98)
                                                                </option>
                                                                <option value="964" label="Iraq (+964)">Iraq (+964)
                                                                </option>
                                                                <option value="353" label="Ireland (+353)">Ireland
                                                                    (+353)</option>
                                                                <option value="972" label="Israel (+972)">Israel (+972)
                                                                </option>
                                                                <option value="39" label="Italy (+39)">Italy (+39)
                                                                </option>
                                                                <option value="1876" label="Jamaica (+1 876)">Jamaica
                                                                    (+1 876)</option>
                                                                <option value="81" label="Japan (+81)">Japan (+81)
                                                                </option>
                                                                <option value="962" label="Jordan (+962)">Jordan (+962)
                                                                </option>
                                                                <option value="77" label="Kazakhstan (+7 7)">Kazakhstan
                                                                    (+7 7)</option>
                                                                <option value="254" label="Kenya (+254)">Kenya (+254)
                                                                </option>
                                                                <option value="686" label="Kiribati (+686)">Kiribati
                                                                    (+686)</option>
                                                                <option value="850" label="North Korea (+850)">North
                                                                    Korea (+850)</option>
                                                                <option value="82" label="South Korea (+82)">South Korea
                                                                    (+82)</option>
                                                                <option value="965" label="Kuwait (+965)">Kuwait (+965)
                                                                </option>
                                                                <option value="996" label="Kyrgyzstan (+996)">Kyrgyzstan
                                                                    (+996)</option>
                                                                <option value="856" label="Laos (+856)">Laos (+856)
                                                                </option>
                                                                <option value="371" label="Latvia (+371)">Latvia (+371)
                                                                </option>
                                                                <option value="961" label="Lebanon (+961)">Lebanon
                                                                    (+961)</option>
                                                                <option value="266" label="Lesotho (+266)">Lesotho
                                                                    (+266)</option>
                                                                <option value="231" label="Liberia (+231)">Liberia
                                                                    (+231)</option>
                                                                <option value="218" label="Libya (+218)">Libya (+218)
                                                                </option>
                                                                <option value="423" label="Liechtenstein (+423)">
                                                                    Liechtenstein (+423)</option>
                                                                <option value="370" label="Lithuania (+370)">Lithuania
                                                                    (+370)</option>
                                                                <option value="352" label="Luxembourg (+352)">Luxembourg
                                                                    (+352)</option>
                                                                <option value="853" label="Macau SAR China (+853)">Macau
                                                                    SAR China (+853)</option>
                                                                <option value="389" label="Macedonia (+389)">Macedonia
                                                                    (+389)</option>
                                                                <option value="261" label="Madagascar (+261)">Madagascar
                                                                    (+261)</option>
                                                                <option value="265" label="Malawi (+265)">Malawi (+265)
                                                                </option>
                                                                <option value="60" label="Malaysia (+60)">Malaysia (+60)
                                                                </option>
                                                                <option value="960" label="Maldives (+960)">Maldives
                                                                    (+960)</option>
                                                                <option value="223" label="Mali (+223)">Mali (+223)
                                                                </option>
                                                                <option value="356" label="Malta (+356)">Malta (+356)
                                                                </option>
                                                                <option value="692" label="Marshall Islands (+692)">
                                                                    Marshall Islands (+692)</option>
                                                                <option value="596" label="Martinique (+596)">Martinique
                                                                    (+596)</option>
                                                                <option value="222" label="Mauritania (+222)">Mauritania
                                                                    (+222)</option>
                                                                <option value="230" label="Mauritius (+230)">Mauritius
                                                                    (+230)</option>
                                                                <option value="262" label="Mayotte (+262)">Mayotte
                                                                    (+262)</option>
                                                                <option value="52" label="Mexico (+52)">Mexico (+52)
                                                                </option>
                                                                <option value="691" label="Micronesia (+691)">Micronesia
                                                                    (+691)</option>
                                                                <option value="1808" label="Midway Island (+1 808)">
                                                                    Midway Island (+1 808)</option>
                                                                <option value="691" label="Micronesia (+691)">Micronesia
                                                                    (+691)</option>
                                                                <option value="373" label="Moldova (+373)">Moldova
                                                                    (+373)</option>
                                                                <option value="377" label="Monaco (+377)">Monaco (+377)
                                                                </option>
                                                                <option value="976" label="Mongolia (+976)">Mongolia
                                                                    (+976)</option>
                                                                <option value="382" label="Montenegro (+382)">Montenegro
                                                                    (+382)</option>
                                                                <option value="1664" label="Montserrat (+1664)">
                                                                    Montserrat (+1664)</option>
                                                                <option value="212" label="Morocco (+212)">Morocco
                                                                    (+212)</option>
                                                                <option value="95" label="Myanmar (+95)">Myanmar (+95)
                                                                </option>
                                                                <option value="264" label="Namibia (+264)">Namibia
                                                                    (+264)</option>
                                                                <option value="674" label="Nauru (+674)">Nauru (+674)
                                                                </option>
                                                                <option value="977" label="Nepal (+977)">Nepal (+977)
                                                                </option>
                                                                <option value="31" label="Netherlands (+31)">Netherlands
                                                                    (+31)</option>
                                                                <option value="599" label="Netherlands Antilles (+599)">
                                                                    Netherlands Antilles (+599)</option>
                                                                <option value="1869" label="Nevis (+1 869)">Nevis (+1
                                                                    869)</option>
                                                                <option value="687" label="New Caledonia (+687)">New
                                                                    Caledonia (+687)</option>
                                                                <option value="64" label="New Zealand (64)">New Zealand
                                                                    (64)</option>
                                                                <option value="505" label="Nicaragua (+505)">Nicaragua
                                                                    (+505)</option>
                                                                <option value="227" label="Niger (+227)">Niger (+227)
                                                                </option>
                                                                <option value="234" label="Nigeria (+234)">Nigeria
                                                                    (+234)</option>
                                                                <option value="683" label="Niue (+683)">Niue (+683)
                                                                </option>
                                                                <option value="672" label="Norfolk Island (+672)">
                                                                    Norfolk Island (+672)</option>
                                                                <option value="1670"
                                                                    label="Northern Mariana Islands (+1 670)">Northern
                                                                    Mariana Islands (+1 670)</option>
                                                                <option value="47" label="Norway (+47)">Norway (+47)
                                                                </option>
                                                                <option value="968" label="Oman (+968)">Oman (+968)
                                                                </option>
                                                                <option value="92" label="Pakistan (+92)">Pakistan (+92)
                                                                </option>
                                                                <option value="680" label="Palau (+680)">Palau (+680)
                                                                </option>
                                                                <option value="970"
                                                                    label="Palestinian Territory (+970)">Palestinian
                                                                    Territory (+970)</option>
                                                                <option value="507" label="Panama (+507)">Panama (+507)
                                                                </option>
                                                                <option value="675" label="Papua New Guinea (+675)">
                                                                    Papua New Guinea (+675)</option>
                                                                <option value="595" label="Paraguay (+595)">Paraguay
                                                                    (+595)</option>
                                                                <option value="51" label="Peru (+51)">Peru (+51)
                                                                </option>
                                                                <option value="63" label="Philippines (+63)">Philippines
                                                                    (+63)</option>
                                                                <option value="48" label="Poland (+48)">Poland (+48)
                                                                </option>
                                                                <option value="351" label="Portugal (+351)">Portugal
                                                                    (+351)</option>
                                                                <option value="1787" label="Puerto Rico (+1 787)">Puerto
                                                                    Rico (+1 787)</option>
                                                                <option value="1939" label="Puerto Rico (+1 939)">Puerto
                                                                    Rico (+1 939)</option>
                                                                <option value="974" label="Qatar (+974)">Qatar (+974)
                                                                </option>
                                                                <option value="262" label="Reunion (+262)">Reunion
                                                                    (+262)</option>
                                                                <option value="40" label="Romania (+40)">Romania (+40)
                                                                </option>
                                                                <option value="7" label="Russia (+7)">Russia (+7)
                                                                </option>
                                                                <option value="250" label="Rwanda (+250)">Rwanda (+250)
                                                                </option>
                                                                <option value="685" label="Samoa (+685)">Samoa (+685)
                                                                </option>
                                                                <option value="378" label="San Marino (+378)">San Marino
                                                                    (+378)</option>
                                                                <option value="966" label="Saudi Arabia (+966)">Saudi
                                                                    Arabia (+966)</option>
                                                                <option value="221" label="Senegal (+221)">Senegal
                                                                    (+221)</option>
                                                                <option value="381" label="Serbia (+381)">Serbia (+381)
                                                                </option>
                                                                <option value="232" label="Sierra Leone (+232)">Sierra
                                                                    Leone (+232)</option>
                                                                <option value="65" label="Singapore (+65)">Singapore
                                                                    (+65)</option>
                                                                <option value="421" label="Slovakia (+421)">Slovakia
                                                                    (+421)</option>
                                                                <option value="386" label="Slovenia (+386)">Slovenia
                                                                    (+386)</option>
                                                                <option value="677" label="Solomon Islands (+677)">
                                                                    Solomon Islands (+677)</option>
                                                                <option value="27" label="South Africa (+27)">South
                                                                    Africa (+27)</option>
                                                                <option value="500"
                                                                    label="South Georgia and the South Sandwich Islands (+500)">
                                                                    South Georgia and the South Sandwich Islands (+500)
                                                                </option>
                                                                <option value="34" label="Spain (+34)">Spain (+34)
                                                                </option>
                                                                <option value="94" label="Sri Lanka (+94)">Sri Lanka
                                                                    (+94)</option>
                                                                <option value="249" label="Sudan (+249)">Sudan (+249)
                                                                </option>
                                                                <option value="597" label="Suriname (+597)">Suriname
                                                                    (+597)</option>
                                                                <option value="268" label="Swaziland (+268)">Swaziland
                                                                    (+268)</option>
                                                                <option value="46" label="Sweden (+46)">Sweden (+46)
                                                                </option>
                                                                <option value="41" label="Switzerland (+41)">Switzerland
                                                                    (+41)</option>
                                                                <option value="963" label="Syria (+963)">Syria (+963)
                                                                </option>
                                                                <option value="886" label="Taiwan (+886)">Taiwan (+886)
                                                                </option>
                                                                <option value="992" label="Tajikistan (+992)">Tajikistan
                                                                    (+992)</option>
                                                                <option value="255" label="Tanzania (+255)">Tanzania
                                                                    (+255)</option>
                                                                <option value="66" label="Thailand (+66)">Thailand (+66)
                                                                </option>
                                                                <option value="670" label="Timor Leste (+670)">Timor
                                                                    Leste (+670)</option>
                                                                <option value="228" label="Togo (+228)">Togo (+228)
                                                                </option>
                                                                <option value="690" label="Tokelau (+690)">Tokelau
                                                                    (+690)</option>
                                                                <option value="676" label="Tonga (+676)">Tonga (+676)
                                                                </option>
                                                                <option value="1868"
                                                                    label="Trinidad and Tobago (+1 868)">Trinidad and
                                                                    Tobago (+1 868)</option>
                                                                <option value="216" label="Tunisia (+216)">Tunisia
                                                                    (+216)</option>
                                                                <option value="90" label="Turkey (+90)">Turkey (+90)
                                                                </option>
                                                                <option value="993" label="Turkmenistan (+993)">
                                                                    Turkmenistan (+993)</option>
                                                                <option value="1649"
                                                                    label="Turks and Caicos Islands (+1 649)">Turks and
                                                                    Caicos Islands (+1 649)</option>
                                                                <option value="688" label="Tuvalu (+688)">Tuvalu (+688)
                                                                </option>
                                                                <option value="256" label="Uganda (+256)">Uganda (+256)
                                                                </option>
                                                                <option value="380" label="Ukraine (+380)">Ukraine
                                                                    (+380)</option>
                                                                <option value="971" label="United Arab Emirates (+971)">
                                                                    United Arab Emirates (+971)</option>
                                                                <option value="44" label="United Kingdom (+44)">United
                                                                    Kingdom (+44)</option>
                                                                <option value="1" label="United States (+1)">United
                                                                    States (+1)</option>
                                                                <option value="598" label="Uruguay (+598)">Uruguay
                                                                    (+598)</option>
                                                                <option value="1340"
                                                                    label="U.S. Virgin Islands (+1 340)">U.S. Virgin
                                                                    Islands (+1 340)</option>
                                                                <option value="998" label="Uzbekistan (+998)">Uzbekistan
                                                                    (+998)</option>
                                                                <option value="678" label="Vanuatu (+678)">Vanuatu
                                                                    (+678)</option>
                                                                <option value="58" label="Venezuela (+58)">Venezuela
                                                                    (+58)</option>
                                                                <option value="84" label="Vietnam (+84)">Vietnam (+84)
                                                                </option>
                                                                <option value="1808" label="Wake Island (+1 808)">Wake
                                                                    Island (+1 808)</option>
                                                                <option value="681" label="Wallis and Futuna (+681)">
                                                                    Wallis and Futuna (+681)</option>
                                                                <option value="967" label="Yemen (+967)">Yemen (+967)
                                                                </option>
                                                                <option value="260" label="Zambia (+260)">Zambia (+260)
                                                                </option>
                                                                <option value="255" label="Zanzibar (+255)">Zanzibar
                                                                    (+255)</option>
                                                                <option value="263" label="Zimbabwe (+263)">Zimbabwe
                                                                    (+263)</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-8">
                                                            <input type="number" name="vmobile" placeholder=""
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <label>ایمیل</label>
                                                    <input type="email" name="vemail" class="form-control">
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <label>آدرس وب سایت</label>
                                                    <input type="text" name="vurl" class="form-control"
                                                        placeholder="http://">
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <label>شرکت</label>
                                                    <input type="text" name="vcompany" class="form-control">
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <label>عنوان شغلی</label>
                                                    <input type="text" name="vtitle" class="form-control">
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <label>شماره محل کار</label>
                                                    <div class="row no-gutters">
                                                        <div class="col-4">
                                                            <select class="form-select custom-select"
                                                                name="countrycodevoffice">
                                                                <option value="" label="--">--</option>
                                                                <option value="7840" label="Abkhazia (+7 840)">Abkhazia
                                                                    (+7 840)</option>
                                                                <option value="7940" label="Abkhazia (+7 940)">Abkhazia
                                                                    (+7 940)</option>
                                                                <option value="93" label="Afghanistan (+93)">Afghanistan
                                                                    (+93)</option>
                                                                <option value="355" label="Albania (+355)">Albania
                                                                    (+355)</option>
                                                                <option value="213" label="Algeria (+213)">Algeria
                                                                    (+213)</option>
                                                                <option value="1684" label="American Samoa (+1 684)">
                                                                    American Samoa (+1 684)</option>
                                                                <option value="376" label="Andorra (+376)">Andorra
                                                                    (+376)</option>
                                                                <option value="244" label="Angola (+244)">Angola (+244)
                                                                </option>
                                                                <option value="1264" label="Anguilla (+1 264)">Anguilla
                                                                    (+1 264)</option>
                                                                <option value="1268"
                                                                    label="Antigua and Barbuda (+1 268)">Antigua and
                                                                    Barbuda (+1 268)</option>
                                                                <option value="54" label="Argentina (+54)">Argentina
                                                                    (+54)</option>
                                                                <option value="374" label="Armenia (+374)">Armenia
                                                                    (+374)</option>
                                                                <option value="297" label="Aruba (+297)">Aruba (+297)
                                                                </option>
                                                                <option value="247" label="Ascension (+247)">Ascension
                                                                    (+247)</option>
                                                                <option value="61" label="Australia (+61)">Australia
                                                                    (+61)</option>
                                                                <option value="672"
                                                                    label="Australian External Territories (+672)">
                                                                    Australian External Territories (+672)</option>
                                                                <option value="43" label="Austria (+43)">Austria (+43)
                                                                </option>
                                                                <option value="994" label="Azerbaijan (+994)">Azerbaijan
                                                                    (+994)</option>
                                                                <option value="1242" label="Bahamas (+1 242)">Bahamas
                                                                    (+1 242)</option>
                                                                <option value="973" label="Bahrain (+973)">Bahrain
                                                                    (+973)</option>
                                                                <option value="880" label="Bangladesh (+880)">Bangladesh
                                                                    (+880)</option>
                                                                <option value="1246" label="Barbados (+1 246)">Barbados
                                                                    (+1 246)</option>
                                                                <option value="1268" label="Barbuda (+1 268)">Barbuda
                                                                    (+1 268)</option>
                                                                <option value="375" label="Belarus (+375)">Belarus
                                                                    (+375)</option>
                                                                <option value="32" label="Belgium (+32)">Belgium (+32)
                                                                </option>
                                                                <option value="501" label="Belize (+501)">Belize (+501)
                                                                </option>
                                                                <option value="229" label="Benin (+229)">Benin (+229)
                                                                </option>
                                                                <option value="1441" label="Bermuda (+1 441)">Bermuda
                                                                    (+1 441)</option>
                                                                <option value="975" label="Bhutan (+975)">Bhutan (+975)
                                                                </option>
                                                                <option value="591" label="Bolivia (+591)">Bolivia
                                                                    (+591)</option>
                                                                <option value="387"
                                                                    label="Bosnia and Herzegovina (+387)">Bosnia and
                                                                    Herzegovina (+387)</option>
                                                                <option value="267" label="Botswana (+267)">Botswana
                                                                    (+267)</option>
                                                                <option value="55" label="Brazil (+55)">Brazil (+55)
                                                                </option>
                                                                <option value="246"
                                                                    label="British Indian Ocean Territory (+246)">
                                                                    British Indian Ocean Territory (+246)</option>
                                                                <option value="1284"
                                                                    label="British Virgin Islands (+1 284)">British
                                                                    Virgin Islands (+1 284)</option>
                                                                <option value="673" label="Brunei (+673)">Brunei (+673)
                                                                </option>
                                                                <option value="359" label="Bulgaria (+359)">Bulgaria
                                                                    (+359)</option>
                                                                <option value="226" label="Burkina Faso (+226)">Burkina
                                                                    Faso (+226)</option>
                                                                <option value="257" label="Burundi (+257)">Burundi
                                                                    (+257)</option>
                                                                <option value="855" label="Cambodia (+855)">Cambodia
                                                                    (+855)</option>
                                                                <option value="237" label="Cameroon (+237)">Cameroon
                                                                    (+237)</option>
                                                                <option value="1" label="Canada (+1)">Canada (+1)
                                                                </option>
                                                                <option value="238" label="Cape Verde (+238)">Cape Verde
                                                                    (+238)</option>
                                                                <option value="345" label="Cayman Islands (+345)">Cayman
                                                                    Islands (+345)</option>
                                                                <option value="236"
                                                                    label="Central African Republic (+236)">Central
                                                                    African Republic (+236)</option>
                                                                <option value="235" label="Chad (+235)">Chad (+235)
                                                                </option>
                                                                <option value="56" label="Chile (+56)">Chile (+56)
                                                                </option>
                                                                <option value="86" label="China (+86)">China (+86)
                                                                </option>
                                                                <option value="61" label="Christmas Island (+61)">
                                                                    Christmas Island (+61)</option>
                                                                <option value="61" label="Cocos-Keeling Islands (+61)">
                                                                    Cocos-Keeling Islands (+61)</option>
                                                                <option value="57" label="Colombia (+57)">Colombia (+57)
                                                                </option>
                                                                <option value="269" label="Comoros (+269)">Comoros
                                                                    (+269)</option>
                                                                <option value="242" label="Congo (+242)">Congo (+242)
                                                                </option>
                                                                <option value="243"
                                                                    label="Congo, Dem. Rep. of (Zaire) (+243)">Congo,
                                                                    Dem. Rep. of (Zaire) (+243)</option>
                                                                <option value="682" label="Cook Islands (+682)">Cook
                                                                    Islands (+682)</option>
                                                                <option value="506" label="Costa Rica (+506)">Costa Rica
                                                                    (+506)</option>
                                                                <option value="225" label="Ivory Coast (+225)">Ivory
                                                                    Coast (+225)</option>
                                                                <option value="385" label="Croatia (+385)">Croatia
                                                                    (+385)</option>
                                                                <option value="53" label="Cuba (+53)">Cuba (+53)
                                                                </option>
                                                                <option value="599" label="Curacao (+599)">Curacao
                                                                    (+599)</option>
                                                                <option value="537" label="Cyprus (+537)">Cyprus (+537)
                                                                </option>
                                                                <option value="420" label="Czech Republic (+420)">Czech
                                                                    Republic (+420)</option>
                                                                <option value="45" label="Denmark (+45)">Denmark (+45)
                                                                </option>
                                                                <option value="246" label="Diego Garcia (+246)">Diego
                                                                    Garcia (+246)</option>
                                                                <option value="253" label="Djibouti (+253)">Djibouti
                                                                    (+253)</option>
                                                                <option value="1767" label="Dominica (+1 767)">Dominica
                                                                    (+1 767)</option>
                                                                <option value="1809"
                                                                    label="Dominican Republic (+1 809)">Dominican
                                                                    Republic (+1 809)</option>
                                                                <option value="1829"
                                                                    label="Dominican Republic (+1 829)">Dominican
                                                                    Republic (+1 829)</option>
                                                                <option value="1849"
                                                                    label="Dominican Republic (+1 849)">Dominican
                                                                    Republic (+1 849)</option>
                                                                <option value="670" label="East Timor (+670)">East Timor
                                                                    (+670)</option>
                                                                <option value="56" label="Easter Island (+56)">Easter
                                                                    Island (+56)</option>
                                                                <option value="593" label="Ecuador (+593)">Ecuador
                                                                    (+593)</option>
                                                                <option value="20" label="Egypt (+20)">Egypt (+20)
                                                                </option>
                                                                <option value="503" label="El Salvador (+503)">El
                                                                    Salvador (+503)</option>
                                                                <option value="240" label="Equatorial Guinea (+240)">
                                                                    Equatorial Guinea (+240)</option>
                                                                <option value="291" label="Eritrea (+291)">Eritrea
                                                                    (+291)</option>
                                                                <option value="372" label="Estonia (+372)">Estonia
                                                                    (+372)</option>
                                                                <option value="251" label="Ethiopia (+251)">Ethiopia
                                                                    (+251)</option>
                                                                <option value="500" label="Falkland Islands (+500)">
                                                                    Falkland Islands (+500)</option>
                                                                <option value="298" label="Faroe Islands (+298)">Faroe
                                                                    Islands (+298)</option>
                                                                <option value="679" label="Fiji (+679)">Fiji (+679)
                                                                </option>
                                                                <option value="358" label="Finland (+358)">Finland
                                                                    (+358)</option>
                                                                <option value="33" label="France (+33)">France (+33)
                                                                </option>
                                                                <option value="596" label="French Antilles (+596)">
                                                                    French Antilles (+596)</option>
                                                                <option value="594" label="French Guiana (+594)">French
                                                                    Guiana (+594)</option>
                                                                <option value="689" label="French Polynesia (+689)">
                                                                    French Polynesia (+689)</option>
                                                                <option value="241" label="Gabon (+241)">Gabon (+241)
                                                                </option>
                                                                <option value="220" label="Gambia (+220)">Gambia (+220)
                                                                </option>
                                                                <option value="995" label="Georgia (+995)">Georgia
                                                                    (+995)</option>
                                                                <option value="49" label="Germany (+49)">Germany (+49)
                                                                </option>
                                                                <option value="233" label="Ghana (+233)">Ghana (+233)
                                                                </option>
                                                                <option value="350" label="Gibraltar (+350)">Gibraltar
                                                                    (+350)</option>
                                                                <option value="30" label="Greece (+30)">Greece (+30)
                                                                </option>
                                                                <option value="299" label="Greenland (+299)">Greenland
                                                                    (+299)</option>
                                                                <option value="1473" label="Grenada (+1 473)">Grenada
                                                                    (+1 473)</option>
                                                                <option value="590" label="Guadeloupe (+590)">Guadeloupe
                                                                    (+590)</option>
                                                                <option value="1671" label="Guam (+1 671)">Guam (+1 671)
                                                                </option>
                                                                <option value="502" label="Guatemala (+502)">Guatemala
                                                                    (+502)</option>
                                                                <option value="224" label="Guinea (+224)">Guinea (+224)
                                                                </option>
                                                                <option value="245" label="Guinea-Bissau (+245)">
                                                                    Guinea-Bissau (+245)</option>
                                                                <option value="595" label="Guyana (+595)">Guyana (+595)
                                                                </option>
                                                                <option value="509" label="Haiti (+509)">Haiti (+509)
                                                                </option>
                                                                <option value="504" label="Honduras (+504)">Honduras
                                                                    (+504)</option>
                                                                <option value="852" label="Hong Kong SAR China (+852)">
                                                                    Hong Kong SAR China (+852)</option>
                                                                <option value="248" label="Seychelles (+248)">Seychelles
                                                                    (+248)</option>
                                                                <option value="354" label="Iceland (+354)">Iceland
                                                                    (+354)</option>
                                                                <option value="91" label="India (+91)">India (+91)
                                                                </option>
                                                                <option value="62" label="Indonesia (+62)">Indonesia
                                                                    (+62)</option>
                                                                <option value="98" label="Iran (+98)">Iran (+98)
                                                                </option>
                                                                <option value="964" label="Iraq (+964)">Iraq (+964)
                                                                </option>
                                                                <option value="353" label="Ireland (+353)">Ireland
                                                                    (+353)</option>
                                                                <option value="972" label="Israel (+972)">Israel (+972)
                                                                </option>
                                                                <option value="39" label="Italy (+39)">Italy (+39)
                                                                </option>
                                                                <option value="1876" label="Jamaica (+1 876)">Jamaica
                                                                    (+1 876)</option>
                                                                <option value="81" label="Japan (+81)">Japan (+81)
                                                                </option>
                                                                <option value="962" label="Jordan (+962)">Jordan (+962)
                                                                </option>
                                                                <option value="77" label="Kazakhstan (+7 7)">Kazakhstan
                                                                    (+7 7)</option>
                                                                <option value="254" label="Kenya (+254)">Kenya (+254)
                                                                </option>
                                                                <option value="686" label="Kiribati (+686)">Kiribati
                                                                    (+686)</option>
                                                                <option value="850" label="North Korea (+850)">North
                                                                    Korea (+850)</option>
                                                                <option value="82" label="South Korea (+82)">South Korea
                                                                    (+82)</option>
                                                                <option value="965" label="Kuwait (+965)">Kuwait (+965)
                                                                </option>
                                                                <option value="996" label="Kyrgyzstan (+996)">Kyrgyzstan
                                                                    (+996)</option>
                                                                <option value="856" label="Laos (+856)">Laos (+856)
                                                                </option>
                                                                <option value="371" label="Latvia (+371)">Latvia (+371)
                                                                </option>
                                                                <option value="961" label="Lebanon (+961)">Lebanon
                                                                    (+961)</option>
                                                                <option value="266" label="Lesotho (+266)">Lesotho
                                                                    (+266)</option>
                                                                <option value="231" label="Liberia (+231)">Liberia
                                                                    (+231)</option>
                                                                <option value="218" label="Libya (+218)">Libya (+218)
                                                                </option>
                                                                <option value="423" label="Liechtenstein (+423)">
                                                                    Liechtenstein (+423)</option>
                                                                <option value="370" label="Lithuania (+370)">Lithuania
                                                                    (+370)</option>
                                                                <option value="352" label="Luxembourg (+352)">Luxembourg
                                                                    (+352)</option>
                                                                <option value="853" label="Macau SAR China (+853)">Macau
                                                                    SAR China (+853)</option>
                                                                <option value="389" label="Macedonia (+389)">Macedonia
                                                                    (+389)</option>
                                                                <option value="261" label="Madagascar (+261)">Madagascar
                                                                    (+261)</option>
                                                                <option value="265" label="Malawi (+265)">Malawi (+265)
                                                                </option>
                                                                <option value="60" label="Malaysia (+60)">Malaysia (+60)
                                                                </option>
                                                                <option value="960" label="Maldives (+960)">Maldives
                                                                    (+960)</option>
                                                                <option value="223" label="Mali (+223)">Mali (+223)
                                                                </option>
                                                                <option value="356" label="Malta (+356)">Malta (+356)
                                                                </option>
                                                                <option value="692" label="Marshall Islands (+692)">
                                                                    Marshall Islands (+692)</option>
                                                                <option value="596" label="Martinique (+596)">Martinique
                                                                    (+596)</option>
                                                                <option value="222" label="Mauritania (+222)">Mauritania
                                                                    (+222)</option>
                                                                <option value="230" label="Mauritius (+230)">Mauritius
                                                                    (+230)</option>
                                                                <option value="262" label="Mayotte (+262)">Mayotte
                                                                    (+262)</option>
                                                                <option value="52" label="Mexico (+52)">Mexico (+52)
                                                                </option>
                                                                <option value="691" label="Micronesia (+691)">Micronesia
                                                                    (+691)</option>
                                                                <option value="1808" label="Midway Island (+1 808)">
                                                                    Midway Island (+1 808)</option>
                                                                <option value="691" label="Micronesia (+691)">Micronesia
                                                                    (+691)</option>
                                                                <option value="373" label="Moldova (+373)">Moldova
                                                                    (+373)</option>
                                                                <option value="377" label="Monaco (+377)">Monaco (+377)
                                                                </option>
                                                                <option value="976" label="Mongolia (+976)">Mongolia
                                                                    (+976)</option>
                                                                <option value="382" label="Montenegro (+382)">Montenegro
                                                                    (+382)</option>
                                                                <option value="1664" label="Montserrat (+1664)">
                                                                    Montserrat (+1664)</option>
                                                                <option value="212" label="Morocco (+212)">Morocco
                                                                    (+212)</option>
                                                                <option value="95" label="Myanmar (+95)">Myanmar (+95)
                                                                </option>
                                                                <option value="264" label="Namibia (+264)">Namibia
                                                                    (+264)</option>
                                                                <option value="674" label="Nauru (+674)">Nauru (+674)
                                                                </option>
                                                                <option value="977" label="Nepal (+977)">Nepal (+977)
                                                                </option>
                                                                <option value="31" label="Netherlands (+31)">Netherlands
                                                                    (+31)</option>
                                                                <option value="599" label="Netherlands Antilles (+599)">
                                                                    Netherlands Antilles (+599)</option>
                                                                <option value="1869" label="Nevis (+1 869)">Nevis (+1
                                                                    869)</option>
                                                                <option value="687" label="New Caledonia (+687)">New
                                                                    Caledonia (+687)</option>
                                                                <option value="64" label="New Zealand (64)">New Zealand
                                                                    (64)</option>
                                                                <option value="505" label="Nicaragua (+505)">Nicaragua
                                                                    (+505)</option>
                                                                <option value="227" label="Niger (+227)">Niger (+227)
                                                                </option>
                                                                <option value="234" label="Nigeria (+234)">Nigeria
                                                                    (+234)</option>
                                                                <option value="683" label="Niue (+683)">Niue (+683)
                                                                </option>
                                                                <option value="672" label="Norfolk Island (+672)">
                                                                    Norfolk Island (+672)</option>
                                                                <option value="1670"
                                                                    label="Northern Mariana Islands (+1 670)">Northern
                                                                    Mariana Islands (+1 670)</option>
                                                                <option value="47" label="Norway (+47)">Norway (+47)
                                                                </option>
                                                                <option value="968" label="Oman (+968)">Oman (+968)
                                                                </option>
                                                                <option value="92" label="Pakistan (+92)">Pakistan (+92)
                                                                </option>
                                                                <option value="680" label="Palau (+680)">Palau (+680)
                                                                </option>
                                                                <option value="970"
                                                                    label="Palestinian Territory (+970)">Palestinian
                                                                    Territory (+970)</option>
                                                                <option value="507" label="Panama (+507)">Panama (+507)
                                                                </option>
                                                                <option value="675" label="Papua New Guinea (+675)">
                                                                    Papua New Guinea (+675)</option>
                                                                <option value="595" label="Paraguay (+595)">Paraguay
                                                                    (+595)</option>
                                                                <option value="51" label="Peru (+51)">Peru (+51)
                                                                </option>
                                                                <option value="63" label="Philippines (+63)">Philippines
                                                                    (+63)</option>
                                                                <option value="48" label="Poland (+48)">Poland (+48)
                                                                </option>
                                                                <option value="351" label="Portugal (+351)">Portugal
                                                                    (+351)</option>
                                                                <option value="1787" label="Puerto Rico (+1 787)">Puerto
                                                                    Rico (+1 787)</option>
                                                                <option value="1939" label="Puerto Rico (+1 939)">Puerto
                                                                    Rico (+1 939)</option>
                                                                <option value="974" label="Qatar (+974)">Qatar (+974)
                                                                </option>
                                                                <option value="262" label="Reunion (+262)">Reunion
                                                                    (+262)</option>
                                                                <option value="40" label="Romania (+40)">Romania (+40)
                                                                </option>
                                                                <option value="7" label="Russia (+7)">Russia (+7)
                                                                </option>
                                                                <option value="250" label="Rwanda (+250)">Rwanda (+250)
                                                                </option>
                                                                <option value="685" label="Samoa (+685)">Samoa (+685)
                                                                </option>
                                                                <option value="378" label="San Marino (+378)">San Marino
                                                                    (+378)</option>
                                                                <option value="966" label="Saudi Arabia (+966)">Saudi
                                                                    Arabia (+966)</option>
                                                                <option value="221" label="Senegal (+221)">Senegal
                                                                    (+221)</option>
                                                                <option value="381" label="Serbia (+381)">Serbia (+381)
                                                                </option>
                                                                <option value="232" label="Sierra Leone (+232)">Sierra
                                                                    Leone (+232)</option>
                                                                <option value="65" label="Singapore (+65)">Singapore
                                                                    (+65)</option>
                                                                <option value="421" label="Slovakia (+421)">Slovakia
                                                                    (+421)</option>
                                                                <option value="386" label="Slovenia (+386)">Slovenia
                                                                    (+386)</option>
                                                                <option value="677" label="Solomon Islands (+677)">
                                                                    Solomon Islands (+677)</option>
                                                                <option value="27" label="South Africa (+27)">South
                                                                    Africa (+27)</option>
                                                                <option value="500"
                                                                    label="South Georgia and the South Sandwich Islands (+500)">
                                                                    South Georgia and the South Sandwich Islands (+500)
                                                                </option>
                                                                <option value="34" label="Spain (+34)">Spain (+34)
                                                                </option>
                                                                <option value="94" label="Sri Lanka (+94)">Sri Lanka
                                                                    (+94)</option>
                                                                <option value="249" label="Sudan (+249)">Sudan (+249)
                                                                </option>
                                                                <option value="597" label="Suriname (+597)">Suriname
                                                                    (+597)</option>
                                                                <option value="268" label="Swaziland (+268)">Swaziland
                                                                    (+268)</option>
                                                                <option value="46" label="Sweden (+46)">Sweden (+46)
                                                                </option>
                                                                <option value="41" label="Switzerland (+41)">Switzerland
                                                                    (+41)</option>
                                                                <option value="963" label="Syria (+963)">Syria (+963)
                                                                </option>
                                                                <option value="886" label="Taiwan (+886)">Taiwan (+886)
                                                                </option>
                                                                <option value="992" label="Tajikistan (+992)">Tajikistan
                                                                    (+992)</option>
                                                                <option value="255" label="Tanzania (+255)">Tanzania
                                                                    (+255)</option>
                                                                <option value="66" label="Thailand (+66)">Thailand (+66)
                                                                </option>
                                                                <option value="670" label="Timor Leste (+670)">Timor
                                                                    Leste (+670)</option>
                                                                <option value="228" label="Togo (+228)">Togo (+228)
                                                                </option>
                                                                <option value="690" label="Tokelau (+690)">Tokelau
                                                                    (+690)</option>
                                                                <option value="676" label="Tonga (+676)">Tonga (+676)
                                                                </option>
                                                                <option value="1868"
                                                                    label="Trinidad and Tobago (+1 868)">Trinidad and
                                                                    Tobago (+1 868)</option>
                                                                <option value="216" label="Tunisia (+216)">Tunisia
                                                                    (+216)</option>
                                                                <option value="90" label="Turkey (+90)">Turkey (+90)
                                                                </option>
                                                                <option value="993" label="Turkmenistan (+993)">
                                                                    Turkmenistan (+993)</option>
                                                                <option value="1649"
                                                                    label="Turks and Caicos Islands (+1 649)">Turks and
                                                                    Caicos Islands (+1 649)</option>
                                                                <option value="688" label="Tuvalu (+688)">Tuvalu (+688)
                                                                </option>
                                                                <option value="256" label="Uganda (+256)">Uganda (+256)
                                                                </option>
                                                                <option value="380" label="Ukraine (+380)">Ukraine
                                                                    (+380)</option>
                                                                <option value="971" label="United Arab Emirates (+971)">
                                                                    United Arab Emirates (+971)</option>
                                                                <option value="44" label="United Kingdom (+44)">United
                                                                    Kingdom (+44)</option>
                                                                <option value="1" label="United States (+1)">United
                                                                    States (+1)</option>
                                                                <option value="598" label="Uruguay (+598)">Uruguay
                                                                    (+598)</option>
                                                                <option value="1340"
                                                                    label="U.S. Virgin Islands (+1 340)">U.S. Virgin
                                                                    Islands (+1 340)</option>
                                                                <option value="998" label="Uzbekistan (+998)">Uzbekistan
                                                                    (+998)</option>
                                                                <option value="678" label="Vanuatu (+678)">Vanuatu
                                                                    (+678)</option>
                                                                <option value="58" label="Venezuela (+58)">Venezuela
                                                                    (+58)</option>
                                                                <option value="84" label="Vietnam (+84)">Vietnam (+84)
                                                                </option>
                                                                <option value="1808" label="Wake Island (+1 808)">Wake
                                                                    Island (+1 808)</option>
                                                                <option value="681" label="Wallis and Futuna (+681)">
                                                                    Wallis and Futuna (+681)</option>
                                                                <option value="967" label="Yemen (+967)">Yemen (+967)
                                                                </option>
                                                                <option value="260" label="Zambia (+260)">Zambia (+260)
                                                                </option>
                                                                <option value="255" label="Zanzibar (+255)">Zanzibar
                                                                    (+255)</option>
                                                                <option value="263" label="Zimbabwe (+263)">Zimbabwe
                                                                    (+263)</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-8">
                                                            <input type="number" name="vofficephone" placeholder=""
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <label>فکس</label>
                                                    <div class="row no-gutters">
                                                        <div class="col-4">
                                                            <select class="form-select custom-select"
                                                                name="countrycodevfax">
                                                                <option value="" label="--">--</option>
                                                                <option value="7840" label="Abkhazia (+7 840)">Abkhazia
                                                                    (+7 840)</option>
                                                                <option value="7940" label="Abkhazia (+7 940)">Abkhazia
                                                                    (+7 940)</option>
                                                                <option value="93" label="Afghanistan (+93)">Afghanistan
                                                                    (+93)</option>
                                                                <option value="355" label="Albania (+355)">Albania
                                                                    (+355)</option>
                                                                <option value="213" label="Algeria (+213)">Algeria
                                                                    (+213)</option>
                                                                <option value="1684" label="American Samoa (+1 684)">
                                                                    American Samoa (+1 684)</option>
                                                                <option value="376" label="Andorra (+376)">Andorra
                                                                    (+376)</option>
                                                                <option value="244" label="Angola (+244)">Angola (+244)
                                                                </option>
                                                                <option value="1264" label="Anguilla (+1 264)">Anguilla
                                                                    (+1 264)</option>
                                                                <option value="1268"
                                                                    label="Antigua and Barbuda (+1 268)">Antigua and
                                                                    Barbuda (+1 268)</option>
                                                                <option value="54" label="Argentina (+54)">Argentina
                                                                    (+54)</option>
                                                                <option value="374" label="Armenia (+374)">Armenia
                                                                    (+374)</option>
                                                                <option value="297" label="Aruba (+297)">Aruba (+297)
                                                                </option>
                                                                <option value="247" label="Ascension (+247)">Ascension
                                                                    (+247)</option>
                                                                <option value="61" label="Australia (+61)">Australia
                                                                    (+61)</option>
                                                                <option value="672"
                                                                    label="Australian External Territories (+672)">
                                                                    Australian External Territories (+672)</option>
                                                                <option value="43" label="Austria (+43)">Austria (+43)
                                                                </option>
                                                                <option value="994" label="Azerbaijan (+994)">Azerbaijan
                                                                    (+994)</option>
                                                                <option value="1242" label="Bahamas (+1 242)">Bahamas
                                                                    (+1 242)</option>
                                                                <option value="973" label="Bahrain (+973)">Bahrain
                                                                    (+973)</option>
                                                                <option value="880" label="Bangladesh (+880)">Bangladesh
                                                                    (+880)</option>
                                                                <option value="1246" label="Barbados (+1 246)">Barbados
                                                                    (+1 246)</option>
                                                                <option value="1268" label="Barbuda (+1 268)">Barbuda
                                                                    (+1 268)</option>
                                                                <option value="375" label="Belarus (+375)">Belarus
                                                                    (+375)</option>
                                                                <option value="32" label="Belgium (+32)">Belgium (+32)
                                                                </option>
                                                                <option value="501" label="Belize (+501)">Belize (+501)
                                                                </option>
                                                                <option value="229" label="Benin (+229)">Benin (+229)
                                                                </option>
                                                                <option value="1441" label="Bermuda (+1 441)">Bermuda
                                                                    (+1 441)</option>
                                                                <option value="975" label="Bhutan (+975)">Bhutan (+975)
                                                                </option>
                                                                <option value="591" label="Bolivia (+591)">Bolivia
                                                                    (+591)</option>
                                                                <option value="387"
                                                                    label="Bosnia and Herzegovina (+387)">Bosnia and
                                                                    Herzegovina (+387)</option>
                                                                <option value="267" label="Botswana (+267)">Botswana
                                                                    (+267)</option>
                                                                <option value="55" label="Brazil (+55)">Brazil (+55)
                                                                </option>
                                                                <option value="246"
                                                                    label="British Indian Ocean Territory (+246)">
                                                                    British Indian Ocean Territory (+246)</option>
                                                                <option value="1284"
                                                                    label="British Virgin Islands (+1 284)">British
                                                                    Virgin Islands (+1 284)</option>
                                                                <option value="673" label="Brunei (+673)">Brunei (+673)
                                                                </option>
                                                                <option value="359" label="Bulgaria (+359)">Bulgaria
                                                                    (+359)</option>
                                                                <option value="226" label="Burkina Faso (+226)">Burkina
                                                                    Faso (+226)</option>
                                                                <option value="257" label="Burundi (+257)">Burundi
                                                                    (+257)</option>
                                                                <option value="855" label="Cambodia (+855)">Cambodia
                                                                    (+855)</option>
                                                                <option value="237" label="Cameroon (+237)">Cameroon
                                                                    (+237)</option>
                                                                <option value="1" label="Canada (+1)">Canada (+1)
                                                                </option>
                                                                <option value="238" label="Cape Verde (+238)">Cape Verde
                                                                    (+238)</option>
                                                                <option value="345" label="Cayman Islands (+345)">Cayman
                                                                    Islands (+345)</option>
                                                                <option value="236"
                                                                    label="Central African Republic (+236)">Central
                                                                    African Republic (+236)</option>
                                                                <option value="235" label="Chad (+235)">Chad (+235)
                                                                </option>
                                                                <option value="56" label="Chile (+56)">Chile (+56)
                                                                </option>
                                                                <option value="86" label="China (+86)">China (+86)
                                                                </option>
                                                                <option value="61" label="Christmas Island (+61)">
                                                                    Christmas Island (+61)</option>
                                                                <option value="61" label="Cocos-Keeling Islands (+61)">
                                                                    Cocos-Keeling Islands (+61)</option>
                                                                <option value="57" label="Colombia (+57)">Colombia (+57)
                                                                </option>
                                                                <option value="269" label="Comoros (+269)">Comoros
                                                                    (+269)</option>
                                                                <option value="242" label="Congo (+242)">Congo (+242)
                                                                </option>
                                                                <option value="243"
                                                                    label="Congo, Dem. Rep. of (Zaire) (+243)">Congo,
                                                                    Dem. Rep. of (Zaire) (+243)</option>
                                                                <option value="682" label="Cook Islands (+682)">Cook
                                                                    Islands (+682)</option>
                                                                <option value="506" label="Costa Rica (+506)">Costa Rica
                                                                    (+506)</option>
                                                                <option value="225" label="Ivory Coast (+225)">Ivory
                                                                    Coast (+225)</option>
                                                                <option value="385" label="Croatia (+385)">Croatia
                                                                    (+385)</option>
                                                                <option value="53" label="Cuba (+53)">Cuba (+53)
                                                                </option>
                                                                <option value="599" label="Curacao (+599)">Curacao
                                                                    (+599)</option>
                                                                <option value="537" label="Cyprus (+537)">Cyprus (+537)
                                                                </option>
                                                                <option value="420" label="Czech Republic (+420)">Czech
                                                                    Republic (+420)</option>
                                                                <option value="45" label="Denmark (+45)">Denmark (+45)
                                                                </option>
                                                                <option value="246" label="Diego Garcia (+246)">Diego
                                                                    Garcia (+246)</option>
                                                                <option value="253" label="Djibouti (+253)">Djibouti
                                                                    (+253)</option>
                                                                <option value="1767" label="Dominica (+1 767)">Dominica
                                                                    (+1 767)</option>
                                                                <option value="1809"
                                                                    label="Dominican Republic (+1 809)">Dominican
                                                                    Republic (+1 809)</option>
                                                                <option value="1829"
                                                                    label="Dominican Republic (+1 829)">Dominican
                                                                    Republic (+1 829)</option>
                                                                <option value="1849"
                                                                    label="Dominican Republic (+1 849)">Dominican
                                                                    Republic (+1 849)</option>
                                                                <option value="670" label="East Timor (+670)">East Timor
                                                                    (+670)</option>
                                                                <option value="56" label="Easter Island (+56)">Easter
                                                                    Island (+56)</option>
                                                                <option value="593" label="Ecuador (+593)">Ecuador
                                                                    (+593)</option>
                                                                <option value="20" label="Egypt (+20)">Egypt (+20)
                                                                </option>
                                                                <option value="503" label="El Salvador (+503)">El
                                                                    Salvador (+503)</option>
                                                                <option value="240" label="Equatorial Guinea (+240)">
                                                                    Equatorial Guinea (+240)</option>
                                                                <option value="291" label="Eritrea (+291)">Eritrea
                                                                    (+291)</option>
                                                                <option value="372" label="Estonia (+372)">Estonia
                                                                    (+372)</option>
                                                                <option value="251" label="Ethiopia (+251)">Ethiopia
                                                                    (+251)</option>
                                                                <option value="500" label="Falkland Islands (+500)">
                                                                    Falkland Islands (+500)</option>
                                                                <option value="298" label="Faroe Islands (+298)">Faroe
                                                                    Islands (+298)</option>
                                                                <option value="679" label="Fiji (+679)">Fiji (+679)
                                                                </option>
                                                                <option value="358" label="Finland (+358)">Finland
                                                                    (+358)</option>
                                                                <option value="33" label="France (+33)">France (+33)
                                                                </option>
                                                                <option value="596" label="French Antilles (+596)">
                                                                    French Antilles (+596)</option>
                                                                <option value="594" label="French Guiana (+594)">French
                                                                    Guiana (+594)</option>
                                                                <option value="689" label="French Polynesia (+689)">
                                                                    French Polynesia (+689)</option>
                                                                <option value="241" label="Gabon (+241)">Gabon (+241)
                                                                </option>
                                                                <option value="220" label="Gambia (+220)">Gambia (+220)
                                                                </option>
                                                                <option value="995" label="Georgia (+995)">Georgia
                                                                    (+995)</option>
                                                                <option value="49" label="Germany (+49)">Germany (+49)
                                                                </option>
                                                                <option value="233" label="Ghana (+233)">Ghana (+233)
                                                                </option>
                                                                <option value="350" label="Gibraltar (+350)">Gibraltar
                                                                    (+350)</option>
                                                                <option value="30" label="Greece (+30)">Greece (+30)
                                                                </option>
                                                                <option value="299" label="Greenland (+299)">Greenland
                                                                    (+299)</option>
                                                                <option value="1473" label="Grenada (+1 473)">Grenada
                                                                    (+1 473)</option>
                                                                <option value="590" label="Guadeloupe (+590)">Guadeloupe
                                                                    (+590)</option>
                                                                <option value="1671" label="Guam (+1 671)">Guam (+1 671)
                                                                </option>
                                                                <option value="502" label="Guatemala (+502)">Guatemala
                                                                    (+502)</option>
                                                                <option value="224" label="Guinea (+224)">Guinea (+224)
                                                                </option>
                                                                <option value="245" label="Guinea-Bissau (+245)">
                                                                    Guinea-Bissau (+245)</option>
                                                                <option value="595" label="Guyana (+595)">Guyana (+595)
                                                                </option>
                                                                <option value="509" label="Haiti (+509)">Haiti (+509)
                                                                </option>
                                                                <option value="504" label="Honduras (+504)">Honduras
                                                                    (+504)</option>
                                                                <option value="852" label="Hong Kong SAR China (+852)">
                                                                    Hong Kong SAR China (+852)</option>
                                                                <option value="248" label="Seychelles (+248)">Seychelles
                                                                    (+248)</option>
                                                                <option value="354" label="Iceland (+354)">Iceland
                                                                    (+354)</option>
                                                                <option value="91" label="India (+91)">India (+91)
                                                                </option>
                                                                <option value="62" label="Indonesia (+62)">Indonesia
                                                                    (+62)</option>
                                                                <option value="98" label="Iran (+98)">Iran (+98)
                                                                </option>
                                                                <option value="964" label="Iraq (+964)">Iraq (+964)
                                                                </option>
                                                                <option value="353" label="Ireland (+353)">Ireland
                                                                    (+353)</option>
                                                                <option value="972" label="Israel (+972)">Israel (+972)
                                                                </option>
                                                                <option value="39" label="Italy (+39)">Italy (+39)
                                                                </option>
                                                                <option value="1876" label="Jamaica (+1 876)">Jamaica
                                                                    (+1 876)</option>
                                                                <option value="81" label="Japan (+81)">Japan (+81)
                                                                </option>
                                                                <option value="962" label="Jordan (+962)">Jordan (+962)
                                                                </option>
                                                                <option value="77" label="Kazakhstan (+7 7)">Kazakhstan
                                                                    (+7 7)</option>
                                                                <option value="254" label="Kenya (+254)">Kenya (+254)
                                                                </option>
                                                                <option value="686" label="Kiribati (+686)">Kiribati
                                                                    (+686)</option>
                                                                <option value="850" label="North Korea (+850)">North
                                                                    Korea (+850)</option>
                                                                <option value="82" label="South Korea (+82)">South Korea
                                                                    (+82)</option>
                                                                <option value="965" label="Kuwait (+965)">Kuwait (+965)
                                                                </option>
                                                                <option value="996" label="Kyrgyzstan (+996)">Kyrgyzstan
                                                                    (+996)</option>
                                                                <option value="856" label="Laos (+856)">Laos (+856)
                                                                </option>
                                                                <option value="371" label="Latvia (+371)">Latvia (+371)
                                                                </option>
                                                                <option value="961" label="Lebanon (+961)">Lebanon
                                                                    (+961)</option>
                                                                <option value="266" label="Lesotho (+266)">Lesotho
                                                                    (+266)</option>
                                                                <option value="231" label="Liberia (+231)">Liberia
                                                                    (+231)</option>
                                                                <option value="218" label="Libya (+218)">Libya (+218)
                                                                </option>
                                                                <option value="423" label="Liechtenstein (+423)">
                                                                    Liechtenstein (+423)</option>
                                                                <option value="370" label="Lithuania (+370)">Lithuania
                                                                    (+370)</option>
                                                                <option value="352" label="Luxembourg (+352)">Luxembourg
                                                                    (+352)</option>
                                                                <option value="853" label="Macau SAR China (+853)">Macau
                                                                    SAR China (+853)</option>
                                                                <option value="389" label="Macedonia (+389)">Macedonia
                                                                    (+389)</option>
                                                                <option value="261" label="Madagascar (+261)">Madagascar
                                                                    (+261)</option>
                                                                <option value="265" label="Malawi (+265)">Malawi (+265)
                                                                </option>
                                                                <option value="60" label="Malaysia (+60)">Malaysia (+60)
                                                                </option>
                                                                <option value="960" label="Maldives (+960)">Maldives
                                                                    (+960)</option>
                                                                <option value="223" label="Mali (+223)">Mali (+223)
                                                                </option>
                                                                <option value="356" label="Malta (+356)">Malta (+356)
                                                                </option>
                                                                <option value="692" label="Marshall Islands (+692)">
                                                                    Marshall Islands (+692)</option>
                                                                <option value="596" label="Martinique (+596)">Martinique
                                                                    (+596)</option>
                                                                <option value="222" label="Mauritania (+222)">Mauritania
                                                                    (+222)</option>
                                                                <option value="230" label="Mauritius (+230)">Mauritius
                                                                    (+230)</option>
                                                                <option value="262" label="Mayotte (+262)">Mayotte
                                                                    (+262)</option>
                                                                <option value="52" label="Mexico (+52)">Mexico (+52)
                                                                </option>
                                                                <option value="691" label="Micronesia (+691)">Micronesia
                                                                    (+691)</option>
                                                                <option value="1808" label="Midway Island (+1 808)">
                                                                    Midway Island (+1 808)</option>
                                                                <option value="691" label="Micronesia (+691)">Micronesia
                                                                    (+691)</option>
                                                                <option value="373" label="Moldova (+373)">Moldova
                                                                    (+373)</option>
                                                                <option value="377" label="Monaco (+377)">Monaco (+377)
                                                                </option>
                                                                <option value="976" label="Mongolia (+976)">Mongolia
                                                                    (+976)</option>
                                                                <option value="382" label="Montenegro (+382)">Montenegro
                                                                    (+382)</option>
                                                                <option value="1664" label="Montserrat (+1664)">
                                                                    Montserrat (+1664)</option>
                                                                <option value="212" label="Morocco (+212)">Morocco
                                                                    (+212)</option>
                                                                <option value="95" label="Myanmar (+95)">Myanmar (+95)
                                                                </option>
                                                                <option value="264" label="Namibia (+264)">Namibia
                                                                    (+264)</option>
                                                                <option value="674" label="Nauru (+674)">Nauru (+674)
                                                                </option>
                                                                <option value="977" label="Nepal (+977)">Nepal (+977)
                                                                </option>
                                                                <option value="31" label="Netherlands (+31)">Netherlands
                                                                    (+31)</option>
                                                                <option value="599" label="Netherlands Antilles (+599)">
                                                                    Netherlands Antilles (+599)</option>
                                                                <option value="1869" label="Nevis (+1 869)">Nevis (+1
                                                                    869)</option>
                                                                <option value="687" label="New Caledonia (+687)">New
                                                                    Caledonia (+687)</option>
                                                                <option value="64" label="New Zealand (64)">New Zealand
                                                                    (64)</option>
                                                                <option value="505" label="Nicaragua (+505)">Nicaragua
                                                                    (+505)</option>
                                                                <option value="227" label="Niger (+227)">Niger (+227)
                                                                </option>
                                                                <option value="234" label="Nigeria (+234)">Nigeria
                                                                    (+234)</option>
                                                                <option value="683" label="Niue (+683)">Niue (+683)
                                                                </option>
                                                                <option value="672" label="Norfolk Island (+672)">
                                                                    Norfolk Island (+672)</option>
                                                                <option value="1670"
                                                                    label="Northern Mariana Islands (+1 670)">Northern
                                                                    Mariana Islands (+1 670)</option>
                                                                <option value="47" label="Norway (+47)">Norway (+47)
                                                                </option>
                                                                <option value="968" label="Oman (+968)">Oman (+968)
                                                                </option>
                                                                <option value="92" label="Pakistan (+92)">Pakistan (+92)
                                                                </option>
                                                                <option value="680" label="Palau (+680)">Palau (+680)
                                                                </option>
                                                                <option value="970"
                                                                    label="Palestinian Territory (+970)">Palestinian
                                                                    Territory (+970)</option>
                                                                <option value="507" label="Panama (+507)">Panama (+507)
                                                                </option>
                                                                <option value="675" label="Papua New Guinea (+675)">
                                                                    Papua New Guinea (+675)</option>
                                                                <option value="595" label="Paraguay (+595)">Paraguay
                                                                    (+595)</option>
                                                                <option value="51" label="Peru (+51)">Peru (+51)
                                                                </option>
                                                                <option value="63" label="Philippines (+63)">Philippines
                                                                    (+63)</option>
                                                                <option value="48" label="Poland (+48)">Poland (+48)
                                                                </option>
                                                                <option value="351" label="Portugal (+351)">Portugal
                                                                    (+351)</option>
                                                                <option value="1787" label="Puerto Rico (+1 787)">Puerto
                                                                    Rico (+1 787)</option>
                                                                <option value="1939" label="Puerto Rico (+1 939)">Puerto
                                                                    Rico (+1 939)</option>
                                                                <option value="974" label="Qatar (+974)">Qatar (+974)
                                                                </option>
                                                                <option value="262" label="Reunion (+262)">Reunion
                                                                    (+262)</option>
                                                                <option value="40" label="Romania (+40)">Romania (+40)
                                                                </option>
                                                                <option value="7" label="Russia (+7)">Russia (+7)
                                                                </option>
                                                                <option value="250" label="Rwanda (+250)">Rwanda (+250)
                                                                </option>
                                                                <option value="685" label="Samoa (+685)">Samoa (+685)
                                                                </option>
                                                                <option value="378" label="San Marino (+378)">San Marino
                                                                    (+378)</option>
                                                                <option value="966" label="Saudi Arabia (+966)">Saudi
                                                                    Arabia (+966)</option>
                                                                <option value="221" label="Senegal (+221)">Senegal
                                                                    (+221)</option>
                                                                <option value="381" label="Serbia (+381)">Serbia (+381)
                                                                </option>
                                                                <option value="232" label="Sierra Leone (+232)">Sierra
                                                                    Leone (+232)</option>
                                                                <option value="65" label="Singapore (+65)">Singapore
                                                                    (+65)</option>
                                                                <option value="421" label="Slovakia (+421)">Slovakia
                                                                    (+421)</option>
                                                                <option value="386" label="Slovenia (+386)">Slovenia
                                                                    (+386)</option>
                                                                <option value="677" label="Solomon Islands (+677)">
                                                                    Solomon Islands (+677)</option>
                                                                <option value="27" label="South Africa (+27)">South
                                                                    Africa (+27)</option>
                                                                <option value="500"
                                                                    label="South Georgia and the South Sandwich Islands (+500)">
                                                                    South Georgia and the South Sandwich Islands (+500)
                                                                </option>
                                                                <option value="34" label="Spain (+34)">Spain (+34)
                                                                </option>
                                                                <option value="94" label="Sri Lanka (+94)">Sri Lanka
                                                                    (+94)</option>
                                                                <option value="249" label="Sudan (+249)">Sudan (+249)
                                                                </option>
                                                                <option value="597" label="Suriname (+597)">Suriname
                                                                    (+597)</option>
                                                                <option value="268" label="Swaziland (+268)">Swaziland
                                                                    (+268)</option>
                                                                <option value="46" label="Sweden (+46)">Sweden (+46)
                                                                </option>
                                                                <option value="41" label="Switzerland (+41)">Switzerland
                                                                    (+41)</option>
                                                                <option value="963" label="Syria (+963)">Syria (+963)
                                                                </option>
                                                                <option value="886" label="Taiwan (+886)">Taiwan (+886)
                                                                </option>
                                                                <option value="992" label="Tajikistan (+992)">Tajikistan
                                                                    (+992)</option>
                                                                <option value="255" label="Tanzania (+255)">Tanzania
                                                                    (+255)</option>
                                                                <option value="66" label="Thailand (+66)">Thailand (+66)
                                                                </option>
                                                                <option value="670" label="Timor Leste (+670)">Timor
                                                                    Leste (+670)</option>
                                                                <option value="228" label="Togo (+228)">Togo (+228)
                                                                </option>
                                                                <option value="690" label="Tokelau (+690)">Tokelau
                                                                    (+690)</option>
                                                                <option value="676" label="Tonga (+676)">Tonga (+676)
                                                                </option>
                                                                <option value="1868"
                                                                    label="Trinidad and Tobago (+1 868)">Trinidad and
                                                                    Tobago (+1 868)</option>
                                                                <option value="216" label="Tunisia (+216)">Tunisia
                                                                    (+216)</option>
                                                                <option value="90" label="Turkey (+90)">Turkey (+90)
                                                                </option>
                                                                <option value="993" label="Turkmenistan (+993)">
                                                                    Turkmenistan (+993)</option>
                                                                <option value="1649"
                                                                    label="Turks and Caicos Islands (+1 649)">Turks and
                                                                    Caicos Islands (+1 649)</option>
                                                                <option value="688" label="Tuvalu (+688)">Tuvalu (+688)
                                                                </option>
                                                                <option value="256" label="Uganda (+256)">Uganda (+256)
                                                                </option>
                                                                <option value="380" label="Ukraine (+380)">Ukraine
                                                                    (+380)</option>
                                                                <option value="971" label="United Arab Emirates (+971)">
                                                                    United Arab Emirates (+971)</option>
                                                                <option value="44" label="United Kingdom (+44)">United
                                                                    Kingdom (+44)</option>
                                                                <option value="1" label="United States (+1)">United
                                                                    States (+1)</option>
                                                                <option value="598" label="Uruguay (+598)">Uruguay
                                                                    (+598)</option>
                                                                <option value="1340"
                                                                    label="U.S. Virgin Islands (+1 340)">U.S. Virgin
                                                                    Islands (+1 340)</option>
                                                                <option value="998" label="Uzbekistan (+998)">Uzbekistan
                                                                    (+998)</option>
                                                                <option value="678" label="Vanuatu (+678)">Vanuatu
                                                                    (+678)</option>
                                                                <option value="58" label="Venezuela (+58)">Venezuela
                                                                    (+58)</option>
                                                                <option value="84" label="Vietnam (+84)">Vietnam (+84)
                                                                </option>
                                                                <option value="1808" label="Wake Island (+1 808)">Wake
                                                                    Island (+1 808)</option>
                                                                <option value="681" label="Wallis and Futuna (+681)">
                                                                    Wallis and Futuna (+681)</option>
                                                                <option value="967" label="Yemen (+967)">Yemen (+967)
                                                                </option>
                                                                <option value="260" label="Zambia (+260)">Zambia (+260)
                                                                </option>
                                                                <option value="255" label="Zanzibar (+255)">Zanzibar
                                                                    (+255)</option>
                                                                <option value="263" label="Zimbabwe (+263)">Zimbabwe
                                                                    (+263)</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-8">
                                                            <input type="number" name="vfax" placeholder=""
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 form-group">
                                                    <label>آدرس</label>
                                                    <textarea name="vaddress" class="form-control"
                                                        maxlength="255"></textarea>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label>کد پستی</label>
                                                    <input type="text" name="vcap" class="form-control">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label>شهر</label>
                                                    <input type="text" name="vcity" class="form-control">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label>شهرستان</label>
                                                    <input type="text" name="vstate" class="form-control">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label>کشور</label>
                                                    <input type="text" name="vcountry" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- tab content -->

                                    <div class="accordion" id="collapseSettings">
                                        <div class="accordion-item d-grid">
                                            <button
                                                class="mb-2 btn btn-outline-primary btn-lg btn-block text-start text-left"
                                                type="button" data-bs-toggle="collapse" data-toggle="collapse"
                                                data-bs-target="#collapseColors" data-target="#collapseColors" id="button1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                    viewBox="0 0 24 24" fill="currentColor">
                                                    <path
                                                        d="M18.717 8.831c-.734.824-.665 2.087.158 2.825l-1.333 1.491-7.455-6.667 1.334-1.49c.822.736 2.087.666 2.822-.159l3.503-3.831c.593-.663 1.414-1 2.238-1 1.666 0 3.016 1.358 3.016 2.996 0 .723-.271 1.435-.779 2.005l-3.504 3.83zm-8.217 6.169h-2.691l3.928-4.362-1.491-1.333-7.9 8.794c-1.277 1.423-.171 2.261-1.149 4.052-.135.244-.197.48-.197.698 0 .661.54 1.151 1.141 1.151.241 0 .492-.079.724-.256 1.733-1.332 2.644-.184 3.954-1.647l7.901-8.792-1.491-1.333-2.729 3.028z" />
                                                </svg> <span class="vertical-middle">رنگ آمیزی</span>
                                            </button>
                                            <div class="collapse" id="collapseColors" data-bs-parent="#collapseSettings"
                                                data-parent="#collapseSettings">
                                                <div class="col-sm-12 mb-2 custom-background">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <label>رنگ زمینه</label>
                                                            <div class="collapse show" id="collapse-background">
                                                                <input id="color1" type="text"
                                                                    class="form-control qrcolorpicker colorpickerback rounded-0"
                                                                    value="" name="backcolor" style="background-color: rgb(255, 255, 255); color: black;">
                                                                <input id="color2" type="color"
                                                                    class="form-control qrcolorpicker colorpickerback rounded-0"
                                                                    value="#FFFFFF" name="backcolor" style="background-color: rgb(255, 255, 255); color: black;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="custom-control custom-switch mt-2">
                                                        <input type="checkbox"
                                                            class="custom-control-input collapse-control-reversed"
                                                            id="trans-bg" name="transparent"
                                                            data-bs-target="#collapse-background"
                                                            data-target="#collapse-background">
                                                        <label class="custom-control-label" for="trans-bg">بدون
                                                            زمینه</label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <label>رنگ</label>
                                                            <input type="text"
                                                                class="form-control qrcolorpicker rounded-0"
                                                                value="#000000" name="frontcolor">

                                                            <div class="form-group">
                                                                <div class="custom-control custom-switch">
                                                                    <input type="checkbox"
                                                                        class="custom-control-input collapse-control"
                                                                        id="gradient-bg"
                                                                        data-bs-target="#collapse-gradient"
                                                                        data-target="#collapse-gradient"
                                                                        name="gradient">
                                                                    <label class="custom-control-label"
                                                                        for="gradient-bg">گرادینت</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="collapse" id="collapse-gradient">
                                                                <label>رنگ دوم</label>
                                                                <input type="text"
                                                                    class="form-control qrcolorpicker qrcolorpicker_bg rounded-0"
                                                                    value="#8900D5" name="gradient_color">
                                                                <div class="form-group">
                                                                    <div class="custom-control custom-switch">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="radial-gradient" name="radial">
                                                                        <label class="custom-control-label"
                                                                            for="radial-gradient">رادیال</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item d-grid">
                                            <button
                                                class="mb-2 btn btn-outline-primary btn-lg btn-block text-start text-left"
                                                type="button" data-bs-toggle="collapse" data-toggle="collapse"
                                                data-bs-target="#collapseStyle" data-target="#collapseStyle" id="button2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path
                                                        d="M21 21v3h3v-3h-1v-1h-1v1h-1zm2 1v1h-1v-1h1zm-23 2h8v-8h-8v8zm1-7h6v6h-6v-6zm20 3v-1h1v1h-1zm-19-2h4v4h-4v-4zm8-3v2h-1v-2h1zm2-8h1v1h-1v-1zm1-1h1v1h-1v-1zm1 2v-1h1v1h-1zm0-2h1v-6h-3v1h-3v1h3v1h2v3zm-1-4v-1h1v1h-1zm-7 4h-4v-4h4v4zm6 0h-1v-2h-2v-1h3v1h1v1h-1v1zm-4-6h-8v8h8v-8zm-1 7h-6v-6h6v6zm3 0h-1v-1h2v2h-1v-1zm-3 3v1h-1v-1h1zm15 6h2v3h-1v-1h-2v1h-1v-1h-1v-1h1v-1h1v1h1v-1zm-4 2h-1v1h-1v-1h-1v-1h1v-1h-2v-1h-1v1h-1v1h-2v1h-1v6h5v-1h-1v-2h-1v2h-2v-1h1v-1h-1v-1h3v-1h2v2h-1v1h1v2h1v-2h1v1h1v-1h1v-2h1v-1h-2v-1zm-1 3h-1v-1h1v1zm6-6v-2h1v2h-1zm-9 5v1h-1v-1h1zm5 3v-1h1v2h-2v-1h1zm-3-23v8h8v-8h-8zm7 7h-6v-6h6v6zm-1-1h-4v-4h4v4zm1 4h1v2h-1v1h-2v-4h1v2h1v-1zm-4 6v-3h1v3h-1zm-13-7v1h-2v1h1v1h-3v-1h1v-1h-2v1h-1v-2h6zm-1 4v-1h1v3h-1v-1h-1v1h-1v-1h-1v1h-2v-1h1v-1h4zm-4-1v1h-1v-1h1zm19-2h-1v-1h1v1zm-13 4h1v1h-1v-1zm15 2h-1v-1h1v1zm-5 1v-1h1v1h-1zm-1-1h1v-3h2v-1h1v-1h-1v-1h-2v-1h-1v1h-1v-1h-1v1h-1v-1h-1v1h-1v1h-1v-1h1v-1h-4v1h2v1h-2v1h1v2h1v-1h2v2h1v-4h1v2h3v1h-2v1h2v1zm1-5h1v1h-1v-1zm-2 1h-1v-1h1v1z" />
                                                </svg> <span class="vertical-middle">سفارشی سازی</span>
                                            </button>
                                            <div class="collapse" id="collapseStyle" data-bs-parent="#collapseSettings"
                                                data-parent="#collapseSettings">
                                                <div class="col-12">
                                                    <label>الگو</label>
                                                </div>
                                                <div class="col-12 mb-2">
                                                    <div class="btn-group-toggle styleselecta d-inline-block"
                                                        data-toggle="buttons"><label class="btn btn-light p-1">
                                                            <input type="radio" name="pattern" value="default" checked
                                                                class="btn-check">
                                                            <svg width="38" height="38" viewBox="0 0 6 6"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M5,1h1l0-1L4,0v1H3V0L0,0v0v0v2h1V1h0h1h1v1v0v0l0,0H2v1H1H0h0v3h0v0h2v0H1l0-2h1l0,1h1v1h3v0H5v0V5h1V4H5v1H3 l0-2l1,0v1h1V3h1V2H5V1z M5,3H4V2h1V3z" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="pattern" value="circle"
                                                                class="btn-check">
                                                            <svg width="38" height="38" viewBox="0 0 6 6"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <circle cx="0.5" cy="0.5" r="0.5" />
                                                                <circle cx="1.5" cy="0.5" r="0.5" />
                                                                <circle cx="3.5" cy="0.5" r="0.5" />
                                                                <circle cx="4.5" cy="0.5" r="0.5" />
                                                                <circle cx="0.5" cy="1.5" r="0.5" />
                                                                <circle cx="4.5" cy="1.5" r="0.5" />
                                                                <circle cx="5.5" cy="1.5" r="0.5" />
                                                                <circle cx="0.5" cy="2.5" r="0.5" />
                                                                <circle cx="1.5" cy="2.5" r="0.5" />
                                                                <circle cx="0.5" cy="3.5" r="0.5" />
                                                                <circle cx="1.5" cy="3.5" r="0.5" />
                                                                <circle cx="4.5" cy="3.5" r="0.5" />
                                                                <circle cx="5.5" cy="3.5" r="0.5" />
                                                                <circle cx="2.5" cy="4.5" r="0.5" />
                                                                <circle cx="1.5" cy="5.5" r="0.5" />
                                                                <circle cx="3.5" cy="5.5" r="0.5" />
                                                                <circle cx="5.5" cy="5.5" r="0.5" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="pattern" value="star"
                                                                class="btn-check">
                                                            <svg width="38" height="38" viewBox="0 0 6 6"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <polygon
                                                                    points="0.5,0.8 0.2,1 0.2,0.6 0,0.4 0.3,0.3 0.5,0 0.7,0.3 1,0.4 0.7,0.6 0.8,1" />
                                                                <polygon
                                                                    points="2.5,0.8 2.2,1 2.2,0.6 2,0.4 2.3,0.3 2.5,0 2.7,0.3 3,0.4 2.7,0.6 2.8,1" />
                                                                <polygon
                                                                    points="4.5,0.8 4.2,1 4.3,0.6 4,0.4 4.3,0.3 4.5,0 4.7,0.3 5,0.4 4.8,0.6 4.8,1" />
                                                                <polygon
                                                                    points="5.5,0.8 5.2,1 5.3,0.6 5,0.4 5.3,0.3 5.5,0 5.7,0.3 6,0.4 5.8,0.6 5.8,1" />
                                                                <polygon
                                                                    points="3.5,1.8 3.2,2 3.2,1.6 3,1.4 3.3,1.3 3.5,1 3.7,1.3 4,1.4 3.7,1.6 3.8,2" />
                                                                <polygon
                                                                    points="4.5,1.8 4.2,2 4.2,1.6 4,1.4 4.3,1.3 4.5,1 4.7,1.3 5,1.4 4.7,1.6 4.8,2" />
                                                                <polygon
                                                                    points="2.5,2.8 2.2,3 2.2,2.6 2,2.4 2.3,2.3 2.5,2 2.7,2.3 3,2.4 2.7,2.6 2.8,3" />
                                                                <polygon
                                                                    points="3.5,2.8 3.2,3 3.2,2.6 3,2.4 3.3,2.3 3.5,2 3.7,2.3 4,2.4 3.7,2.6 3.8,3" />
                                                                <polygon
                                                                    points="0.5,3.8 0.2,4 0.2,3.6 0,3.4 0.3,3.3 0.5,3 0.7,3.3 1,3.4 0.7,3.6 0.8,4" />
                                                                <polygon
                                                                    points="1.5,3.8 1.2,4 1.2,3.6 1,3.4 1.3,3.3 1.5,3 1.7,3.3 2,3.4 1.7,3.6 1.8,4" />
                                                                <polygon
                                                                    points="2.5,5.8 2.2,6 2.2,5.6 2,5.4 2.3,5.3 2.5,5 2.7,5.3 3,5.4 2.8,5.6 2.8,6" />
                                                                <polygon
                                                                    points="3.5,5.8 3.2,6 3.2,5.6 3,5.4 3.3,5.3 3.5,5 3.7,5.3 4,5.4 3.8,5.6 3.8,6" />
                                                                <polygon
                                                                    points="0.5,1.8 0.2,2 0.2,1.6 0,1.4 0.3,1.3 0.5,1 0.7,1.3 1,1.4 0.7,1.6 0.8,2" />
                                                                <polygon
                                                                    points="4.5,3.8 4.2,4 4.3,3.6 4,3.4 4.3,3.3 4.5,3 4.7,3.3 5,3.4 4.8,3.6 4.8,4" />
                                                                <polygon
                                                                    points="5.5,4.8 5.2,5 5.3,4.6 5,4.4 5.3,4.3 5.5,4 5.7,4.3 6,4.4 5.8,4.6 5.8,5" />
                                                                <polygon
                                                                    points="0.5,5.8 0.2,6 0.2,5.6 0,5.4 0.3,5.3 0.5,5 0.7,5.3 1,5.4 0.7,5.6 0.8,6" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="pattern" value="diamond"
                                                                class="btn-check">
                                                            <svg width="38" height="38" viewBox="0 0 6 6"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="0.1" y="0.1"
                                                                    transform="matrix(0.7071 -0.7071 0.7071 0.7071 -0.2075 0.4992)"
                                                                    width="0.7" height="0.7" />
                                                                <rect x="0.1" y="1.1"
                                                                    transform="matrix(0.7071 -0.7071 0.7071 0.7071 -0.9146 0.7923)"
                                                                    width="0.7" height="0.7" />
                                                                <rect x="2.1" y="0.1"
                                                                    transform="matrix(0.7071 -0.7071 0.7071 0.7071 0.3783 1.9134)"
                                                                    width="0.7" height="0.7" />
                                                                <rect x="4.1" y="0.1"
                                                                    transform="matrix(0.7071 -0.7071 0.7071 0.7071 0.9641 3.3276)"
                                                                    width="0.7" height="0.7" />
                                                                <rect x="5.1" y="0.1"
                                                                    transform="matrix(0.7071 -0.7071 0.7071 0.7071 1.257 4.0347)"
                                                                    width="0.7" height="0.7" />
                                                                <rect x="4.1" y="1.1"
                                                                    transform="matrix(0.7071 -0.7071 0.7071 0.7071 0.257 3.6205)"
                                                                    width="0.7" height="0.7" />
                                                                <rect x="3.1" y="1.1"
                                                                    transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.593460e-02 2.9134)"
                                                                    width="0.7" height="0.7" />
                                                                <rect x="3.1" y="2.1"
                                                                    transform="matrix(0.7071 -0.7071 0.7071 0.7071 -0.743 3.2063)"
                                                                    width="0.7" height="0.7" />
                                                                <rect x="2.1" y="2.1"
                                                                    transform="matrix(0.7071 -0.7071 0.7071 0.7071 -1.0359 2.4992)"
                                                                    width="0.7" height="0.7" />
                                                                <rect x="1.1" y="3.1"
                                                                    transform="matrix(0.7071 -0.7071 0.7071 0.7071 -2.0359 2.0849)"
                                                                    width="0.7" height="0.7" />
                                                                <rect x="0.1" y="3.1"
                                                                    transform="matrix(0.7071 -0.7071 0.7071 0.7071 -2.3287 1.3777)"
                                                                    width="0.7" height="0.7" />
                                                                <rect x="0.1" y="5.1"
                                                                    transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.7428 1.9634)"
                                                                    width="0.7" height="0.7" />
                                                                <rect x="2.1" y="5.1"
                                                                    transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.1573 3.3778)"
                                                                    width="0.7" height="0.7" />
                                                                <rect x="3.1" y="5.1"
                                                                    transform="matrix(0.7071 -0.7071 0.7071 0.7071 -2.8644 4.0849)"
                                                                    width="0.7" height="0.7" />
                                                                <rect x="5.1" y="4.1"
                                                                    transform="matrix(0.7071 -0.7071 0.7071 0.7071 -1.5715 5.2063)"
                                                                    width="0.7" height="0.7" />
                                                                <rect x="4.1" y="3.1"
                                                                    transform="matrix(0.7071 -0.7071 0.7071 0.7071 -1.1573 4.2063)"
                                                                    width="0.7" height="0.7" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="pattern" value="sparkle"
                                                                class="btn-check">
                                                            <svg width="38" height="38" viewBox="0 0 6 6"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0.4,0.9L0.4,0.9L0.4,0.9h0.1c0-0.2,0.2-0.3,0.4-0.4l0.1,0l0.1,0c0.2,0,0.3,0.2,0.4,0.4v0.1c0,0.2-0.2,0.3-0.4,0.4L1,1.5 v0.1l0.1,0c0.2,0,0.3,0.2,0.4,0.4v0.1c0,0.2-0.2,0.3-0.4,0.4L1,2.5v0.1l0.1,0c0.2,0,0.3,0.2,0.4,0.4l0,0.1h0.1l0-0.1 c0-0.2,0.2-0.3,0.4-0.4l0.1,0V2.5l-0.1,0c-0.2,0-0.3-0.2-0.4-0.4V1.9c0-0.2,0.2-0.3,0.4-0.4l0.1,0V1.5l-0.1,0 c-0.2,0-0.3-0.2-0.4-0.4V0.9c0-0.2,0.2-0.3,0.4-0.4l0.1,0V0.5l-0.1,0c-0.2,0-0.3-0.2-0.4-0.4l0-0.1H1.5l0,0.1 c0,0.2-0.2,0.3-0.4,0.4L1,0.5l-0.1,0c-0.2,0-0.3-0.2-0.4-0.4l0-0.1H0.5l0,0.1c0,0.2-0.2,0.3-0.4,0.4L0,0.5v0.1l0.1,0 C0.3,0.6,0.4,0.7,0.4,0.9z" />
                                                                <path
                                                                    d="M3.6,4.1L3.6,4.1L3.6,4.1H3.4c0,0.2-0.2,0.3-0.4,0.4H2.9c-0.2,0-0.3-0.2-0.4-0.4l0-0.1H2.5l0,0.1c0,0.2-0.2,0.3-0.4,0.4 L2,4.5v0.1l0.1,0c0.2,0,0.3,0.2,0.4,0.4v0.1c0,0.2-0.2,0.3-0.4,0.4H1.9c-0.2,0-0.3-0.2-0.4-0.4l0-0.1H1.5l0,0.1 c0,0.2-0.2,0.3-0.4,0.4H0.9c-0.2,0-0.3-0.2-0.4-0.4V4.9c0-0.2,0.2-0.3,0.4-0.4l0.1,0V4.5l-0.1,0c-0.2,0-0.3-0.2-0.4-0.4V3.9 c0-0.2,0.2-0.3,0.4-0.4l0.1,0V3.5l-0.1,0c-0.2,0-0.3-0.2-0.4-0.4l0-0.1H0.5l0,0.1c0,0.2-0.2,0.3-0.4,0.4L0,3.5v0.1l0.1,0 c0.2,0,0.3,0.2,0.4,0.4v0.1c0,0.2-0.2,0.3-0.4,0.4L0,4.5v0.1l0.1,0c0.2,0,0.3,0.2,0.4,0.4v0.1c0,0.2-0.2,0.3-0.4,0.4L0,5.5v0.1 l0.1,0c0.2,0,0.3,0.2,0.4,0.4l0,0.1h0.1l0-0.1c0-0.2,0.2-0.3,0.4-0.4h0.1c0.2,0,0.3,0.2,0.4,0.4l0,0.1h0.1l0-0.1 c0-0.2,0.2-0.3,0.4-0.4h0.1c0.2,0,0.3,0.2,0.4,0.4l0,0.1h0.1l0-0.1c0-0.2,0.2-0.3,0.4-0.4h0.1c0.2,0,0.3,0.2,0.4,0.4l0,0.1h0.1 l0-0.1c0-0.2,0.2-0.3,0.4-0.4l0.1,0V5.5l-0.1,0c-0.2,0-0.3-0.2-0.4-0.4V4.9c0-0.2,0.2-0.3,0.4-0.4l0.1,0V4.5l-0.1,0 C3.7,4.4,3.6,4.3,3.6,4.1z M3.4,5.1c0,0.2-0.2,0.3-0.4,0.4H2.9c-0.2,0-0.3-0.2-0.4-0.4V4.9c0-0.2,0.2-0.3,0.4-0.4h0.1 c0.2,0,0.3,0.2,0.4,0.4V5.1z" />
                                                                <path
                                                                    d="M5.6,4.1L5.6,4.1L5.6,4.1H5.4c0,0.2-0.2,0.3-0.4,0.4L5,4.5v0.1l0.1,0c0.2,0,0.3,0.2,0.4,0.4l0,0.1h0.1l0-0.1 c0-0.2,0.2-0.3,0.4-0.4l0.1,0V4.5l-0.1,0C5.7,4.4,5.6,4.3,5.6,4.1z" />
                                                                <path
                                                                    d="M5.6,2.1L5.6,2.1L5.6,2.1H5.4c0,0.2-0.2,0.3-0.4,0.4H4.9c-0.2,0-0.3-0.2-0.4-0.4l0-0.1H4.5l0,0.1c0,0.2-0.2,0.3-0.4,0.4 H3.9c-0.2,0-0.3-0.2-0.4-0.4V1.9c0-0.2,0.2-0.3,0.4-0.4l0.1,0V1.5l-0.1,0c-0.2,0-0.3-0.2-0.4-0.4V0.9c0-0.2,0.2-0.3,0.4-0.4l0.1,0 V0.5l-0.1,0c-0.2,0-0.3-0.2-0.4-0.4l0-0.1H3.5l0,0.1c0,0.2-0.2,0.3-0.4,0.4L3,0.5v0.1l0.1,0c0.2,0,0.3,0.2,0.4,0.4v0.1 c0,0.2-0.2,0.3-0.4,0.4L3,1.5v0.1l0.1,0c0.2,0,0.3,0.2,0.4,0.4v0.1c0,0.2-0.2,0.3-0.4,0.4L3,2.5v0.1l0.1,0c0.2,0,0.3,0.2,0.4,0.4 l0,0.1h0.1l0-0.1c0-0.2,0.2-0.3,0.4-0.4h0.1c0.2,0,0.3,0.2,0.4,0.4l0,0.1h0.1l0-0.1c0-0.2,0.2-0.3,0.4-0.4h0.1 c0.2,0,0.3,0.2,0.4,0.4l0,0.1h0.1l0-0.1c0-0.2,0.2-0.3,0.4-0.4l0.1,0V2.5l-0.1,0C5.7,2.4,5.6,2.3,5.6,2.1z" />
                                                                <path
                                                                    d="M5.9,0.4c-0.2,0-0.3-0.2-0.4-0.4l0-0.1H5.5l0,0.1c0,0.2-0.2,0.3-0.4,0.4L5,0.5v0.1l0.1,0c0.2,0,0.3,0.2,0.4,0.4l0,0.1h0.1 l0-0.1c0-0.2,0.2-0.3,0.4-0.4V0.4L5.9,0.4L5.9,0.4z" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="pattern" value="danger"
                                                                class="btn-check">
                                                            <svg width="38" height="38" viewBox="0 0 6 6"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <polygon
                                                                    points="2.9,0.5 3,0.4 3,0 2.6,0 2.5,0.1 2.4,0 2,0 2,0.4 2.1,0.5 2,0.6 2,1 2.4,1 2.5,0.9 2.6,1 3,1 3,0.6" />
                                                                <path
                                                                    d="M6,0H5.6L5.5,0.1L5.4,0H5H4.6L4.5,0.1L4.4,0H4v0.4l0.1,0.1L4,0.6V1H3.6L3.5,1.1L3.4,1H3v0.4l0.1,0.1L3,1.6V2 h0.4l0.1-0.1L3.6,2H4h0.4l0.1-0.1L4.6,2H5V1.6L4.9,1.5L5,1.4V1h0.4l0.1-0.1L5.6,1H6V0.6L5.9,0.5L6,0.4V0z M4,1.6L3.9,1.5L4,1.4 l0.1,0.1L4,1.6z M4.5,1.1L4.4,1l0.1-0.1L4.6,1L4.5,1.1z M5,0.6L4.9,0.5L5,0.4l0.1,0.1L5,0.6z" />
                                                                <polygon
                                                                    points="2.5,2.1 2.4,2 2,2 2,2.4 2.1,2.5 2,2.6 2,3 2.4,3 2.5,2.9 2.6,3 3,3 3,2.6 2.9,2.5 3,2.4 3,2 2.6,2" />
                                                                <path
                                                                    d="M0.5,1.9L0.6,2H1V1.6L0.9,1.5L1,1.4V1V0.6L0.9,0.5L1,0.4V0H0.6L0.5,0.1L0.4,0H0v0.4l0.1,0.1L0,0.6V1v0.4 l0.1,0.1L0,1.6V2h0.4L0.5,1.9z M0.5,0.9L0.6,1L0.5,1.1L0.4,1L0.5,0.9z" />
                                                                <path
                                                                    d="M1.5,3.1L1.4,3H1H0.6L0.5,3.1L0.4,3H0v0.4l0.1,0.1L0,3.6V4h0.4l0.1-0.1L0.6,4H1h0.4l0.1-0.1L1.6,4H2V3.6 L1.9,3.5L2,3.4V3H1.6L1.5,3.1z M1,3.6L0.9,3.5L1,3.4l0.1,0.1L1,3.6z" />
                                                                <polygon
                                                                    points="0.5,5.1 0.4,5 0,5 0,5.4 0.1,5.5 0,5.6 0,6 0.4,6 0.5,5.9 0.6,6 1,6 1,5.6 0.9,5.5 1,5.4 1,5 0.6,5" />
                                                                <path
                                                                    d="M3.5,5.1L3.4,5H3H2.6L2.5,5.1L2.4,5H2v0.4l0.1,0.1L2,5.6V6h0.4l0.1-0.1L2.6,6H3h0.4l0.1-0.1L3.6,6H4V5.6 L3.9,5.5L4,5.4V5H3.6L3.5,5.1z M3,5.6L2.9,5.5L3,5.4l0.1,0.1L3,5.6z" />
                                                                <polygon
                                                                    points="4.9,3.5 5,3.4 5,3 4.6,3 4.5,3.1 4.4,3 4,3 4,3.4 4.1,3.5 4,3.6 4,4 4.4,4 4.5,3.9 4.6,4 5,4 5,3.6" />
                                                                <polygon
                                                                    points="5.5,4.1 5.4,4 5,4 5,4.4 5.1,4.5 5,4.6 5,5 5.4,5 5.5,4.9 5.6,5 6,5 6,4.6 5.9,4.5 6,4.4 6,4 5.6,4" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="pattern" value="cross"
                                                                class="btn-check">
                                                            <svg width="38" height="38" viewBox="0 0 6 6"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <polygon
                                                                    points="0.3,2 0.7,2 0.7,1.7 1,1.7 1,1.3 0.7,1.3 0.7,1 0.7,0.7 1,0.7 1,0.3 0.7,0.3 0.7,0 0.3,0 0.3,0.3 0,0.3 0,0.7 0.3,0.7 0.3,1 0.3,1.3 0,1.3 0,1.7 0.3,1.7 " />
                                                                <polygon
                                                                    points="2.3,1 2.7,1 2.7,0.7 3,0.7 3,0.3 2.7,0.3 2.7,0 2.3,0 2.3,0.3 2,0.3 2,0.7 2.3,0.7 " />
                                                                <polygon
                                                                    points="5.7,0.3 5.7,0 5.3,0 5.3,0.3 5,0.3 4.7,0.3 4.7,0 4.3,0 4.3,0.3 4,0.3 4,0.7 4.3,0.7 4.3,1 4.3,1.3 4,1.3 3.7,1.3 3.7,1 3.3,1 3.3,1.3 3,1.3 3,1.7 3.3,1.7 3.3,2 3.7,2 3.7,1.7 4,1.7 4,1.7 4.3,1.7 4.3,2 4.7,2 4.7,1.7 5,1.7 5,1.3 4.7,1.3 4.7,1 4.7,0.7 5,0.7 5,0.7 5.3,0.7 5.3,1 5.7,1 5.7,0.7 6,0.7 6,0.3 " />
                                                                <polygon
                                                                    points="2.3,3 2.7,3 2.7,2.7 3,2.7 3,2.3 2.7,2.3 2.7,2 2.3,2 2.3,2.3 2,2.3 2,2.7 2.3,2.7 " />
                                                                <polygon
                                                                    points="1.7,3 1.3,3 1.3,3.3 1,3.3 0.7,3.3 0.7,3 0.3,3 0.3,3.3 0,3.3 0,3.7 0.3,3.7 0.3,4 0.7,4 0.7,3.7 1,3.7 1,3.7 1.3,3.7 1.3,4 1.7,4 1.7,3.7 2,3.7 2,3.3 1.7,3.3 " />
                                                                <polygon
                                                                    points="4.7,3 4.3,3 4.3,3.3 4,3.3 4,3.7 4.3,3.7 4.3,4 4.7,4 4.7,3.7 5,3.7 5,3.3 4.7,3.3 " />
                                                                <polygon
                                                                    points="5.7,4 5.3,4 5.3,4.3 5,4.3 5,4.7 5.3,4.7 5.3,5 5.7,5 5.7,4.7 6,4.7 6,4.3 5.7,4.3 " />
                                                                <polygon
                                                                    points="3.7,5 3.3,5 3.3,5.3 3,5.3 2.7,5.3 2.7,5 2.3,5 2.3,5.3 2,5.3 2,5.7 2.3,5.7 2.3,6 2.7,6 2.7,5.7 3,5.7 3,5.7 3.3,5.7 3.3,6 3.7,6 3.7,5.7 4,5.7 4,5.3 3.7,5.3 " />
                                                                <polygon
                                                                    points="0.7,5 0.3,5 0.3,5.3 0,5.3 0,5.7 0.3,5.7 0.3,6 0.7,6 0.7,5.7 1,5.7 1,5.3 0.7,5.3 " />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="pattern" value="plus"
                                                                class="btn-check">
                                                            <svg width="38" height="38" viewBox="0 0 6 6"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0.7,0.8L0.7,0.8L0.7,0.8c0.1-0.1,0.2-0.1,0.2-0.1C1,0.6,1,0.6,1,0.5c0-0.1-0.1-0.2-0.2-0.2H0.7V0.2
    C0.7,0.1,0.6,0,0.5,0S0.3,0.1,0.3,0.2v0.1H0.2C0.1,0.3,0,0.4,0,0.5s0.1,0.2,0.2,0.2h0.1v0.1C0.3,0.9,0.4,1,0.5,1 c0.1,0,0.1,0,0.2-0.1S0.7,0.8,0.7,0.8z" />
                                                                <path
                                                                    d="M2.2,0.7L2.2,0.7L2.2,0.7C2.3,0.9,2.4,1,2.5,1c0.1,0,0.1,0,0.2-0.1s0.1-0.1,0.1-0.2V0.7h0.1 c0.1,0,0.1,0,0.2-0.1C3,0.6,3,0.6,3,0.5c0-0.1-0.1-0.2-0.2-0.2H2.7V0.2C2.7,0.1,2.6,0,2.5,0S2.3,0.1,2.3,0.2v0.1H2.2 C2.1,0.3,2,0.4,2,0.5S2.1,0.7,2.2,0.7z" />
                                                                <path
                                                                    d="M4.7,0.8L4.7,0.8L4.7,0.8c0.1-0.1,0.2-0.1,0.2-0.1C5,0.6,5,0.6,5,0.5c0-0.1-0.1-0.2-0.2-0.2H4.7V0.2 C4.7,0.1,4.6,0,4.5,0S4.3,0.1,4.3,0.2v0.1H4.2C4.1,0.3,4,0.4,4,0.5s0.1,0.2,0.2,0.2h0.1v0.1C4.3,0.9,4.4,1,4.5,1 c0.1,0,0.1,0,0.2-0.1S4.7,0.8,4.7,0.8z" />
                                                                <path
                                                                    d="M5.2,0.7L5.2,0.7L5.2,0.7C5.3,0.9,5.4,1,5.5,1c0.1,0,0.1,0,0.2-0.1s0.1-0.1,0.1-0.2V0.7h0.1 c0.1,0,0.1,0,0.2-0.1C6,0.6,6,0.6,6,0.5c0-0.1-0.1-0.2-0.2-0.2H5.7V0.2C5.7,0.1,5.6,0,5.5,0S5.3,0.1,5.3,0.2v0.1H5.2 C5.1,0.3,5,0.4,5,0.5S5.1,0.7,5.2,0.7z" />
                                                                <path
                                                                    d="M4.2,1.7L4.2,1.7L4.2,1.7C4.3,1.9,4.4,2,4.5,2c0.1,0,0.1,0,0.2-0.1s0.1-0.1,0.1-0.2V1.7h0.1 c0.1,0,0.1,0,0.2-0.1C5,1.6,5,1.6,5,1.5c0-0.1-0.1-0.2-0.2-0.2H4.7V1.2C4.7,1.1,4.6,1,4.5,1S4.3,1.1,4.3,1.2v0.1H4.2 C4.1,1.3,4,1.4,4,1.5S4.1,1.7,4.2,1.7z" />
                                                                <path
                                                                    d="M3.7,1.8L3.7,1.8L3.7,1.8c0.1-0.1,0.2-0.1,0.2-0.1C4,1.6,4,1.6,4,1.5c0-0.1-0.1-0.2-0.2-0.2H3.7V1.2 C3.7,1.1,3.6,1,3.5,1S3.3,1.1,3.3,1.2v0.1H3.2C3.1,1.3,3,1.4,3,1.5s0.1,0.2,0.2,0.2h0.1v0.1C3.3,1.9,3.4,2,3.5,2 c0.1,0,0.1,0,0.2-0.1S3.7,1.8,3.7,1.8z" />
                                                                <path
                                                                    d="M3.2,2.7L3.2,2.7L3.2,2.7C3.3,2.9,3.4,3,3.5,3c0.1,0,0.1,0,0.2-0.1s0.1-0.1,0.1-0.2V2.7h0.1 c0.1,0,0.1,0,0.2-0.1C4,2.6,4,2.6,4,2.5c0-0.1-0.1-0.2-0.2-0.2H3.7V2.2C3.7,2.1,3.6,2,3.5,2S3.3,2.1,3.3,2.2v0.1H3.2 C3.1,2.3,3,2.4,3,2.5S3.1,2.7,3.2,2.7z" />
                                                                <path
                                                                    d="M2.2,2.7L2.2,2.7L2.2,2.7C2.3,2.9,2.4,3,2.5,3c0.1,0,0.1,0,0.2-0.1s0.1-0.1,0.1-0.2V2.7h0.1 c0.1,0,0.1,0,0.2-0.1C3,2.6,3,2.6,3,2.5c0-0.1-0.1-0.2-0.2-0.2H2.7V2.2C2.7,2.1,2.6,2,2.5,2S2.3,2.1,2.3,2.2v0.1H2.2 C2.1,2.3,2,2.4,2,2.5S2.1,2.7,2.2,2.7z" />
                                                                <path
                                                                    d="M0.3,1.2L0.3,1.2L0.3,1.2C0.1,1.3,0,1.4,0,1.5s0.1,0.2,0.2,0.2h0.1v0.1C0.3,1.9,0.4,2,0.5,2 c0.1,0,0.1,0,0.2-0.1s0.1-0.1,0.1-0.2V1.7h0.1c0.1,0,0.1,0,0.2-0.1C1,1.6,1,1.6,1,1.5c0-0.1-0.1-0.2-0.2-0.2H0.7V1.2 C0.7,1.1,0.6,1,0.5,1S0.3,1.1,0.3,1.2z" />
                                                                <path
                                                                    d="M0.8,3.3L0.8,3.3L0.8,3.3C0.7,3.1,0.6,3,0.5,3S0.3,3.1,0.3,3.2v0.1H0.2C0.1,3.3,0,3.4,0,3.5s0.1,0.2,0.2,0.2 h0.1v0.1C0.3,3.9,0.4,4,0.5,4c0.1,0,0.1,0,0.2-0.1s0.1-0.1,0.1-0.2V3.7h0.1c0.1,0,0.1,0,0.2-0.1C1,3.6,1,3.6,1,3.5 C1,3.4,0.9,3.3,0.8,3.3z" />
                                                                <path
                                                                    d="M1.8,3.3L1.8,3.3L1.8,3.3C1.7,3.1,1.6,3,1.5,3S1.3,3.1,1.3,3.2v0.1H1.2C1.1,3.3,1,3.4,1,3.5s0.1,0.2,0.2,0.2 h0.1v0.1C1.3,3.9,1.4,4,1.5,4c0.1,0,0.1,0,0.2-0.1s0.1-0.1,0.1-0.2V3.7h0.1c0.1,0,0.1,0,0.2-0.1C2,3.6,2,3.6,2,3.5 C2,3.4,1.9,3.3,1.8,3.3z" />
                                                                <path
                                                                    d="M4.8,3.3L4.8,3.3L4.8,3.3C4.7,3.1,4.6,3,4.5,3S4.3,3.1,4.3,3.2v0.1H4.2C4.1,3.3,4,3.4,4,3.5s0.1,0.2,0.2,0.2 h0.1v0.1C4.3,3.9,4.4,4,4.5,4c0.1,0,0.1,0,0.2-0.1s0.1-0.1,0.1-0.2V3.7h0.1c0.1,0,0.1,0,0.2-0.1C5,3.6,5,3.6,5,3.5 C5,3.4,4.9,3.3,4.8,3.3z" />
                                                                <path
                                                                    d="M5.8,4.3L5.8,4.3L5.8,4.3C5.7,4.1,5.6,4,5.5,4S5.3,4.1,5.3,4.2v0.1H5.2C5.1,4.3,5,4.4,5,4.5s0.1,0.2,0.2,0.2 h0.1v0.1C5.3,4.9,5.4,5,5.5,5c0.1,0,0.1,0,0.2-0.1s0.1-0.1,0.1-0.2V4.7h0.1c0.1,0,0.1,0,0.2-0.1C6,4.6,6,4.6,6,4.5 C6,4.4,5.9,4.3,5.8,4.3z" />
                                                                <path
                                                                    d="M3.8,5.3L3.8,5.3L3.8,5.3C3.7,5.1,3.6,5,3.5,5S3.3,5.1,3.3,5.2v0.1H3.2C3.1,5.3,3,5.4,3,5.5s0.1,0.2,0.2,0.2 h0.1v0.1C3.3,5.9,3.4,6,3.5,6c0.1,0,0.1,0,0.2-0.1s0.1-0.1,0.1-0.2V5.7h0.1c0.1,0,0.1,0,0.2-0.1C4,5.6,4,5.6,4,5.5 C4,5.4,3.9,5.3,3.8,5.3z" />
                                                                <path
                                                                    d="M2.8,5.3L2.8,5.3L2.8,5.3C2.7,5.1,2.6,5,2.5,5S2.3,5.1,2.3,5.2v0.1H2.2C2.1,5.3,2,5.4,2,5.5s0.1,0.2,0.2,0.2 h0.1v0.1C2.3,5.9,2.4,6,2.5,6c0.1,0,0.1,0,0.2-0.1s0.1-0.1,0.1-0.2V5.7h0.1c0.1,0,0.1,0,0.2-0.1C3,5.6,3,5.6,3,5.5 C3,5.4,2.9,5.3,2.8,5.3z" />
                                                                <path
                                                                    d="M0.8,5.3L0.8,5.3L0.8,5.3C0.7,5.1,0.6,5,0.5,5S0.3,5.1,0.3,5.2v0.1H0.2C0.1,5.3,0,5.4,0,5.5s0.1,0.2,0.2,0.2 h0.1v0.1C0.3,5.9,0.4,6,0.5,6c0.1,0,0.1,0,0.2-0.1s0.1-0.1,0.1-0.2V5.7h0.1c0.1,0,0.1,0,0.2-0.1C1,5.6,1,5.6,1,5.5 C1,5.4,0.9,5.3,0.8,5.3z" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="pattern" value="x"
                                                                class="btn-check">
                                                            <svg width="38" height="38" viewBox="0 0 6 6"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0.5,0.9L0.5,0.9C0.6,1,0.7,1,0.7,1s0.1,0,0.2-0.1C1,0.8,1,0.7,0.9,0.6L0.9,0.5l0.1-0.1C1,0.3,1,0.2,0.9,0.1 S0.7,0,0.6,0.1L0.5,0.1L0.4,0.1C0.3,0,0.2,0,0.1,0.1C0,0.2,0,0.3,0.1,0.4l0.1,0.1L0.1,0.6C0,0.7,0,0.8,0.1,0.9C0.1,1,0.2,1,0.3,1 C0.3,1,0.4,1,0.5,0.9L0.5,0.9z" />
                                                                <path
                                                                    d="M2.1,0.9C2.1,1,2.2,1,2.3,1c0.1,0,0.1,0,0.2-0.1l0.1-0.1l0.1,0.1C2.6,1,2.7,1,2.7,1s0.1,0,0.2-0.1 C3,0.8,3,0.7,2.9,0.6L2.9,0.5l0.1-0.1C3,0.3,3,0.2,2.9,0.1S2.7,0,2.6,0.1L2.5,0.1L2.4,0.1C2.3,0,2.2,0,2.1,0.1S2,0.3,2.1,0.4 l0.1,0.1L2.1,0.6C2,0.7,2,0.8,2.1,0.9z" />
                                                                <path
                                                                    d="M4.9,0.5L4.9,0.5C5,0.4,5,0.3,5,0.3s0-0.1-0.1-0.2C4.8,0,4.7,0,4.6,0.1L4.5,0.1L4.4,0.1C4.3,0,4.2,0,4.1,0.1 S4,0.3,4.1,0.4l0.1,0.1L4.1,0.6C4,0.7,4,0.8,4.1,0.9C4.1,1,4.2,1,4.3,1c0.1,0,0.1,0,0.2-0.1l0.1-0.1l0.1,0.1C4.6,1,4.7,1,4.7,1 s0.1,0,0.2-0.1C5,0.9,5,0.8,5,0.7C5,0.7,5,0.6,4.9,0.5L4.9,0.5z" />
                                                                <path
                                                                    d="M5.9,0.5L5.9,0.5C6,0.3,6,0.2,5.9,0.1S5.7,0,5.6,0.1L5.5,0.1L5.4,0.1C5.3,0,5.2,0,5.1,0.1C5,0.1,5,0.2,5,0.3 s0,0.1,0.1,0.2l0.1,0.1L5.1,0.6C5,0.6,5,0.7,5,0.7c0,0.1,0,0.1,0.1,0.2C5.1,1,5.2,1,5.3,1c0.1,0,0.1,0,0.2-0.1l0.1-0.1l0.1,0.1 C5.6,1,5.7,1,5.7,1s0.1,0,0.2-0.1C6,0.8,6,0.7,5.9,0.5L5.9,0.5z" />
                                                                <path
                                                                    d="M4.5,1.1L4.5,1.1C4.4,1,4.3,1,4.3,1S4.1,1,4.1,1.1C4,1.1,4,1.2,4,1.3s0,0.1,0.1,0.2l0.1,0.1L4.1,1.6 C4,1.6,4,1.7,4,1.7c0,0.1,0,0.1,0.1,0.2C4.1,2,4.2,2,4.3,2c0.1,0,0.1,0,0.2-0.1l0.1-0.1l0.1,0.1C4.6,2,4.7,2,4.7,2s0.1,0,0.2-0.1 C5,1.8,5,1.7,4.9,1.6L4.9,1.5l0.1-0.1C5,1.3,5,1.2,4.9,1.1C4.9,1,4.8,1,4.7,1C4.7,1,4.6,1,4.5,1.1L4.5,1.1z" />
                                                                <path
                                                                    d="M3.9,1.5L3.9,1.5C4,1.4,4,1.3,4,1.3s0-0.1-0.1-0.2C3.8,1,3.7,1,3.6,1.1L3.5,1.1L3.4,1.1C3.3,1,3.2,1,3.1,1.1 C3,1.2,3,1.3,3.1,1.4l0.1,0.1L3.1,1.6C3,1.7,3,1.8,3.1,1.9C3.1,2,3.2,2,3.3,2c0.1,0,0.1,0,0.2-0.1l0.1-0.1l0.1,0.1 C3.6,2,3.7,2,3.7,2s0.1,0,0.2-0.1C4,1.9,4,1.8,4,1.7C4,1.7,4,1.6,3.9,1.5L3.9,1.5z" />
                                                                <path
                                                                    d="M2.1,2.9C2.1,3,2.2,3,2.3,3c0.1,0,0.1,0,0.2-0.1l0.1-0.1l0.1,0.1C2.6,3,2.7,3,2.7,3s0.1,0,0.2-0.1 C3,2.8,3,2.7,2.9,2.6L2.9,2.5l0.1-0.1C3,2.3,3,2.2,2.9,2.1C2.8,2,2.7,2,2.6,2.1L2.5,2.1L2.4,2.1C2.3,2,2.2,2,2.1,2.1 C2,2.2,2,2.3,2.1,2.4l0.1,0.1L2.1,2.6C2,2.7,2,2.8,2.1,2.9z" />
                                                                <path
                                                                    d="M0.1,1.9C0.1,2,0.2,2,0.3,2c0.1,0,0.1,0,0.2-0.1l0.1-0.1l0.1,0.1C0.6,2,0.7,2,0.7,2s0.1,0,0.2-0.1 C1,1.8,1,1.7,0.9,1.6L0.9,1.5l0.1-0.1C1,1.3,1,1.2,0.9,1.1C0.9,1,0.8,1,0.7,1C0.7,1,0.6,1,0.6,1.1L0.5,1.1L0.4,1.1 C0.4,1,0.3,1,0.3,1S0.1,1,0.1,1.1C0,1.2,0,1.3,0.1,1.4l0.1,0.1L0.1,1.6C0,1.7,0,1.8,0.1,1.9z" />
                                                                <path
                                                                    d="M0.9,3.5L0.9,3.5C1,3.4,1,3.3,1,3.3s0-0.1-0.1-0.2C0.8,3,0.7,3,0.6,3.1L0.5,3.1L0.4,3.1C0.3,3,0.2,3,0.1,3.1 C0,3.2,0,3.3,0.1,3.4l0.1,0.1L0.1,3.6C0,3.7,0,3.8,0.1,3.9C0.1,4,0.2,4,0.3,4c0.1,0,0.1,0,0.2-0.1l0.1-0.1l0.1,0.1 C0.6,4,0.7,4,0.7,4s0.1,0,0.2-0.1C1,3.9,1,3.8,1,3.7C1,3.7,1,3.6,0.9,3.5L0.9,3.5z" />
                                                                <path
                                                                    d="M1.9,3.6L1.9,3.6V3.4C2,3.3,2,3.2,1.9,3.1C1.8,3,1.7,3,1.6,3.1L1.5,3.1L1.4,3.1C1.3,3,1.2,3,1.1,3.1 C1,3.1,1,3.2,1,3.3s0,0.1,0.1,0.2l0.1,0.1L1.1,3.6C1,3.6,1,3.7,1,3.7c0,0.1,0,0.1,0.1,0.2C1.1,4,1.2,4,1.3,4c0.1,0,0.1,0,0.2-0.1 l0.1-0.1l0.1,0.1C1.6,4,1.7,4,1.7,4s0.1,0,0.2-0.1C2,3.8,2,3.7,1.9,3.6z" />
                                                                <path
                                                                    d="M4.9,3.6L4.9,3.6V3.4C5,3.3,5,3.2,4.9,3.1C4.8,3,4.7,3,4.6,3.1L4.5,3.1L4.4,3.1C4.3,3,4.2,3,4.1,3.1 C4,3.2,4,3.3,4.1,3.4l0.1,0.1L4.1,3.6C4,3.7,4,3.8,4.1,3.9C4.1,4,4.2,4,4.3,4c0.1,0,0.1,0,0.2-0.1l0.1-0.1l0.1,0.1 C4.6,4,4.7,4,4.7,4s0.1,0,0.2-0.1C5,3.8,5,3.7,4.9,3.6z" />
                                                                <path
                                                                    d="M5.9,4.1C5.8,4,5.7,4,5.6,4.1L5.5,4.1L5.4,4.1C5.3,4,5.2,4,5.1,4.1C5,4.2,5,4.3,5.1,4.4l0.1,0.1L5.1,4.6 C5,4.7,5,4.8,5.1,4.9C5.1,5,5.2,5,5.3,5c0.1,0,0.1,0,0.2-0.1l0.1-0.1l0.1,0.1C5.6,5,5.7,5,5.7,5s0.1,0,0.2-0.1C6,4.8,6,4.7,5.9,4.6 L5.9,4.5l0.1-0.1C6,4.3,6,4.2,5.9,4.1z" />
                                                                <path
                                                                    d="M3.9,5.1C3.8,5,3.7,5,3.6,5.1L3.5,5.1L3.4,5.1C3.3,5,3.2,5,3.1,5.1C3,5.1,3,5.2,3,5.3s0,0.1,0.1,0.2l0.1,0.1 L3.1,5.6C3,5.6,3,5.7,3,5.7c0,0.1,0,0.1,0.1,0.2C3.1,6,3.2,6,3.3,6c0.1,0,0.1,0,0.2-0.1l0.1-0.1l0.1,0.1C3.6,6,3.7,6,3.7,6 s0.1,0,0.2-0.1C4,5.8,4,5.7,3.9,5.6L3.9,5.5l0.1-0.1C4,5.3,4,5.2,3.9,5.1z" />
                                                                <path
                                                                    d="M2.9,5.5L2.9,5.5C3,5.4,3,5.3,3,5.3s0-0.1-0.1-0.2C2.8,5,2.7,5,2.6,5.1L2.5,5.1L2.4,5.1C2.3,5,2.2,5,2.1,5.1 C2,5.2,2,5.3,2.1,5.4l0.1,0.1L2.1,5.6C2,5.7,2,5.8,2.1,5.9C2.1,6,2.2,6,2.3,6c0.1,0,0.1,0,0.2-0.1l0.1-0.1l0.1,0.1 C2.6,6,2.7,6,2.7,6s0.1,0,0.2-0.1C3,5.9,3,5.8,3,5.7C3,5.7,3,5.6,2.9,5.5L2.9,5.5z" />
                                                                <path
                                                                    d="M0.9,5.1C0.8,5,0.7,5,0.6,5.1L0.5,5.1L0.4,5.1C0.3,5,0.2,5,0.1,5.1C0,5.2,0,5.3,0.1,5.4l0.1,0.1L0.1,5.6 C0,5.7,0,5.8,0.1,5.9C0.1,6,0.2,6,0.3,6c0.1,0,0.1,0,0.2-0.1l0.1-0.1l0.1,0.1C0.6,6,0.7,6,0.7,6s0.1,0,0.2-0.1C1,5.8,1,5.7,0.9,5.6 L0.9,5.5l0.1-0.1C1,5.3,1,5.2,0.9,5.1z" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="pattern" value="heart"
                                                                class="btn-check">
                                                            <svg width="38" height="38" viewBox="0 0 6 6"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0.8,0C0.7,0,0.6,0,0.5,0.1C0.4,0,0.4,0,0.3,0C0.1,0,0,0.1,0,0.3c0,0.1,0,0.1,0,0.2l0,0L0.5,1l0.4-0.5 C1,0.4,1,0.3,1,0.3C1,0.1,0.9,0,0.8,0z" />
                                                                <path
                                                                    d="M2.8,0C2.7,0,2.6,0,2.5,0.1C2.4,0,2.4,0,2.3,0C2.1,0,2,0.1,2,0.3c0,0.1,0,0.1,0,0.2l0,0L2.5,1l0.4-0.5 C3,0.4,3,0.3,3,0.3C3,0.1,2.9,0,2.8,0z" />
                                                                <path
                                                                    d="M4.8,0C4.7,0,4.6,0,4.5,0.1C4.4,0,4.4,0,4.3,0C4.1,0,4,0.1,4,0.3c0,0.1,0,0.1,0,0.2l0,0L4.5,1l0.4-0.5 C5,0.4,5,0.3,5,0.3C5,0.1,4.9,0,4.8,0z" />
                                                                <path
                                                                    d="M5,0.5L5.5,1l0.4-0.5C6,0.4,6,0.3,6,0.3C6,0.1,5.9,0,5.8,0C5.7,0,5.6,0,5.5,0.1C5.4,0,5.4,0,5.3,0 C5.1,0,5,0.1,5,0.3C5,0.3,5,0.4,5,0.5L5,0.5z" />
                                                                <path
                                                                    d="M4.8,1C4.7,1,4.6,1,4.5,1.1C4.4,1,4.4,1,4.3,1C4.1,1,4,1.1,4,1.3c0,0.1,0,0.1,0,0.2l0,0L4.5,2l0.4-0.5 C5,1.4,5,1.3,5,1.3C5,1.1,4.9,1,4.8,1z" />
                                                                <path
                                                                    d="M3.8,1C3.7,1,3.6,1,3.5,1.1C3.4,1,3.4,1,3.3,1C3.1,1,3,1.1,3,1.3c0,0.1,0,0.1,0,0.2l0,0L3.5,2l0.4-0.5 C4,1.4,4,1.3,4,1.3C4,1.1,3.9,1,3.8,1z" />
                                                                <path
                                                                    d="M2.8,2C2.7,2,2.6,2,2.5,2.1C2.4,2,2.4,2,2.3,2C2.1,2,2,2.1,2,2.3c0,0.1,0,0.1,0,0.2l0,0L2.5,3l0.4-0.5 C3,2.4,3,2.3,3,2.3C3,2.1,2.9,2,2.8,2z" />
                                                                <path
                                                                    d="M0.8,1C0.7,1,0.6,1,0.5,1.1C0.4,1,0.4,1,0.3,1C0.1,1,0,1.1,0,1.3c0,0.1,0,0.1,0,0.2l0,0L0.5,2l0.4-0.5 C1,1.4,1,1.3,1,1.3C1,1.1,0.9,1,0.8,1z" />
                                                                <path
                                                                    d="M0.8,3C0.7,3,0.6,3,0.5,3.1C0.4,3,0.4,3,0.3,3C0.1,3,0,3.1,0,3.3c0,0.1,0,0.1,0,0.2l0,0L0.5,4l0.4-0.5 C1,3.4,1,3.3,1,3.3C1,3.1,0.9,3,0.8,3z" />
                                                                <path
                                                                    d="M1.8,3C1.7,3,1.6,3,1.5,3.1C1.4,3,1.4,3,1.3,3C1.1,3,1,3.1,1,3.3c0,0.1,0,0.1,0,0.2l0,0L1.5,4l0.4-0.5 C2,3.4,2,3.3,2,3.3C2,3.1,1.9,3,1.8,3z" />
                                                                <path
                                                                    d="M4.8,3C4.7,3,4.6,3,4.5,3.1C4.4,3,4.4,3,4.3,3C4.1,3,4,3.1,4,3.3c0,0.1,0,0.1,0,0.2l0,0L4.5,4l0.4-0.5 C5,3.4,5,3.3,5,3.3C5,3.1,4.9,3,4.8,3z" />
                                                                <path
                                                                    d="M5.8,4C5.7,4,5.6,4,5.5,4.1C5.4,4,5.4,4,5.3,4C5.1,4,5,4.1,5,4.3c0,0.1,0,0.1,0,0.2l0,0L5.5,5l0.4-0.5 C6,4.4,6,4.3,6,4.3C6,4.1,5.9,4,5.8,4z" />
                                                                <path
                                                                    d="M3.8,5C3.7,5,3.6,5,3.5,5.1C3.4,5,3.4,5,3.3,5C3.1,5,3,5.1,3,5.3c0,0.1,0,0.1,0,0.2l0,0L3.5,6l0.4-0.5 C4,5.4,4,5.3,4,5.3C4,5.1,3.9,5,3.8,5z" />
                                                                <path
                                                                    d="M2.8,5C2.7,5,2.6,5,2.5,5.1C2.4,5,2.4,5,2.3,5C2.1,5,2,5.1,2,5.3c0,0.1,0,0.1,0,0.2l0,0L2.5,6l0.4-0.5 C3,5.4,3,5.3,3,5.3C3,5.1,2.9,5,2.8,5z" />
                                                                <path
                                                                    d="M0.8,5C0.7,5,0.6,5,0.5,5.1C0.4,5,0.4,5,0.3,5C0.1,5,0,5.1,0,5.3c0,0.1,0,0.1,0,0.2l0,0L0.5,6l0.4-0.5 C1,5.4,1,5.3,1,5.3C1,5.1,0.9,5,0.8,5z" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="pattern" value="shake"
                                                                class="btn-check">
                                                            <svg width="38" height="38" viewBox="0 0 6 6"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="0.1" y="0.1"
                                                                    transform="matrix(0.9962 -8.720575e-02 8.720575e-02 0.9962 -4.170330e-02 4.550928e-02)"
                                                                    width="0.8" height="0.8" />
                                                                <rect x="2.1" y="0.1"
                                                                    transform="matrix(6.981014e-02 -0.9976 0.9976 6.981014e-02 1.8266 2.9591)"
                                                                    width="0.8" height="0.8" />
                                                                <rect x="4.1" y="0.1"
                                                                    transform="matrix(0.1045 -0.9945 0.9945 0.1045 3.5323 4.9232)"
                                                                    width="0.8" height="0.8" />
                                                                <rect x="5.1" y="0.1"
                                                                    transform="matrix(0.9962 -8.713004e-02 8.713004e-02 0.9962 -2.265348e-02 0.4811)"
                                                                    width="0.8" height="0.8" />
                                                                <rect x="4.1" y="1.1"
                                                                    transform="matrix(0.9986 -5.233859e-02 5.233859e-02 0.9986 -7.234332e-02 0.2376)"
                                                                    width="0.8" height="0.8" />
                                                                <rect x="3.1" y="1.1"
                                                                    transform="matrix(0.1736 -0.9848 0.9848 0.1736 1.415 4.6864)"
                                                                    width="0.8" height="0.8" />
                                                                <rect x="2.1" y="2.1"
                                                                    transform="matrix(0.9962 -8.720575e-02 8.720575e-02 0.9962 -0.2085 0.2275)"
                                                                    width="0.8" height="0.8" />
                                                                <rect x="0.1" y="1.1"
                                                                    transform="matrix(5.233460e-02 -0.9986 0.9986 5.233460e-02 -1.0241 1.9209)"
                                                                    width="0.8" height="0.8" />
                                                                <rect x="0.1" y="3.1"
                                                                    transform="matrix(0.9998 -1.747158e-02 1.747158e-02 0.9998 -6.107527e-02 9.270038e-03)"
                                                                    width="0.8" height="0.8" />
                                                                <rect x="1.1" y="3.1"
                                                                    transform="matrix(3.486695e-02 -0.9994 0.9994 3.486695e-02 -2.0502 4.8771)"
                                                                    width="0.8" height="0.8" />
                                                                <rect x="4.1" y="3.1"
                                                                    transform="matrix(0.1564 -0.9877 0.9877 0.1564 0.3392 7.3973)"
                                                                    width="0.8" height="0.8" />
                                                                <rect x="5.1" y="4.1"
                                                                    transform="matrix(0.1045 -0.9945 0.9945 0.1045 0.4498 9.4996)"
                                                                    width="0.8" height="0.8" />
                                                                <rect x="3.1" y="5.1"
                                                                    transform="matrix(0.9962 -8.720575e-02 8.720575e-02 0.9962 -0.4663 0.3262)"
                                                                    width="0.8" height="0.8" />
                                                                <rect x="2.1" y="5.1"
                                                                    transform="matrix(8.719913e-02 -0.9962 0.9962 8.719913e-02 -3.1971 7.511)"
                                                                    width="0.8" height="0.8" />
                                                                <rect x="0.1" y="5.1"
                                                                    transform="matrix(8.719913e-02 -0.9962 0.9962 8.719913e-02 -5.0227 5.5186)"
                                                                    width="0.8" height="0.8" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="pattern" value="blob"
                                                                class="btn-check">
                                                            <svg width="38" height="38" viewBox="0 0 6 6"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <circle cx="5.5" cy="4.5" r="0.5" />
                                                                <path d="M5.8,0.2C5.7,0.2,5.6,0.1,5.5,0.1c-0.2,0-0.4,0.2-0.4,0.4s0.2,0.4,0.4,0.4c0.1,0,0.2,0,0.3-0.1
        C5.8,0.7,5.9,0.7,6,0.7V0.3C5.9,0.3,5.8,0.3,5.8,0.2z" />
                                                                <path
                                                                    d="M3.9,4.5c0-0.2-0.2-0.4-0.4-0.4c-0.1,0-0.2,0-0.3,0.1C3.2,4.3,3.1,4.3,3,4.3c-0.1,0-0.2,0-0.2-0.1 C2.7,4.2,2.6,4.1,2.5,4.1c-0.2,0-0.4,0.2-0.4,0.4c0,0.1,0,0.2,0.1,0.3C2.3,4.8,2.3,4.9,2.3,5c0,0.2-0.1,0.3-0.3,0.3c0,0,0,0-0.1,0
        C1.9,5.1,1.7,5,1.5,5S1.1,5.1,1.1,5.3c0,0,0,0-0.1,0v0c-0.1,0-0.2,0-0.2-0.1c0,0,0,0,0,0C0.7,5.2,0.7,5.1,0.7,5c0,0,0,0,0-0.1 C0.9,4.9,1,4.7,1,4.5S0.9,4.1,0.7,4.1c0,0,0,0,0-0.1h0c0-0.1,0-0.2,0.1-0.2c0.1-0.1,0.1-0.2,0.1-0.3c0-0.2-0.2-0.4-0.4-0.4 S0.1,3.3,0.1,3.5c0,0.1,0,0.2,0.1,0.3C0.3,3.8,0.3,3.9,0.3,4c0,0,0,0,0,0.1C0.1,4.1,0,4.3,0,4.5s0.1,0.4,0.3,0.4c0,0,0,0,0,0 c0,0,0,0,0,0c0,0.1,0,0.2-0.1,0.2C0.2,5.3,0.1,5.4,0.1,5.5c0,0.2,0.2,0.4,0.4,0.4c0.1,0,0.2,0,0.3-0.1C0.8,5.7,0.9,5.7,1,5.7v0 c0,0,0,0,0.1,0C1.1,5.9,1.3,6,1.5,6s0.4-0.1,0.4-0.3c0,0,0,0,0.1,0c0.2,0,0.3,0.1,0.3,0.3h0.3c0-0.2,0.1-0.3,0.3-0.3h0 c0,0,0,0,0.1,0c0.1,0,0.1,0,0.2,0.1c0,0,0,0,0,0C3.3,5.8,3.3,5.9,3.3,6h0.3c0-0.1,0-0.2,0.1-0.2c0,0,0,0,0,0 c0.1-0.1,0.1-0.2,0.1-0.3c0-0.1,0-0.2-0.1-0.3c0,0,0,0,0,0C3.7,5.2,3.7,5.1,3.7,5h0c0-0.1,0-0.2,0.1-0.2C3.8,4.7,3.9,4.6,3.9,4.5z M3.2,5.2C3.2,5.2,3.2,5.2,3.2,5.2c0,0-0.1,0.1-0.2,0.1c0,0,0,0-0.1,0h0C2.8,5.3,2.7,5.2,2.7,5c0-0.1,0-0.2,0.1-0.2c0,0,0,0,0,0 C2.8,4.7,2.9,4.7,3,4.7s0.2,0,0.2,0.1c0,0,0,0,0,0C3.3,4.8,3.3,4.9,3.3,5h0C3.3,5.1,3.3,5.2,3.2,5.2z" />
                                                                <path
                                                                    d="M5.2,2.8c0.1,0.1,0.2,0.1,0.3,0.1c0.2,0,0.4-0.2,0.4-0.4S5.7,2.1,5.5,2.1c-0.1,0-0.2,0-0.3,0.1 C5.2,2.3,5.1,2.3,5,2.3c0,0,0,0,0,0v0c0,0,0,0-0.1,0C4.9,2.1,4.7,2,4.5,2C4.3,2,4.1,2.1,4.1,2.3c0,0,0,0-0.1,0 c-0.1,0-0.2,0-0.2-0.1c0,0,0,0,0,0C3.7,2.2,3.7,2.1,3.7,2c0-0.1,0-0.2,0.1-0.2c0,0,0,0,0,0c0.1-0.1,0.1-0.2,0.1-0.3 c0-0.1,0-0.2-0.1-0.3c0,0,0,0,0,0C3.7,1.2,3.7,1.1,3.7,1c0-0.1,0-0.2,0.1-0.2c0.1-0.1,0.1-0.2,0.1-0.3c0-0.2-0.2-0.4-0.4-0.4 c-0.2,0-0.4,0.2-0.4,0.4c0,0.1,0,0.2,0.1,0.3C3.3,0.8,3.3,0.9,3.3,1c0,0.1,0,0.2-0.1,0.2c0,0,0,0,0,0C3.2,1.3,3.1,1.4,3.1,1.5 c0,0.1,0,0.2,0.1,0.3c0,0,0,0,0,0C3.3,1.8,3.3,1.9,3.3,2c0,0.1,0,0.2-0.1,0.2C3.2,2.3,3.1,2.4,3.1,2.5c0,0.2,0.2,0.4,0.4,0.4 c0.1,0,0.2,0,0.3-0.1C3.8,2.7,3.9,2.7,4,2.7c0,0,0,0,0,0l0,0c0,0,0,0,0,0c0,0,0,0,0.1,0C4.1,2.9,4.3,3,4.5,3c0.2,0,0.4-0.1,0.4-0.3 c0,0,0,0,0.1,0c0,0,0,0,0,0C5.1,2.7,5.2,2.7,5.2,2.8z" />
                                                                <path
                                                                    d="M0.5,0.9c0.1,0,0.2,0,0.3-0.1C0.8,0.7,0.9,0.7,1,0.7c0,0,0,0,0.1,0c0.1,0,0.1,0,0.2,0.1c0,0,0,0,0,0 C1.3,0.8,1.3,0.9,1.3,1h0c0,0,0,0,0,0.1C1.1,1.1,1,1.3,1,1.5s0.1,0.4,0.3,0.4c0,0,0,0,0,0.1c0,0,0,0,0,0c0,0.1,0,0.2-0.1,0.2 C1.2,2.3,1.1,2.4,1.1,2.5c0,0.2,0.2,0.4,0.4,0.4c0.2,0,0.4-0.2,0.4-0.4c0-0.1,0-0.2-0.1-0.3C1.7,2.2,1.7,2.1,1.7,2c0,0,0,0,0,0 c0,0,0,0,0,0C1.9,1.9,2,1.7,2,1.5S1.9,1.1,1.7,1.1c0,0,0,0,0-0.1v0c0-0.1,0-0.2,0.1-0.2c0,0,0,0,0,0c0.1-0.1,0.1-0.2,0.1-0.3 c0-0.1,0-0.2-0.1-0.3c0,0,0,0,0,0C1.7,0.2,1.7,0.1,1.7,0H1.3c0,0.1,0,0.2-0.1,0.2c0,0,0,0,0,0c0,0-0.1,0.1-0.2,0.1c0,0,0,0-0.1,0 c-0.1,0-0.2,0-0.2-0.1C0.7,0.2,0.6,0.1,0.5,0.1c-0.2,0-0.4,0.2-0.4,0.4S0.3,0.9,0.5,0.9z" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="pattern"
                                                                value="special-circle-orizz" class="btn-check">
                                                            <svg width="38" height="38" viewBox="0 0 6 6"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0.5,0.9l1,0c0.2,0,0.4-0.2,0.4-0.4c0-0.2-0.2-0.4-0.4-0.4l-1,0c-0.2,0-0.4,0.2-0.4,0.4S0.3,0.9,0.5,0.9z" />
                                                                <path
                                                                    d="M1.5,1.9l2,0c0.2,0,0.4-0.2,0.4-0.4c0-0.2-0.2-0.4-0.4-0.4l-2,0c-0.2,0-0.4,0.2-0.4,0.4S1.3,1.9,1.5,1.9z" />
                                                                <path
                                                                    d="M3.5,0.9c0.2,0,0.4-0.2,0.4-0.4c0-0.2-0.2-0.4-0.4-0.4S3.1,0.3,3.1,0.5C3.1,0.7,3.3,0.9,3.5,0.9z" />
                                                                <path
                                                                    d="M4.5,2.1l-3,0c-0.2,0-0.4,0.2-0.4,0.4s0.2,0.4,0.4,0.4l3,0c0.2,0,0.4-0.2,0.4-0.4S4.7,2.1,4.5,2.1z" />
                                                                <path
                                                                    d="M1.9,3.5c0-0.2-0.2-0.4-0.4-0.4H0v0.8h1.5C1.7,3.9,1.9,3.7,1.9,3.5z" />
                                                                <path
                                                                    d="M4.5,3.1c-0.2,0-0.4,0.2-0.4,0.4s0.2,0.4,0.4,0.4s0.4-0.2,0.4-0.4S4.7,3.1,4.5,3.1z" />
                                                                <path
                                                                    d="M5.9,4.5c0-0.2-0.2-0.4-0.4-0.4l-1,0c-0.2,0-0.4,0.2-0.4,0.4s0.2,0.4,0.4,0.4l1,0C5.7,4.9,5.9,4.7,5.9,4.5z" />
                                                                <path
                                                                    d="M3.5,4.1l-2,0c-0.2,0-0.4,0.2-0.4,0.4s0.2,0.4,0.4,0.4l2,0c0.2,0,0.4-0.2,0.4-0.4S3.7,4.1,3.5,4.1z" />
                                                                <path
                                                                    d="M2.5,5.1l-2,0c-0.2,0-0.4,0.2-0.4,0.4c0,0.2,0.2,0.4,0.4,0.4l2,0c0.2,0,0.4-0.2,0.4-0.4S2.7,5.1,2.5,5.1z" />
                                                                <path
                                                                    d="M6,0.1l-1.5,0c-0.2,0-0.4,0.2-0.4,0.4s0.2,0.4,0.4,0.4l1.5,0h0L6,0.1L6,0.1z" />
                                                                <path
                                                                    d="M5.1,5.5c0,0.2,0.2,0.4,0.4,0.4H6V5.1H5.5C5.3,5.1,5.1,5.3,5.1,5.5z" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="pattern"
                                                                value="special-circle-vert" class="btn-check">
                                                            <svg width="38" height="38" viewBox="0 0 6 6"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0.5,4.1c-0.2,0-0.4,0.2-0.4,0.4l0,1c0,0.2,0.2,0.4,0.4,0.4s0.4-0.2,0.4-0.4l0-1C0.9,4.3,0.7,4.1,0.5,4.1z" />
                                                                <path
                                                                    d="M1.5,2.1c-0.2,0-0.4,0.2-0.4,0.4l0,2c0,0.2,0.2,0.4,0.4,0.4s0.4-0.2,0.4-0.4l0-2C1.9,2.3,1.7,2.1,1.5,2.1z" />
                                                                <path
                                                                    d="M0.5,2.9c0.2,0,0.4-0.2,0.4-0.4S0.7,2.1,0.5,2.1c-0.2,0-0.4,0.2-0.4,0.4S0.3,2.9,0.5,2.9z" />
                                                                <path
                                                                    d="M2.5,1.1c-0.2,0-0.4,0.2-0.4,0.4l0,3c0,0.2,0.2,0.4,0.4,0.4s0.4-0.2,0.4-0.4l0-3C2.9,1.3,2.7,1.1,2.5,1.1z" />
                                                                <path
                                                                    d="M3.5,4.1c-0.2,0-0.4,0.2-0.4,0.4V6h0.8V4.5C3.9,4.3,3.7,4.1,3.5,4.1z" />
                                                                <path
                                                                    d="M3.5,1.1c-0.2,0-0.4,0.2-0.4,0.4s0.2,0.4,0.4,0.4s0.4-0.2,0.4-0.4S3.7,1.1,3.5,1.1z" />
                                                                <path
                                                                    d="M4.5,1.9c0.2,0,0.4-0.2,0.4-0.4l0-1c0-0.2-0.2-0.4-0.4-0.4c-0.2,0-0.4,0.2-0.4,0.4l0,1 C4.1,1.7,4.3,1.9,4.5,1.9z" />
                                                                <path
                                                                    d="M4.5,2.1c-0.2,0-0.4,0.2-0.4,0.4l0,2c0,0.2,0.2,0.4,0.4,0.4s0.4-0.2,0.4-0.4l0-2C4.9,2.3,4.7,2.1,4.5,2.1z" />
                                                                <path
                                                                    d="M5.5,3.1c-0.2,0-0.4,0.2-0.4,0.4l0,2c0,0.2,0.2,0.4,0.4,0.4c0.2,0,0.4-0.2,0.4-0.4l0-2 C5.9,3.3,5.7,3.1,5.5,3.1z" />
                                                                <path
                                                                    d="M0.1,0l0,1.5c0,0.2,0.2,0.4,0.4,0.4s0.4-0.2,0.4-0.4l0-1.5v0L0.1,0L0.1,0z" />
                                                                <path
                                                                    d="M5.5,0.9c0.2,0,0.4-0.2,0.4-0.4V0H5.1v0.5C5.1,0.7,5.3,0.9,5.5,0.9z" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="pattern" value="special-circle"
                                                                class="btn-check">
                                                            <svg width="38" height="38" viewBox="0 0 6 6"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M2.5,3C2.8,3,3,2.8,3,2.5L3,2h1.5C4.8,2,5,1.8,5,1.5C5,1.2,4.8,1,4.5,1H4V0L2,0l0,2.5C2,2.8,2.2,3,2.5,3z M4,1 L4,1L4,1L4,1z" />
                                                                <path
                                                                    d="M5.5,3C5.2,3,5,3.2,5,3.5S5.2,4,5.5,4C5.8,4,6,3.8,6,3.5S5.8,3,5.5,3z" />
                                                                <path
                                                                    d="M0.5,1C0.8,1,1,0.8,1,0.5V0L0,0v0v0.5C0,0.8,0.2,1,0.5,1z" />
                                                                <path
                                                                    d="M4,4L4,4L3,4l0,0v0C2.4,4,2,4.4,2,5h0H1V2.5C1,2.2,0.8,2,0.5,2S0,2.2,0,2.5V5h0c0,0.6,0.4,1,1,1h2v0V5h1v0h0v1 l1,0V5h0C5,4.4,4.6,4,4,4z" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="pattern" value="special-diamond"
                                                                class="btn-check">
                                                            <svg width="38" height="38" viewBox="0 0 6 6"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="4.1" y="3.1"
                                                                    transform="matrix(0.7071 -0.7071 0.7071 0.7071 -1.1563 4.2076)"
                                                                    width="0.7" height="0.7" />
                                                                <polygon
                                                                    points="1,1.5 1,1 1,1 2.5,1 3,0.5 2.5,0 0.5,0 0,0.5 0,1.5 0.5,2 " />
                                                                <path d="M3,2" />
                                                                <rect x="5.1" y="4.1"
                                                                    transform="matrix(0.7071 -0.7071 0.7071 0.7071 -1.5707 5.2069)"
                                                                    width="0.7" height="0.7" />
                                                                <polygon
                                                                    points="0.5,3 0,3.5 0,5.5 0.5,6 1,5.5 1,4 2,4 2,5.5 2.5,6 4.5,6 5,5.5 4.5,5 3,5 3,3.5 2.5,3" />
                                                                <polygon
                                                                    points="5.5,0 4.5,0 4,0.5 4,1 3.5,1 3,1.5 3,2.5 3.5,3 4,2.5 4,2 4.5,2 5,1.5 5,1 5.5,1 6,0.5" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="pattern" value="ribbon"
                                                                class="btn-check">
                                                            <svg width="38" height="38" viewBox="0 0 6 6"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="4" y="3" width="1" height="1" />
                                                                <rect x="5" y="4" width="1" height="1" />
                                                                <polygon
                                                                    points="5,1 6,1 6,1 6,1 5.5,0.5 6,0 4,0 4,0 4,0 4,1 4,1 4,1 3,1 2.5,0.5 3,0 3,0 3,0 0,0 0,2 0,2 0,2 0.5,1.5 1,2 1,2 1,2 1,1 1,1 3,1 3,3 0,3 0,6 0,6 0,6 0.5,5.5 1,6 1,6 1,4 2,4 2,6 6,6 6,6 5,6 4.5,5.5 5,5 5,5 5,5 3,5 3,3 3.5,2.5 4,3 4,3 4,3 4,2 5,2 5,2 5,2" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="pattern" value="oriental"
                                                                class="btn-check">
                                                            <svg width="38" height="38" viewBox="0 0 6 6"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M5.5,4C5.2,4,5,4.2,5,4.5S5.2,5,5.5,5C5.8,5,6,4.8,6,4.5S5.8,4,5.5,4z" />
                                                                <path
                                                                    d="M0,2c0.6,0,1-0.4,1-1l1,0v0l0.2-0.1c0.2-0.1,0.4-0.1,0.6,0L3,1c0,0,0,0,0,0v0l0,0c0-0.6-0.4-1-1-1v0H0l0,1h0l0.1,0.2 c0.1,0.2,0.1,0.4,0,0.6L0,2z" />
                                                                <path
                                                                    d="M4.5,3C4.2,3,4,3.2,4,3.5S4.2,4,4.5,4C4.8,4,5,3.8,5,3.5S4.8,3,4.5,3z" />
                                                                <path
                                                                    d="M3,2L3,2L3,2l0.1,0.2c0.1,0.2,0.1,0.4,0,0.6L3,3c0.6,0,1-0.4,1-1l0,0h0h0.5C4.8,2,5,1.8,5,1.5V1l0.2-0.1 c0.2-0.1,0.4-0.1,0.6,0L6,1c0-0.6-0.4-1-1-1l0,0h0H4.5C4.2,0,4,0.2,4,0.5V1h0H3.5C3.2,1,3,1.2,3,1.5V2z" />
                                                                <path
                                                                    d="M4,5L4,5L3,5v0h0l0-1.5C3,3.2,2.8,3,2.5,3l-1,0C1.2,3,1,3.2,1,3.5L1,4l0,0L0.8,4.1c-0.2,0.1-0.4,0.1-0.6,0L0,4 c0,0.6,0.4,1,1,1l0,0l1,0l0,0.5C2,5.8,2.2,6,2.5,6L4,6l0,0v0l0.2-0.1c0.2-0.1,0.4-0.1,0.6,0L5,6C5,5.4,4.6,5,4,5z" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="pattern" value="ellipse"
                                                                class="btn-check">
                                                            <svg width="38" height="38" viewBox="0 0 6 6"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M5.2,4C5,4,4.9,4.3,5.1,4.5C5.3,4.8,5.6,5,5.8,5C6,5,6.1,4.7,5.9,4.5C5.7,4.2,5.4,4,5.2,4z" />
                                                                <path
                                                                    d="M5,0.9C5,0.9,5.1,1,5.1,1H6V0C5.8,0,5,0.6,5,0.9z" />
                                                                <path
                                                                    d="M5.9,2H4l0,0h0V1l0,0h0c0-0.2-0.6-1-0.9-1C3.1,0,3,0.1,3,0.1v2.5C3,2.9,3.1,3,3.3,3L5,3v0l0,0c0.2,0,1-0.6,1-0.9 C6,2.1,5.9,2,5.9,2z" />
                                                                <path
                                                                    d="M3.7,4H2.3C2.1,4,2,4.1,2,4.3V5h0l0,0H1v0V4h0l0,0c0-0.2-0.6-1-0.9-1C0.1,3,0,3.1,0,3.1v2.5C0,5.9,0.1,6,0.3,6L4,6V4.3 C4,4.1,3.9,4,3.7,4z" />
                                                                <path
                                                                    d="M0.1,1H1v0v1h0l0,0c0,0.2,0.6,1,0.9,1C1.9,3,2,2.9,2,2.9L2,0H1v0C0.8,0,0,0.6,0,0.9C0,0.9,0.1,1,0.1,1z" />
                                                            </svg>
                                                        </label></div>
                                                </div>
                                                <div class="col-12">
                                                    <label>کادر نشانگر</label>
                                                </div>
                                                <div class="col-12 mb-2">
                                                    <div class="btn-group-toggle styleselecta d-inline-block"
                                                        data-toggle="buttons"><label class="btn btn-light p-1">
                                                            <input type="radio" name="marker" value="default" checked
                                                                class="btn-check">
                                                            <svg width="32" height="32" viewBox="0 0 14 14"
                                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M0,0v14h14V0H0z M12,12H2V2h10V12z" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="marker" value="flurry"
                                                                class="btn-check">
                                                            <svg width="32" height="32" viewBox="0 0 14 14"
                                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0.2,0.1L0.1,0.6l0.1,0.5L0.2,1.6L0.1,2.1l0.1,0.5L0,3.1l0,0.5L0,4l0.1,0.5l0,0.5l0.1,0.5L0.1,6l0,0.5l0,0.5 l0.2,0.5L0.1,8l0.1,0.5L0,8.9l0.2,0.5L0,9.9l0.2,0.5l-0.1,0.5l0,0.5L0,11.9l0.2,0.5l-0.1,0.5l0.1,0.5l0,0.4L0.6,14l0.5,0l0.5-0.1 l0.5,0.1l0.5,0.1L3.1,14l0.5-0.1l0.5-0.1l0.5,0L5,13.9l0.5-0.1l0.5,0l0.5,0L7,13.9L7.5,14L8,14l0.5-0.2L9,13.9L9.4,14l0.5-0.2 l0.5,0.2l0.5-0.1l0.5,0l0.5-0.1l0.5,0l0.5,0l0.5,0l0.5,0.1l-0.1-0.5l0.2-0.5l-0.1-0.5l-0.1-0.5l0.2-0.5l-0.2-0.5l0.1-0.5L14,9.9 l-0.2-0.5L13.9,9L14,8.5L14,8l-0.2-0.5l0-0.5l0.1-0.5L13.8,6l0-0.5L14,5l0-0.5l-0.1-0.5l0.1-0.5l-0.2-0.5l0.1-0.5l0-0.5l0-0.5 l-0.1-0.5L14,0.6l-0.2-0.4l-0.4,0l-0.5,0L12.4,0l-0.5,0.2l-0.5,0l-0.5-0.1l-0.5,0L10,0l-0.5,0L9,0L8.5,0.2L8,0.2L7.5,0.1L7,0.1 L6.5,0.2L6,0L5.5,0.2L5.1,0.2L4.6,0.1L4.1,0.1L3.6,0L3.1,0.1L2.6,0L2.1,0.1l-0.5,0l-0.5,0L0.6,0.2L0.2,0.1z M11.9,11.9l-0.5-0.1 L10.9,12l-0.5-0.1L10,11.9l-0.5,0.1L9,11.8l-0.5,0l-0.5,0l-0.5,0.1l-0.5,0L6.5,12L6,11.9l-0.5,0l-0.5,0L4.6,12l-0.5-0.2L3.6,12 l-0.5-0.1L2.6,12l-0.4-0.1L2,11.4l0.1-0.5l0-0.5l0.1-0.5L2,9.5L2.1,9L2,8.5L2,8l0.2-0.5l0-0.5L2,6.5L2.1,6l0.1-0.5L2.2,5L2.1,4.5 L2,4.1l0-0.5l0.2-0.5L2,2.6L2,2l0.5,0l0.5,0.1l0.5,0.1l0.5,0L4.5,2L5,2.1l0.5,0.1L6,2l0.5,0.2L7,2.1l0.5,0L8,2l0.5,0L9,2l0.5,0 l0.5,0.1L10.4,2l0.5,0.2L11.4,2L12,2l-0.1,0.6L12,3.1l-0.1,0.5L11.8,4L12,4.5L11.9,5l-0.1,0.5l0,0.5L12,6.5L12,7l-0.1,0.5L12,8 l0,0.5l-0.2,0.5l0,0.5l0.1,0.5l-0.1,0.5l0.2,0.5l-0.1,0.5L11.9,11.9z" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="marker" value="sdoz"
                                                                class="btn-check">
                                                            <svg width="32" height="32" viewBox="0 0 14 14"
                                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0,0l0.9,13c0,0.6,0.5,1,1,1h12V2c0-0.6-0.4-1-1-1L0,0z M12,12H3.8c-0.5,0-1-0.4-1-1L2,2l9,0.7c0.5,0,1,0.5,1,1 V12z" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="marker" value="drop_in"
                                                                class="btn-check">
                                                            <svg width="32" height="32" viewBox="0 0 14 14"
                                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0,0l0,7c0,3.9,3.1,7,7,7h0c3.9,0,7-3.1,7-7v0c0-3.9-3.1-7-7-7H0z M7,12L7,12c-2.8,0-5-2.2-5-5V2h5c2.8,0,5,2.2,5,5v0 C12,9.8,9.8,12,7,12z" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="marker" value="drop"
                                                                class="btn-check">
                                                            <svg width="32" height="32" viewBox="0 0 14 14"
                                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0,7L0,7c0,3.9,3.1,7,7,7h7V7c0-3.9-3.1-7-7-7h0C3.1,0,0,3.1,0,7z M12,12H7c-2.8,0-5-2.2-5-5v0c0-2.8,2.2-5,5-5h0 c2.8,0,5,2.2,5,5V12z" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="marker" value="dropeye"
                                                                class="btn-check">
                                                            <svg width="32" height="32" viewBox="0 0 14 14"
                                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0,0l0,7c0,3.9,3.1,7,7,7h7V7c0-3.9-3.1-7-7-7H0z M12,12H7c-2.8,0-5-2.2-5-5V2h5c2.8,0,5,2.2,5,5V12z" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="marker" value="dropeyeleft"
                                                                class="btn-check">
                                                            <svg width="32" height="32" viewBox="0 0 14 14"
                                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0,0l0,7c0,3.9,3.1,7,7,7h7V7c0-3.9-3.1-7-7-7H0z M12,12H7c-2.8,0-5-2.2-5-5v0c0-2.8,2.2-5,5-5h0c2.8,0,5,2.2,5,5V12z" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="marker" value="dropeyeleaf"
                                                                class="btn-check">
                                                            <svg width="32" height="32" viewBox="0 0 14 14"
                                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0,0l0,7c0,3.9,3.1,7,7,7h7V7c0-3.9-3.1-7-7-7H0z M7,12L7,12c-2.8,0-5-2.2-5-5v0c0-2.8,2.2-5,5-5h0c2.8,0,5,2.2,5,5v0 C12,9.8,9.8,12,7,12z" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="marker" value="dropeyeright"
                                                                class="btn-check">
                                                            <svg width="32" height="32" viewBox="0 0 14 14"
                                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0,0l0,7c0,3.9,3.1,7,7,7h7V7c0-3.9-3.1-7-7-7H0z M7,12L7,12c-2.8,0-5-2.2-5-5V2h5c2.8,0,5,2.2,5,5v0C12,9.8,9.8,12,7,12z" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="marker" value="squarecircle"
                                                                class="btn-check">
                                                            <svg width="32" height="32" viewBox="0 0 14 14"
                                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0,0l0,14h14V0H0z M7,12L7,12c-2.8,0-5-2.2-5-5v0c0-2.8,2.2-5,5-5h0c2.8,0,5,2.2,5,5v0C12,9.8,9.8,12,7,12z" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="marker" value="circle"
                                                                class="btn-check">
                                                            <svg width="32" height="32" viewBox="0 0 14 14"
                                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0,7L0,7c0,3.9,3.1,7,7,7h0c3.9,0,7-3.1,7-7v0c0-3.9-3.1-7-7-7h0C3.1,0,0,3.1,0,7z M7,12L7,12c-2.8,0-5-2.2-5-5v0 c0-2.8,2.2-5,5-5h0c2.8,0,5,2.2,5,5v0C12,9.8,9.8,12,7,12z" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="marker" value="rounded"
                                                                class="btn-check">
                                                            <svg width="32" height="32" viewBox="0 0 14 14"
                                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M4.5,14h5.1C12,14,14,12,14,9.6V4.5C14,2,12,0,9.5,0H4.4C2,0,0,2,0,4.4v5.1C0,12,2,14,4.5,14z M12,4.8v4.4 c0,1.5-1.3,2.8-2.8,2.8H4.8C3.2,12,2,10.8,2,9.2V4.8C2,3.3,3.3,2,4.8,2h4.4C10.8,2,12,3.2,12,4.8z" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="marker" value="flower"
                                                                class="btn-check">
                                                            <svg width="32" height="32" viewBox="0 0 14 14"
                                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0,0v9.6C0,12,2,14,4.4,14h5.1C12,14,14,12,14,9.6V4.4C14,2,12,0,9.6,0H0z M9.2,12H4.8C3.3,12,2,10.7,2,9.2V2h7.2 C10.7,2,12,3.3,12,4.8v4.4C12,10.7,10.7,12,9.2,12z" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="marker" value="flower_in"
                                                                class="btn-check">
                                                            <svg width="32" height="32" viewBox="0 0 14 14"
                                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M14,14V4.4C14,2,12,0,9.6,0H4.4C2,0,0,2,0,4.4v5.1C0,12,2,14,4.4,14H14z M4.8,2h4.4C10.7,2,12,3.3,12,4.8V12H4.8 C3.3,12,2,10.7,2,9.2V4.8C2,3.3,3.3,2,4.8,2z" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="marker" value="leaf"
                                                                class="btn-check">
                                                            <svg width="32" height="32" viewBox="0 0 14 14"
                                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0,0v9.6C0,12,2,14,4.4,14H14V4.4C14,2,12,0,9.6,0H0z M12,12H4.8C3.3,12,2,10.7,2,9.2V2h7.2C10.7,2,12,3.3,12,4.8V12z" />
                                                            </svg>
                                                        </label></div>
                                                </div>
                                                <div class="col-12">
                                                    <label>مرکز نشانگر</label>
                                                </div>
                                                <div class="col-12">
                                                    <div class="btn-group-toggle styleselecta d-inline-block"
                                                        data-toggle="buttons"><label class="btn btn-light p-1">
                                                            <input type="radio" name="marker_in" value="default" checked
                                                                class="btn-check">
                                                            <svg width="14" height="14" viewBox="0 0 6 6"
                                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="6" height="6" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="marker_in" value="flurry"
                                                                class="btn-check">
                                                            <svg width="14" height="14" viewBox="0 0 6 6"
                                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <polygon
                                                                    points="5.9,5.9 5.6,5.9 5.3,6 5,5.7 4.7,5.8 4.4,5.8 4.1,5.8 3.9,5.7 3.6,5.7 3.3,5.8 3,5.9 2.7,5.8 2.4,5.8 2.1,5.8 1.9,5.7 1.6,5.7 1.3,5.7 1,5.8 0.7,5.8 0.4,5.8 0.1,5.9 0,5.5 0.1,5.3 0,5 0.3,4.7 0.3,4.4 0.2,4.1 0.2,3.8 0.1,3.5 0.3,3.3 0.1,3 0.1,2.7 0.2,2.4 0.1,2.1 0.1,1.8 0.1,1.5 0.2,1.3 0.3,1 0,0.7 0,0.4 0.3,0.2 0.4,0.1 0.7,0.1 1,0.2 1.3,0.1 1.6,0.3 1.9,0.1 2.1,0.1 2.4,0.2 2.7,0.1 3,0.3 3.3,0.2 3.6,0.2 3.8,0.2 4.1,0.1 4.4,0.3 4.7,0.1 5,0.2 5.3,0.1 5.6,0 5.9,0 5.8,0.4 6,0.7 6,1 5.9,1.2 5.7,1.5 5.7,1.8 5.9,2.1 5.7,2.4 5.8,2.7 6,3 5.9,3.3 5.8,3.5 5.8,3.8 5.8,4.1 6,4.4 5.8,4.7 5.7,5 5.7,5.3 5.8,5.5" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="marker_in" value="sdoz"
                                                                class="btn-check">
                                                            <svg width="14" height="14" viewBox="0 0 6 6"
                                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <polygon points="6,6 0.5,6 0,0 6,0.5" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="marker_in" value="drop_in"
                                                                class="btn-check">
                                                            <svg width="14" height="14" viewBox="0 0 6 6"
                                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M3,6L3,6C1.3,6,0,4.7,0,3l0-3l3,0c1.7,0,3,1.3,3,3v0C6,4.7,4.7,6,3,6z" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="marker_in" value="drop"
                                                                class="btn-check">
                                                            <svg width="14" height="14" viewBox="0 0 6 6"
                                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M6,6H3C1.3,6,0,4.7,0,3v0c0-1.7,1.3-3,3-3h0c1.7,0,3,1.3,3,3V6z" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="marker_in" value="dropeye"
                                                                class="btn-check">
                                                            <svg width="14" height="14" viewBox="0 0 6 6"
                                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M6,6H3C1.3,6,0,4.7,0,3l0-3l3,0c1.7,0,3,1.3,3,3V6z" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="marker_in" value="circle"
                                                                class="btn-check">
                                                            <svg width="14" height="14" viewBox="0 0 6 6"
                                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <circle cx="3" cy="3" r="3" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="marker_in" value="rounded"
                                                                class="btn-check">
                                                            <svg width="14" height="14" viewBox="0 0 6 6"
                                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M6,1.7v2.7C6,5.2,5.2,6,4.3,6H1.7C0.7,6,0,5.3,0,4.3V1.7C0,0.8,0.8,0,1.7,0h2.7C5.3,0,6,0.7,6,1.7z" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="marker_in" value="sun"
                                                                class="btn-check">
                                                            <svg width="14" height="14" viewBox="0 0 6 6"
                                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <polygon
                                                                    points="3,0 3.4,0.7 4,0.2 4.1,0.9 4.9,0.7 4.8,1.5 5.6,1.5 5.2,2.2 5.9,2.5 5.3,3 5.9,3.5 5.2,3.8 5.6,4.5 4.8,4.5 4.9,5.3 4.1,5.1 4,5.8 3.4,5.3 3,6 2.5,5.3 1.9,5.8 1.8,5.1 1,5.3 1.1,4.5 0.4,4.5 0.7,3.8 0,3.5 0.6,3 0,2.5 0.7,2.2 0.4,1.5 1.1,1.5 1,0.7 1.8,0.9 1.9,0.2 2.5,0.7" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="marker_in" value="star"
                                                                class="btn-check">
                                                            <svg width="14" height="14" viewBox="0 0 6 6"
                                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M3.2,0.3l0.6,1.3C4,1.8,4.1,1.9,4.3,1.9l1.4,0.2c0.2,0,0.3,0.3,0.2,0.5l-1,1C4.7,3.7,4.7,3.9,4.7,4.1L5,5.5 c0,0.2-0.2,0.4-0.4,0.3L3.3,5.2c-0.2-0.1-0.4-0.1-0.6,0L1.4,5.8C1.2,5.9,1,5.8,1,5.5l0.2-1.4c0-0.2,0-0.4-0.2-0.5l-1-1 C-0.1,2.4,0,2.2,0.2,2.1l1.4-0.2c0.2,0,0.4-0.2,0.5-0.3l0.6-1.3C2.9,0.1,3.1,0.1,3.2,0.3z" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="marker_in" value="diamond"
                                                                class="btn-check">
                                                            <svg width="14" height="14" viewBox="0 0 6 6"
                                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="0.9" y="0.9"
                                                                    transform="matrix(0.7071 -0.7071 0.7071 0.7071 -1.2426 3)"
                                                                    width="4.2" height="4.2" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="marker_in" value="danger"
                                                                class="btn-check">
                                                            <svg width="14" height="14" viewBox="0 0 6 6"
                                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <polygon
                                                                    points="3,5.1 3.9,6 6,6 6,3.9 5.1,3 6,2.1 6,0 3.9,0 3,0.9 2.1,0 0,0 0,2.1 0.9,3 0,3.9 0,6 2.1,6" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="marker_in" value="cross"
                                                                class="btn-check">
                                                            <svg width="14" height="14" viewBox="0 0 6 6"
                                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <polygon
                                                                    points="6,1.5 4.5,1.5 4.5,0 1.5,0 1.5,1.5 0,1.5 0,4.5 1.5,4.5 1.5,6 4.5,6 4.5,4.5 6,4.5" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="marker_in" value="plus"
                                                                class="btn-check">
                                                            <svg width="14" height="14" viewBox="0 0 6 6"
                                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M4.5,1.5L4.5,1.5L4.5,1.5C4.5,0.7,3.8,0,3,0h0C2.2,0,1.5,0.7,1.5,1.5v0h0C0.7,1.5,0,2.2,0,3v0 c0,0.8,0.7,1.5,1.5,1.5h0v0C1.5,5.3,2.2,6,3,6h0c0.8,0,1.5-0.7,1.5-1.5v0h0C5.3,4.5,6,3.8,6,3v0C6,2.2,5.3,1.5,4.5,1.5z" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="marker_in" value="x"
                                                                class="btn-check">
                                                            <svg width="14" height="14" viewBox="0 0 6 6"
                                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M3,5.1l0.4,0.4C3.7,5.8,4.1,6,4.5,6h0C5.3,6,6,5.3,6,4.5v0c0-0.4-0.2-0.8-0.4-1.1L5.1,3l0.4-0.4 C5.8,2.3,6,1.9,6,1.5v0C6,0.7,5.3,0,4.5,0h0C4.1,0,3.7,0.2,3.4,0.4L3,0.9L2.6,0.4C2.3,0.2,1.9,0,1.5,0h0C0.7,0,0,0.7,0,1.5v0 c0,0.4,0.2,0.8,0.4,1.1L0.9,3L0.4,3.4C0.2,3.7,0,4.1,0,4.5v0C0,5.3,0.7,6,1.5,6h0c0.4,0,0.8-0.2,1.1-0.4L3,5.1z" />
                                                            </svg>
                                                        </label><label class="btn btn-light p-1">
                                                            <input type="radio" name="marker_in" value="heart"
                                                                class="btn-check">
                                                            <svg width="14" height="14" viewBox="0 0 6 6"
                                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M6,1.8C5.9,1,5.3,0.4,4.5,0.3C3.9,0.2,3.4,0.5,3,0.9C2.6,0.5,2.1,0.3,1.6,0.3C0.8,0.4,0.1,1,0,1.8 C0,2.3,0.1,2.7,0.3,3l0,0l0,0c0.1,0.1,0.2,0.2,0.3,0.3l1.9,2.2c0.3,0.3,0.7,0.3,0.9,0l1.8-1.9c0.1-0.1,0.3-0.3,0.4-0.5 C5.9,2.8,6.1,2.3,6,1.8z" />
                                                            </svg>
                                                        </label></div>
                                                </div>

                                                <div class="col-12 mb-2">
                                                    <div class="row collapse collapse-markers-bg">
                                                        <div class="col-sm-6 mt-2">
                                                            <label>کادر نشانگر</label>
                                                            <div class="input-group rounded-0">
                                                                <span
                                                                    class="input-group-text rounded-0 border-0 text-dark"><svg
                                                                        width="1em" height="1em" viewBox="0 0 14 14"
                                                                        fill="currentColor"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M0,0v14h14V0H0z M12,12H2V2h10V12z">
                                                                        </path>
                                                                    </svg></span>
                                                                <input type="text"
                                                                    class="qrcolorpicker form-control rounded-0"
                                                                    value="#000000" name="marker_out_color">
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 mt-2">
                                                            <label>مرکز نشانگر</label>
                                                            <div class="input-group rounded-0">
                                                                <span
                                                                    class="input-group-text rounded-0 border-0 text-dark"><svg
                                                                        width="1em" height="1em" viewBox="0 0 6 6"
                                                                        fill="currentColor"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <rect width="6" height="6"></rect>
                                                                    </svg></span>
                                                                <input type="text"
                                                                    class="qrcolorpicker form-control rounded-0"
                                                                    value="#000000" name="marker_in_color">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-12 mt-2">
                                                            <div class="custom-control custom-switch">
                                                                <input type="checkbox"
                                                                    class="custom-control-input collapse-control"
                                                                    id="markers-bg"
                                                                    data-bs-target=".collapse-markers-bg"
                                                                    data-target=".collapse-markers-bg"
                                                                    name="markers_color">
                                                                <label class="custom-control-label" for="markers-bg">رنگ
                                                                    نشانگر دلخواه</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="collapse collapse-markers-bg">
                                                        <div class="row">
                                                            <div class="col-12 mt-2">
                                                                <div class="custom-control custom-switch">
                                                                    <input type="checkbox"
                                                                        class="custom-control-input collapse-control"
                                                                        id="different-markers-bg"
                                                                        data-bs-target="#collapse-different-markers-bg"
                                                                        data-target="#collapse-different-markers-bg"
                                                                        name="different_markers_color">
                                                                    <label class="custom-control-label"
                                                                        for="different-markers-bg">رنگ های
                                                                        متفاوت</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row collapse" id="collapse-different-markers-bg">
                                                            <div class="col-sm-6 mt-2">
                                                                <label>بالا راست</label>
                                                                <div class="input-group rounded-0">
                                                                    <span
                                                                        class="input-group-text rounded-0 border-0 text-dark"><svg
                                                                            width="1em" height="1em" viewBox="0 0 14 14"
                                                                            fill="currentColor"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M0,0v14h14V0H0z M12,12H2V2h10V12z">
                                                                            </path>
                                                                        </svg></span>
                                                                    <input type="text"
                                                                        class="qrcolorpicker form-control rounded-0"
                                                                        value="#000000" name="marker_top_right_outline">
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6 mt-2">
                                                                <label>بالا راست</label>
                                                                <div class="input-group rounded-0">
                                                                    <span
                                                                        class="input-group-text rounded-0 border-0 text-dark"><svg
                                                                            width="1em" height="1em" viewBox="0 0 6 6"
                                                                            fill="currentColor"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <rect width="6" height="6"></rect>
                                                                        </svg></span>
                                                                    <input type="text"
                                                                        class="qrcolorpicker form-control rounded-0"
                                                                        value="#000000" name="marker_top_right_center">
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6 mt-2 mb-2">
                                                                <label>پایین چپ</label>
                                                                <div class="input-group rounded-0">
                                                                    <span
                                                                        class="input-group-text rounded-0 border-0 text-dark"><svg
                                                                            width="1em" height="1em" viewBox="0 0 14 14"
                                                                            fill="currentColor"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M0,0v14h14V0H0z M12,12H2V2h10V12z">
                                                                            </path>
                                                                        </svg></span>
                                                                    <input type="text"
                                                                        class="qrcolorpicker form-control rounded-0"
                                                                        value="#000000"
                                                                        name="marker_bottom_left_outline">
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6 mt-2 mb-2">
                                                                <label>پایین چپ</label>
                                                                <div class="input-group rounded-0">
                                                                    <span
                                                                        class="input-group-text rounded-0 border-0 text-dark"><svg
                                                                            width="1em" height="1em" viewBox="0 0 6 6"
                                                                            fill="currentColor"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <rect width="6" height="6"></rect>
                                                                        </svg></span>
                                                                    <input type="text"
                                                                        class="qrcolorpicker form-control rounded-0"
                                                                        value="#000000"
                                                                        name="marker_bottom_left_center">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                        <div class="accordion-item d-grid">
                                            <button
                                                id="button3"
                                                class="mb-2 btn btn-outline-primary btn-lg btn-block text-start text-left"
                                                type="button" data-bs-toggle="collapse" data-toggle="collapse"
                                                data-bs-target="#collapseWatermark" data-target="#collapseWatermark">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M10.273 2.513l-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z" />
                                                    <path fill-rule="evenodd"
                                                        d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                                </svg> <span class="vertical-middle">درج لوگو</span>
                                            </button>
                                            <div class="collapse" id="collapseWatermark"
                                                data-bs-parent="#collapseSettings" data-parent="#collapseSettings">
                                                <div class="col-12">
                                                    <small>لوگوی خود را آپلود کنید یا از موارد زیر انتخاب کنید</small>
                                                    <div class="custom-file">
                                                        <input type="file" name="file"
                                                            class="custom-file-input form-control"
                                                            aria-describedby="validate-upload" id="upmarker">
                                                        <div id="validate-upload" class="invalid-feedback">
                                                            Invalid image </div>
                                                        <label class="custom-file-label" for="file"></label>
                                                    </div>
                                                </div>
                                                <div class="col-12 pt-2">
                                                    <div class="logoselecta form-group">
                                                        <div class="btn-group-toggle" data-toggle="buttons">
                                                            <label class="btn btn-light active">
                                                                <input type="radio" name="optionlogo" value="none"
                                                                    checked="" class="btn-check">
                                                                <svg width="2em" height="2em" viewBox="0 0 16 16"
                                                                    class="bi bi-x" fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd"
                                                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                                                </svg>
                                                            </label><label class="btn btn-light"><input type="radio"
                                                                    name="optionlogo"
                                                                    value="http://mehrdadweb.ir/front/img/URLShortener/01-link-b.png"
                                                                    id="optionlogo0" class="btn-check"><img
                                                                    src="http://mehrdadweb.ir/front/img/URLShortener/01-link-b.png"></label><label
                                                                class="btn btn-light"><input type="radio"
                                                                    name="optionlogo"
                                                                    value="http://mehrdadweb.ir/front/img/URLShortener/01-link.png"
                                                                    id="optionlogo1" class="btn-check"><img
                                                                    src="http://mehrdadweb.ir/front/img/URLShortener/01-link.png"></label><label
                                                                class="btn btn-light"><input type="radio"
                                                                    name="optionlogo"
                                                                    value="http://mehrdadweb.ir/front/img/URLShortener/02-email-b.png"
                                                                    id="optionlogo2" class="btn-check"><img
                                                                    src="http://mehrdadweb.ir/front/img/URLShortener/02-email-b.png"></label><label
                                                                class="btn btn-light"><input type="radio"
                                                                    name="optionlogo"
                                                                    value="http://mehrdadweb.ir/front/img/URLShortener/02-email.png"
                                                                    id="optionlogo3" class="btn-check"><img
                                                                    src="http://mehrdadweb.ir/front/img/URLShortener/02-email.png"></label><label
                                                                class="btn btn-light"><input type="radio"
                                                                    name="optionlogo"
                                                                    value="http://mehrdadweb.ir/front/img/URLShortener/07-wifi-b.png"
                                                                    id="optionlogo4" class="btn-check"><img
                                                                    src="http://mehrdadweb.ir/front/img/URLShortener/07-wifi-b.png"></label><label
                                                                class="btn btn-light"><input type="radio"
                                                                    name="optionlogo"
                                                                    value="http://mehrdadweb.ir/front/img/URLShortener/07-wifi.png"
                                                                    id="optionlogo5" class="btn-check"><img
                                                                    src="http://mehrdadweb.ir/front/img/URLShortener/07-wifi.png"></label><label
                                                                class="btn btn-light"><input type="radio"
                                                                    name="optionlogo"
                                                                    value="http://mehrdadweb.ir/front/img/URLShortener/08-vcard-b.png"
                                                                    id="optionlogo6" class="btn-check"><img
                                                                    src="http://mehrdadweb.ir/front/img/URLShortener/08-vcard-b.png"></label><label
                                                                class="btn btn-light"><input type="radio"
                                                                    name="optionlogo"
                                                                    value="http://mehrdadweb.ir/front/img/URLShortener/08-vcard.png"
                                                                    id="optionlogo7" class="btn-check"><img
                                                                    src="http://mehrdadweb.ir/front/img/URLShortener/08-vcard.png"></label> <label
                                                                class="btn btn-light custom-watermark"><input
                                                                    type="radio" name="optionlogo" value=""
                                                                    class="btn-check">
                                                                <div class="hold-custom-watermark"></div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 mb-2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="no-logo-bg" name="no_logo_bg">
                                                        <label class="custom-control-label" for="no-logo-bg">خلوت کردن
                                                            پشت لوگو</label>
                                                    </div>
                                                </div>

                                                <div class="col-12 qrcdr-slider">
                                                    <input type="range" min="30" max="100" value="100"
                                                        class="qrcdr-slider-input" name="logo-size">
                                                    <label class="small">اندازه لوگو: <span
                                                            class="qrcdr-slider-value"></span></label>
                                                </div>
                                            </div> <!-- collapse logo -->

                                        </div>

                                        <div class="accordion-item d-grid">
                                            <button
                                                id="button4"
                                                class="mb-2 btn btn-outline-primary btn-lg btn-block text-start text-left"
                                                type="button" data-bs-toggle="collapse" data-toggle="collapse"
                                                data-bs-target="#collapseOptions" data-target="#collapseOptions">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-toggles"
                                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M4.5 9a3.5 3.5 0 1 0 0 7h7a3.5 3.5 0 1 0 0-7h-7zm7 6a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm-7-14a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zm2.45 0A3.49 3.49 0 0 1 8 3.5 3.49 3.49 0 0 1 6.95 6h4.55a2.5 2.5 0 0 0 0-5H6.95zM4.5 0h7a3.5 3.5 0 1 1 0 7h-7a3.5 3.5 0 1 1 0-7z" />
                                                </svg> <span class="vertical-middle">تنظیمات</span>
                                            </button>
                                            <div class="collapse" id="collapseOptions"
                                                data-bs-parent="#collapseSettings" data-parent="#collapseSettings">

                                                <div class="col-sm-12 mb-2">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <label>اندازه</label>
                                                            <select name="size"
                                                                class="form-select custom-select qrcode-size-selector">
                                                                <option value="8">200</option>
                                                                <option value="12">300</option>
                                                                <option value="16">400</option>
                                                                <option value="20">500</option>
                                                                <option value="24" selected>600</option>
                                                                <option value="28">700</option>
                                                                <option value="32">800</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label>خوانایی</label>
                                                            <select name="level" class="form-select custom-select">
                                                                <option value="L">
                                                                    کم دقت </option>
                                                                <option value="M" selected>
                                                                    قابل قبول </option>
                                                                <option value="Q">
                                                                    بادقت </option>
                                                                <option value="H">
                                                                    جزئیات بالا </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- collapseSettings -->
                                </div><!-- main-col open at tabnav -->
                            </div> <!-- row -->
                        </div><!-- col sm12-->
                    </form>
                </div> <!-- row -->
            </div><!-- col-lg-8 -->

        </div><!-- row -->
    </div><!-- container -->
    <div class="alert_placeholder toast" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
        <div class="toast-header">
            <div class="mr-auto">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path
                        d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                </svg>
            </div>
            <button type="button" class="ml-2 ms-auto mb-1 btn-close close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                        <path
                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                    </svg></span>
            </button>
        </div>
        <div class="toast-body"></div>
    </div>
    <div class="pt-3">
        <div class="container">
            <hr>
            <div class="row py-2 mb-3">
                <div class="col-12 footer">
                    ارائه شده توسط <a target="_blank" title="طراحی وب سایت حرفه ای" href="https://mehrdadweb.ir/">مهرداد وب</a></div>
            </div>
        </div>
    </div>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-21689588-20"></script>
    <script>
        window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'UA-21689588-20');</script>
    <script src="http://mehrdadweb.ir/front/js/popper.js"></script>
    <script src="http://mehrdadweb.ir/front/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://mehrdadweb.ir/front/js/spectrum/spectrum.min.js"></script>
    <script src="http://mehrdadweb.ir/front/js/bootbox.min.js"></script>
    <script src="http://mehrdadweb.ir/front/js/bootstrap-maxlength.min.js"></script>
    <script src="http://mehrdadweb.ir/front/js/qrcdr.js"></script>
</body>

</html>