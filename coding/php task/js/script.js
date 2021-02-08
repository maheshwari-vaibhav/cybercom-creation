$(document).ready(function(){  

	load_data(1,2);
    load_pagination();
	function load_data(page,limit)
	{
		$.ajax({
			url:"libs/action.php",
			method:"POST",
			data:{load:'load',page:page,limit:limit},
			success:function(data)
			{
				$('#contacts').html(data);
			}
		});
	}

	function load_pagination() {
		$.ajax({
			url:"libs/action.php",
			method:"POST",
			data:{pagination:'pagination',limit:2},
			success:function(data)
			{
				$('#pagination').html(data);
			}
		});
	}

	//pagination link click
	$(document).on('click', '.page-link', function () {
	    var id = $(this).attr('data-id');
	    $('.page-item').removeClass('active');
	    $(this).parent('li').addClass('active');
		load_data(id,2); 
	});

	//delete button
	$(document).on('click', '.delete', function () {
	    var id = $(this).attr('id');
	    $.ajax({
	    	url:"libs/action.php",
	    	method:'POST',
	    	data:{delete:'delete',id:id},
	    	success:function(data)
	    	{
	    		if (data) {
	    			load_data(1,2);
    				load_pagination();

	    			$('#msg').html("Record Deleted Successfully !!");
                    $("#msg").fadeIn(4000).fadeOut(4000);
	    		}
	    	}
	    });
	});
});

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
	//name validation
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
	
	//title validation
	if (title == "") {
		markAsInvalid("title", "title is required!!!");
		isValid = false;
	} else if(!textRegx.test(title)) {
		markAsInvalid("title", "title is invalid!!!");
		isValid = false;
	} else {
		markAsValid("title");
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
	document.getElementById(id+"-error").innerText = feedback;
}


