//Javascript for non-mobile browsers
horn = new Audio("../media/rasta.mp3");
td4w = new Audio("../media/td4w.mp3");

function playNew(sound){

	//var rasta = document.getElementById("rasta");

	sound.pause();
	sound.currentTime = 0;
	sound.play();

}
