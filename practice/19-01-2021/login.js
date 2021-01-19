class User
{
    constructor(uname,password) {
        this.uname = uname;
        this.password = password;
    }
}


document.getElementById('add').addEventListener('click',()=>{
    let data = sessionStorage.getItem('users');
    if (data) 
    {
        data  = new Array(data) ;
    } else {
        data = new Array();
        
    }
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;

    data.push(JSON.stringify(new User(username,password)));
    sessionStorage.setItem('users',data);
    alert("Regiteration Successful!!");
});

document.getElementById('login').addEventListener('click',()=>{

    let username = document.getElementById('lusername').value;
    let password = document.getElementById('lpassword').value;

    let data = `[${sessionStorage.getItem('users')}]`;
    data  = JSON.parse(data);
    let flag = false;
    for (const x of data) {
        flag = false;
        if (x.uname === username && x.password === password) {
            flag = true; 
            break;
        }
        
    }
    if (flag) {
        alert('Logged in');
    }
    else{
        alert('Login Fail');
    }
    
});