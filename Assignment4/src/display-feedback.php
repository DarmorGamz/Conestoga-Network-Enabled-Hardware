<!--
    Author:	Darren Morrison
    Email:	dmorrison8832@conestogac.on.ca
    SN:		8258832
-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Capstone FEEDBACK</title>

    <!--  Css Styles  -->
    <link rel="stylesheet" type="text/css" href="../assets/css/styles2.css">

    <!-- Favicon   -->
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">

</head>
<body>
<nav>
    <div class="logo-container">
        <a href="../index.html#Home"><img src="../assets/images/logo.png" alt="Company Logo"></a>
    </div>
    <ul>
        <li><a href="../index.html#Home" id="Home">Home</a></li>
        <li><a href="./project.html#Project" id="Project">Project</a></li>
        <li><a href="./about.html#About" id="About">About</a></li>
        <li><a href="./feedback.html#Feedback" id="Feedback">Feedback</a></li>
        <li><a href="./feedback2.html#Feedback2" id="Feedback2">Feedback2</a></li>
        <li><a href="./display-feedback.php#FeedbackData" id="FeedbackData">Feedback Data</a></li>
    </ul>
</nav>

<section style="width: 75%; margin-left: 15%">
    <?php

    ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);

    $oFeedbackDb = new PDO('sqlite:' . '../feedback.sqlite');
    // set the PDO error mode to exception
    $oFeedbackDb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare the SQL statement
    $oQuery = $oFeedbackDb->prepare("SELECT * FROM feedback");

    // Execute the statement
    $oQuery->execute();

    // Fetch all rows as an associative array
    $aRows = $oQuery->fetchAll(PDO::FETCH_ASSOC);

    echo "<table>";
    echo "<tr><th>Name</th><th>Email</th><th>PostalCode</th><th>Message</th></tr>";

    foreach ($aRows as $row) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['postal_code'] . "</td>";
        echo "<td>" . $row['message'] . "</td>";
        echo "</tr>";
    }

    // Close the HTML table
    echo "</table>";
    ?>
</section>

<footer>
    <span>Copyright &copy; 2023 Darren Morrison</span>
</footer>
</body>
</html>