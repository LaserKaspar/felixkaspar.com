<!DOCTYPE html> 
<html lang="de">
<?php include ("data3.php"); ?>
	<main class="wrapper">
	<div class="progress-container">
		<div class="progress-bar" id="myBar"></div>
	</div> 
	<!--Willkommen-->	
		<div style="height: 50vh; overflow: visible; width: 100%;" class="heading">
			<a style="color: white;z-index: 1; position: absolute;" href="#Welcome">	
					Shadowflamed<br>
					- the Creations -
			</a>
			<section class="parallax bg1" id="Home" style="width: inherit; overflow: visible; z-index: -1; height: 100%;"></section>
		</div>

	<!--WhoAmI-->
		<div class="flex_container text-wrapper" id="Welcome">
			<section class="half1 halfBg" style="background-image: url('files/sf_logo.png'); background-size: contain; background-repeat: no-repeat;"></section>
			<section class="half2">
				<h2><b>Ich bin...</b></h2>
				<p>	
				... ein noch junger Programmierer, der seine ersten Spiele programmiert und hier dokumentiert.
				Es wird hier mit der Zeit immer mehr kleine Spiele geben, welche ihr testen könnt. Ihr könnt mir auch gerne per 
				<a title="@LaserKaspar#3454" href="https://discord.gg/Y8JM8h5"><u>Discord</u></a>
				Feedback geben oder Bugs melden. Ich hoffe, ihr findet etwas was euch gefällt.<br>
				Viel Glück!
				</p>
			</section>
		</div>

	<!--LightIsDangerous-->	
	<div class="flex_container text-wrapper" id="Lid" style="background-color: white">
			<section class="half1 halfRight halfBg" style="background-image: url('files/lid_logo.png');"></section>
			<section class="half2 halfLeft">
				<h2><b>Light is dangerous</b></h2>
				<p>
				Light is dangerous ist mein bis jetzt größtes Projekt. Es ist eine Mischung zwischen Puzzle und Plattformer!
				<br><br>

				<u><a href="https://shadowflamed.de/lightisdangerous/">LiveDemo</a><br>
				<a href="https://laserkaspar.itch.io/light-is-dangerous">Itch.io</a></u>
				</p>
			</section>
		</div>

	<!--Sheeps-->	
		<div class="flex_container text-wrapper" id="Sheeps">
			<section class="half1 halfBg" style="background-image: url('files/sheeps_logo.png');"></section>
			<section class="half2">
				<h2><b>Sheeps? - Offline Multiplayer</b></h2>
				<p>
				In Sheeps du die Möglichkeit mit deinen Freunden gemeinsam neue Abenteuer zu erleben. Du und dein Freund sind beide
				zwei rote Schafe, welche sich gegenseitig beschützen müssen. Die Steuerung wird <u><a href="#Sheeps">hier</a></u> genauer erklärt. Ich wünsche
				euch viel Spaß: <br><br>
				Installer-Sheeps-Beta_v0.0.1:<br>
				<u><a href="https://dl.dropboxusercontent.com/s/fpsvt1ibxxqxf7i/Sheeps_Beta_v0.0.1-installer.exe?dl=0">Dropbox-Direct</a><br>
				<a href="https://www.dropbox.com/s/fpsvt1ibxxqxf7i/Sheeps_Beta_v0.0.1-installer.exe?dl=0">Dropbox</a></u>
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
			<section class="half1 halfBg halfRight" style="background-image: url('files/cubeRun.gif');"></section>
			<section class="half2 halfLeft">
				<h2><b>CubeRun - A new Adventure</b></h2>
				<p>	
				In CubeRun spielst du einen kleinen Würfel, welcher versuchen muss die grünen Würfel einzusammeln und den roten auszuweichen. 
				Dieses Spiel kam mir bei meinem Heimweg in den Sinn. Damals habe ich mich dann hingesetzt und den ersten Prototypen programmiert
				und da dieser recht amüsant war, wird er hier Veröffentlicht. Leider ist er derzeit nur für Android verfügbar
				und hier auch nur per direkter APK. Falls du ihn trotzdem testen willst hier zum download: <br>
				<u><a href="https://dl.dropboxusercontent.com/s/m15rkckxr554w2a/cuberun.apk?dl=0">Dropbox-Direct</a><br>
				<a href="https://www.dropbox.com/s/m15rkckxr554w2a/cuberun.apk?dl=0">Dropbox</a></u>
				</p>
			</section>
		</div>

	<!--SaveUrsula-->
		<div class="flex_container text-wrapper" id="SaveUrsula">
			<section class="half1 halfBg" style="background-image: url('files/saveUrsula.png');"></section>
			<section class="half2">
				<h2><b>Save Ursula - The oldes Way of telling storys</b></h2>
				<p>	
				Save Ursula ist ein Textbasiertes Aventure game wo du durch dich durch eine Märchenwelt bewegst, um Prinzessin Urusla 
				zu retten. Du kannst mit dem integrierten Editor sogar dein eigenes Adventure erstellen! Ich wünsche dir viel 
				Spaß! Hier zu den Downloads<br>
				<u><a href="https://dl.dropboxusercontent.com/s/vnjbu98em06uxly/Save%20Ursula%20-%20Textadventure%20v6.zip?dl=0">Dropbox-Direct</a><br>
				<a href="https://www.dropbox.com/s/vnjbu98em06uxly/Save%20Ursula%20-%20Textadventure%20v6.zip?dl=0">Dropbox</a></u>
				</p>
			</section>
		</div>

	<!--Schluss Tag-->
		<div style="height: 100vh; overflow: visible; width: 100%;" class="heading">
			<div style="color: white; position: absolute; width: 100%; z-index: 1; font-family: arial; font-size: 20px;">
				<u>Copyright &copy; 2019</u><br>
				<a href="impressum"><u>Impressum</u></a><br>
				<u>Made with &#x2764 by Felix</u><br>
			</div>
			<section class="parallax bg1" id="Home" style="width: inherit; overflow: visible; z-index: -1; height: 100%;"></section>
		</div>
	</main>
	</body>
</html>