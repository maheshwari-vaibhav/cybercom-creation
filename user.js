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

//add user button
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
            data = `${data} <tr><td>${x.name}</td><td>${x.email}</td><td>${x.password}</td><td>${x.dob}</td><td>${x.age}</td><td><button class="btn btn-sm btn-danger mr-2" onclick=deleteUser('${x.email}')>Delete</button><button class="btn btn-sm btn-warning" onclick=fetchUser('${x.email}')>Update</button></td></tr>`;
        }
        data = `${data} </table>`;
        
    } else 
    {
        data = '<h3>No Record Found!!!</h3>';
    }
    document.getElementById('userdata').innerHTML = data;
}


//delete user from localstorage
function deleteUser(email) {
    const flag = confirm("Are you sure want to delete ?"); //Ask for Confirmation
    if (flag) {
        data = data.filter((user) => user.email !== email);
        if (data.length === 0) {
            localStorage.removeItem('users'); //if there is no record then remove localstorage variable
        }
        else
        {
            localStorage.setItem('users',JSON.stringify(data));
        }
    
        setData();
    }
}

//fetch user 
function fetchUser(email) {

    //fetch userdata from local storage
    let userdata = JSON.parse(localStorage.getItem('users'));
    data = userdata;
    //filterdata
    let updatedata = data.filter((user) => user.email === email);
    
    //set the value in form
    document.getElementById('name').value = updatedata[0].name;
    document.getElementById('email').value = updatedata[0].email;
    document.getElementById('password').value = updatedata[0].password;
    document.getElementById('dob').value = updatedata[0].dob;
    document.getElementById('oemail').value = updatedata[0].email;

    //hide show button
    document.getElementById('adduser').classList.add('d-none');
    document.getElementById('updateuser').classList.remove('d-none');

}

//update user button
document.getElementById('updateuser').addEventListener('click',()=>{

    //get the values from html inputs
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let oemail = document.getElementById('oemail').value;
    let password = document.getElementById('password').value;
    let dob = document.getElementById('dob').value;


    let userdata = JSON.parse(localStorage.getItem('users'));
    if (userdata) {
       data = userdata;
       
    }
    let userindex = data.findIndex(user => user.email === oemail);
    data[userindex] = new Users(name,email,password,dob);
    localStorage.setItem('users',JSON.stringify(data));
    window.location.reload();

});