//Javascript for non-mobile browsers
//Load the horn
horn = new Audio("../media/rasta.mp3");

//Fire the horn
function playNew(){

	//var rasta = document.getElementById("rasta");

	horn.pause();
	horn.currentTime = 0;
	horn.play();

}

//Spacebar support
window.onkeydown = function(event){
	event = event || window.event;
    	var keycode = event.charCode || event.keyCode;
    	if(keycode === 32){
        	playNew();
    	}	
}

