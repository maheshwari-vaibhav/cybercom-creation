//login button action
document.getElementById('login').addEventListener('click',()=>{
    let email = document.getElementById('lemail').value;
    let password = document.getElementById('lpassword').value;

    if (email === '' || password === '') 
    {
        document.getElementById('loginmsg').textContent = "All Fields are required!!!";
    }
    else
    {
    }
});