<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<!--<html lang="en">  English -->
<html lang="fa">
<head>
    <meta name="author" content="Mehrdad Mohammadi" />
    <title>Mehrdad Mohammadi</title>
    
    <link rel="stylesheet" href="http://mehrdadweb.ir/front/css/usertable.css">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <script language="javascript" type="text/javascript" src="http://mehrdadweb.ir/front/js/register.js"></script>
    <script language="javascript" type="text/javascript" src="http://mehrdadweb.ir/front/js/pagination.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <script src="jquery-3.5.1.min.js"></script>
    <script type="application/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/jquery-1.8.1.js"></script>
    
    
    
    <script language="javascript" type="text/javascript" src="index.js"></script>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
     
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
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
        
        /*Stat-Pagination 1400/08/11 */
        getPagination('#mytable');
					//getPagination('.table-class');
					//getPagination('table');

		  /*					PAGINATION 
		  - on change max rows select options fade out all rows gt option value mx = 5
		  - append pagination list as per numbers of rows / max rows option (20row/5= 4pages )
		  - each pagination li on click -> fade out all tr gt max rows * li num and (5*pagenum 2 = 10 rows)
		  - fade out all tr lt max rows * li num - max rows ((5*pagenum 2 = 10) - 5)
		  - fade in all tr between (maxRows*PageNum) and (maxRows*pageNum)- MaxRows 
		  */
		 

        function getPagination(table) {
          var lastPage = 1;
        
          $('#maxRows')
            .on('change', function(evt) {
              //$('.paginationprev').html('');						// reset pagination
        
             lastPage = 1;
              $('.pagination')
                .find('li')
                .slice(1, -1)
                .remove();
              var trnum = 0; // reset tr counter
              var maxRows = parseInt($(this).val()); // get Max Rows from select option
        
              if (maxRows == 5000) {
                $('.pagination').hide();
              } else {
                $('.pagination').show();
              }
        
              var totalRows = $(table + ' tbody tr').length; // numbers of rows
              $(table + ' tr:gt(0)').each(function() {
                // each TR in  table and not the header
                trnum++; // Start Counter
                if (trnum > maxRows) {
                  // if tr number gt maxRows
        
                  $(this).hide(); // fade it out
                }
                if (trnum <= maxRows) {
                  $(this).show();
                } // else fade in Important in case if it ..
              }); //  was fade out to fade it in
              if (totalRows > maxRows) {
                // if tr total rows gt max rows option
                var pagenum = Math.ceil(totalRows / maxRows); // ceil total(rows/maxrows) to get ..
                //	numbers of pages
                for (var i = 1; i <= pagenum; ) {
                  // for each page append pagination li
                  $('.pagination #prev')
                    .before(
                      '<li data-page="' +
                        i +
                        '">\
        								  <span>' +
                        i++ +
                        '<span class="sr-only">(current)</span></span>\
        								</li>'
                    )
                    .show();
                } // end for i
              } // end if row count > max rows
              $('.pagination [data-page="1"]').addClass('active'); // add active class to the first li
              $('.pagination li').on('click', function(evt) {
                // on click each page
                evt.stopImmediatePropagation();
                evt.preventDefault();
                var pageNum = $(this).attr('data-page'); // get it's number
        
                var maxRows = parseInt($('#maxRows').val()); // get Max Rows from select option
        
                if (pageNum == 'prev') {
                  if (lastPage == 1) {
                    return;
                  }
                  pageNum = --lastPage;
                }
                if (pageNum == 'next') {
                  if (lastPage == $('.pagination li').length - 2) {
                    return;
                  }
                  pageNum = ++lastPage;
                }
        
                lastPage = pageNum;
                var trIndex = 0; // reset tr counter
                $('.pagination li').removeClass('active'); // remove active class from all li
                $('.pagination [data-page="' + lastPage + '"]').addClass('active'); // add active class to the clicked
                // $(this).addClass('active');					// add active class to the clicked
        	  	limitPagging();
                $(table + ' tr:gt(0)').each(function() {
                  // each tr in table not the header
                  trIndex++; // tr index counter
                  // if tr index gt maxRows*pageNum or lt maxRows*pageNum-maxRows fade if out
                  if (
                    trIndex > maxRows * pageNum ||
                    trIndex <= maxRows * pageNum - maxRows
                  ) {
                    $(this).hide();
                  } else {
                    $(this).show();
                  } //else fade in
                }); // end of for each tr in table
              }); // end of on click pagination list
        	  limitPagging();
            })
            .val(5)
            .change();
        
          // end of on select change
        
          // END OF PAGINATION
        }
        
        function limitPagging(){
        	// alert($('.pagination li').length)
        
        	if($('.pagination li').length > 7 ){
        			if( $('.pagination li.active').attr('data-page') <= 3 ){
        			$('.pagination li:gt(5)').hide();
        			$('.pagination li:lt(5)').show();
        			$('.pagination [data-page="next"]').show();
        		}if ($('.pagination li.active').attr('data-page') > 3){
        			$('.pagination li:gt(0)').hide();
        			$('.pagination [data-page="next"]').show();
        			for( let i = ( parseInt($('.pagination li.active').attr('data-page'))  -2 )  ; i <= ( parseInt($('.pagination li.active').attr('data-page'))  + 2 ) ; i++ ){
        				$('.pagination [data-page="'+i+'"]').show();
        
        			}
        
        		}
        	}
        }
        
        $(function() {
          // Just to append id number for each row
          $('table tr:eq(0)').prepend('<th> ID </th>');
        
          var id = 0;
        
          $('table tr:gt(0)').each(function() {
            id++;
            $(this).prepend('<td>' + id + '</td>');
          });
        });
        
        /*End-Pagination */

        $("#login_span").click(function(){
        $("#login_dropdown_list").toggle(500);
        $("#pointy").toggle(500);
        });
        $("#shortbutton").click(function(){
            var txt = $("#longlink").val();
            $.post("/shortlink/shortlink.php",{suggest: txt},function(result){
                $("#shortlink").html(result);
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
                    url:'/login/dologin.php',
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
                      $("#demo2").html( "bad1" );
                    },
                    data: {type: "check",user_emial_login:$("#user_emial_login").val().trim() , pass_login:$("#pass_login").val().trim() , RememberCheckbox:$("#RememberCheckbox").val().trim()}            
               
                  });
            }
           
        });
                    $.ajax({
                       url:'/home.php',
                       type:'POST',
                       success: function (res) {
                           if($("#header_btns_online").html(res)){
                              //$("#header_login").hide(); 
                           }
                        //$("#header_login").hide();
                        $("#header_btns_online").html(res);
                       },
                       error: function (res){
                          alert('no no');
                          $("#demo2").html( "bad" );
                       },
                       //data: {type: "check",user_emial_login:$("#user_emial_login").val().trim() , pass_login:$("#pass_login").val().trim() , RememberCheckbox:$("#RememberCheckbox").val().trim()}            
                       
                    });   
        $("#allcheckbox").click(function(){
            //alert('no1');
            $('input:checkbox').not(this).prop('checked', this.checked);    
        });  
        $("input:checkbox:checked,#deletebutton").click(function(){
            alert('deletebutton');
            $("#mytable1").hide();
            var txt = $("input:checkbox:checked").val();
            $.post("/db/deletefromdb.php",{suggest: txt},function(result){
                $("#mytable1").html(result);
                $("#mytable2").html(result);
            });
        });
        $("#alldeletebutton").click(function(){
            //alert('no2');
            var txt = $("#alldeletebutton").val();
            $.post("/db/deletefromdb.php",{suggest: txt},function(result){

                $("#mytable1").hide();
                $("#mytable2").html(result);
            });
        });
    });


    </script>
