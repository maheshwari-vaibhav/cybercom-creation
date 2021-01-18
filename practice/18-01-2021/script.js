//18-01-2021

// video - 1. Arrow Functions Basics

//ES55

const years  = [1990, 1975,1998,2005];

var age5 = years.map(function(el)
{
    return 2021 - el;
});

console.log(age5);

//ES6 (arrow function)

// to use arrow function we use '=>' symbol
let age6 = years.map(el => 2021 - el);

console.log(age6);

// to use multiple argument in arrow function we use '()' parantheses
age6 = years.map((el,index) => `Age of Element ${index} : ${2021 - el}`);

console.log(age6);

//to use multiple line function we use '{}' and return statement
age6 = years.map((el,index) => {
    const now = new Date().getFullYear();
    let age = now - el;
    return `Age of Element ${index} : ${age}`;
});

console.log(age6);


// video - 2. Arrow Functions Lexical _this_ Keyword

//ES5
//Here in callback function don't have this keyword of current objeect it points to global
// so we have assign this to variable to use it
var greenBox5 = {
    color:'green',
    position:1,
    clickMe:function()
    {
        var self = this;
        document.querySelector('.green').addEventListener('click',function(){
            var str = 'This is box number '+ self.position + 'and it is '+self.color;
            alert(str);
        });
    }
}

// greenBox5.clickMe();



// ES6

var greenBox6 = {
    color:'green',
    position:1,
    clickMe:function()
    {
        document.querySelector('.green').addEventListener('click',() => {
            var str = 'This is box number '+ this.position + 'and it is '+this.color;
            alert(str);
        });
    }
}

greenBox6.clickMe();



function Person(name) {
    this.name = name;
}

//ES5
Person.prototype.myFriends5 = function(friends) {
        var arr = friends.map(function(el) {
            return this.name+ ' is friend with '+el;
        }.bind(this));
        console.log(arr);
}

var friends  = ['renil','rajan','shraddha'];

new Person('vaibhav').myFriends5(friends);

// ES6

Person.prototype.myFriends6 = function(friends) {
    var arr = friends.map(el => {
        return this.name+ ' is friend with '+el;
    });
    console.log(arr);
}

new Person('vaibhav').myFriends6(friends);


// video - 3. Destructuring


//ES5

var vaibhav = ['vaibhav',23];
var name5 = vaibhav[0];
var age5 = vaibhav[1];


//ES6

const [name,age] = ['vaibhav',23];

console.log(name);
console.log(age);


const obj = {
    firstName : 'vaibhav',
    lastName : 'maheshwari'
};
const {firstName,lastName} = obj;

console.log(firstName);
console.log(lastName);

const {firstName:a,lastName:b} = obj;

console.log(a);
console.log(b);

function calAgeReturiment(year) {
    let age = new Date().getFullYear() - year;
    return [age,65-age]; //return age and reteriment both
}

const [age2, returiment] = calAgeReturiment(1998);

console.log(age2);
console.log(returiment);




