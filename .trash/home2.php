<?php
session_start();
if(count($_COOKIE) > 0) {
  echo "Cookies are enabled.";
} else {
  echo "Cookies are disabled.";
} 
if(isset($_COOKIE['userlogged2']) && $_COOKIE['userlogged2'] != ''){
    $user=intval($_COOKIE['userlogged2']);
    //echo "<br>"."1.cookie_vlue : ".$_COOKIE['userlogged']."<br>";
     //get user data from mysql
    $servername = "localhost";
    $username = "mehrdadw_root";
    $password = "mehrdad";
    $dbname = "mehrdadw_linkDB";
    
    // Create connection
    $conn = new mysqli($servername, $username,$password,$dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT * FROM UserLogsInfo WHERE id=$user";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $username1=$row['username'];
    $email1=$row['email'];
    
}else if(isset($_SESSION['userlogged2']) && $_SESSION['userlogged2'] !=''){
    $user=intval($user);
    echo "2.cookie is not set"."<br>";
     //get user data from mysql
    $servername = "localhost";
    $username = "mehrdadw_root";
    $password = "mehrdad";
    $dbname = "mehrdadw_linkDB";
    
    // Create connection
    $conn = new mysqli($servername, $username,$password,$dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT * FROM UserLogsInfo WHERE id=$user";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $username1=$row['username'];
    $email1=$row['email'];
    
}else{
    //header("Location: http://mehrdadweb.ir/");
    //echo "<br>"."3".$_COOKIE["userlogged"]."<br>cookie is not set";
die();
}
 
/*
Show user details based on the fetched data
*/
//echo "<br>4.<a href='http://mehrdadweb.ir/login/logout.php'>Logout</a>";
?>
<!DOCTYPE html>
<html dir="rtl" lang="fa">
<html>
<head>   
        <link rel="stylesheet" href="http://mehrdadweb.ir/css/maindologin.css">
        <meta charset="UTF-8" />
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <script>
            $(document).ready(function(){
                $("#header_login").hide();
                $("#id1").click(function(){
                    $("#setting_dropdown_style").toggle(500);
                    $("#pointy").toggle(500);
                });
                $("#id2").click(function(){
                    $("#setting_dropdown_style").toggle(500);
                    $("#pointy").toggle(500);
                });
                $("#signout").click(function(){
                    header("Location: http://www.mehrdadweb.ir/login/logout.php/");
                            //$("#setting_dropdown_style").toggle(500);
                            //$("#pointy").toggle(500);
                        });
    });  
        </script>
</head>
<body>
    <div class="header_btns_online" id="header_btns_online" style="display:block;">
     		&nbsp;
        <a title="ورود به پنل کاربری جدید" class="user_online_link" href="http://mehrdadweb.ir/user/userpanel.php/<?php echo $username1;?>">
            &nbsp;&nbsp; 2پنل کاربری &nbsp;&nbsp;</a>  &nbsp; -- &nbsp;
            
    	<a title="اطلاعات کاربر آنلاین" class="user_online_info"> &nbsp;<?php echo $username1;?>&nbsp; | &nbsp;<?php echo $email1;?></a> &nbsp;
    	
    	<img alt="کاربر آنلاین" src="http://mehrdadweb.ir/images/usericonlogin.png" class="online_ico_style" id="id1">
    	<img alt="منوی کاربر" src="http://www.mehrdadweb.ir/images/down-arrow.png" class="online_arrow_ico" id="id2">
    	
    	<form action="http://www.mehrdadweb.ir/" method="POST" name="frm" id="frm">
        	<div class="pointy" style="position: absolute; top: 33px; display: block;display: none;"></div>
        	
            	<div class="setting_dropdown_style" id="setting_dropdown_style" style="display: block;display: none;">
                    <div onclick="javascript:window.location='http://mehrdadweb.ir/user/userpanel.php/<?php echo $username1;?>'"> 
                    <img alt="منوی تنظیمات و خروج" src="http://www.mehrdadweb.ir/images/setting_ico.png">
                    <span style="position:relative;top:2px;"> 2پنل کاربری </span>
                </div>
                
                <div class="hr_shape" style="height:1px;"></div>
                
                <div id="signout" onclick="javascript:window.location='http://mehrdadweb.ir/login/logout.php'"> 
                    <img alt="خروج" src="http://www.mehrdadweb.ir/images/exit_ico.png">
                    <span> 2خروج </span> 
                    <input type="checkbox" name="SignoutCheck" id="SignoutCheck" value="SignOut!" style="display:none;"> 
                </div>
        	</div>
    	</form>
</div>
</body>
</html>
