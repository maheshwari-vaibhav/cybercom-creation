//12-01-2021

// video - 6.Scoping and Scope Chain

var a = "hello";

first();
function first() {
	var b = "hii";

	second();

	function second() {
		var c = "hey";
		third();
	}
}

function third() {
	var d = "John";
	// console.log(a+b+c+d); only access of a and d because  b and c not in the scope 
	console.log(a+d);
}


// video - 8.this keyword in practice


console.log(this);
/*
var vaibhav = {firstName:"vaibhav",yearOfBirth:1998,calculateAge:function()
{
	console.log(this);
	console.log(2021-this.yearOfBirth);

	function innerFunction() {
		console.log(this);
	}
	innerFunction();
}
};

vaibhav.calculateAge();


var renil = {firstName:"renil",yearOfBirth:1998};

renil.calculateAge = vaibhav.calculateAge; // method borowing

renil.calculateAge();


*/

// video - 9.Objects and properties

//object literal
var john = {
	firstName:'john',
	lastName:'smith',
	birthYear:1990,
	family:['mark','jane','emily'],
	job:'teacher',
	isMarried:false
};
console.log(john);

console.log(john.firstName);

john.job = "designer";
console.log(john);



// new Object syntax

var jane = new Object();

jane.firstName = "jane";
jane.lastName = "smith";
jane['birthYear'] = 1985;
console.log(jane);	


// video - 10.Objects and methods


var vaibhav = {
	firstName:"vaibhav",
	yearOfBirth:1998,
	calculateAge:function()
	{
		this.age = 2021-this.yearOfBirth;
	}
};

vaibhav.calculateAge();

console.log(vaibhav);



