var markMass,johnMass,markHeight,johnHeight,markBmi,johnBmi;

markMass = 60; //80kg
johnMass = 70; //70kg

markHeight = 1.9 //1.6 meter
johnHeight = 1.8 //1.8 meter

markBmi = markMass / (markHeight * markHeight);
johnBmi = johnMass / (johnHeight * johnHeight);

console.log (markBmi,johnBmi);

var isHigher = markBmi > johnBmi;

console.log("Is Mark's BMI is higher than John's ? " + isHigher)
