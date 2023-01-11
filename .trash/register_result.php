<!DOCTYPE html>
<html>
    <head>

		<link rel="stylesheet" type="text/css" href="../main.css">
		<script type="text/javascript" async="" src="https://www.google-analytics.com/gtm/js?id=GTM-WLSJMMJ&amp;cid=721636816.1596048461"></script><script async="" src="https://www.google-analytics.com/analytics.js"></script><script language="javascript" type="text/javascript" src="../jquery.js"></script>
		<script language="javascript" type="text/javascript" src="../jquery.placeholder.js"></script>
		<script language="javascript" type="text/javascript" src="register.js"></script>
			<link rel="stylesheet" type="text/css" href="css/register.css">
			<meta http-equiv="content-type" content="text-html; charset=utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>ثبت نام</title>
	</head>

	<body class="body_style">


   <div class="header_div">

		 
<div class="header_btns_online">
 				&nbsp; <a title="ورود به پنل کاربري جديد" class="user_online_link" href="//www.uplooder.net/user/mehrdadmg">&nbsp;&nbsp; پنل کاربري &nbsp;&nbsp;</a>  &nbsp; -- &nbsp;
		<a title="اطلاعات کاربر آنلاين" class="user_online_info"> &nbsp;mehrdadmg&nbsp; | &nbsp;mehrdad.mohammadiii77@gmail.com					</a> &nbsp;
					<img alt="کاربر آنلاين" src="//www.uplooder.net/images/user_ico.png" class="online_ico_style"><img alt="منوي کاربر" src="//www.uplooder.net/images/arrow-down.png" class="online_arrow_ico">
					<form action="//www.uplooder.net/" method="POST" name="frm" id="frm">
						<div class="pointy" style="position: absolute; top: 33px; display: block;"></div>
						<div class="setting_dropdown_style" style="display: block;">
							<div onclick="javascript:window.location='//www.uplooder.net/user/mehrdadmg'"> <img alt="منوي تنظيمات و خروج" src="//www.uplooder.net/images/setting_ico.png"><span style="position:relative;top:2px;"> پنل کاربري </span></div>
							<div class="hr_shape" style="height:1px;"></div>
							<div id="signout"> <img alt="خروج" src="//www.uplooder.net/images/exit_ico.png"><span> خروج </span> <input type="checkbox" name="SignoutCheck" id="SignoutCheck" value="SignOut!" style="display:none;"> </div>
						</div>
					</form>
					</div>		</div>
	    <form name="frminfo" action="" method="POST">
		
			<br>
			<div id="header_notice">

		<center><h3 style="color:green;direction:rtl;font-size:16px;">  ايميل فعال سازي براي شما ارسال شده لطفا بر روي لينک فعال سازي در داخل ايميل خود کليک کنيد </h3> </center>
		<center><h3 style="color:green;direction:rtl;font-size:16px;">  توجه داشته باشيد ممکن است ايميل فعال سازي به پوشه spam ايميل شما رفته باشيد. </h3> </center>				</div>
			<br>
			<div class="register-main-container">
				<div class="dvinput" style="height:380px" dir="rtl">
				  
					<h2 style="font-size:100%;color:red" dir="rtl">  </h2>
					 <input name="usr" type="text" class="register-input" id="usr" onblur="CheckUsername(this)" placeholder="نــــام کاربري"><div name="username_check" data-status="1" id="username_check" class="input-check" style="background-image: url(&quot;/images/input-tick.png&quot;);"></div><br><span id="username_alert" class="input-problem-alert"></span><br>
					 <input name="email" type="text" class="register-input" id="email" onblur="CheckEmail(this)" placeholder="ايـميل ( مثال: example@yahoo.com )"><div name="email_check" data-status="1" id="email_check" class="input-check" style="background-image: url(&quot;/images/input-tick.png&quot;);"></div><br><span id="email_alert" class="input-problem-alert"></span><br>
					 <input name="passwrd" type="password" id="passwrd" title="کلمه عبور را وارد کنيد!" onblur="CheckPassword(this)" class="register-input" placeholder="کـــــلمه عبـــور"><div name="password_check" data-status="1" id="password_check" class="input-check" style="background-image: url(&quot;/images/input-tick.png&quot;);"></div><br><span id="password_alert" class="input-problem-alert"></span><br>
					 
					 <h2 style="font-size:80%;color:#7E587E"> کد امنيتي زير را وارد کنيد: </h2>
					 
					 <center>
					   <div style="width:220px;height:60px;">
						<input type="text" name="code" id="code" class="cdinput" dir="ltr">
						<div style="width:20px;height:46px;">
							<img name="captcha" src="../captcha1.php?random=12000">
							<img src="../images/refresh_blue.ico" title="refresh" style="cursor:pointer" onclick="captcha.src='../captcha1.php?random=' + Math.floor(Math.random()*10000);">
						</div>	
					  </div>
					  </center>
					 <input type="button" onkeydown="if (event.keyCode == 13) document.getElementById('register').click()" id="register" name="register" value="ثبــت نـام" class="register_button" onclick="RegisterMe();">
				 
					
				</div>
				<div class="dv-register-info">
					<br>
					<table>
						<tbody><tr>
							<td><img src="/images/input-tick.png"></td>
							<td><p> ايميل خود را بدون www وارد کنيد.</p></td>
						</tr>
						<tr>
							<td><img src="/images/input-tick.png"></td>
							<td><p> حداکثر طول نام کاربري ?? حرف مي باشد.</p></td>
						</tr>
						<tr>
							<td><img src="/images/input-tick.png"></td>
							<td><p>نام کاربري فقط ميتواند از بين حروف انگليسي و اعداد انگليسي انتخاب شود.</p></td>
						</tr>
						<tr>
							<td><img src="/images/input-tick.png"></td>
							<td><p>بعد از انجام موفقيت آميز ثبت نام ايميلي حاوي لينک فعال سازي براي شما ارسال مي شود. با مراجعه به ايميل خود و باز کردن لينک مربوطه حساب کاربري خود را فعال کنيد.ممکن است ايميل به قسمت spam يا junk رفته باشد.</p></td>
						</tr>
						<tr>
							<td><img src="/images/input-tick.png"></td>
							<td><p>براي اينکه ايميل فعال سازي مجدد براي شما ارسال شود به <a href="/registration/resend.php" target="_blank">اينجا</a> مراجعه کنيد.</p></td>
						</tr>
						<tr>
							<td><img src="/images/input-tick.png"></td>
							<td><p>انجام ثبت نام به اين منظور است که شما تمامي <a href="/rules.php" style="text-decoration:none;color:blue">قوانين</a> سايت را پذيرفته ايد.</p></td>
						</tr>

					</tbody></table>
										
					
				</div>
			</div>
			<br><br>
			<br><br>
			<br><br>
			<br>
			
				
		
		   </form>

		<div style="clear:both"></div>
	<div class="footer_style">


		<div class="special_links">
			<h3> :&nbsp;لينکهاي ويژه </h3><a target="_blank" href="https://www.followeryab.com">خريد فالوور اينستاگرام</a><a target="_blank" href="https://translate68.ir" rel="”nofollow”">ترجمه</a><a target="_blank" href="https://www.doris.host/vps">سرور مجازي</a>			</div>

		<div class="social_div">

			<a href="http://google.com/+UplooderNet98" target="_blank"> <img width="48px" height="48px" src="//www.uplooder.net/images/gplus.png" alt="آپلوودر در گوگل پلاس" title="ما را در گوگل پلاس دنبال کنيد"> </a>
			<a href="https://www.facebook.com/Uplooder" target="_blank"> <img width="48px" height="48px" src="//www.uplooder.net/images/faceb.png" alt="آپلوودر در فيس بوک" title="ما را در فيس بوک دنبال کنيد"> </a>
			<a href="https://twitter.com/uplooder" target="_blank"> <img width="48px" height="48px" src="//www.uplooder.net/images/twitt1.png" alt="آپلوودر در توييتر" title="ما را در توييتر دنبال کنيد"> </a>
			<br>
			<span style="font-weight:bold"> uplooder [.] info [@] yahoo [.] com &nbsp; : تماس با ما</span>
		</div>
		<div class="menu_div">
		   <hr>
			<ul>
			</ul>
		</div>


	</div>



<!-- Start of StatCounter Code for Default Guide -->
<style>.async-hide { opacity: 0 !important} </style>
<script>(function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
(a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
})(window,document.documentElement,'async-hide','dataLayer',4000,
{'GTM-WLSJMMJ':true});</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-104959644-1', 'auto');
	ga('require', 'GTM-WLSJMMJ');
  ga('send', 'pageview');

</script>
	<script language="javascript" type="text/javascript" src="../main.js"></script>
</body></html>