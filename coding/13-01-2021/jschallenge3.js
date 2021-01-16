var bills,tips,finalAmount;

bills = [124,48,268]; // all bills
tips = []; //all tips
finalAmount = []; //all final amount

for (var i = 0; i < bills.length; i++) 
{
	var tip = calculateTip(bills[i]); // calculate tip
	tips.push(tip); //push to tip array
	finalAmount.push(bills[i] + tip); //push to final amount array
}

document.write("Tips: "+tips);
document.write("<br>Final Amount: "+finalAmount);

// tip calulation function
function calculateTip(billAmount) 
{
	var tip = 0;
	if (billAmount < 50) // bill amount less than 50
	{
		tip = billAmount * 0.2; // 20% of bill amount
	}
	else if(billAmount >=50 && billAmount <=200) // bill amount between 50 and 200
	{ 
		tip = billAmount * 0.15; // 15% of bill amount
	}
	else // bill amount grater than 200
	{
		tip = billAmount * 0.1; // 10% of bill amount
	}

	return tip;
}