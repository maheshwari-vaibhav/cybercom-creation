
//admin register button method
document.getElementById('register').addEventListener('click',()=>{

    //get the the value from register form 
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    let cpassword = document.getElementById('cpassword').value;
    let city = document.getElementById('city').value;
    let state = document.getElementById('state').value;

    if (name === '' || email === '' || password === '' || cpassword === '' || city === '' || state === '') 
    {
        document.getElementById('registermsg').textContent = "All Fields are required!!!";
    }
    else
    {
        if (password === cpassword) 
        {
            //create admin object
            let adminUser = new Object();
            adminUser.name = name;
            adminUser.email = email;
            adminUser.password = password;
            adminUser.city = city;
            adminUser.state = state;

            localStorage.setItem('adminUser',JSON.stringify(adminUser));
            alert('Admin Register Successfully');
            
        } else {
            document.getElementById('registermsg').textContent = "Password and Confirm Password are not same !!";
        }
    }

});


//check admin register or not method

function checkAdminAvailable() 
{
    let adminUser = localStorage.getItem('adminUser');

    if (adminUser) {
        document.getElementById('registermsg').textContent = "Admin already register!!!";
        document.getElementById('register').disabled = true;
    }
    
}
checkAdminAvailable();