</head>
<body>
<!-- ====== Header ======  -->
<section id="home" class="header container-fliud"  data-scroll-index="0" style="background-image: url(/front/img/URLShortener/header4.png); background-position: 0px 0px;margin-bottom:0;" data-stellar-background-ratio="0.8">
    
        <div class="row  pl-sm-5 pt-3 pt-sm-5">
            <!-- ====== first col====== -->
            <div class="col-10 pl-sm-5 ">
                <div id="demo2" style="display:block; color: blue;"></div>
                <div id="txtHint" class="txtHint">
                <!-- ====== نمایش اطلاعات کاربری که ثبت نام کرده و ورودش مجاز است====== -->    
                <div class="header_btns_online" id="header_btns_online" ></div>
                <!-- ====== قسمت ورود اطلاعات کاربری + ثبت نام + فراموشی رمز عبور + یادآوری====== -->
                <!--<div class="header_login" id="header_login">-->
                <!--<div class="login_container">-->
                <!--    <span class="span-button" id="login_span" onclick="showhide()">ورود کاربر </span>  -->
                <!--    <span class="span-button" style="position:relative;top:1px;"> | </span>-->
                <!--    <span class="span-button"><a href="http://mehrdadweb.ir/registration/register.php" style="color:white;text-decoration: none;">ثبـــت نام کاربر</a></span>-->
                    
                <!--    <div id="pointy" class="pointy" style="display: block;display: none;"></div>-->
                    
                    <!-- <form action="http://www.mehrdadweb.ir/login/dologin.php" method="POST" name="frm" id="form0" >login box ورود کاربر                 -->
                <!--    <div id="login_dropdown_list" class="login_dropdown_list" style="display:block;display: none;">-->
                <!--        <div class="login-text-div"> -->
                <!--            <input type="text" id="user_emial_login" name="user_emial_login" placeholder="نام کاربری یا ایمیل" class="input_login" required>-->
                <!--        </div>-->
                            
                <!--        <div class="login-text-div">-->
                <!--            <input type="password" id="pass_login" name="pass_login" placeholder="کلمه عبور"  class="input_login" required>-->
                <!--        </div>-->
                            
                <!--        <div class="login-sec-div"> -->
                <!--            &nbsp; -->
                                
                <!--            <input type="submit" id="login_button" value="login" class="sub_login_btn" >-->
                <!--            &nbsp; -->
                                
                     <!-- </form>login box ورود کاربر-->           
                <!--            <input type="checkbox" id="RememberCheckbox" name="RememberCheckbox" value="RememberMe" style="position:relative;top:2px;">-->
                <!--            <span> بخاطر بسپار </span>-->
                <!--        </div>-->
                                
                <!--        <div class="hr_shape"></div>-->
                                
                <!--        <div class="forgot-link-div"> -->
                <!--            <a style="text-decoration:none;" href="http://mehrdadweb.ir/registration/forget.php">-->
                <!--            <span tabindex="5"> آیا کلمه عبور را فراموش کردید ؟ </span></a>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--</div>-->
                
                <!--</div> -->
            </div>
            <!-- ====== second col ====== -->        
            <!--<div class="col-2  align-top pl-2">-->
            <!--    <div class="clock"><p id="demo">Clock</p></div>-->
            <!--</div>-->
        </div>
