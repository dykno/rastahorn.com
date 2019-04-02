//Javascript for non-mobile browsers
//Load the horn
horn = new Audio("../media/rasta.mp3");
gat = new Audio("../media/gat.mp3");
td4w = new Audio("../media/td4w.mp3");
dewae = new Audio("../media/dewae.mp3");
notdewae = new Audio("../media/notdewae.mp3");
heynow = new Audio("../media/heynow.mp3");
yas = new Audio("../media/yas.mp3");
pir = new Audio("../media/pir.mp3");
alert = new Audio("../media/alert.mp3");

//Fire the horn
function playNew(sound){

	sound.pause();
	sound.currentTime = 0;
	sound.play();

}

//Obnoxiously overlap the sound to find De Wae
function playOverlap(sound){
    sound.play();
    overlapSound = sound.cloneNode();
    overlapSound.play();
}

//Keyboard support
window.onkeydown = function(event){
	event = event || window.event;
    	var keycode = event.charCode || event.keyCode;
	   //Spacebar Horn
    	if(keycode == 32){
        	playNew(horn);
    	}
        //A key triggers Alert
        if (keycode == 65){
            playNew(alert);
        }
    	//G key triggers Gat
    	if (keycode == 71){
    		playNew(gat);
    	}
        //T key triggers TD4W
        if (keycode == 84){
            playNew(td4w);
        }
        //D key triggers De Wae
        if (keycode == 68){
            playOverlap(dewae);
        }
        //N key does not know De Wae
        if (keycode == 78){
            playOverlap(notdewae);
        }
        //H key does Hey Now
        if (keycode == 72){
            playNew(heynow);
        }
        //Y key does Yas
        if (keycode == 89){
            playNew(yas)
        }
	//F key does Pir
	if (keycode == 70){
	    playNew(pir)
        }
}

