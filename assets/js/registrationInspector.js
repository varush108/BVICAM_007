$(document).ready(function () {
	
	
	$('form#inspectorRegistration').submit(function(e) {
		e.preventDefault();
		$.post("services/inspectorRegister.php", $("#inspectorRegistration").serialize(), function(data) {
					 console.log(data);
					 if(data==1)
					 {
						 
						 $('#regComplete').modal('show');
						 $("#regMsg").append("Your Registration has been done.<br>An email has been sent to your email id for verification.<br>Please verify your email id to activate your account")
					 }
					 else
					 {
						
						$('#regComplete').modal('show');
						$("#regMsg").append("Your Registration coluld not be done. Please try again a")
					}
					});
	
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
