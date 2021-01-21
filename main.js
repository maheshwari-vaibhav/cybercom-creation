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

// check birthdate function
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

//count user age wise function

function countUserAge() 
{
    let userdata = JSON.parse(localStorage.getItem('users'));

    let less18User = userdata.filter((user) => user.age < 18);
    let userBetween18to50 = userdata.filter((user) => user.age >= 18 && user.age < 50);
    let userGreater50 = userdata.filter((user) => user.age >= 50);

    document.getElementById('less18data').textContent = `${less18User.length} Users`;
    document.getElementById('1850data').textContent = `${userBetween18to50.length} Users` ;
    document.getElementById('greater50data').textContent = `${userGreater50.length} Users`;

    findBirthdayUser();
}

//find birthday users who's birthday is today
function findBirthdayUser() {
    let userdata = JSON.parse(localStorage.getItem('users'));
    let users = userdata.filter((user) => Number(user.dob.substring(10,8)) == new Date().getDay() && Number(user.dob.substring(7,5)) == (new Date().getMonth()+1) );
    let data = '';
    for (const user of users) {
      data = `${data} Today is ${user.name}\'s birthday!<br>`;
    }

    document.getElementById('birthdayusers').innerHTML = data;
}