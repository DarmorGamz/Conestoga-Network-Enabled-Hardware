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
    <title>Feedback Information</title>
</head>
<body>
    <?php
    echo '<table>';
    echo '<tr>';
    echo '<th>Name</th>';
    echo '<th>Value</th>';
    echo '</tr>';

    $i = 1;
    foreach ($_POST as $name => $value) {
        echo '<tr';
        if ($i % 2 == 0) { echo ' style="background-color: lightgray;"'; }
        echo '>';
        echo '<td style="padding-right: 25px">' . htmlspecialchars($name) . '</td>';
        echo '<td style="padding-right: 25px">' . htmlspecialchars($value) . '</td>';
        echo '</tr>';
        $i++;
    }

    echo '</table>';
    ?>
    <a href="feedback.html#Feedback"><button>Return</button></a>
</body>
</html>
