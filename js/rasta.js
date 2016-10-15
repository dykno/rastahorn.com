//Javascript for non-mobile browsers
//Load the horn
horn = new Audio("../media/rasta.mp3");
gat = new Audio("../media/gat.mp3");

//Fire the horn
function playNew(sound){

	//var rasta = document.getElementById("rasta");

	sound.pause();
	sound.currentTime = 0;
	sound.play();

}

//Keyboard support
window.onkeydown = function(event){
	event = event || window.event;
    	var keycode = event.charCode || event.keyCode;
	//Spacebar Horn
    	if(keycode == 32){
        	playNew(horn);
    	}
	//G key gat
	if(keycode == 71){
		playNew(gat);
	}	
}

