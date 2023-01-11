
/////////////////

function RemindMe(){
  
  CheckPassword('#passwrd');

   if ( $('#password_check').attr("data-status") == "1" ){
      $.ajax({
               url:'./forget.php',
               type:'POST',
               success: function (res) {
                  $("#header_notice").empty();
                  $("#header_notice").html(res);
               },
               error: function (res){
                     alert('error');
               },
               data: { type: "remind" , email : $("#email").val().trim() , passwrd : $("#passwrd").val().trim() , code : $("#code").val().trim() }            
               
      });
   }
}


function ResendActivationEmail(){
    $.ajax({
               url:'./resend.php',
               type:'POST',
               success: function (res) {
                 
                  if ( res.trim() == 'done' ){
                     $("#header_notice h2").empty();
                     $("#header_notice h2").html("ایمیل فعال سازی با موفقیت ارسال شد.");
                  }else{
                     $("#header_notice h2").empty();
                     $("#header_notice h2").html("ایمیل فعال سازی با خطا مواجه شد.");   
                  }
               },
               error: function (res,err){
                     alert(res);
               },
               data: { type: "resend" , email : $("#email").val().trim() , code : $("#code").val().trim() }            
               
      });
}