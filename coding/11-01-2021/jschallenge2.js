function calculateAvg(team) 
{
	var total  = team[0] + team[1] +team[2];
	return total/team.length;
}


var johnScore = [89,120,103]; //john score
var mikeScore = [116,94,123]; //mike score
var mikeAvg,johnAvg;

mikeAvg = calculateAvg(mikeScore); //mike avg
johnAvg = calculateAvg(johnScore) //john avg


if (mikeAvg > johnAvg ) 
{
	console.log('mike avg score is '+mikeAvg+" and mike won the match");
} else if(mikeAvg < johnAvg) {
	console.log('john avg score is '+johnAvg+" and john won the match");

} else {
	console.log('both team\'s average score is same so match is drawn');
}


johnScore = [109,120,103]; //john new score
mikeScore = [126,74,123]; //mike new score


mikeAvg = calculateAvg(mikeScore); //mike new avg
johnAvg = calculateAvg(johnScore) //john new avg 
if (mikeAvg > johnAvg ) 
{
	console.log('mike avg score is '+mikeAvg+" and mike won the match");
} else if(mikeAvg < johnAvg) {
	console.log('john avg score is '+johnAvg+" and john won the match");

} else {
	console.log('both team\'s average score is same so match is drawn');
}

var maryScore = [109,127,110];//mary score
var maryAvg = calculateAvg(maryScore) //mary avg 

if(mikeAvg === johnAvg && johnAvg == maryAvg)
{
	console.log('all team\'s average score is same so match is drawn');
}
else if (mikeAvg > johnAvg && mikeAvg > maryAvg) 
{
	console.log('mike avg score is '+mikeAvg+" and mike won the match");
} else if(johnAvg > maryAvg) {
	console.log('john avg score is '+johnAvg+" and john won the match");

} else {
	console.log('marry avg score is '+maryAvg+" and mary won the match");
}


