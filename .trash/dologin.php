<?php 
session_start();

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$email_user=test_input($_POST['user_emial_login']);
$pass=$_POST['pass_login'];
$remember=$_POST['RememberCheckbox'];
//1. (email or username) and password is empty or not
if(empty($email_user)||empty($pass)){
    echo "You must insert a unsername or email or password please !!!";
    exit();
    
}
$servername = "localhost";
$username = "mehrdadw_root";
$password = "mehrdad";
$dbname = "mehrdadw_linkDB";
$conn = new mysqli($servername, $username,$password,$dbname);
if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM UserLogsInfo WHERE (username='$email_user' OR email='$email_user')";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$nowtime1 = date("h:i:sa");
$nowtime = strtotime(date("h:i:sa"));
$loginendtime = strtotime($row['loginendtime']);
$loginstarttime = strtotime($row['loginstarttime']);
$accesstime = strtotime($row['accesstime']);

if($nowtime < $accesstime){
    echo  "you cannot access LOGIN until 3 minutes later( ".$row['accesstime']." ) <br>Time is : ".$nowtime1;
    $_SESSION['count'] = 0;
    exit();  
}
// تعیین بازه زمانی برای لاگین
if($nowtime > $loginendtime){
    $sql6 ="UPDATE UserLogsInfo SET loginstarttime =DATE_ADD(NOW(), INTERVAL 0 minute),loginendtime=DATE_ADD(NOW(), INTERVAL 30 minute) WHERE (username='$email_user' OR email='$email_user')";
    $result6 = $conn->query($sql6);
    $sql8 = "SELECT * FROM UserLogsInfo WHERE (username='$email_user' OR email='$email_user')";
    $result8 = $conn->query($sql8);
    $row8 = $result8->fetch_assoc();
    echo "loginstarttime : ".$row8['loginstarttime']." | loginendtime : ".$row8['loginendtime'];
    $loginstarttime=strtotime($row8['loginstarttime']);
    $loginendtime=strtotime($row8['loginendtime']);
    
}

//date_default_timezone_set("Iran/Tehran");

$date1 = date("Y/m/d h:i:sa");
$date2 = date("Y/m/d");
$datetimeObj1 = new DateTime($date2);
$datetimeObj2 = new DateTime($row['datebu']);

