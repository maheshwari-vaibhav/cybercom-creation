console.log("vaibhav maheshwari"); // print into console



// video - 5.variable and data types 

var firstName = 'vaibhav'; //String 

console.log(firstName);

var age = 23; // number 

var fullAge = true; //boolean

var job; // undefined



// video - 6.variable mutation and type coercion

console.log(firstName + " " + age); //type coercion

job = "web developer" // variable mutation

alert(firstName + " is "+ age + " years old and he is " + job);


var lastName  = prompt("What is lastname ?"); // get the user input

console.log(firstName + " " + lastName);



// video - 7.basic operator

    //math operator

    var num = 10;
    console.log(num + 2);
    console.log(num - 2);
    console.log(num * 2);
    console.log(num / 2);

    // logical operator

    var agevaibhav = 23;
    var ageRenil = 22;

    var isOlder = ageRenil > agevaibhav;
    console.log(isOlder);

    //typeof operator
    console.log(typeof isOlder);



// video - 8.operator precedence

    var now = 2020;
    var yearVaibhav = 1998;
    var fullAge = 18;

    // multiple operator
    var isFullAge  = now - yearVaibhav >= fullAge;

    console.log(isFullAge);

    // grouping
    var avgerage = (agevaibhav + ageRenil) / 2;

    //multiple assignment

    var num1,num2;

    num1 = num2 = (10 + 5) * 6 -10;
    console.log(num1,num2);


    //more operator

    var x = 10;
    x *= 2;
    console.log(x);
    x++;
    console.log(x);
