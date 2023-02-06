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
    <title>Prime</title>

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

            $_SESSION['Time'] = time();

            // Clear post error if it's set.
            if(!empty($_SESSION['Error'])) { unset($_SESSION['Error']); }

            function GoToHomePage(string $sError) {
                if(!empty($sError)) $_SESSION['Error'][] = $sError;
                header("Location:prime.php#Prime");
                exit();
            }

            function is_prime($n) {
                for ($i = 2; $i <= sqrt($n); $i++) {
                    if ($n % $i == 0) return false;
                }
                return true;
            }

            $iFirst = $_POST["first_number"];
            $iSecond = $_POST["second_number"];

            // Validate data.
            if (!is_numeric($iFirst) || !is_numeric($iSecond) || !$iFirst > 0 || !$iSecond > 0) {
                GoToHomePage("Invalid input. Please enter positive integers.");
            }

            // Check which value is largest.
            if($iSecond < $iFirst) {
                $iTmp = $iFirst;
                $iFirst = $iSecond;
                $iSecond = $iTmp;
            }
            echo "<br>";
            echo "<table border='1' style='background-color: white; color: black'>";
            echo "<tr><th>Prime Numbers between ($iFirst-$iSecond)</th></tr>";
            for ($i = $iFirst; $i <= $iSecond; $i++) {
                if (is_prime($i)) echo "<tr><td>" . $i . "</td></tr>";
            }
            echo "</table>";
        ?>
        <br>
        <a href="prime.php#Prime" id="Prime"><button>Reset</button></a>
    </section>

    <footer id="Footer">
        <span>Copyright &copy; 2023 Darren Morrison</span>
    </footer>

</body>
</html>
