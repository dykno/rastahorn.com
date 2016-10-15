<?php
function get_header(){
	$fileName = basename($_SERVER['PHP_SELF']);
	if ($fileName == 'leagueinfo.php'){
		$pageName = 'League Info';
	} elseif ($fileName == 'teams.php'){
		$pageName = 'Teams';
	} elseif ($fileName == 'schedule.php'){
		$pageName = 'Schedule';
	} elseif ($fileName == 'results.php'){
		$pageName = 'Results';
	} elseif ($fileName == 'cup.php'){
	  $pageName = 'The Cup';
	} elseif ($fileName == 'rules.php'){
		$pageName = 'Rules';
	} elseif ($fileName =='index.php'){
		$pageName = 'Home';
	} else {
		$pageName = '';
	}
	echo'
	<!DOCTYPE html>
	<html lang="en">
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
			<meta charset="utf-8">
			<title>Rastahorn Kickball League - ' .$pageName. '</title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta name="keywords" content="rasta, horn, rastahorn, hype, real, kick, ball, college, cup, results, reggae horn, reggae, horn">
			<meta name="description" content="The Official Home of the Rastahorn.com Kickball League"
			<meta name="author" content="">
			<!-- Rasta Styles -->
			<link href="css/kickball.css" rel="stylesheet" type="text/css">
			<!-- Google Analytics -->
			<script type="text/javascript">

			  var _gaq = _gaq || [];
			  _gaq.push([\'_setAccount\', \'UA-35071626-1\']);
			  _gaq.push([\'_trackPageview\']);

			  (function() {
				var ga = document.createElement(\'script\'); ga.type = \'text/javascript\'; ga.async = true;
				ga.src = (\'https:\' == document.location.protocol ? \'https://\' : \'http://\') + \'stats.g.doubleclick.net/dc.js\';
				var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(ga, s);
			  })();

			</script>
		</head>
		<body>
		<div class="container">
			<div class="header">
				<div class="logo">
					<a href="/kickball"><img src="images/rastahorn.png" /></a>
				</div>
				<div class="nav">
					<table align="center">
						<tr>';
						if ($fileName == 'index.php'){
							echo'
							<td><a href="leagueinfo.php">LEAGUE INFO</a></td>
							<td><a href="teams.php">TEAMS</a></td>
							<td><a href="schedule.php">SCHEDULE</a></td>
							<td><a href="results.php">RESULTS</a></td>
							<td><a href="cup.php">THE CUP</a></td>
							<td><a href="rules.php">RULES</a></td>
							';
						} elseif ($fileName == 'leagueinfo.php'){
							echo'
							<td><a href="leagueinfo.php" class="active-page">LEAGUE INFO</a></td>
							<td><a href="teams.php">TEAMS</a></td>
							<td><a href="schedule.php">SCHEDULE</a></td>
							<td><a href="results.php">RESULTS</a></td>
							<td><a href="cup.php">THE CUP</a></td>
							<td><a href="rules.php">RULES</a></td>
							';
						} elseif ($fileName == 'teams.php'){
							echo '
							<td><a href="leagueinfo.php">LEAGUE INFO</a></td>
							<td><a href="teams.php" class="active-page">TEAMS</a></td>
							<td><a href="schedule.php">SCHEDULE</a></td>
							<td><a href="results.php">RESULTS</a></td>
							<td><a href="cup.php">THE CUP</a></td>
							<td><a href="rules.php">RULES</a></td>
							';
						} elseif ($fileName == 'schedule.php'){
							echo '
							<td><a href="leagueinfo.php">LEAGUE INFO</a></td>
							<td><a href="teams.php">TEAMS</a></td>
							<td><a href="schedule.php" class="active-page">SCHEDULE</a></td>
							<td><a href="results.php">RESULTS</a></td>
							<td><a href="cup.php">THE CUP</a></td>
							<td><a href="rules.php">RULES</a></td>
							';
						} elseif ($fileName == 'results.php'){
							echo '
							<td><a href="leagueinfo.php">LEAGUE INFO</a></td>
							<td><a href="teams.php">TEAMS</a></td>
							<td><a href="schedule.php">SCHEDULE</a></td>
							<td><a href="results.php" class="active-page">RESULTS</a></td>
							<td><a href="cup.php">THE CUP</a></td>
							<td><a href="rules.php">RULES</a></td>
							';
						} elseif ($fileName == 'cup.php'){
							echo '
							<td><a href="leagueinfo.php">LEAGUE INFO</a></td>
							<td><a href="teams.php">TEAMS</a></td>
							<td><a href="schedule.php">SCHEDULE</a></td>
							<td><a href="results.php">RESULTS</a></td>
							<td><a href="cup.php" class="active-page">THE CUP</a></td>
							<td><a href="rules.php">RULES</a></td>
							';
						}elseif ($fileName == 'rules.php'){
							echo '
							<td><a href="leagueinfo.php">LEAGUE INFO</a></td>
							<td><a href="teams.php">TEAMS</a></td>
							<td><a href="schedule.php">SCHEDULE</a></td>
							<td><a href="results.php">RESULTS</a></td>
							<td><a href="cup.php">THE CUP</a></td>
							<td><a href="rules.php" class="active-page">RULES</a></td>
							';
						} else {
							echo '
							
							';
						}
						echo '
						</tr>
					</table>
				</div>
			</div>
		';
}

function get_footer(){
	echo'
			<div class="footer">
				<div class="footer-right">
					<p>PROUDLY SPONSORED BY<br />
					<a href="/">WWW.RASTAHORN.COM</a><br /></p>
				</div>
				<div class="footer-left">
					<p>FOR MORE INFO CONTACT<br />
					<a href="mailto:kickball@rastahorn.com">KICKBALL@RASTAHORN.COM</a><br /></p>
				</div>
				<div class="footer-middle">
					<p>SMALLEY PARK<br />
					BURLINGTON, VT 05401<br /></p>
				</div>
			</div>
		</div>
		</body>
	</html>
	';
}


?>
