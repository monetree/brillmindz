passwordId = document.getElementById('conform_password').oninput = function() { cpasswordValidation() };
let cpasswordValidation = function(){ 
	password = document.getElementById('password');
	cpassword = document.getElementById('conform_password');
	passwordvalue = document.getElementById('password').value;
	cpasswordvalue = document.getElementById('conform_password').value;
	submitButton = document.querySelector('.btn-danger');
	if(passwordvalue != cpasswordvalue){
		
		conform_passHelp.innerHTML = "password should match..";
		conform_passHelp.style.color = "red";
		cpassword.style.border = "none";
		cpassword.style.borderBottom = "2px solid red";
		submitButton.type = "button";
	}else{
		conform_passHelp.innerHTML = "";
		cpassword.style.border = "none";
		cpassword.style.borderBottom = "2px solid blue";
		submitButton.type = "submit";
	}
}


passwordId = document.getElementById('password').oninput = function() { passwordValidation() };
let passwordValidation = function(){ 
	passwordValue = document.getElementById('password').value;
	password = document.getElementById('password');
	passHelp = document.getElementById('passHelp');
	submitButton = document.querySelector('.btn-danger');
	if(passwordValue.length == ""){
		passHelp.innerHTML = "required filed";
		submitButton.type = "button";
	}else if(passwordValue.length <= 5){
		passHelp.innerHTML = "weak";
		passHelp.style.color = "red";
		password.style.border = "none";
		password.style.borderBottom = "2px solid red";
		submitButton.type = "button";
	}
	else if (passwordValue.search(/[a-z]/i) < 0) {
		passHelp.innerHTML = "Your password must contain at least one letter";
		passHelp.style.color = "red";
		password.style.borderBottom = "2px solid red";
		password.style.border = "none";
		submitButton.type = "button";
		
	}else if (passwordValue.search(/[0-9]/) < 0) {

	passHelp.innerHTML = "Your password must contain at least one digit";
	passHelp.style.color = "red";
	password.style.borderBottom = "2px solid red";
	password.style.border = "none";
	submitButton.type = "button";
	
	}
	else{
		passHelp.innerHTML = "";
		password.style.border = "none";
		password.style.borderBottom = "2px solid blue";
		submitButton.type = "submit";
	}
}
emailId = document.getElementById('email').oninput = function() { emailValidation() };
let emailValidation = function(){ 
	emailValue = document.getElementById('email').value;
	email = document.getElementById('email');
	emailHelp = document.getElementById('emailHelp');
	    var filterEmail = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
    	if (emailValue.match(filterEmail)) {
 		emailHelp.innerHTML = "";
 		email.style.border = "none";
		email.style.borderBottom = "2px solid blue";
        }else{
        emailHelp.innerHTML = "Invalid email";
        emailHelp.style.color = "red";
        email.style.border = "none";
		email.style.borderBottom = "2px solid red";
        }
	}
	


