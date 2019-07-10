<!DOCTYPE html> 
<html lang="de">
<?php include ("data3.php"); ?>


	<!--The Waiting Villager-->
		<section>
			<div class="ab_oben bg-wrap v_zent_cont middle"> 
				<div class="bg slide_bg" style="background-image: url('files/wv_1.png');"></div>
				<a style="color: white;" href="#willkommen" class="v_zent">	
					Welcome to the<br>
					<b>waiting villagers!</b> 
				</a>
			</div>
		</section>

		<section class="text-wrapper" id="willkommen" tabindex="-1">
			<h2><d>What is it?</d></h2>
			<p>	
			"The waiting villagers" is a one commandblock-creation for the minecraftversion 1.8.8! <br>
			It's made for the simulation of queues! <br>
			</p>
		</section>		
		
		<section class="ab_zwischen">
			<div class="bg-wrap"> 
				<div class="bg slide_bg" style="background-image: url('files/wv_1.png');"></div>
			</div>
		</section>
		
		<section class="text-wrapper" id="trailer" tabindex="-1">
			<b><d>Now I'm confused!</d></b>
			<p>	
			Ok, for better Information and Understanding I have made a Trailer! If you want to see it, just click below!
			<div class="autobereich-rg">
				<iframe class="autovid" width="640" height="360" src="https://www.youtube.com/embed/F59djY2sSOE" frameborder="0"></iframe>
			</div>
			</p>
		</section>		
		
		<section class="ab_zwischen">
			<div class="bg-wrap"> 
				<div class="bg slide_bg" style="background-image: url('files/wv_1.png');"></div>
			</div>
		</section>

		<section class="text-wrapper" id="down" tabindex="-1">
			<b><d>Only Copy the following command, paste it into a commandblock and activate it!</d></b> <br>
			<br>
			<div id="copy1" style="word-break: break-all;">
			/summon MinecartCommandBlock ~ ~1 ~ {Command:kill @e[type=MinecartCommandBlock,r=1],Riding:{id:MinecartCommandBlock,Command:setblock ~ ~-1 ~1 redstone_block,Riding:{id:MinecartCommandBlock,Command:setblock ~ ~ ~1 command_block 0 replace {Command:fill ~ ~-3 ~-1 ~ ~ ~ air},Riding:{id:MinecartCommandBlock,Command:"/give @p minecraft:spawn_egg 1 65 {display:{Name:\"stopAnchor\"},EntityTag:{id:\"Bat\"}}",Riding:{id:MinecartCommandBlock,Command:"/give @p minecraft:spawn_egg 1 120 {display:{Name:\"waitingVillager\"},EntityTag:{id:\"Villager\"}}",Riding:{id:MinecartCommandBlock,Command:"/give @p minecraft:spawn_egg 1 65 {display:{Name:\"westAnchor\"},EntityTag:{id:\"Bat\"}}",Riding:{id:MinecartCommandBlock,Command:"/give @p minecraft:spawn_egg 1 65 {display:{Name:\"eastAnchor\"},EntityTag:{id:\"Bat\"}}",Riding:{id:MinecartCommandBlock,Command:"/give @p minecraft:spawn_egg 1 65 {display:{Name:\"southAnchor\"},EntityTag:{id:\"Bat\"}}",Riding:{id:MinecartCommandBlock,Command:"/give @p minecraft:spawn_egg 1 65 {display:{Name:\"northAnchor\"},EntityTag:{id:\"Bat\"}}",Riding:{id:MinecartCommandBlock,Command:"/scoreboard objectives add armor_time dummy",Riding:{id:MinecartCommandBlock,Command:"/scoreboard objectives add direction dummy",Riding:{id:MinecartCommandBlock,Command:blockdata ~3 ~-2 ~-1 {Command:fill ~ ~ ~1 ~5 ~3 ~1 stone},Riding:{id:MinecartCommandBlock,Command:blockdata ~3 ~-2 ~1 {Command:fill ~ ~ ~-1 ~5 ~3 ~-1 redstone_block},Riding:{id:MinecartCommandBlock,Command:blockdata ~4 ~-2 ~-1 {Command:"/execute @e[name=Karl,score_direction_min=1,score_direction=1] ~ ~ ~ detect ~ ~3 ~ air 0 tp @e[name=Karl,score_direction_min=1,score_direction=1,r=0] ~-0.5 ~ ~"},Riding:{id:MinecartCommandBlock,Command:blockdata ~4 ~-2 ~1 {Command:"/execute @e[name=Karl,score_direction_min=2,score_direction=2] ~ ~ ~ detect ~ ~3 ~ air 0 tp @e[name=Karl,score_direction_min=2,score_direction=2,r=0] ~ ~ ~-0.5"},Riding:{id:MinecartCommandBlock,Command:blockdata ~5 ~-2 ~-1 {Command:"/execute @e[name=Karl,score_direction_min=3,score_direction=3] ~ ~ ~ detect ~ ~3 ~ air 0 tp @e[name=Karl,score_direction_min=3,score_direction=3,r=0] ~0.5 ~ ~"},Riding:{id:MinecartCommandBlock,Command:blockdata ~5 ~-2 ~1 {Command:"/execute @e[name=Karl,score_direction_min=4,score_direction=4,score] ~ ~ ~ detect ~ ~3 ~ air 0 tp @e[name=Karl,score_direction_min=4,score_direction=4,r=0] ~ ~ ~0.5"},Riding:{id:MinecartCommandBlock,Command:blockdata ~6 ~-2 ~-1 {Command:"/execute @e[name=Karl] ~ ~ ~ detect ~ ~2 ~ wool 15 /scoreboard players set @e[name=Karl,r=0] direction 0"},Riding:{id:MinecartCommandBlock,Command:blockdata ~6 ~-2 ~1 {Command:"/execute @e[name=Karl] ~ ~ ~ detect ~ ~2 ~ wool 14 /scoreboard players set @e[name=Karl,r=0] direction 1"},Riding:{id:MinecartCommandBlock,Command:blockdata ~7 ~-2 ~-1 {Command:"/execute @e[name=Karl] ~ ~ ~ detect ~ ~2 ~ wool 4 /scoreboard players set @e[name=Karl,r=0] direction 2"},Riding:{id:MinecartCommandBlock,Command:blockdata ~7 ~-2 ~1 {Command:"/execute @e[name=Karl] ~ ~ ~ detect ~ ~2 ~ wool 6 /scoreboard players set @e[name=Karl,r=0] direction 3"},Riding:{id:MinecartCommandBlock,Command:blockdata ~8 ~-2 ~-1 {Command:"/execute @e[name=Karl] ~ ~ ~ detect ~ ~2 ~ wool 13 /scoreboard players set @e[name=Karl,r=0] direction 4"},Riding:{id:MinecartCommandBlock,Command:blockdata ~8 ~-2 ~1 {Command:"/execute @e[name=Karl,score_direction_min=1,score_direction=1] ~ ~ ~ /summon ArmorStand ~1 ~3 ~ {NoGravity:1,CustomName:\\\"armor_time\\\"}"},Riding:{id:MinecartCommandBlock,Command:blockdata ~3 ~-1 ~-1 {Command:"/execute @e[name=Karl,score_direction_min=2,score_direction=2] ~ ~ ~ /summon ArmorStand ~ ~3 ~1 {NoGravity:1,CustomName:\\\"armor_time\\\"}"},Riding:{id:MinecartCommandBlock,Command:blockdata ~3 ~-1 ~1 {Command:"/execute @e[name=Karl,score_direction_min=3,score_direction=3] ~ ~ ~ /summon ArmorStand ~-1 ~3 ~ {NoGravity:1,CustomName:\\\"armor_time\\\"}"},Riding:{id:MinecartCommandBlock,Command:blockdata ~4 ~-1 ~-1 {Command:"/execute @e[name=Karl,score_direction_min=4,score_direction=4] ~ ~ ~ /summon ArmorStand ~ ~3 ~-1 {NoGravity:1,CustomName:\\\"armor_time\\\"}"},Riding:{id:MinecartCommandBlock,Command:blockdata ~4 ~-1 ~1 {Command:"/scoreboard players add @e[name=armor_time] armor_time 1"},Riding:{id:MinecartCommandBlock,Command:blockdata ~5 ~-1 ~-1 {Command:"/execute @e[score_armor_time_min=1] ~ ~ ~ /setblock ~ ~ ~ air"},Riding:{id:MinecartCommandBlock,Command:blockdata ~5 ~-1 ~1 {Command:"/execute @e[score_armor_time_min=1,score_armor_time=1] ~ ~ ~ /setblock ~ ~ ~ stone"},Riding:{id:MinecartCommandBlock,Command:blockdata ~6 ~-1 ~-1 {Command:"/kill @e[score_armor_time_min=2]"},Riding:{id:MinecartCommandBlock,Command:blockdata ~6 ~-1 ~1 {Command:"/execute @e[name=Karl,score_direction_min=1,score_direction=1] ~ ~ ~ detect ~ ~4 ~ packed_ice 0 /summon ArmorStand ~ ~3 ~1 {NoGravity:1,CustomName:\\\"armor_time\\\"}"},Riding:{id:MinecartCommandBlock,Command:blockdata ~7 ~-1 ~-1 {Command:"/execute @e[name=Karl,score_direction_min=1,score_direction=1] ~ ~ ~ detect ~ ~4 ~ packed_ice 0 /summon ArmorStand ~ ~3 ~-1 {NoGravity:1,CustomName:\\\"armor_time\\\"}"},Riding:{id:MinecartCommandBlock,Command:blockdata ~7 ~-1 ~1 {Command:"/execute @e[name=Karl,score_direction_min=2,score_direction=2] ~ ~ ~ detect ~ ~4 ~ packed_ice 0 /summon ArmorStand ~1 ~3 ~ {NoGravity:1,CustomName:\\\"armor_time\\\"}"},Riding:{id:MinecartCommandBlock,Command:blockdata ~8 ~-1 ~-1 {Command:"/execute @e[name=Karl,score_direction_min=2,score_direction=2] ~ ~ ~ detect ~ ~4 ~ packed_ice 0 /summon ArmorStand ~-1 ~3 ~ {NoGravity:1,CustomName:\\\"armor_time\\\"}"},Riding:{id:MinecartCommandBlock,Command:blockdata ~8 ~-1 ~1 {Command:"/execute @e[name=Karl,score_direction_min=3,score_direction=3] ~ ~ ~ detect ~ ~4 ~ packed_ice 0 /summon ArmorStand ~ ~3 ~-1 {NoGravity:1,CustomName:\\\"armor_time\\\"}"},Riding:{id:MinecartCommandBlock,Command:blockdata ~3 ~ ~-1 {Command:"/execute @e[name=Karl,score_direction_min=3,score_direction=3] ~ ~ ~ detect ~ ~4 ~ packed_ice 0 /summon ArmorStand ~ ~3 ~1 {NoGravity:1,CustomName:\\\"armor_time\\\"}"},Riding:{id:MinecartCommandBlock,Command:blockdata ~3 ~ ~1 {Command:"/execute @e[name=Karl,score_direction_min=4,score_direction=4] ~ ~ ~ detect ~ ~4 ~ packed_ice 0 /summon ArmorStand ~1 ~3 ~ {NoGravity:1,CustomName:\\\"armor_time\\\"}"},Riding:{id:MinecartCommandBlock,Command:blockdata ~4 ~ ~-1 {Command:"/execute @e[name=Karl,score_direction_min=4,score_direction=4] ~ ~ ~ detect ~ ~4 ~ packed_ice 0 /summon ArmorStand ~-1 ~3 ~ {NoGravity:1,CustomName:\\\"armor_time\\\"}"},Riding:{id:MinecartCommandBlock,Command:blockdata ~4 ~ ~1 {Command:"/execute @e[name=northAnchor] ~ ~ ~ /setblock ~ ~4 ~ packed_ice"},Riding:{id:MinecartCommandBlock,Command:blockdata ~5 ~ ~-1 {Command:"/execute @e[name=southAnchor] ~ ~ ~ /setblock ~ ~4 ~ packed_ice"},Riding:{id:MinecartCommandBlock,Command:blockdata ~5 ~ ~1 {Command:"/execute @e[name=eastAnchor] ~ ~ ~ /setblock ~ ~4 ~ packed_ice"},Riding:{id:MinecartCommandBlock,Command:blockdata ~6 ~ ~-1 {Command:"/execute @e[name=westAnchor] ~ ~ ~ /setblock ~ ~4 ~ packed_ice"},Riding:{id:MinecartCommandBlock,Command:blockdata ~6 ~ ~1 {Command:"/execute @e[name=stopAnchor] ~ ~ ~ /setblock ~ ~4 ~ packed_ice"},Riding:{id:MinecartCommandBlock,Command:blockdata ~7 ~ ~-1 {Command:"/execute @e[name=northAnchor] ~ ~ ~ /setblock ~ ~2 ~ minecraft:wool 4"},Riding:{id:MinecartCommandBlock,Command:blockdata ~7 ~ ~1 {Command:"/execute @e[name=southAnchor] ~ ~ ~ /setblock ~ ~2 ~ minecraft:wool 13"},Riding:{id:MinecartCommandBlock,Command:blockdata ~8 ~ ~-1 {Command:"/execute @e[name=eastAnchor] ~ ~ ~ /setblock ~ ~2 ~ minecraft:wool 6"},Riding:{id:MinecartCommandBlock,Command:blockdata ~8 ~ ~1 {Command:"/execute @e[name=westAnchor] ~ ~ ~ /setblock ~ ~2 ~ minecraft:wool 14"},Riding:{id:MinecartCommandBlock,Command:blockdata ~3 ~1 ~-1 {Command:"/execute @e[name=stopAnchor] ~ ~ ~ /setblock ~ ~3 ~ minecraft:stone 0"},Riding:{id:MinecartCommandBlock,Command:blockdata ~3 ~1 ~1 {Command:"/execute @e[type=Bat] ~ ~ ~ detect ~ ~4 ~ minecraft:packed_ice 0 /kill @e[type=Bat,r=1]"},Riding:{id:MinecartCommandBlock,Command:blockdata ~4 ~1 ~-1 {Command:"/execute @e[name=waitingVillager] ~ ~ ~ /summon Villager ~ ~ ~ {NoAI:1,CustomName:\\\"Karl\\\"}"},Riding:{id:MinecartCommandBlock,Command:blockdata ~4 ~1 ~1 {Command:"/execute @e[name=waitingVillager] ~ ~ ~ /execute @e[name=Karl,type=Villager,r=1] ~ ~ ~ /kill @e[name=waitingVillager,r=1]"},Riding:{id:MinecartCommandBlock,Command:setblock ~3 ~-2 ~ redstone_block,Riding:{id:MinecartCommandBlock,Command:fill ~3 ~-2 ~-1 ~4 ~1 ~-1 command_block,Riding:{id:MinecartCommandBlock,Command:fill ~3 ~-2 ~-1 ~8 ~ ~-1 command_block,Riding:{id:MinecartCommandBlock,Command:fill ~3 ~-2 ~1 ~4 ~1 ~1 command_block,Riding:{id:MinecartCommandBlock,Command:fill ~3 ~-2 ~1 ~8 ~ ~1 command_block,Riding:{id:MinecartCommandBlock,Command:setblock ~1 ~ ~ wall_sign 4 replace {Text4:"{text:\\\"\\\",clickEvent:{action:\\\"run_command\\\",value:\\\"fill ~ ~-3 ~-2 ~9 ~4 ~2 air\\\"}}"},Riding:{id:MinecartCommandBlock,Command:fill ~2 ~-2 ~-2 ~9 ~1 ~2 stained_glass 3 replace stained_hardened_clay 3,Riding:{id:MinecartCommandBlock,Command:fill ~2 ~-3 ~-2 ~9 ~2 ~2 stained_hardened_clay 3 hollow,Riding:{id:MinecartCommandBlock,Command:gamerule commandBlockOutput false,Riding:{id:MinecartCommandBlock,Riding:{id:FallingSand,Block:activator_rail,Time:1,Riding:{id:FallingSand,Block:redstone_block,Time:1,Riding:{id:FallingSand,Block:stone,Time:1}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}
			</div>
		</section>		
		
		<!--Schluss Tag-->
		<section>
			<div class="bg-wrap"> 
				<div class="bg slide_bg" style="background-image: url('files/wv_1.png');"></div>
				<div class="middle" style="position: absolute; width: 100%; bottom: 10px;">
					<u>Copyright &copy; 2018</u><br>
					<a href="impressum"><u>Impressum</u></a>
				</div>
			</div>
		</section>
	</body>
</html> 