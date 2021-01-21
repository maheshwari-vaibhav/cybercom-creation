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
        let adminUser = JSON.parse(localStorage.getItem('adminUser'));
        if (adminUser.email === email && adminUser.password === password) {
           window.location = 'dashboard.html'; 

           let userSession = {
               name : adminUser.name,
               loginDateTime : new Date().toLocaleString()//current date time
           };
           localStorage.setItem('userSession',JSON.stringify(userSession));
        } 
        else 
        {
        
        }
    }
});