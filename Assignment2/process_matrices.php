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

        $_SESSION['Time'] = time();

        // Clear post error if it's set.
        if(!empty($_SESSION['Error'])) { unset($_SESSION['Error']); }

        function GoToHomePage(string $sError) {
            if(!empty($sError)) $_SESSION['Error'][] = $sError;
            header("Location:matrix.php#Matrix");
            exit();
        }

        $sTableRowOpen = '<tr>';
        $sTableRowClose = '</tr>';

        $sTableColumnOpen = '<td>';
        $sTableColumnClose = '</td>';

        $sBreak = '<br>';

        // Matrix = [[A11, A12][A21, A22]]
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $aMatrixA = array([$_POST['a11'], $_POST['a12']], [$_POST['a21'], $_POST['a22']]);
            $aMatrixB = array([$_POST['b11'], $_POST['b12']], [$_POST['b21'], $_POST['b22']]);

            // Ensure entered data is valid.
            for ($i = 0; $i < 2; $i++) {
                for ($j = 0; $j < 2; $j++) {
                    if (empty($aMatrixA[$i][$j]) || empty($aMatrixB[$i][$j])) {
                        GoToHomePage("Empty field(s) found");
                    } else if (!is_numeric($aMatrixA[$i][$j]) || !is_numeric($aMatrixB[$i][$j])) {
                        GoToHomePage("Non-numeric value(s) found");
                    }
                }
            }

            // Perform matrix operation.
            $product = array([0, 0], [0, 0]);
            for ($i = 0; $i < 2; $i++) {
                for ($j = 0; $j < 2; $j++) {
                    for ($k = 0; $k < 2; $k++) {
                        $product[$i][$j] += $aMatrixA[$i][$k] * $aMatrixB[$k][$j];
                    }
                }
            }

            // Matrix A.
            echo '<h3>Matrix A</h3>';
            echo '<table border="1" width="200px" style="background-color: white; color: black">';
            for ($i = 0; $i < 2; $i++) {
                echo $sTableRowOpen;
                for ($j = 0; $j < 2; $j++) {
                    echo $sTableColumnOpen . $aMatrixA[$i][$j] . $sTableColumnClose;
                }
                echo $sTableRowClose;
            }
            echo '</table>';
            echo $sBreak;

            // Matrix B.
            echo '<h3>Matrix B</h3>';
            echo '<table border="1" width="200px" style="background-color: white; color: black">';
            for ($i = 0; $i < 2; $i++) {
                echo $sTableRowOpen;
                for ($j = 0; $j < 2; $j++) {
                    echo $sTableColumnOpen . $aMatrixB[$i][$j] . $sTableColumnClose;
                }
                echo $sTableRowClose;
            }
            echo '</table>';
            echo $sBreak;

            // Product Matrix
            echo '<h3>Product of A and B</h3>';
            echo '<table border="1" width="200px" style="background-color: white; color: black">';
            for ($i = 0; $i < 2; $i++) {
                echo $sTableRowOpen;
                for ($j = 0; $j < 2; $j++) {
                    echo $sTableColumnOpen . $product[$i][$j] . $sTableColumnClose;
                }
                echo $sTableRowClose;
            }
            echo '</table>';
        }
        ?>
        <br>
        <a href="matrix.php#Matrix" id="Matrix"><button>Reset</button></a>
    </section>

    <footer id="Footer">
        <span>Copyright &copy; 2023 Darren Morrison</span>
    </footer>

</body>
</html>