if($nowtime > $loginstarttime && $nowtime < $loginendtime){
//2. چک میکنیم که کاربر 3 بار رمز را اشتباه وارد کرده یا نه   
        $bu=strtotime($row['bu']);
        
    if($nowtime < $bu && $datetimeObj1 == $datetimeObj2){
        echo  "d=".$date1." /BannedUntil= ".$row['datebu']." ".$row['bu']."<br>No No,wrong, you have entered password 3 times  and you are blocked until ".$row['datebu']." ".$row['bu'];
        $_SESSION['count'] = 0;
        exit();
    }
    
    if($datetimeObj1 > $datetimeObj2){$_SESSION['count'] = 0;}
    
    $sql1 = "SELECT * FROM UserLogsInfo WHERE password=$pass";
    $result1 = $conn->query($sql1);
    //3. password is wrong
    if($result1->num_rows <= 0){
            
        if($_SESSION['count'] == 2){//پسورد برای سومین بار اشتباه وارد شده باشد
            $_SESSION['count'] = 0;
    
            $sql2 = "UPDATE UserLogsInfo SET bu = DATE_ADD(NOW(), INTERVAL 1 minute) WHERE (username='$email_user' OR email='$email_user')";
            $result2 = $conn->query($sql2);
            
            $sql5 ="UPDATE UserLogsInfo SET datebu ='$date1' WHERE (username='$email_user' OR email='$email_user')";
            $result5 = $conn->query($sql5);
    
            $sql3 = "SELECT bu,datebu FROM UserLogsInfo WHERE (username='$email_user' OR email='$email_user')";
            $result3 = $conn->query($sql3);
            $row3 = $result3->fetch_assoc();
            echo "<br>d=".$date1." /bu=".$row3['bu']."<br>!!! wrong password 3 times and you are blocked until ".$row3['datebu']." ".$row3['bu'];
            exit();
            
        }
        $_SESSION['count'] = $_SESSION['count'] + 1;
        echo "<br>bu=".$row['datebu'].$row['bu']." / d=".$date1." / <br>!!! wrong password ".$_SESSION['count'];
        exit();
        
    }
    $sql4 = "SELECT * FROM UserLogsInfo WHERE password=$pass AND (username='$email_user' OR email='$email_user')"; 
    $result4 = $conn->query($sql4);
    //4. email or username is wrong
    if($result4->num_rows <= 0){
        echo "!!! wrong unsername or email";
        exit();
    //5. (email or username) and password is right
    }else{
        $_SESSION['count'] = 0;
        $row4 = $result4->fetch_assoc();
            
        $username1=$row4['username'];
        $email1=$row4['email'];
        $pass1=$row4['password'];
        $id1=$row4['id'];
            
        $cookie_name = "userlogged";
        $cookie_value = $row4['id'];
        //expiriry time. 86400 = 1 day (86400*30 = 1 month)
        $expiry = time() + (86400 * 30);
        //6 Remember me cheked true or flase    
        if($remember=='RememberMe'){
            setcookie($cookie_name, $cookie_value, $expiry, "/");
            /*echo "cookie_name : ".$cookie_name;
            echo "<br>"."cookie_vlue : ".$cookie_value;*/
                
        }else{
            //if your server requires to set session path
            //session_start();
            $_SESSION['userlogged'] = $id;
            
        }
    //echo "username= ".$username1."  /  email= ".$email1."  /  password= ".$pass1."  /  id= ".$id1."/  remember= ".$_POST['RememberCheckbox'];
    }
}else{
    $sql7 ="UPDATE UserLogsInfo SET accesstime=DATE_ADD(NOW(), INTERVAL 3 minute) WHERE (username='$email_user' OR email='$email_user')";
    $result7 = $conn->query($sql7);
    
    $sql9 = "SELECT * FROM UserLogsInfo WHERE (username='$email_user' OR email='$email_user')";
    $result9 = $conn->query($sql9);
    $row9 = $result9->fetch_assoc();
    echo  "you cannot access LOGIN until 3 minutes later( ".$row9['accesstime']." )";
    $_SESSION['count'] = 0;
    exit();  
}

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
               $("#signout1").click(function(){
                   //$(this).hide();
                   //header("Location: http://mehrdadweb.ir/login/logout.php");
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
            &nbsp;&nbsp; پنل کاربری &nbsp;&nbsp;</a>  &nbsp; -- &nbsp;
            
    	<a title="اطلاعات کاربر آنلاین" class="user_online_info"> &nbsp;<?php echo $username1;?>&nbsp; | &nbsp;<?php echo $email1;?>&nbsp; | &nbsp;<?php echo $date1;?></a>
    	&nbsp;
    	
    	<img alt="کاربر آنلاین" src="http://mehrdadweb.ir/images/usericonlogin.png" class="online_ico_style" id="id1">
    	<img alt="منوی کاربر" src="http://www.mehrdadweb.ir/images/down-arrow.png" class="online_arrow_ico" id="id2">
    	
    	<form action="http://mehrdadweb.ir/" method="POST" name="frm" id="frm">
        	<div class="pointy" style="position: absolute; top: 33px; display: block;display: none;"></div>
        	
        	<div class="setting_dropdown_style" id="setting_dropdown_style" style="display: block;display: none;">
        	    
                <div onclick="javascript:window.location='http://mehrdadweb.ir/user/userpanel.php/<?php echo $username1;?>'"> 
                    <img alt="منوی تنظیمات و خروج" src="http://www.mehrdadweb.ir/images/setting_ico.png">
                    <span style="position:relative;top:2px;"> پنل کاربری </span>
                </div>
            
                <div class="hr_shape" style="height:1px;"></div>
            
                <div id="signout"  onclick="javascript:window.location='http://mehrdadweb.ir/login/logout.php'">
                    <img alt="خروج" src="http://www.mehrdadweb.ir/images/exit_ico.png" id="signout2">
                    <span id="signout1"> خروج </span> 
                    <input type="checkbox" name="SignoutCheck" id="SignoutCheck" value="SignOut!" style="display:none;">
                </div>
        	</div>
    	</form>
    </div>
    
</body>
</html>

