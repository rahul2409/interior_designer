$(document).ready(function(){
	
	$emailRegex = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
	
	$userNameRegex = /[^'a-z','A-Z','0-9',_]/;
	
	$passwordRegexForLowerCaseAlphabets =/['a-z']/;
	$passwordRegexForUpperCaseAlphabets =/['A-Z']/
	$passwordRegexForNumbers = /\d/;
	$passwordRegexForSpecialCharacters = /[@_.]/
	
	
	$emailError = "";
	$passwordError = "";
	$passwordNotMatchingError = "";
	$passwordShortError = "";
	$allNullError = "";
	$summaryOfErrors = ""; 
	
	
	$('#signin').click(function(){
		window.refresh;
		$email = $("#email").val();
		$username = $("#name").val();
		$password = $("#password").val();
		$confirm = $("#confirm-password").val();
		if($email == '' || $username == '' || $password == ''|| $confirm == '')
		{
			$allNullError = 'All fields are required';
			$summaryOfErrors = $allNullError;
		}
		
		else{
			if($emailRegex.test($email) != true){
			
			$emailError = "Enter valid email only, ";
			$summaryOfErrors += $emailError;
			}
		
			if(!($passwordRegexForLowerCaseAlphabets.test($password) && ($passwordRegexForUpperCaseAlphabets.test($password))&& ($passwordRegexForNumbers.test($password)) && ($passwordRegexForSpecialCharacters.test($password)))){
				$passwordError = "Password must have atleast one a-z,A-Z,0-9 and a special character like @ or _, ";
				$summaryOfErrors += $passwordError ; 

			}

			if(($password.length < 6 )){
				$passwordShortError = "Password short should be atleast 8 characters long, ";
				$summaryOfErrors += $passwordShortError;
			}



			if($password != $confirm || $confirm == ""){
				$passwordNotMatchingError = "Password Dont Match cant sign up";
				$summaryOfErrors += $passwordNotMatchingError; 
			}	
		}
		
		
		if($summaryOfErrors == ""){
			$(".message").html("Ready to Sign Up");
			$(".toaster").css("display","block").addClass("passed");
		}
		else{
			$(".message").html($summaryOfErrors);
			$(".toaster").css("display","block").addClass("haserror");
			$summaryOfErrors = "";
			
		}
	
	});
	
	$(".toaster .icon-outter ").click(function(){
		$(".toaster").css('display','none');
	});
	
});