<!DOCTYPE html> 
<html lang="de">
	<?php include ("data3.php"); ?>
	<main class="wrapper">
	<!--Willkommen-->	
		<div style="height: 70vh; overflow: visible; width: 100%;" class="heading">
			<a style="color: white;z-index: 1; position: absolute;" href="#Pad">	
				<b>Felix Kaspar</b><br>
				- My Creations -
			</a>
			<a href="#Pad"><span></span></a>
		</div>

	<!--Party Game-->	

		<div class="flex_container text-wrapper" id="PartyGame" style="border-radius: 20px 20px 0px 0px; background-color: white">
			<div class="releaseDate">07.01.2020 - Now</div>
			<section class="half1 halfRight halfBg" style="background-image: url('files/partyGame.png'); background-size: contain;"></section>
			<section class="half2 halfLeft">
				<h2><b>Party Game</b></h2>
				<p>
				Ein kleines Couchparty Spiel. Es ist derzeit noch stark in Entwicklung aber ihr könnt es demnächst spielen! In diesem Projekt werde
				ich mich mit dem neuen Input-Systen von Unity beschäftigen und versuche ein möglichst lustiges Spiel für Couchpartys zu entwickeln.
				<br>
				</p>
			</section>
		</div>
	<!--Pad-->	
		<div class="flex_container text-wrapper" id="Pad">
			<div class="releaseDate">18.08.2019 - Now</div>
			<section class="half1 halfBg" style="background-image: url('files/pad_logo.png'); background-size: 80%;"></section>
			<section class="half2">
				<h2><b>Pad</b></h2>
				<p>
				Mein erstes Spiel, welches ich offiziell veröffentlichen werde. Durch neuartige Controlls und entspannende 
				Musik wird jedes Level zu einer kleinen Herausforderung die man gespielt haben muss!<br>
				<br>
				<u><a href="https://play.google.com/apps/internaltest/4701185661665572333" target="_blank">Join Pre-Alpha (Android)</a></u><br>
				<u><a href="https://play.google.com/store/apps/details?id=com.LaserKaspar.Pad&hl=de&ah=OJ0-Yk1FLdG6-fO0ZwypNOonmlM" target="_blank">Download (After you have joined)</a></u>
				</p>
			</section>
		</div>

	<!--BurgerMaker-->
		<div class="flex_container text-wrapper" id="BurgerMaker" style="background-color: white">
			<div class="releaseDate">22.10.2019 - 24.10.2019</div>
			<section class="half1 halfRight halfBg" style="background-image: url('files/burger.png'); background-size: contain;"></section>
			<section class="half2 halfLeft">
				<h2><b>Burger Maker</b></h2>
				<p>
				Ein kleines Spiel um sich die Zeit zu vertreiben.<br>
				<br>
				<u><a href="https://shadowflamed.de/burgerMaker/">LiveDemo</a></u><br>
				</p>
			</section>
		</div>

	<!--ProtectTheSheeps-->
		<div class="flex_container text-wrapper" id="Pts">
			<div class="releaseDate">06.09.2019 - 13.09.2019</div>
			<section class="half1 halfBg" style="background-image: url('files/pts_logo.png');"></section>
			<section class="half2">
				<h2><b>Protect The Sheeps</b></h2>
				<p>
				Dieses Spiel ist im Unterricht entstanden. Ich hoffe es gefällt euch.<br>
				<br>
				<u><a href="https://shadowflamed.de/pts/" target="_blank">LiveDemo</a></u><br>
				</p>
			</section>
		</div>

	<!--LightIsDangerous-->	
		<div class="flex_container text-wrapper" id="Lid" style="background-color: white; border-radius: 0px 0px 20px 20px;">
			<div class="releaseDate">30.05.2019 - 11.07.2019</div>
			<section class="half1 halfRight halfBg" style="background-image: url('files/lid_logo.png');"></section>
			<section class="half2 halfLeft">
				<h2><b>Light is dangerous</b></h2>
				<p>
				Light is dangerous: eine Mischung zwischen Puzzle und Plattformer!<br>
				<br>
				<u><a href="https://shadowflamed.de/lightisdangerous/" target="_blank">LiveDemo</a><br>
				<a href="https://laserkaspar.itch.io/light-is-dangerous" target="_blank">Itch.io</a></u>
				</p>
			</section>
		</div>

	<!--My Journey-->	
		<div style="height: 60vh; overflow: visible; width: 100%;" class="heading">
			<a style="color: white;z-index: 1; position: absolute;" href="#Sheeps">	
				<b>Felix Kaspar</b><br>
				- My Journey -
			</a>
			<a href="#Sheeps"><span></span></a>
		</div>

	<!--Sheeps-->	
		<div class="flex_container text-wrapper" id="Sheeps">
			<div class="releaseDate">02.04.2019 - 07.05.2019</div>
			<section class="half1 halfBg noRepeat" style="background-image: url('files/sheeps_logo.png');"></section>
			<section class="half2">
				<h2><b>Sheeps? - Offline Multiplayer</b></h2>
				<p>
				In Sheeps hast du die Möglichkeit mit deinen Freunden gemeinsam neue Abenteuer zu erleben. Du und dein Freund sind beide
				zwei rote Schafe, welche sich gegenseitig beschützen müssen. Die Steuerung wird unten genauer erklärt. Ich wünsche
				euch viel Spaß: <br><br>
				Installer:<br>
				<u><a href="https://dl.dropboxusercontent.com/s/fpsvt1ibxxqxf7i/Sheeps_Beta_v0.0.1-installer.exe?dl=0" target="_blank">Dropbox-Direct</a><br>
				<a href="https://www.dropbox.com/s/fpsvt1ibxxqxf7i/Sheeps_Beta_v0.0.1-installer.exe?dl=0" target="_blank">Dropbox</a></u>
				<br><br>
				<button class="collapsible" onclick="coll('coll1')" id="coll1">How To Play</button>
				<div class="collContent" id="coll1_c">
					<br>
					Steuerung:<br>
						Um das Spiel spielen zu können ist eine Tastatur und ein Controller erforderlich. Eine der beiden Personen kann das Schaf
						mit der Tastatur und der Maus steuern der andere Spieler muss mit dem Controller spielen. Nun zu der Tastenbelegung.
						Sie kann vor start des Spieles eingestellt werden. Sie ist standardmäßig so eingestellt:<br><br>
						Tastatur:<br>
							Bewegt sich mit W-A-S-D, kann sich mit der Maus umsehen und mit den Maustasten schießen<br><br>
						Controller:<br>
							Bewegt sich mit dem linken Joystick, kann sich mit dem rechten Joystick umsehen und mit dem rechten
							Trigger schießen.<br>
						<br>
				</div>
				</p>
			</section>
		</div>

	<!--CubeRun-->	
		<div class="flex_container text-wrapper" id="CubeRun" style="background-color: white">
			<div class="releaseDate">31.01.2019 - 27.04.2019</div>
			<section class="half1 halfBg halfRight noRepeat" style="background-image: url('files/cubeRun.gif');"></section>
			<section class="half2 halfLeft">
				<h2><b>CubeRun</b></h2>
				<p>	
				In CubeRun spielst du einen kleinen Würfel, welcher versuchen muss die grünen Würfel einzusammeln und den roten auszuweichen. 
				Dieses Spiel kam mir bei meinem Heimweg in den Sinn. Damals habe ich mich dann hingesetzt und den ersten Prototypen programmiert
				und da dieser recht amüsant war, wird er hier veröffentlicht. Leider ist er derzeit nur für Android verfügbar
				und hier auch nur per direkter APK. Falls du ihn trotzdem testen willst hier zum Download: <br>
				<br>
				<u><a href="https://dl.dropboxusercontent.com/s/m15rkckxr554w2a/cuberun.apk?dl=0" target="_blank">Dropbox-Direct</a><br>
				<a href="https://www.dropbox.com/s/m15rkckxr554w2a/cuberun.apk?dl=0" target="_blank">Dropbox</a></u>
				</p>
			</section>
		</div>

	<!--GoldRush-->
		<div class="flex_container text-wrapper" id="GoldRush">
			<div class="releaseDate">20.12.2018 - 13.01.2019</div>
			<section class="half1 halfBg" style="background-image: url('files/goldRush_logo.png'); background-size: contain; "></section>
			<section class="half2">
				<h2><b>GoldRush</b></h2>
				<p>	
				Ein kleines Spiel in der Windows Console. Du musst in einem zufällig generiertem Labyrith Münzen einsammeln.<br>
				<br>
				<u><a href="https://dl.dropboxusercontent.com/s/5s8v7nz47cvdmzv/GoldRush%20v13.exe?dl=0" target="_blank">Dropbox-Direct</a><br>
				<a href="https://www.dropbox.com/s/5s8v7nz47cvdmzv/GoldRush%20v13.exe?dl=0" target="_blank">Dropbox</a></u>
				</p>
			</section>
		</div>

	<!--SaveUrsula-->
		<div class="flex_container text-wrapper" id="SaveUrsula" style="background-color: white">
			<div class="releaseDate">10.11.2018 - 21.02.2019</div>
			<section class="half1 halfBg halfRight noRepeat" style="background-image: url('files/saveUrsula.png');"></section>
			<section class="half2 halfLeft">
				<h2><b>Save Ursula</b></h2>
				<p>	
				Save Ursula ist ein Textbasiertes Adventuregame in dem du dich durch eine Märchenwelt bewegst, um Prinzessin Urusla 
				zu retten. Du kannst mit dem integrierten Editor sogar dein eigenes Adventure erstellen! Ich wünsche dir viel 
				Spaß! Hier zu den Downloads<br>
				<br>
				<u><a href="https://dl.dropboxusercontent.com/s/vnjbu98em06uxly/Save%20Ursula%20-%20Textadventure%20v6.zip?dl=0" target="_blank">Dropbox-Direct</a><br>
				<a href="https://www.dropbox.com/s/vnjbu98em06uxly/Save%20Ursula%20-%20Textadventure%20v6.zip?dl=0" target="_blank">Dropbox</a></u>
				</p>
			</section>
		</div>

	<!--Schluss Tag-->
		<div style="height: 100vh; overflow: visible; width: 100%;" class="heading">
			<div style="color: white; position: absolute; width: 100%; z-index: 1; font-family: arial; font-size: 20px;">
				<a href="mailto:ich@felixkaspar.com"><u>Contact</u></a></br>
				<a href="impressum"><u>Impressum</u></a><br>
				<u>Made with &#x2764 by Felix</u><br>
				<u>Copyright &copy; 2019</u><br>
			</div>
		</div>
	</main>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
            // Add smooth scrolling to all links
            $("a").on('click', function(event) {
        
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();
        
                // Store hash
                var hash = this.hash;
        
                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                scrollTop: $(hash).offset().top
                }, 800, function(){
            
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
                });
            } // End if
            });
        });
	</script>
	</body>
</html>