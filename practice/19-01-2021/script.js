//19-01-2021

// video - 1. Classes

//ES5

var Person5 = function(name,yearOfBirth,job) {
    this.name = name;
    this.yearOfBirth = yearOfBirth;
    this.job = job;
};

Person5.prototype.calculateAge = function() {
  var age = new Date().getFullYear() - this.yearOfBirth; 
  console.log(age); 
};

var vaibhav5 = new Person5('vaibhav',1998,'developer');
vaibhav5.calculateAge();


//ES6

/*
    -> First implement class then later we can use it
    -> we can not add properties in class
    ->static methods can not call using object of class to call static method we have to use class name

*/
class Person6
{
    constructor(name,yearOfBirth,job) {
        this.name = name;
        this.yearOfBirth = yearOfBirth;
        this.job = job;
    }

    calculateAge()
    {
        let age = new Date().getFullYear() - this.yearOfBirth; 
        console.log(age); 
    }
    static greeting()
    {
        console.log('Good Morning!');
    }
}
const vaibhav6 = new Person6('vaibhav',1998,'developer');

//call static method

Person6.greeting();

// video - 2. Classes with Subclasses

//ES5
var Athelete5 = function(name,yearOfBirth,job,olympicGames,medals) {

    Person5.call(this,name,yearOfBirth,job);
    this.olympicGames = olympicGames;
    this.medals = medals;
    
}

Athelete5.prototype = Object.create(Person5.prototype);

var johnAthelete5 = new Athelete5('john',1990,'swimmer',3,10);


//ES6

class Athelete6 extends Person6
{
    constructor(name,yearOfBirth,job,olympicGames,medals) {
        super(name,yearOfBirth,job);
        this.olympicGames = olympicGames;
        this.medals = medals;
        
    }
}

var johnAthelete6 = new Athelete6('john',1990,'swimmer',3,10);
