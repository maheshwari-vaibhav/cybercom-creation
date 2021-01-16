//16-01-2021

// video - 1. First Class Functions Functions Returning Functions

// Function Returning a  function

function interviewQuestion(job) {
    if (job === 'designer') { // check job is designer
        return function(name){
            console.log(name + " Please tell me what is UX design?");
        }
    } else if(job === 'teacher') { // check job is teacher
        return function(name){
            console.log(name + " Please tell me what you teach?");
        }
    }
    else{ // for any other job
        return function(name){
            console.log(name + " Please tell me what you do?");
        }
    }
}

var teacherQuestion = interviewQuestion('teacher'); //retuen a function

teacherQuestion('john'); // call teacher question function

var designerQuestion = interviewQuestion('designer'); // return function 

designerQuestion('mark'); // call designer question function

interviewQuestion('developer')('vaibhav'); // first it call interviewQuestion function and it pass vaibhav into returning function

// video - 2. Immediately Invoked Function Expressions (IIFE)

/*
    it is for data protection 
    variable is not accesible out side the function
*/
(function()
{
    var score =  Math.random() * 10 ;
    console.log(score >= 5);
})();

(function(goodLuck)
{
    var score =  Math.random() * 10 ;
    console.log(score >= 5 - goodLuck);
})(5);


// video - 3. Closures

/*
    -> An innner function always has a access to the variables and parameters of its outer
       funtion, even after outer function has returned.

*/



function retirement(retirementAge) 
{
    var a = ' years left to retirement';

    return function(YearOfBirth)
    {
        var age = 2021 -YearOfBirth;
        console.log((retirementAge - age) + a);
    }
}


var usRetirement = retirement(66);
var indiaRetirement = retirement(65);
var germanyRetirement = retirement(67);

usRetirement(1998);
indiaRetirement(1998);
germanyRetirement(1998);


// video - 4. Bind, Call and Apply

var john = {
    name:'john',
    age:23,
    job:'teacher',
    presentation:function(style,timeOfDay)
    {
        if(style === 'formal')
        {
            console.log('Good ' + timeOfDay + ', Ladies and Gentalmen I\'m '+ this.name + ", I\'m a " + this.job + ' and I\'m '+this.age+ ' years old.' );
        }
        else{
            console.log('Hey What\'s up? I\'m '+ this.name + ", I\'m a " + this.job + ' and I\'m '+this.age+ ' years old. have a good '+ timeOfDay );
        }
    }
};

var emily = {
    name:'Emily',
    age:35,
    job:'designer'
};
john.presentation('formal','morning');

// set to this variable 

//call method

john.presentation.call(emily,'formal','morning');

// apply method

john.presentation.apply(emily,['formal','morning']); // it accept only two argument first this variable and seccond array of argumnets

var johnFormal = john.presentation.bind(john,'formal');
johnFormal('morning');



var years = [1998, 1999, 2000, 2004,1972]; // array of birth years 

//generic function
function arrayCal(arr,fn) 
{
	var arrRes = [];
	for (let i = 0; i < arr.length; i++) {
		arrRes.push(fn(arr[i]));
	}

	return arrRes;
}

// calculate age function
function calculateAge(el) {
	return 2021 - el;
}

function isFullAge(limit, el) 
{
	return el >= limit;
}

var ages  = arrayCal(years,calculateAge);

var fullJapan  =  arrayCal(ages,isFullAge.bind(this,20));

console.log(ages);
console.log(fullJapan);