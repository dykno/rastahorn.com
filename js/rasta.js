//Javascript for non-mobile browsers
//Load the horn
horn = new Audio("../media/rasta.mp3");
gat = new Audio("../media/gat.mp3");
td4w = new Audio("../media/td4w.mp3");

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
	//Spacebar Horn
    	if(keycode == 32){
        	playNew(horn);
    	}
    	//G key triggers Gat
    	if(keycode == 71){
    		playNew(gat);
    	}
        //T key triggers TD4W
        if (keycode == 84){
            playNew(td4w);
        }	
}

