
//get login user details
document.getElementById('loguser').textContent = `Hello, ${JSON.parse(localStorage.getItem('userSession')).name}`;



function logout() {
    let sessionData = [];

    let localstorageData = JSON.parse(localStorage.getItem('sessionData'));

    if(localstorageData)
    {
        sessionData = localStorage;
    }

    let userSession = JSON.parse(localStorage.getItem('userSession'));
    userSession.logoutDateTime = new Date().toLocaleString(); //current date time
    sessionData.push(userSession);

    localStorage.setItem('sessionData',JSON.stringify(sessionData));
    localStorage.removeItem('userSession');
    window.location = 'login.html';


}