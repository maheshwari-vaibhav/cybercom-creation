function setRegisterValidationResponse() {
	var emailRegex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var textRegx = /^[A-z ]+$/;
	var phoneRegx = /^[1-9]{1}[0-9]{9}$/;
	var fname = document.getElementById("fname").value;
	var lname = document.getElementById("lname").value;
	var password = document.getElementById("password").value;
	var cpassword = document.getElementById("cpassword").value;
	var email = document.getElementById("email").value;
	var mnumber = document.getElementById("mnumber").value;
	var info = document.getElementById("info").value;
	var prefix = document.getElementById("prefix").value;
	var term = document.getElementById('term').checked;
	var isValid = true;
	//fname validation
	if (fname == "") {
		markAsInvalid("fname", "First name is required!!!");
		isValid = false;
	} else if(!textRegx.test(fname)) {
		markAsInvalid("fname", "First name is invalid!!!");
		isValid = false;
	} else {
		markAsValid("fname");
	}

	//lname validation
	if (lname == "") {
		markAsInvalid("lname", "Last name is required!!!");
		isValid = false;
	} else if(!textRegx.test(lname)) {
		markAsInvalid("lname", "Last name is invalid!!!");
		isValid = false;
	} else {
		markAsValid("lname");
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
	
	//mnumber validation
	if (mnumber == "") {
		markAsInvalid("mnumber", "Mobile number is required!!!");
		isValid = false;
	} else if(!phoneRegx.test(mnumber)) {
		markAsInvalid("mnumber", "Mobile number is invalid!!!");
		isValid = false;
	} else {
		markAsValid("mnumber");
	}

	//password validation
	if (password == "") {
		markAsInvalid("password", "password is required!!!");
		isValid = false;
	} else if(password.length < 6) {
		markAsInvalid("password", "password must greater then 6 caharacter!!!");
		isValid = false;
	} else {
		markAsValid("password");
	}

	//cpassword validation
	if (cpassword == "") {
		markAsInvalid("cpassword", "confirm password is required!!!");
		isValid = false;
	} else if(cpassword!=password) {
		markAsInvalid("cpassword", "password  and confirm password must be same!!!");
		isValid = false;
	} else {
		markAsValid("cpassword");
	}

	
	//info validation
	if (info == "") {
		markAsInvalid("info", "info is required!!!");
		isValid = false;
	} else {
		markAsValid("info");
	}

	//prefix validation
	if (prefix == "") {
		markAsInvalid("prefix", "prefix is required!!!");
		isValid = false;
	} else {
		markAsValid("prefix");
	}

	//term validation
	if (!term) {
		markAsInvalid("term", "Please accept terms and condition!!!");
		isValid = false;
	} else {
		markAsValid("term");
	}

	return isValid;
}

function setCategoryValidationResponse() {
	var title = document.getElementById("title").value;
	var content = document.getElementById("content").value;
	var url = document.getElementById("url").value;
	var metatitle = document.getElementById("metatitle").value;
	var isValid = true;

	// title validation
	if (title == "") {
		markAsInvalid("title", "title is required!!!");
		isValid = false;
	} else {
		markAsValid("title");
	}

	// content validation
	if (content == "") {
		markAsInvalid("content", "content is required!!!");
		isValid = false;
	} else {
		markAsValid("content");
	}

	// url validation
	if (url == "") {
		markAsInvalid("url", "url is required!!!");
		isValid = false;
	} else {
		markAsValid("url");
	}

	// metatitle validation
	if (metatitle == "") {
		markAsInvalid("metatitle", "metatitle is required!!!");
		isValid = false;
	} else {
		markAsValid("metatitle");
	}
	return isValid;
}



function setBlogValidationResponse() {
	var title = document.getElementById("title").value;
	var content = document.getElementById("content").value;
	var url = document.getElementById("url").value;
	var publish = document.getElementById("publish").value;
	var category = document.getElementById("category").value;
	var img = document.getElementById("img").value;


	var isValid = true;

	// title validation
	if (title == "") {
		markAsInvalid("title", "title is required!!!");
		isValid = false;
	} else {
		markAsValid("title");
	}

	// content validation
	if (content == "") {
		markAsInvalid("content", "content is required!!!");
		isValid = false;
	} else {
		markAsValid("content");
	}

	// url validation
	if (url == "") {
		markAsInvalid("url", "url is required!!!");
		isValid = false;
	} else {
		markAsValid("url");
	}

	// metatitle validation
	if (publish == "") {
		markAsInvalid("publish", "publishAt is required!!!");
		isValid = false;
	} else {
		markAsValid("publish");
	}

	// category validation
	if (category == "") {
		markAsInvalid("category", "category is required!!!");
		isValid = false;
	} else {
		markAsValid("category");
	}


	// img validation
	if (img == "") {
		markAsInvalid("img", "img is required!!!");
		isValid = false;
	} else {
		markAsValid("img");
	}
	
	return isValid;
}


function setLoginValidationResponse() {
	var email = document.getElementById("email").value;
	var password = document.getElementById("password").value;
	var isValid = true;

	// email validation
	if (email == "") {
		markAsInvalid("email", "email is required!!!");
		isValid = false;
	} else {
		markAsValid("email");
	}

	// password validation
	if (password == "") {
		markAsInvalid("password", "password is required!!!");
		isValid = false;
	} else {
		markAsValid("password");
	}
	return isValid;
	
}



function markAsValid(id) {
	document.getElementById(id+"-error").style.display = "none";
}

function markAsInvalid(id, feedback) {
	document.getElementById(id+"-error").innerText = feedback;
}