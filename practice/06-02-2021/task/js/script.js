function setValidationResponse() {
	var emailRegex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var textRegx = /^[A-z ]+$/;
	var phoneRegx = /^[1-9]{1}[0-9]{9}$/;
	var name = document.getElementById("name").value;
	var email = document.getElementById("email").value;
	var phone = document.getElementById("phone").value;
	var title = document.getElementById("title").value;
	var datetime = document.getElementById("datetime").value;

	var isValid = true;
	if (name == "") {
		markAsInvalid("name", "name is required!!!");
		isValid = false;
	} else if(!textRegx.test(name)) {
		markAsInvalid("name", "name is invalid!!!");
		isValid = false;
	} else {
		markAsValid("name");
	}
	//email validation
	if (email == "") {
		markAsInvalid("email", "email is required!!!");
		isValid = false;
	} else if(!emailRegex.test(email)) {
		markAsInvalid("email", "email is invalid!!!");
		isValid = false;
	} else {
		markAsValid("email");
	}
	
	//phone validation
	if (phone == "") {
		markAsInvalid("phone", "phone is required!!!");
		isValid = false;
	} else if(!phoneRegx.test(phone)) {
		markAsInvalid("phone", "phone is invalid!!!");
		isValid = false;
	} else {
		markAsValid("phone");
	}
	
	//datetime validation
	if (datetime == "") {
		markAsInvalid("datetime", "Created is required!!!");
		isValid = false;
	} else {
		markAsValid("datetime");
	}
	return isValid;
}

function markAsValid(id) {
	document.getElementById(id+"-error").style.display = "none";
}

function markAsInvalid(id, feedback) {
	document.getElementById(id+"-error").style.display = "block";
	document.getElementById(id+"-error").innerText = feedback;
}