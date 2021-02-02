// Form 1 submit function
function validateForm1() {
    let name = document.getElementById('name').value;
    let password = document.getElementById('password').value;
    let address = document.getElementById('address').value;
    let age = document.getElementById('age').value;
    let hockey = document.getElementById('hockey').checked;
    let football = document.getElementById('football').checked;
    let volleyball = document.getElementById('volleyball').checked;
    let cricket = document.getElementById('cricket').checked;
    let badminton = document.getElementById('badminton').checked;
    let male = document.getElementById('male').checked;
    let female = document.getElementById('female').checked;
    let file = document.getElementById('file').value;

    let flag = true;
    if(!checkName(name)) {
        flag = false;
    }

    if(!checkPassword(password)) {
        flag = false;
    }

    if(address == '') {
        document.getElementById('addresserror').textContent = 'Address is required';
        flag = false;
    }

    if(!hockey && !football && !volleyball && !cricket && ! badminton) {
        document.getElementById('gameerror').textContent = 'Please select atleast one game!';
        flag = false;
    }

    if(!male && !female) {
        document.getElementById('gendererror').textContent = 'Gender is required';
        flag = false;
    }

    if(age == '') {
        document.getElementById('ageerror').textContent = 'Age is required';
        flag = false;
    }
    if(file == '') {
        document.getElementById('fileerror').textContent = 'File is required';
        flag = false;
    }
    

    return flag;
}

// Form 2 submit function
function validateForm2() {
    let name = document.getElementById('name').value;
    let password = document.getElementById('password').value;
    let address = document.getElementById('address').value;
    let date = document.getElementById('date').value;
    let month = document.getElementById('month').value;
    let year = document.getElementById('year').value;
    let hockey = document.getElementById('hockey').checked;
    let football = document.getElementById('football').checked;
    let volleyball = document.getElementById('volleyball').checked;
    let cricket = document.getElementById('cricket').checked;
    let male = document.getElementById('male').checked;
    let female = document.getElementById('female').checked;
    let married = document.getElementById('married').checked;
    let unmarried = document.getElementById('unmarried').checked;
    let condition = document.getElementById('condition').checked;

    let flag = true;
    if(!checkName(name)) {
        flag = false;
    }

    if(!checkPassword(password)) {
        flag = false;
    }

    if(address == '') {
        document.getElementById('addresserror').textContent = 'Address is required';
        flag = false;
    }

    if(date == '' && month == '' && year == '') {
        document.getElementById('doberror').textContent = 'D.O.B is required';
        flag = false;
    }

    if(!hockey && !football && !volleyball && !cricket) {
        document.getElementById('gameerror').textContent = 'Please select atleast one game!';
        flag = false;
    }

    if(!male && !female) {
        document.getElementById('gendererror').textContent = 'Gender is required';
        flag = false;
    }

    if(!married && !unmarried) {
        document.getElementById('mstatuserror').textContent = 'Marital Status is required';
        flag = false;
    }

    if (!condition) {
        document.getElementById('conditionerror').textContent = 'Please accept agreement!';
        flag = false;
    }

    return flag;
}


// Form 3 submit function
function validateForm3() {
    let fname = document.getElementById('fname').value;
    let lname = document.getElementById('lname').value;
    let password = document.getElementById('password').value;
    let cpassword = document.getElementById('cpassword').value;
    let date = document.getElementById('date').value;
    let month = document.getElementById('month').value;
    let year = document.getElementById('year').value;
    let male = document.getElementById('male').checked;
    let female = document.getElementById('female').checked;
    let country = document.getElementById('country').value;
    let email = document.getElementById('email').value;
    let phone = document.getElementById('phone').value;
    let condition = document.getElementById('condition').checked;

    let flag = true;
    if(!checkName(fname)) {
        flag = false;
    }
    if(!checkLName(lname)) {
        flag = false;
    }

    if(!checkPassword(password)) {
        flag = false;
    }

    if(!checkPhone(phone)) {
        flag = false;
    }

    if(!checkEmail(email)) {
        flag = false;
    }

    if(date == '' && month == '' && year == '') {
        document.getElementById('doberror').textContent = 'D.O.B is required';
        flag = false;
    }

    if(!male && !female) {
        document.getElementById('gendererror').textContent = 'Gender is required';
        flag = false;
    }

    if (country == '') {
        document.getElementById('countryerror').textContent = 'Country is required';
        flag = false;
    }

    if (cpassword == '') {
        document.getElementById('cpassworderror').textContent = 'Confirm Password is required';
        flag = false;
    } else {
        if (cpassword != password) {
            document.getElementById('cpassworderror').textContent = 'Password and Confirm Password Should Match';
            flag = false;
        }
    }

    if (!condition) {
        document.getElementById('conditionerror').textContent = 'Please accept agreement!';
        flag = false;
    }

    return flag;
}

// Form 4 submit function
function validateForm4() {
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let subject = document.getElementById('subject').value;
    let message = document.getElementById('message').value;
    let flag = true;

    if(!checkName(name)) {
        flag = false;
    }

    if(!checkEmail(email)) {
        flag = false;
    }

    if (subject == '') {
        document.getElementById('subjecterror').textContent = 'Subject is required';
        flag = false;
    }

    if (message == '') {
        document.getElementById('messageerror').textContent = 'Message is required';
        flag = false;
    }

    return flag;

}


// Form 5 submit function
function validateForm5() {
   
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    
    let flag = true;

    if(!checkEmail(email)) {
        flag = false;
    }

    if (password == '') {
        document.getElementById('passworderror').textContent = 'Password is required';
        flag = false;
    }

    return flag;

}

function checkName(data) 
{
    if(data == '') {
        document.getElementById('nameerror').textContent = 'Name is reruired';
        return false;
    } else {
        if(!/^[A-z ]+$/.test(data)) {
            document.getElementById('nameerror').textContent = 'Name is not valid';
            return false;
        } else {
            document.getElementById('nameerror').textContent = '';
            return true;
        }
    }
}

function checkLName(data) 
{
    if(data == '') {
        document.getElementById('lnameerror').textContent = 'Last Name is reruired';
        return false;
    } else {
        if(!/^[A-z ]+$/.test(data)) {
            document.getElementById('lnameerror').textContent = 'Last Name is not valid';
            return false;
        } else {
            document.getElementById('lnameerror').textContent = '';
            return true;
        }
    }
}
function checkPassword(data) {
    if(data == '') {
        document.getElementById('passworderror').textContent = 'Password is reruired';
        return false;
    } else {
        if(!/^[A-Za-z0-9]\w{7,14}$/.test(data)) {
            document.getElementById('passworderror').textContent = 'Password must between 8 and 14 character';
            return false;
        } else {
            document.getElementById('passworderror').textContent = '';
            return true;
        }
    }
}

function checkPhone(data) {
    if(data == '') {
        document.getElementById('phoneerror').textContent = 'Phone is reruired';
        return false;
    } else {
        if(!/^[1-9]{1}[0-9]{9}$/.test(data)) {
            document.getElementById('phoneerror').textContent = 'Please Enter valid phone number';
            return false;
        } else {
            document.getElementById('phoneerror').textContent = '';
            return true;
        }
    }
}


function checkEmail(data) {
    if(data == '') {
        document.getElementById('emailerror').textContent = 'Email address is reruired';
        return false;
    } else {
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        if(!reg.test(data)) {
            document.getElementById('emailerror').textContent = 'Please Enter valid email address';
            return false;
        } else {
            document.getElementById('emailerror').textContent = '';
            return true;
        }
    }
}