</section>
<!-- ====== End Header ======  -->
<!-- ====== Navgition ======  -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="http://mehrdadweb.ir/shortlink/shortlinker.html">Mehrdad <i class="fas fa-cut"></i></a> 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/biography/biography.html" target="_blank">بیوگرافی</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">مهارت ها</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">پروژه ها</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/shortlink/shortlinker.html" target="_blank">پروژه کوتاه کردن لینک</a></li>
                    <li><a class="dropdown-item" href="#">پروژه 2</a></li>
                    <li><a class="dropdown-item" href="#">پروژه 3</a></li>
                </ul>
            </li> 
            <li class="nav-item">
                <a class="nav-link" href="http://mehrdadweb.ir">صفحه اصلی</a>
            </li>
        </ul>
     </div> 
</nav>
<!-- ====== End Navgition ======  -->
<!-- ====== main ====== -->
<div class="mainclass">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb bgcolor">
            <li class="breadcrumb-item"><a href="http://mehrdadweb.ir/">خانه</a></li>
            <li class="breadcrumb-item"><a href="http://mehrdadweb.ir/URLShortener">سایت کوتاه کننده لینک</a></li>
            <li class="breadcrumb-item active"  aria-current="page"><a href="http://mehrdadweb.ir/user/userpanel.php?id=<?php echo $_GET['id'];?>">پنل کاربری</a></li>
        </ol>
    </nav>
    <!-- ====== 1-main ====== -->
    <div class="row ">
        <div class="col col1color d-flex flex-column" >
            <!-- ====== 1/1-main ====== -->
            <div class="text1 mt-1" id="showit">
                <pre> کاربر گرامی <span style="color:red;"><?php echo $_GET['id'];?></span></pre>
                <pre> جدول لینک های خود را در زیر مشاهده می کنید: </pre>  
                <input style="display:none" type="text" name="usernamee" id="usernamee" value="<?php echo $_GET['id'];?>">
            </div> 
            <!-- ====== 1/2-main ====== -->
            <div class="ml-2">
                    
                    <diV>
                        <h6 style="text-align: center;">
                            تعداد سطرهای جدول را انتخاب کنید
                        </h6>
        				<div class="form-group" style="width: fit-content;text-align: center;margin: auto;">
        			 		<select class  ="form-control" name="state" id="maxRows">
        						 <option value="5000">Show ALL Rows</option>
        						 <option value="5">5</option>
        						 <option value="10">10</option>
        						 <option value="15">15</option>
        						 <option value="20">20</option>
        						 <option value="50">50</option>
        						 <option value="70">70</option>
        						 <option value="100">100</option>
        						</select>
        			 		
        			  	</div>
                    </diV>

                    <div id="mytable1">
                        <table class="table table1 table-bordered table-hover table-responsive" id="mytable">
                        <thead class="thead-dark">
                            <tr>
                              <th>Delete</th>  
                              <th>ID</th>
                              <th>Usename</th>
                              <th>Link</th>
                              <th>Shortlink</th>
                            </tr>
                        </thead>
                        <tbody class="table-info ">
                            <?php
                            $user_name=$_GET['id'];
                            require 'config.php';        
                            $sql = "SELECT * FROM UserLinks WHERE username='$user_name'";
                            $result = $conn->query($sql);
                            if ($result->num_rows < 0){echo "nothing to share";}
                            if ($result->num_rows > 0){
                            while($row = ($result->fetch_assoc()))
                            {
                               
                              echo "<tr>";
                              echo "<td >".
                                        " 
                                        <input  type='checkbox' value='".$row['id']."' id='".$row['id']."' name='".$row['id']."'>
                                        <label  for='".$row['id']."'><img class='d-inline' src='/front/img/URLShortener/input-cross.png' alt='error' width='10' height='10'></label>
                                        <button type='button' class='btn btn-primary d-inline' id='deletebutton'>حذف</button>
                                        " 
                                    ."</td>";
                              echo "<td>". $row['id'] . "</td>";
                              echo "<td>" . $row['username'] . "</td>";
                              echo "<td>" . $row['link'] . "</td>";
                              echo "<td>" . $row['shortlink'] . "</td>";
                            //   echo "<td>" . $row['datetime'] . "</td>";
                              echo "</tr>";
                            }
                           // echo "</table>"; "<input type='checkbox' value='deleted' id='mycheckbox' name='mycheckbox'>" 
                            
                            }
                            $conn->close();
                            ?>
                        </tbody>
                        <tr>
                            <input class="ml-2" type='checkbox' value='alldeleted' id='allcheckbox' name='allcheckbox'>
                            <label for="allcheckbox">Delete All Rows</label> 
                            <button type='button' class=' d-inline mb-1' id='alldeletebutton' value='alldeletebutton'>حذف</button>
                        </tr>
                    </table>
                    </div>
                    <div id="mytable2"></div>
                    
                    
            <!-- Start Pagination -->
            		<div class='pagination-container' >
            				<nav>
            				  <ul class="pagination">
                                <li data-page="prev" >
            						<span> < <span class="sr-only">(current)</span></span>
            					</li>
            				   <!--	Here the JS Function Will Add the Rows -->
                                <li data-page="next" id="prev">
            						<span> > <span class="sr-only">(current)</span></span>
            					</li>
            				  </ul>
            				</nav>
            		</div>
            <!-- End Pagination -->
            
            </div>
        </div>
    </div>  
    <!-- ====== 2-main ====== -->
    <div class="row   ml-5">    
        <div id="signout"  onclick="javascript:window.location='http://mehrdadweb.ir/urlshortner-login/logout.php'">
            <img alt="خروج" src="/front/img/URLShortener/exit_ico.png" id="signout2">
            <button id="signout1">خروج از حساب کاربری</button> 
            <input type="checkbox" name="SignoutCheck" id="SignoutCheck" value="SignOut!" style="display:none;">
        </div>
    </div> 
