	<style>
	#myInput {
		border: 0px;
		z-index: 3;
		right: 0px;
		left: 0px;
		width: 100%;
		display: block;
		height: 50px;
		
		font-size: 20px;
		color: white;
		
		padding: 0px 0px 0px 135px;
		background-position: 10px 10px;
		background-repeat: no-repeat;
		background-image: url('files/nav.png');
		background-size: 80px;
		background-color: black;
	}
	
	#myInput::placeholder {
		color: white;
	}
	
	.search-dropdown {
		position: fixed;
		display: inline-block;
		right: 0px;
		left: 0px;
		top: -1px;
		width: 100%;
		height: 50px;
		z-index: 4;
	}

	.search-dropdown-content {
		position: absolute;
		
		z-index: 1;
		right: 0px;
		left: 0px;
		
		float: left;
		width: 100%;
		z-index: 2;
		position: relative;
	}
	
	@media screen and (min-width: 1000px) {
		.search-dropdown-content {
			float: left;
			width: 20%;
		}
	}
	
	.search-dropdown-content::-webkit-scrollbar {
		width: 0px;  /* remove scrollbar space */
		background: transparent;  /* optional: just make scrollbar invisible */
	}
	
	@media screen and (min-width: 850px) {
		.container {
			margin-right: 6%;
			margin-left: 6%;
		}
	}

	.search-dropdown-content a {
		color: black;
		padding: 12px 16px;
		text-decoration: none;
		display: block;
	}
	
	.search-dropdown-content b {
		color: black;
		text-decoration: none;
		display: block;
	}
	
	.container::-webkit-scrollbar {
		width: 0px;  /* remove scrollbar space */
		background: transparent;  /* optional: just make scrollbar invisible */
	}
	
	@media (max-height: 900px) {
		.container {
			max-height: 600px;
		}
	}	
	
	@media (max-height: 800px) {
		.container {
			max-height: 500px;
		}
	}
	
	@media (max-height: 700px) {
		.container {
			max-height: 400px;
		}
	}
	
	@media (max-height: 600px) {
		.container {
			max-height: 300px;
		}
	}
	
	@media (max-height: 500px) {
		.container {
			max-height: 200px;
		}
	}
	
	@media (max-height: 400px) {
		.container {
			max-height: 100px;
		}
	}
	
	@media (max-height: 300px) {
		.container {
			max-height: 50px;
		}
	}
	
	.search-dropdown a:hover {
		background-color: #ddd;
	}

	.hover {
		top: -1300px;
		transition: 1s;
		z-index: 2;
	}
	
	@media screen and (min-width: 1000px) {
		.hover {
			top: -600px;
		}
	}
	
	@media screen and (min-width: 1000px) {
		.column {
			float: left;
			width: 20%;
		}
	}
	
	
	.fall:hover .hover {
		z-index: 2;
		top: 0px;
	}
	
	@media screen and (max-width: 1000px) {
		.fall .container {
			overflow: scroll;
		}
		
		.container {
			position: relative;
			top: -600px;
		}
		
		.fall:hover .container {
			top: 0px;
		}
	}
	
	.co1 {
		background-color: #ffffff;
	}
	.co2 {
		background-color: #fbfbfb;
	}
	.co3 {
		background-color: #f7f7f7;
	}
	.co4 {
		background-color: #f3f3f3;
	}
	
	.row:after {
		content: "";
		display: table;
		clear: both;
	}
	
	.keywords {
		visibility: hidden;
		position: absolute;
	}
	
	#scrollNav {
		transition: top 2.0s;
	}
	</style>
	
	<div class="search-dropdown fall" id="scrollNav">
		<input type="text" placeholder="Filter the menu..." id="myInput" onkeyup="filterFunction()">
		<div class="container" id="filter">
			<div class="co1 fall search-dropdown-content hover row">
				<a href="index"><b>Home!</b></a>
				<a href="index#varo">Varo</a>
				<a href="index#map">Live Map</a>
				<a href="index#was">Info</a>
				<a href="index#bewerben">Bewerbung</a>
			</div>	
			<div class="co2 fall search-dropdown-content hover row">
				<a href="blog"><b>Blog!</b>
				<a href="blog#entry7">Suchfunktion!</a>
				<a href="blog#entry6">Neuer Look <div class="keywords">blog blogs eintrag 6</div></a>
				<a href="blog#entry5">Animation <div class="keywords">blog blogs eintrag 5</div></a>
				<a href="blog#entry4">Restarant Simularor <div class="keywords">blog blogs eintrag 4</div></a>
				<a href="blog#entry3">Neue Mapidee <div class="keywords">blog blogs eintrag 3</div></a>
				<a href="blog#entry2">Custom crafting <div class="keywords">blog blogs eintrag 2</div></a>
				<a href="blog#entry1">Karottenbaum <div class="keywords">blog blogs eintrag 1</div></a>
			</div>
			<div class="co3 fall search-dropdown-content hover row">	
				<a><b>Contact us!</b></a>
				<a href="https://discord.gg/FaNbwmN" target="_blank">Discord</a>
				<a href="http://www.teamspeak.com/invite/134.255.235.53/" target="_blank">Teamspeak</a>
				<a href="https://www.youtube.com/channel/UCX_cIP294aOgmMr6m15a2VQ" target="_blank">YouTube</a>
				<a href="https://twitter.com/KasparLaser" target="_blank">Twitter</a>
			</div>
			<div class="co4 fall search-dropdown-content hover row">	
				<a><b>Creations!</b></a>
				<a href="overrun">OverRun</a>
				<a href="waitingVillager">Queues</a>
			</div>
			<div class="co3 fall search-dropdown-content hover row">
				<a><b>Others!</b></a>
				<a href="team">Team!<div class="keywords">members</div></a>	
				<a href="team">Felix</a>
				<a href="team">Tim</a>
				<a href="blog">News</a>
			</div>
		</div>
	</div>



