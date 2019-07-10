<!DOCTYPE html> 
<html>
<?php include ("data3.php"); ?>

	<body>
		<section>
			<div class="ab_oben bg-wrap v_zent_cont middle"> 
				<div class="bg slide_bg" style="background-image: url('files/overrun_img_1.png');"></div>
				<a style="color: white;" href="#willkommen" class="v_zent">	
					Welcome to<br>
					<b>OverRun</b> 
				</a>
			</div>
		</section>

		<section class="text-wrapper" id="willkommen" tabindex="-1">
			<b><d>What is it?</d></b>
			<p>	
			OverRun is an Minecraft Adventuremap for the version 1.8.8! <br>
			It's about that you get overrun by zombies! Oh, and you are a black marketer who get's payed for killing those monsters! <br>
			Couldn't get better right? Sure! It can get a lot better! <br>
			You will have to buy more Weapons and learn epic skills like shooting fireballs! <br>
			Not enough!? <br>
			There for are the Waves! There are 30 of them and you will have to complete all of them!
			Every fith wave a new Zombie appears or a litte Boss fight will start! 
			</p>
		</section>
		
		<section>
			<div class="ab_oben bg-wrap v_zent_cont middle"> 
				<div class="bg slide_bg" style="background-image: url('files/overrun_img_2.png');"></div>
				<a style="color: white;" href="#trailer" class="v_zent">
					<b>Confusing?</b> 
				</a>
			</div>
		</section>
		
		<section class="text-wrapper" id="trailer" tabindex="-1">
			<b><d>Now I'm confused!</d></b>
			<p>	
			Ok, for better Information and Understanding I have made a Trailer! If you want to see it, just click below!
			</p>
			
			<div class="autobereich-rg">
				<iframe class="autovid" width="640" height="360" src="https://www.youtube.com/embed/lY1kznGxrW0?rel=0" frameborder="0"></iframe>
			</div>
		</section>
		
		<section>
			<div class="ab_oben bg-wrap v_zent_cont middle"> 
				<div class="bg slide_bg" style="background-image: url('files/overrun_img_3.png');"></div>
				<a style="color: white;" href="#get" class="v_zent">	
					Do some<br>
					<b>preparations!</b> 
				</a>
			</div>
		</section>
		
		<section class="text-wrapper" id="get" tabindex="-1">
			<b><d>Oh my God! I want to have it!</d></b>
			<p>	
			Ok if you are so hyped to download the map there are some things you have to do before or after the Download: <br>
			<ul>
				<li>
				<b>You have to activate cheats/commandblocks!</b> <br>
				You can do this by simply changing the entry "enable-command-block=<u>false</u>" in the server.propeties to "enable-command-block=<u>true</u>" if you're running a server or in the local options of the world ingame!
				</li>
				<li>
				<b>This map is for the version 1.8.* only!</b> <br>
				That means form 1.8.1 - 1.8.9
				</li>
				<li>
				<b>Feel free to upload a Video of this map!</b> <br>
				But it would be nice if you put a link to this Website in the discription!
				</li>
			</ul>
			</p>
		</section>		
		
		<section>
			<div class="ab_oben bg-wrap v_zent_cont middle"> 
				<div class="bg slide_bg" style="background-image: url('files/overrun_img_4.png');"></div>
				<a style="color: white;" href="downloads/the_OverRun.zip" download="The OverRun - 1.8.8.zip" target="_blank" class="v_zent">	
					Download<br>
					<b>Now!</b> 
				</a>
			</div>
		</section>
		
		<section class="text-wrapper" id="down" tabindex="-1">
			<b><d>Now finally!</d></b>
			<p>

			<?php include ("counter/overrun_download.php"); ?>
				<form method="post">
					<button type="submit" name="senden" style="float: right; background: white; border: none;">
						<img src="files/DoBu.png" width="100px" length="100px" ></img>
					</button>
				</form>

			You can't await it right? <br> Ok here you are! <br> 
			<br>
			<b>If you use Windows:</b> <br>
			After the download please use WinRar or another Software to unpack the downloaded file! After that put it into your minecraft savesfolder. 
			Which is mostly found under C:\Users\--YourUser--\AppData\Roaming\.minecraft\saves<br>
			<br>
			<b>If you use MacOS:</b> <br>
			You will directley download a world folder! Simply go to your minecraft savesfolder and drag&drop the "world" into it and you're done!<br>
			<br>
			Now you can play my Map! By Pressing the Start button in Front of you!
			If you don't find it it's at the coordinates 0, 34, -7!
			
			</p>
		</section>		
		
		<!--Schluss Tag-->
		<section>
			<div class="bg-wrap"> 
				<div class="bg slide_bg" style="background-image: url('files/overrun_img_5.png');"></div>
				<div class="middle" style="position: absolute; width: 100%; bottom: 10px;">
					<u>Copyright &copy; 2018</u><br>
					<a href="impressum"><u>Impressum</u></a>
				</div>
			</div>
		</section>
	</body>
</html>