// video - 6. What_s new in ES6  ES2015

/*
            what new in ES6
    -> variable declaration with let and const
    -> block and IIFES
    -> string
    -> arrow function
    -> destructuring
    -> arrays
    -> spread operator
    -> rest and default parameter
    -> mapes
    -> classes and subclasses
*/

// video - 7. Variable Declarations with let and const


/*
    var's scope is function
    let's scope is block
    const can't mutable
    you can not use let varible without declare it through an error

*/
//ES5

var name5  = 'john smith';
var age5 = 26;
name5 = 'john miller';
console.log(name5);

//ES6

const name6 = 'john smith';
let age6 = 26;
// name6 = 'john miller'; //we can not use this because we can not change const value 
console.log(name6);


//ES5

function driverLicences5(isPassed) {
    if (isPassed) {
        var fname = 'john smith';
        var yearOfBirth  = 1990;

        console.log(fname + ' is successfully passed driving test');
    }
    
}

driverLicences5(true);


//ES6
function driverLicences6(isPassed) {
    if (isPassed) {
        let fname = 'john smith';
        let yearOfBirth  = 1990;

        console.log(fname + ' is successfully passed driving test');
    }
    //  console.log(fname + ' is successfully passed driving test'); //we can not use this because fname is not accesible out side the block .
    
}

driverLicences6(true);



// video - 8. Blocks and IIFEs

/*
    to define block in es6 we can use {}.
    
*/


// video - 9. Strings in ES6  ES2015

let firstname = 'john';
let lastName = 'smith';
const yearOfBirth = 1990;


function calAge(year) {
    return 2021 - year;
}


//ES5

console.log('This is '+ firstname +' '+ lastName + '. He is born in ' + yearOfBirth + '. Today, He is ' + calAge(yearOfBirth) + ' years old.');


//ES6 template literal

console.log(`This is ${firstname} ${lastName}. He is born in ${yearOfBirth}. Today, he is ${calAge(yearOfBirth)} years old.`);


let n = `${firstname} ${lastName}`;
console.log(n.startsWith('j'));
console.log(n.endsWith('j'));
console.log(n.includes('mi'));

