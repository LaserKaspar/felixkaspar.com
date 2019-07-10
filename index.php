<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mine / Code</title>
	<link rel="icon" type="image/png" href="files/sf_logo_c.png">

    <style>
        body {
            margin: 0px;
            overflow: hidden;
        }

        .flex {
            display: flex;
            align-items: center;
            height: 100vh;
        }

        .half {
            position: relative;
            width: 50%;

            text-align: center;
            overflow: hidden;
        }

        section {
            width: 100%;
        }

        a {
            color: white;
            font-family: fantasy;
            font-size: 30px;
            text-decoration: none;
        }

        .bg_code {
            background-image: url(files/code.png);
            background-size: auto 100%;
            background-position: center;
            transition-duration: 0.5s;
        }
        .bg_code:hover {
            background-size: auto 110%;
        }

        .bg_mc {
            background-image: url(files/mc.png);
            background-size: auto 100%;
            background-position: center;
            transition-duration: 0.5s;
        }
        .bg_mc:hover {
            background-size: auto 110%;
        }
    </style>
</head>
<body>
    <div class="flex">
        <a class="half flex bg_mc" href="minecraft\">
            <section>
                Minecraft
            </section>
        </a>
        <a class="half flex bg_code" href="code/index.php#Home">
            <section>
                Code
            </section>
        </a>
    </div>
</body>
</html>