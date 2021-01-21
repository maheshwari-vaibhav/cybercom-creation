class Users
{
    constructor(name,email,password,dob) 
    {
        this.name = name;
        this.email = email;
        this.password = password;
        this.dob = dob;
        this.calculateAge();
    }

    calculateAge() 
    {
        this.age =  new Date().getFullYear() - this.dob.substring(0, 4);
        console.log(this.age);
    }
}
let data = [];
document.getElementById('adduser').addEventListener('click',()=>{

    //get the values from html inputs
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    let dob = document.getElementById('dob').value;


    let userdata = JSON.parse(localStorage.getItem('users'));
    if (userdata) {
       data = userdata;
       
    }
   
        data.push(new Users(name,email,password,dob));
    localStorage.setItem('users',JSON.stringify(data));
    setData();

});

setData();
//fetch the data from localstorage and display in table format
function setData() {
    let userdata = JSON.parse(localStorage.getItem('users'));
    let data = '';
    if (userdata) {
        data = '<table class="table" border=1><thead class="thead-dark"><tr><th>Name</th><th>Email</th><th>Password</th><th>Birth date</th><th>Age</th><th>Actions</th></tr></thead>';
        for (const x of userdata) {
            data = `${data} <tr><td>${x.name}</td><td>${x.email}</td><td>${x.password}</td><td>${x.dob}</td><td>${x.age}</td><td><button onclick=deleteUser('${x.email}')>Delete</button></td></tr>`;
        }
        data = `${data} </table>`;
        
    } else 
    {
        data = '<h3>No Record Found!!!</h3>';
    }
    document.getElementById('userdata').innerHTML = data;
}