var gameboard = document.getElementById("gameboard");
var playButton = document.getElementById("play");

const array8 = [
{image:"./images/0.png"}, 
{image:"./images/1.png"}, 
{image:"./images/2.png"}, 
{image:"./images/3.png"}, 
{image:"./images/4.png"}, 
{image:"./images/5.png"}, 
{image:"./images/6.png"}, 
{image:"./images/7.png"}
];

const array10 = [
{image:"./images/0.png"}, 
{image:"./images/1.png"}, 
{image:"./images/2.png"}, 
{image:"./images/3.png"}, 
{image:"./images/4.png"}, 
{image:"./images/5.png"}, 
{image:"./images/6.png"}, 
{image:"./images/7.png"}, 
{image:"./images/8.png"}, 
{image:"./images/9.png"}
];

const array12 = [
{image:"./images/0.png"}, 
{image:"./images/1.png"}, 
{image:"./images/2.png"}, 
{image:"./images/3.png"}, 
{image:"./images/4.png"}, 
{image:"./images/5.png"}, 
{image:"./images/6.png"}, 
{image:"./images/7.png"}, 
{image:"./images/8.png"}, 
{image:"./images/9.png"}, 
{image:"./images/10.png"}, 
{image:"./images/11.png"}
];
var time, maxCards;
var isFlipped = false;
let firstCard, secondCard;
var intervals, cardCount = 0;
/*
Function that runs when the game is started.
*/
function startGame(difficulty){
	playButton.setAttribute("class", "Gone")

	if (difficulty == "easy") {
		maxCards = 16;
		time = 120;
		var interval = 3000;
		var gameArray = array8.concat(array8);
		shuffleCards(gameArray);
		createCards(gameArray, difficulty);
	}
	else if(difficulty == "medium"){
		maxCards = 20;
		time = 150;
		var interval = 5000;
		var gameArray = array10.concat(array10);
		shuffleCards(gameArray);
		createCards(gameArray, difficulty);
	}
	else{
		maxCards = 24;
		time = 180;
		var interval = 8000;
		var gameArray = array12.concat(array12);
		shuffleCards(gameArray);
		createCards(gameArray, difficulty);
	}

	
	
	showCards(interval);

	timer();

	const cards = document.querySelectorAll(".cards");
	cards.forEach(cardFlipped => cardFlipped.addEventListener("click", flipCard));
	
}

/*
Function to shuffle the cards around inside of the array.
*/
function shuffleCards(array){
	for (var i = 0; i < array.length; i++) {
		let randomIndex = Math.floor(Math.random()*array.length);
		let temp = array[i];
		array[i] = array[randomIndex];
		array[randomIndex] = temp;
	}
}

/*
Function to show the cards for a given amount of time in the very beginning.
*/
function showCards(interval){
	const cards = document.querySelectorAll(".cards");
	cards.forEach(cardFlipped => cardFlipped.classList.add("flip"));
	setTimeout(function(){cards.forEach(cardFlipped => cardFlipped.classList.remove("flip"));}, interval);
	clearTimeout();

}

/*
Function to reset the game by reloading the page.
*/
function resetGame(){
	window.location = window.location;
}

/*
Function to create the necessary amount of cards inside of the gameboard.
*/
function createCards(array, difficulty){
	// console.log("createCards");
	for (var i = 0; i < array.length; i++) {
		console.log(array.length);
		let divs = document.createElement("div");
		divs.setAttribute("class", "cards");
		gameboard.appendChild(divs);

		let front_Img = document.createElement("img");
		front_Img.setAttribute("src", array[i].image);
		front_Img.setAttribute("alt", i);
		front_Img.setAttribute("class", "front");
		divs.appendChild(front_Img);
		console.log(front_Img);

		let back_Img = document.createElement("img");
		back_Img.setAttribute("src", "images/back.jpg");
		back_Img.setAttribute("class", "back");
		divs.appendChild(back_Img);
		if (difficulty == "easy") {
			divs.classList.add("easy");
		}
		else if(difficulty == "medium"){
			divs.classList.add("medium");
		}
		else{
			divs.classList.add("hard");
		}
	}
}


/*
Function to flip the cards by assigning the class flip to the div class cards.
*/
function flipCard() {
	this.classList.add("flip");

	if (firstCard === this) {
		return;
	}

	if (isFlipped == false) {
		isFlipped = true;
		firstCard = this;
		console.log(firstCard);
		return;
	}

	secondCard = this;
	checkMatch();
	firstCard = '';
	secondCard = '';
	isFlipped = false;
	return;
}


function checkMatch(){
	document.body.style.pointerEvents = "none";
	let first = firstCard;
	let second = secondCard;
	if ( (firstCard.getElementsByTagName("img")[0].src) === (secondCard.getElementsByTagName("img")[0].src)) {
		setTimeout(() =>{
			first.classList.add("match");
			second.classList.add("match");
			document.body.style.pointerEvents = "auto";
			cardCount += 2;
			if (cardCount == maxCards) {
				var win = document.getElementById("winner");
				win.classList.add("win");
				clearInterval(intervals);
			}
		}, 1000);
		
	}
	else{
		var flippedCards = document.querySelectorAll(".flip");
		setTimeout(function(){
			flippedCards.forEach(cardFlipped => cardFlipped.classList.remove("flip"));
			document.body.style.pointerEvents = "auto";}, 1000);
	}

}

function timer(){
	intervals = setInterval(function(){
		document.querySelector("h1").innerHTML = "Seconds Remaining: " + (--time);
		if(time < 0){
			document.getElementById("gameboard").style.pointerEvents = "none";
			document.querySelector("h1").innerHTML = "";
			var win = document.getElementById("winner");
			win.classList.add("win");
			clearInterval(intervals);
		}
	}, 1000);
}
