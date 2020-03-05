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
					</script>

					}';
			} else {
				echo '<script type="text/javascript" src="js/rasta.js"></script>';
				}
			echo '
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
			<h1>Privacy Policy</h1>
				<p>Turn if off and back on again.</p>

		</body>
	</html>
';
?>	
