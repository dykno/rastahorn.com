<?php
//Include PHP Functions
include('functions.php');

//Get Header
get_header();

//Index Specific Information
echo'
			<div class="content">
				<div class="content-gap"></div>
				<div class="content-wide">
					1. To commence each game, both teams will select a person to shotgun a beer. The winner\'s team will then select which team is home and which is away.
					<br />
					<br />
					2. Each team may filed up to 10 players, if the entire team should show up.
					<ol class="ol-alpha">
						<li>While there is no minimum, a team should aim to filed at least 8.</li>
					</ol>
					<br />
					<br />
					3. Each game played will be 6 innings long.
					<ol class="ol-alpha">
						<li>If a team is to score 10 runs in an inning, regardless of outs, the teams must switch sides.</li>
						<li>In the case of a tie, extra innings will commence with a game never exceeding nine innings.</li>
						<ol class="ol-roman">
							<li>If a game should be tied after nine innings, each team will elect three people to race in a shotgun challenge relay race.</li>
						</ol>
					</ol>
					<br />
					<br />
					4. During play (in the field or at bat), each player must possess a beer or drink of choice in hand (no glass).
					<ol class="ol-alpha">
						<li>Any out recorded without said beer or chosen drink will be nullified.</li>
						<li>To record an out, a player must do so one handed, or in the case of a pop fly, take a sip of beeor or the drink of their choosing before placing his or her can down.</li>
					</ol>
					<br />
					<br />
					5. Any disputes will be soved with a shotgun challenge between the conflicting parties involved.
					<br />
					<br />
					6. To record an out, a player may:
					<ol class="ol-alpha">
						<li>Catch the rastaball in the air before it hits the ground.</li>
						<li>Tag a base with possession of the rastaball to record a force out.</li>
						<li>Peg someone with the rastaball, much like dodgeball.</li>
					</ol>
					<br />
					<br />
					7. When the catcher is fielded by the defense:
					<ol class="ol-alpha">
						<li>Bunting is permitted.</li>
						<ol class="ol-roman">
							<li>If there is no catcher, the rastaball must reach the pitcher or have a defender actively make a play to field the rastaball in order for it to be a hit.</li>
						</ol>
						<li>Stealing bases is permitted.</li>
					</ol>
					<br />
					<br />
					8. In the case of an overthrow, a player is only allowed to advance one base.
					<br />
					<br />
					9. When crossing home, a player must "sound the horn."
				</div>
			</div>
';

//Get Footer
get_footer();


?>