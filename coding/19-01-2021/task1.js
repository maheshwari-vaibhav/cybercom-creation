const vaibhav = {
    name : 'vaibhav',
    age : 23,
    dob : '13/09/1998',
    job : 'developer'
};

// using method of Object
console.log(Object.keys(vaibhav));

//Using for in loop
for (const key in vaibhav) {
    console.log(key);
}