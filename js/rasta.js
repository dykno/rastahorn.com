//Javascript for non-mobile browsers
//Load the horn
horn = new Audio("../media/rasta.mp3");
gat = new Audio("../media/gat.mp3");

//Fire the horn
function playNew(sound){

	sound.pause();
	sound.currentTime = 0;
	sound.play();

}

//Keyboard support
window.onkeydown = function(event){
	event = event || window.event;
    	var keycode = event.charCode || event.keyCode;
    	//Spacebar triggers Horn
    	if(keycode === 32){
        	playNew(horn);
    	}
    	//G key triggers Gat
    	if(keycode == 71){
    		playNew(gat);
    	}	
}

