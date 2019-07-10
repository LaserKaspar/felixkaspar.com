<head>
	<!--Fonts-->
	<link href="https://fonts.googleapis.com/css?family=Spicy+Rice" rel="stylesheet"> <!--font-family: 'Spicy Rice', cursive;-->
	<link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet"> <!--font-family: 'Mali', cursive;-->
	<link href="https://fonts.googleapis.com/css?family=Patrick+Hand" rel="stylesheet"> <!--font-family: 'Patrick Hand', cursive;-->
	
	
	<!--General Styles-->
	<link rel="stylesheet" href="style02.css" type="text/css"> <!--normal Style-->
	<title>Shadowflamed Web</title>
	<meta charset ="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="files/sf_logo.png">

	<link rel="stylesheet" href="backToTop3_style.css" type="text/css"> <!--back to top-->

	<!--SCRIPTS-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" type="text/javascript"></script> <!--JQuary-->
	
	<script> 
		//dropdown-text
		function coll(id) {
			var target = document.getElementById(id);
			
			target.classList.toggle("active");
			var content = target.nextElementSibling;
			
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

<body class="slides">
