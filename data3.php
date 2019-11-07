<head>
	<!--Fonts-->
	<link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Mono&display=swap" rel="stylesheet">

	<!--General Styles-->
	<link rel="stylesheet" href="style01.css" type="text/css"> <!--normal Style-->
	<title>Felix Kaspar</title>
	<meta charset ="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="files/sf_logo_c.png">

	<!--SCRIPTS-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> <!--JQuary-->
	
	<script> 
		//collapsible
		function coll(id) {
			var target = document.getElementById(id);
			var content = document.getElementById(id + "_c");

			content.classList.toggle("active");
			
			if (content.style.maxHeight)
			{
				content.style.maxHeight = null;
			}
			else
			{
				content.style.maxHeight = content.scrollHeight + "px";
			}
		}

		// When the user scrolls the page, execute myFunction 
		window.onscroll = function() {progressBar()};

		function progressBar() {
			var scroll = document.body.scrollTop || document.documentElement.scrollTop;
			var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
			var distance = (scroll / height) * 100;
			document.getElementById("progressBar").style.width = distance + "%";
		}
	</script>
</head>

<body>
	<!--
	<div class="topNav" id="topNav">
		<a href="#Pad"><img src="files/pad_logo.png" alt="O"></a>
		<a href="#BurgerMaker"><img src="files/burger.png" alt="O"></a>
		<a href="#Pts"><img src="files/pts_logo.png" alt="O"></a>
		<a href="#Lid"><img src="files/lid_logo.png" alt="O"></a>	
	</div>
	-->
	<div class="progress-container">
		<div class="progress-bar" id="progressBar"></div>
	</div>