</div>    
<!-- ====== end_main ======  -->
<!-- ====== footer ======  -->
<div class="container-fluid footercl footer text-primary"  data-scroll-index="0" style="background-image: url(/front/img/URLShortener/footer1.PNG); background-position: 0px 0px;margin-bottom:0;" data-stellar-background-ratio="0.8">
    <div class="row text-center pt-md-2 mt-md-2" >
        <div class="col">Contact us</div>
    </div>
    <div class="row text-center pt-md-3 mt-md-3">
        <div class="col-md-3">
            <div class="item">
                <span class="icon">
				    <i class="fa fa-phone" aria-hidden="true"></i>
				</span>
				<h6>Phone</h6>
				<p>+98 9390182439</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="item">
				<span class="icon">
				    <i class="fa fa-envelope" aria-hidden="true"></i>
				</span>
				<h6>Gmail</h6>
				<a class="text-decoration-none" href="#" target="_blank">mehrdadmmg2012@gmail.com</a>
			</div>
        </div>
        <div class="col-md-3">
            <div class="item">
				<span class="icon">
				    <i class="fa fa-location-arrow" aria-hidden="true"></i>
				</span>
				<h6>Telegram</h6>
				<a class="text-decoration-none" href="https://t.me/mohammadi90" target="_blank">@mohammadi90</a>
			</div>
        </div>
        <div class="col-md-3">
            <div class="item">
                <span class="icon">
				    <i class="fab fa-instagram" aria-hidden="true"></i>
				</span>
                <h6>Instagram</h6>
				<a class="text-decoration-none" href="https://www.instagram.com/mehrdad.mohammadi7/" target="_blank">mehrdad.mohammadi7</a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- ====== endfooter ====== -->
</body>
</html>