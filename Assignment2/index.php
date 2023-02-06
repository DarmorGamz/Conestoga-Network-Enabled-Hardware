<!--
    Author:	Darren Morrison
    Email:	dmorrison8832@conestogac.on.ca
    SN:		8258832
-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assignment 2</title>

    <!--  Css Styles  -->
    <link rel="stylesheet" type="text/css" href="/Public/assets/css/styles.css">

    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
        }
        .photo {
            width: 90%;
            height: 400px;
            cursor: pointer;
        }
        .photo-container {
            width: 700px;
        }
    </style>
</head>
<body>
    <nav id="NavBar">
        <div class="logo-container">
            <a href="index.php#Home" style="font-size: 20px; color: white">Darmor</a>
        </div>
        <ul>
            <li><a href="index.php#Home" id="Home">Home</a></li>
            <li><a href="matrix.php#Matrix" id="Matrix">Matrix</a></li>
            <li><a href="prime.php#Prime" id="Prime">Prime</a></li>
            <li><a id="NA"><span>N/A</span></a></li>
        </ul>
    </nav>

    <section>
        <div class="container">
            <a href="matrix.php#Matrix" class="photo-container">
                <img class="photo" src="Public/assets/img/matrix.png" alt="Matrix selection">
            </a>
            <a href="prime.php#Prime" class="photo-container">
                <img class="photo" src="Public/assets/img/prime.png" alt="Prime selection">
            </a>
        </div>
    </section>
    <footer id="Footer">
        <span>Copyright &copy; 2023 Darren Morrison</span>
    </footer>

</body>
</html>
