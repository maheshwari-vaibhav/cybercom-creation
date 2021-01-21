//login button action
document.getElementById('login').addEventListener('click',()=>{

    //get the values from login form
    let email = document.getElementById('lemail').value;
    let password = document.getElementById('lpassword').value;

    if (email === '' || password === '') //check field is empty or not
    {
        document.getElementById('loginmsg').textContent = "All Fields are required!!!";
    }
    else
    {
        let adminUser = JSON.parse(localStorage.getItem('adminUser'));
        if (adminUser.email === email && adminUser.password === password) { //for admin user
           window.location = 'dashboard.html'; 

           //set login session to localstorage
           let userSession = {
               name : adminUser.name,
               loginDateTime : new Date().toLocaleString()//current date time
           };
           localStorage.setItem('userSession',JSON.stringify(userSession));
        } 
        else 
        {
            //for sub user
            let userData = JSON.parse(localStorage.getItem('users'));
            let loginflag = false;
            let logUser = {};
            for (const user of userData) {
                loginflag = false;
                if (user.email === email && user.password === password) {
                    loginflag = true; 
                    logUser = user;
                    break;
                }
                
            }

            ///check user is existor not
            if (loginflag) {

                //set login session to localstorage
                let userSession = {
                    name : logUser.name,
                    loginDateTime : new Date().toLocaleString()//current date time
                };
                localStorage.setItem('userSession',JSON.stringify(userSession));
                
                //redirect to subuser.html page
                window.location = 'subuser.html'; 

            }
            else{
                document.getElementById('loginmsg').textContent = "Wrong Email or password !!!";
            }
        }
    }
});