<head>
	<!--Fonts-->
	<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet"> <!--font-family: 'Righteous', cursive;-->
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet"> <!--font-family: 'Varela Round', sans-serif;-->

	<!--General Styles-->
	<link rel="stylesheet" href="style04.css" type="text/css"> <!--normal Style-->
	<title>Shadowflamed Web</title>
	<meta charset ="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="files/sf_logo.png">

	<!--SCRIPTS-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> <!--JQuary-->
	
	<script> 
		//collapsible
		function coll(id) {
			var target = document.getElementById(id);
			var content = document.getElementById(id + "_c");

			target.classList.toggle("active");
			
			if (content.style.maxHeight)
			{
				content.style.maxHeight = null;
			}
			else
			{
				content.style.maxHeight = content.scrollHeight + "px";
			}
		}
	</script>
</head>

<body>
	<div class="topNav">
		<a href="index.php#Welcome"><img src="files/sf_logo.png" alt="O"></a>
		<a href="index.php#Sheeps"><img src="files/she_logo.png" alt="O"></a>
		<a href="index.php#CubeRun"><img src="files/cr_logo.png" alt="O"></a>
		<a href="index.php#SaveUrsula"><img src="files/su_logo.png" alt="O"></a>
	</div>