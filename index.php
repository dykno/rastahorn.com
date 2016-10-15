<?php
	$browser = 'non-mobile';
	if(strpos($_SERVER['HTTP_USER_AGENT'],"iPhone") || strpos($_SERVER['HTTP_USER_AGENT'],"iPad")){
		$browser = 'iphone';
	}
echo '
	<!DOCTYPE HTML>
	<html lang="en-us">
		<head>
	<!--
  _____ _   _ _____   _   ___   ______  _____   ___ ____    ____  _____    _    _     
 |_   _| | | | ____| | | | \ \ / /  _ \| ____| |_ _/ ___|  |  _ \| ____|  / \  | |    
   | | | |_| |  _|   | |_| |\ V /| |_) |  _|    | |\___ \  | |_) |  _|   / _ \ | |    
   | | |  _  | |___  |  _  | | | |  __/| |___   | | ___) | |  _ <| |___ / ___ \| |___ 
  _|_| |_| |_|_____|_|_|_|_| |_| |_|  _|_____|_|___|____/  |_|_\_\_____/_/__ \_\_____|
 |  _ \    / \  / ___|_   _|/ \  | | | |/ _ \|  _ \| \ | | / ___/ _ \|  \/  |         
 | |_) |  / _ \ \___ \ | | / _ \ | |_| | | | | |_) |  \| || |  | | | | |\/| |         
 |  _ <  / ___ \ ___) || |/ ___ \|  _  | |_| |  _ <| |\  || |__| |_| | |  | |         
 |_| \_\/_/   \_\____/ |_/_/   \_\_| |_|\___/|_| \_\_| \_(_)____\___/|_|  |_|         
                                                                                                                  
			-->
			<title>THE OFFICIAL RASTA HORN</title>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<meta name="keywords" content="rasta, horn, rastahorn, rastahorn.com, reagge, womp, hype, party, sound, effects, burlington, vermont, jamaica, wamp, noise, nyc, cant, stop" />
			<meta name="description" content="This is the Official Rastahorn.com.  Home of all your rasta and reggae horn needs.  The hype is real." />
			<!-- Rasta Styles -->
			<link href="css/rasta.css" rel="stylesheet" type="text/css">
			<!-- Rasta Scripts -->
			';
			if($browser == 'iphone'){
				echo '<script type="text/javascript">
					function playNew() {
						zone = document.getElementById("audioElements");
						tag = document.createElement("audio");
						tag.setAttribute("preload","auto")
						tag.setAttribute("autoplay","autoplay")
						tag.setAttribute("src","media/rasta-blast.mp3")
						tag.setAttribute("id","audio")
						zone.appendChild(tag)
						tag.play()

					}';
			} else {
				echo '<script type="text/javascript" src="js/rasta.js"</script>';
					//function playNew() {	
					//	var rasta = document.getElementById("rasta");
					//	rasta.pause();
					//	rasta.currentTime = 0;
					//	rasta.play();
					//}
				}
			echo '
			</script>
			<!-- Google Analytics -->
			<script type="text/javascript">
				var _gaq = _gaq || [];
				_gaq.push(["_setAccount", "UA-35071626-1"]);
				_gaq.push(["_trackPageview"]);

				(function() {
				var ga = document.createElement("script"); ga.type = "text/javascript"; ga.async = true;
				ga.src = ("https:" == document.location.protocol ? "https://" : "http://") + "stats.g.doubleclick.net/dc.js";
				var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ga, s);
				})();
			</script>
		</head>
		<body>
			<div class="container">
				<img src="images/horn.png" alt="BWAAAAMP" onClick="playNew(horn)" />
				<div id="audioElements"></div>
				<div id="notification">
					We\'ve added spacebar support to make your lives that much easier! Tap away at those spaces bars and keep the hype real!
				</div>
				<div id="donate">

					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="ZE6YMG26QNZZY">
					<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="Donate! Keep the hype real!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>

				</div>	
			</div>
		</body>
	</html>
';
?>	
