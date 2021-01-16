// video - 11. Loops and iteration

//for loop
for (var i = 0; i < 10; i++) {
	console.log(i);
}

var vaibhavDetails = ['vaibhav','maheshwari',1998,'intern at cybercom creation',false];

for (var i = 0; i < vaibhavDetails.length; i++) 
{
	console.log(vaibhavDetails[i]);
}

//while loop

var i = 0;
while(i < vaibhavDetails.length)
{
	console.log(vaibhavDetails[i]);
	i++;
}


//break and continue statement

for (var i = 0; i < vaibhavDetails.length; i++) 
{
	if (typeof vaibhavDetails[i] !== "string") continue;
	console.log(vaibhavDetails[i]);
}


for (var i = 0; i < vaibhavDetails.length; i++) 
{
	if (typeof vaibhavDetails[i] !== "string") break;
	console.log(vaibhavDetails[i]);
}