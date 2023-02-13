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
    <title>Feedback2</title>
</head>
<body>
    <?php
        function PrintError($sError) {
            echo "<span style='color: red'>$sError</span> ";
            echo "<a href=\"feedback2.html#Feedback2\"><button>Return</button></a>";
            die();
        }
        // Init vars.
        $name = $email = $postal_code = $message = "";
        if(!empty($_POST["name"])) $name = $_POST["name"];
        if(!empty($_POST["email"])) $email = $_POST["email"];
        if(!empty($_POST["postal-code"])) $postal_code = $_POST["postal-code"];
        if(!empty($_POST["message"])) $message = $_POST["message"];

        // Check values.
        if(empty($name) || empty($email) || empty($postal_code) || !isset($message)) { PrintError("Value missing"); }

        if (!preg_match("/^[a-zA-Z]+$/", $name)) { PrintError("At least one letter is required and accepts upper and lower case letters."); }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !preg_match("/@conestogac.on.ca$/", $email)) { PrintError("Required and accepts only Conestoga College email addresses."); }

        if (!preg_match("/^[A-Za-z]\d[A-Za-z][ -]?\d[A-Za-z]\d$/", $postal_code)) { PrintError("Required and accepts a valid postal code."); }

        if (!empty($message) && strlen($message) > 200) { PrintError("Optional and accepts no more than 200 characters."); }

        // If this point is reached, data is valid.
        echo "Feedback submitted."
    ?>
    <a href="feedback2.html#Feedback2"><button>Return</button></a>
</body>
</html>
