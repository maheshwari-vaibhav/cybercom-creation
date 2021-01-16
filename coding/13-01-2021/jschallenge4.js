var john,mark;

john = {
	name:'john',
	mass:70,
	height:1.8,
	calculateBmi :function() {
		return this.mass/(this.height * this.height);
	}
};

mark = {
	name:'mark',
	mass:60,
	height:1.9
};

john.bmi = john.calculateBmi();
mark.calculateBmi = john.calculateBmi;
mark.bmi = mark.calculateBmi();

if (mark.bmi > john.bmi) {
	console.log(mark.name+ " has high bmi " +mark.bmi);
	document.write(mark.name+ " has high bmi " +mark.bmi);

} else if(john.bmi > mark.bmi) {
	console.log(john.name+ " has high bmi " +john.bmi);
	document.write(john.name+ " has high bmi " +john.bmi);

} else {

	console.log("Both have same bmi");
	document.write("Both have same bmi");

}