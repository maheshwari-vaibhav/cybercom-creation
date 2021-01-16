//11-01-2021

// video - 1.If else statements

 var num1 = 10;
 var num2 = 20;

 if (num1 === num2) //=== is compare both value and its type
 {
 	console.log("Both numbers are same.");
 } else {
 	console.log("Both numbers are different.");
 }

 if (num1 > num2) {
 	console.log(num1 + " is larger than "+num2);
 } else {
 	console.log(num2 + " is larger than "+num1);
 }



// video - 2.Boolean Logic

/*
	******boolean logic for and******

		true && true = true
		true && false = false
		false && true = false
		false && false = false


	******boolean logic for or******

		true || true = true
		true || false = true
		false || true = true
		false || false = false

*/

var ageVaibhav,ageRenil,ageRavi;
ageVaibhav = 23;
ageRavi = 21;
ageRenil = 22;


if (ageVaibhav > ageRenil && ageVaibhav > ageRavi) 
{
	console.log("Vaibhav is older");
} 
else if(ageRenil > ageRavi) 
{
	console.log("Renil is older");
}
else {
	console.log("Ravi is older");
}


// video - 3.The ternary operator and switch statement

//ternary operator

num1 = 15;
num2 = 22;

num1 > num2 ? console.log(num1 + " is larger than "+num2):console.log(num2 + " is larger than "+num1);


//switch statement 



switch(true)
{
	case ageVaibhav > ageRenil && ageVaibhav > ageRavi:
		console.log("Vaibhav is older");
		break;
	case ageRenil > ageRavi:
		console.log("Renil is older");
		break;
	default:
		console.log("Ravi is older");
}


// video - 4. Truthy and Falsy Values and Equality Operators

// falsy values : undefiened,null,0,'',NaN


var height;

if (height) {
	console.log("Height is defined");
} else {
	console.log("Height is not defined");
}


/*Equality Operators

	=== : compare both value and datatype (strict comparison)
	==	: compare only value 
*/


height = 186;

if (height == "186") {
		console.log("Height is equl");
}
else
{
		console.log("Height is not equl");
}
// output eqal

if (height === "186") {
		console.log("Height is equl");
}
else
{
		console.log("Height is not equl");
}

// output not eqal


// video - 5.Functions 
 function calculateAge(birthYear) 
 {
 	return 2020 - birthYear;
 }

 var age = calculateAge(1998);
 console.log(age);



// video - 6.Function statements and Expression

// function expression

var jobDetails = function(job,firstName)
{
	switch(job)
	{
		case 'teacher':
			return firstName+" teach coding";
		case 'driver':
			return firstName+" drives car";
		case 'designer':
			return firstName+" design websites";	
		default:
			return firstName+" do somthing else";		
	}
}


console.log(jobDetails('teacher','john'));


// video - 7.Arrays

//initialize new array
var names = ['vaibhav','renil','ravi'];

var ages = new Array(1998,1998,1999); 

console.log(names[0]);

console.log(names.length);


// mute array data

names[2] = 'rajan';
names[names.length] = 'shraddha';

console.log(names);


// differnet data types in single array

var vaibhavDetails = ['vaibhav','maheshwari',1998,'intern at cybercom creation',false];
console.log(vaibhavDetails);

vaibhavDetails.push("black"); //append end of array
vaibhavDetails.unshift("Mr."); //append begining of the array

console.log(vaibhavDetails);

vaibhavDetails.pop();//remove last value from array
vaibhavDetails.shift();//remove first value from array 
console.log(vaibhavDetails);



console.log(vaibhavDetails.indexOf("vaibhav")); //return index of "vaibhav"
console.log(vaibhavDetails.indexOf("cybercom")); //return -1 because cybercom is not present in array




 