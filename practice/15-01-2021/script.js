//15-01-2021

/*
*********************************************************************************

	primitive : number, string, boolean, undefined, null
	non-primitive (object) : array, function, objects, dates, wrappers for all primitive

	object oriented programmning :
		-> object interacting with each other through methods and properties
		-> used to store data, structure application into modules and keeping code clean

	constructor :
		-> is a blueprint to create instances (objects)

	-> Every javascript object has a prototype property which make inheritance possible in javascript.
	-> Prototype property of an object is where we put methods and properties that we want other object to inherit.
	-> The constructors prototype property is not the prototype of the constructor itself, it is the prototype of the all instances that are created through it.
	-> When a certain method (or property) is called, the search starts in the object itself, and if it cannot be found, the search moves on to the object's prototype. This continues until the method is found: prototype chain.


*********************************************************************************
*/


// video - 3. Creating Objects Function Constructors

var Person  = function (name,yearOfBirth,job) {
	this.name = name;
	this.yearOfBirth = yearOfBirth;
	this.job = job;
}

// add function to prototype
Person.prototype.calculateAge = function () {
	console.log(2021 - this.yearOfBirth);
}

//add property to prototype
Person.prototype.lastName = 'smith';
var john = new Person('john',1990,'designer');
var jane = new Person('jane',1975,'teacher');
var mark = new Person('mark',1948,'retired');


john.calculateAge();
jane.calculateAge();
mark.calculateAge();

console.log(jane.lastName);

// video - 4. The Prototype Chain in the Console


console.log(john.hasOwnProperty('name'));
console.log(john instanceof Person);

// video - 5. Creating Objects Object.create

//object.create

var personProto = {
	calculateAge:function () {
		console.log(2021 - this.yearOfBirth);
	}
};

var vaibhav = Object.create(personProto);

vaibhav.name = 'vaibhav';
vaibhav.yearOfBirth = 1998;
vaibhav.job = 'developer';

console.log(vaibhav);

var renil = Object.create(personProto,{
	name:{value : 'renil'},
	yearOfBirth:{value : 1998},
	job:{value : 'developer'}
});

console.log(renil);


// video - 6. Primitives vs. Objects

// primitives

var a = 20;
var b = a;
a= 32;
console.log(a);
console.log(b);

//objects

var obj1 = {
	name:'vaibhav',
	age: 24
};

var obj2  = obj1;

obj1.name = "vm";

console.log(obj1);
console.log(obj2);

//functions
var x = 25;
var obj = {
	name:'vaibhav',
	age: 24
};

function change(a,b) {
	a = 30;
	b.name = "vm" 
}

change(x,obj);

console.log(x);
console.log(obj);

// video - 7. First Class Functions Passing Functions as Arguments
/*
	-> function is a instance of object type
	-> function behaves like any other object
	-> we can sttore function in a varible 
	-> we can pass function as an argument in another function
	-> we can return function from another function
	-> 
*/

//passing function as an argument


var years = [1998, 1999, 2000, 2004,1972];

function arrayCal(arr,fn) 
{
	var arrRes = [];
	for (let i = 0; i < arr.length; i++) {
		arrRes.push(fn(arr[i]));
	}

	return arrRes;
}

function calculateAge(el) {
	return 2021 - el;
}

function isFullAge(el) 
{
	return el >= 18;
}

function maxHeartRate(el) 
{
	if(el >= 18 && el <= 81)
	{
		return Math.round(206.09 -(0.67 * el));
	}
	else{
		return - 1;
	}
}
var ages = arrayCal(years,calculateAge);
var fullAges = arrayCal(ages,isFullAge);
var maxRate = arrayCal(ages,maxHeartRate);



console.log(ages);
console.log(fullAges);
console.log(maxRate);

