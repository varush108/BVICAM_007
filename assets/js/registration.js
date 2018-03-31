$(document).ready(function () {
	$("#password_err").hide();

	$("#password_again").keyup(function(){ 
		if($('#password').val()!=$('#password_again').val())
		{
			$("#password_err").show();
		}
		else
		{
			$("#password_err").hide();
		}
  			
	});
	$("#password_again").change(function(){ 
		if($('#password').val()!=$('#password_again').val())
		{
			$("#password_err").show();
		}
		else
		{
			$("#password_err").hide();
		}

  	});
	$('form#registrationForm').submit(function(e) {
		e.preventDefault();
	if($('#password').val()==$('#password_again').val())
	{		

			$('#mobileOTP').modal('show');	
			var search_val = $("#userMobile").val(); 
			$.post("sendotp/send.php", {number : search_val}, function(data) {
			var values = JSON.parse(data);
			if (values["type"]=="success"){
				$("#OTPmsg").replaceWith("An OTP has been sent to your mobile number. Please verify to complete the registration");
				$("#OTPerror").hide();
				otp = values["otp"]; 
				$('form#OTPform').submit(function(e) {
		
	
				if(otp==$("#OTP").val())
				{
					
					 $.post("services/userRegister.php", $("#registrationForm").serialize(), function(data) {
					 console.log(data);
					 if(data==1)
					 {
						 $('#mobileOTP').modal('hide');
						 $('#regComplete').modal('show');
						 $("#regMsg").append("Your Registration has been done.<br>An email has been sent to your email id for verification.<br>Please verify your email id to activate your account")
					 }
					 else
					 {
						$('#mobileOTP').modal('hide');
						$('#regComplete').modal('show');
						$("#regMsg").append("Your Registration could not be done. Please try again a")
					}
					});
				}
				else
				{
					console.log("otp error");
					$("#OTPmsg").hide();
					$("#OTPerror").show();
			
				}
					return false;
				});
			}
			else
			{
				$("#OTPmsg").replaceWith("OTP couldn't be send. Please check your number and try again");
			}
			});		
	}
	//else
	// {
		// return false;
	// }
	// return false;
	});
	
	$('form#loginForm').submit(function(e) {
			
			
			$.post("services/checkLogin.php", $("#loginForm").serialize(), function(data) {
			console.log(data);
			if(data==0)
			{
				window.location.replace("my-profile-login.php");	
			}
			else
			{
				console.log("error");
			}
			});
			return false;
				
	
	
	});
	function checkEmail() {
	var search_val=$("#emailLog").val(); 

  			$.post("services/get_email.php", {email : search_val}, function(data){
   				if (data==false){ 
     				$("#emailLog_err").show();
					$("#logIn").attr("disabled",true);
					
   				}
				else {
					$("#emailLog_err").hide(); 
					$("#logIn").attr("disabled",false);
				}
	
				
  			})
	 }
	 function checkSignupEmail() {
	var search_val=$("#userEmail").val(); 

  			$.post("services/get_email.php", {email : search_val}, function(data){
   				if (data==true){ 
     				$("#email_err").show();
					$("#submitSignUp").attr("disabled",true);
					
   				}
				else {
					$("#email_err").hide(); 
					$("#submitSignUp").attr("disabled",false);
				}
	
				
  			})
	 }

	$("#emailLog").keyup(function(){ 
		//	e.preventDefault();
		checkEmail();
		
  			
		});
		$("#emailLog").change(function(){ 
		//	e.preventDefault();
		checkEmail();
		
  			
		});
		
	$("#userEmail").keyup(function(){ 
		//	e.preventDefault();
		checkSignupEmail();
		
  			
		});
		$("#userEmail").change(function(){ 
		//	e.preventDefault();
		checkSignupEmail();
		
  			
		});
	$('.msgClose').click(function(e){
		e.preventDefault();
		$(this).closest('.alertMsg').fadeOut("slow", function() {
			$(this).addClass('hidden');
		});
	});
});
