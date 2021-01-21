//check user is loged in or not 
let logUser = JSON.parse(localStorage.getItem('userSession'));

if (logUser === null) {
    window.location = 'login.html'; //if user is not login then redirect yo login page
}
//get login user details
document.getElementById('loguser').textContent = `Hello, ${logUser.name}`;


// logout function
function logout() {
    let sessionData = [];

    let localstorageData = JSON.parse(localStorage.getItem('sessionData'));

    if(localstorageData)
    {
        sessionData = localstorageData;
    }

    let userSession = JSON.parse(localStorage.getItem('userSession'));
    userSession.logoutDateTime = new Date().toLocaleString(); //current date time
    sessionData.push(userSession);

    localStorage.setItem('sessionData',JSON.stringify(sessionData)); //set login session data
    localStorage.removeItem('userSession'); // unset session data
    window.location = 'login.html'; // redirect ro login page

}

//get user session data

function loadUserSessionData() {
    let userdata = JSON.parse(localStorage.getItem('sessionData'));
    let data = '';
    if (userdata) {
        data = '<table class="table" border=1><thead class="thead-dark"><tr><th>Name</th><th>Login Date Time</th><th>Logout Date Time</th></tr></thead>';
        for (const x of userdata) {
            data = `${data} <tr><td>${x.name}</td><td>${x.loginDateTime}</td><td>${x.logoutDateTime}</td></tr>`;
        }
        data = `${data} </table>`;
        
    } else 
    {
        data = '<h3>No Record Found!!!</h3>';
    }
    document.getElementById('usersessiondata').innerHTML = data;
}


function checkBirthDate() {
    let userdata = JSON.parse(localStorage.getItem('users'));


    let user = userdata.filter((user) => user.name === logUser.name);

    let date  = Number(user[0].dob.substring(10,8));
    let month = Number(user[0].dob.substring(7,5));
    
    if (date == new Date().getDay() && month == (new Date().getMonth()+1)) 
    {
        document.getElementById('birthdaywish').innerHTML = '<h2 class="error text-center"> Happy Birthday !</h2>';
    }
    
    
}