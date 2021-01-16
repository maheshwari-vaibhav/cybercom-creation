//13-01-2021

var scores, roundScore,activePlayer,isPlaying;

scores = [0, 0];
roundScore = 0;
activePlayer = 0;
isPlaying = true;

// document.querySelector('#current-'+activePlayer).textContent = dice; // assign text to dom element
document.querySelector('.dice').style.display = 'none'; //set style of dom element

// roll dice button
document.querySelector('.btn-roll').addEventListener('click',function() {
	if (isPlaying) // check whether winner is decided or not
	{
		// 1. Random number
		var dice = Math.floor(Math.random()*6)+1;
		//2. Display result
		 var diceDom = document.querySelector('.dice');
		 diceDom.style.display = 'block';
		 diceDom.src = "dice-" + dice + ".png";
		//3. Update Current Score
		if (dice !== 1) {
			roundScore = roundScore + dice; //sum of current score
			document.querySelector('#current-'+activePlayer).textContent = roundScore; //display to dom element
		} else {
			roundScore = 0;
			changeActivePlayer(); //change player function call
		}
	}
	else
	{
		alert("Game already completed please click new game!!");
	}
});


// hold button
document.querySelector('.btn-hold').addEventListener('click',function() 
{
	scores [activePlayer] += roundScore;
	document.querySelector('#score-'+activePlayer).textContent = scores [activePlayer];
	roundScore = 0;

	if (scores [activePlayer] >= 100) {
		isPlaying = false;
		document.getElementById('name-'+activePlayer).textContent = "Winner!";
		document.querySelector('.player-'+activePlayer+'-panel').classList.remove("active"); // remove active class from old player
		document.querySelector('.player-'+activePlayer+'-panel').classList.add("winner"); // add winner class 
	} else {
		changeActivePlayer();
	}
	
});


// new game button
document.querySelector('.btn-new').addEventListener('click',function() 
{
	isPlaying = true;
	document.getElementById('name-'+activePlayer).textContent = "player "+ (activePlayer + 1);
	document.querySelector('.player-'+activePlayer+'-panel').classList.remove("active"); // remove active class from old player
	document.querySelector('.player-'+activePlayer+'-panel').classList.remove("winner"); // remove winner class from old player

	document.querySelector('#score-0').textContent = 0
	document.querySelector('#score-1').textContent = 0
	document.querySelector('#current-0').textContent = 0
	document.querySelector('#current-1').textContent = 0
	scores = [0, 0];
	roundScore = 0;
	activePlayer = 0;
	document.querySelector('.player-'+activePlayer+'-panel').classList.add("active"); // add active class fto new player
});


// change active player function
function changeActivePlayer() 
{
	document.querySelector('.player-'+activePlayer+'-panel').classList.remove("active"); // remove active class from old player
	document.querySelector('#current-'+activePlayer).textContent = 0;
	activePlayer = activePlayer === 1 ? 0 : 1; //change active player
	document.querySelector('.player-'+activePlayer+'-panel').classList.add("active"); // add active class to new player
}