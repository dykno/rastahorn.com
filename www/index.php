<?php
	$browser = 'non-mobile';
	if(strpos($_SERVER['HTTP_USER_AGENT'],"iPhone") || strpos($_SERVER['HTTP_USER_AGENT'],"iPad")){
		header("Location: https://apps.apple.com/us/app/rastahorn/id1489107571");
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
			<script type="text/javascript" src="js/rasta.js"></script>
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
				<div class="help-box">
					<div class="help-header">
						Controls
					</div>
					<div class="help-content">
						<ul>
							<li><b>Spacebar</b> - Horn</li>
							<li><b>A</b> - Alert!</li>
							<li><b>B</b> - Carole Baskin</li>
							<li><b>D</b> - Do u know de wae?</li>
							<li><b>F</b> - Fail!</li>
							<li><b>G</b> - Gunshot (Gat, gat, gat)</li>
							<li><b>H</b> - Please don\'t</li>
							<li><b>N</b> - U do not know de wae</li>
							<li><b>T</b> - Turn down for what!?</li>
							<li><b>Y</b> - Yaaassss</li>
						</ul>
					</div>
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
