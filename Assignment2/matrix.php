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
    <title>Matrix</title>

    <!--  Css Styles  -->
    <link rel="stylesheet" type="text/css" href="/Public/assets/css/styles.css">
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
        <?php
            // Start the session
            session_start();

            // Session values have expired. 3seconds.
            if(time() > $_SESSION['Time']+3) { unset($_SESSION); }
        ?>

        <?php // Print any validation errors.
        if(!empty($_SESSION['Error'])) {
            foreach($_SESSION['Error'] as $sError) {
                echo "<p style='color: red'>*$sError</p>";
            }
        }
        ?>

        <form action="process_matrices.php" method="post">
            <h3>Matrix A</h3>
            <input type="text" name="a11" id="a11">
            <input type="text" name="a12" id="a12">
            <br>
            <input type="text" name="a21" id="a21">
            <input type="text" name="a22" id="a22">
            <br><br>
            <h3>Matrix B</h3>
            <input type="text" name="b11" id="b11">
            <input type="text" name="b12" id="b12">
            <br>
            <input type="text" name="b21" id="b21">
            <input type="text" name="b22" id="b22">
            <br><br>
            <input type="submit" value="Submit">
        </form>
    </section>

    <footer id="Footer">
        <span>Copyright &copy; 2023 Darren Morrison</span>
    </footer>

</body>
</html>
