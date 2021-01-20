class Users
{
    constructor(name,email,password) 
    {
        this.name = name;
        this.email = email;
        this.password = password;
    }
}
let data = [];
document.getElementById('add').addEventListener('click',()=>{

    //get the values from html inputs
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;

    let userdata = JSON.parse(localStorage.getItem('users'));
    if (userdata) {
       data = userdata;
       data.push(new Users(name,email,password));
    }
    else{
        data.push(new Users(name,email,password));
    }
    localStorage.setItem('users',JSON.stringify(data));
    setData();

});
setData();


//delete record from localstorage
function deleteUser(email) {
    const flag = confirm("Are you sure want to delete ?");
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

//fetch the data from localstorage and display in table format
function setData() {
    let userdata = JSON.parse(localStorage.getItem('users'));
    let data = '';
    if (userdata) {
        data = '<table border=1>';
        for (const x of userdata) {
            data = `${data} <tr><td>${x.name}</td><td>${x.email}</td><td><button onclick=deleteUser('${x.email}')>Delete</button></td></tr>`;
        }
        data = `${data} </table>`;
        
    } else 
    {
        data = '<h3>No Record Found!!!</h3>';
    }
    document.getElementById('data').innerHTML = data;
}

