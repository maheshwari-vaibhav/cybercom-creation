let name,email,dob,data=[];
document.getElementById('submit').addEventListener('click',() =>{
    name = document.getElementById('name').value;
    email = document.getElementById('email').value;
    dob = document.getElementById('dob').value;
    
    var dataObj = {
        name : name,
        email : email,
        dob : dob
    };
    data.push(dataObj);
    sessionStorage.setItem('data',JSON.stringify(data));

} );