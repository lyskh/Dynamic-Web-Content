<!DOCTYPE html>
<html>
<head>
    <title>Message Display</title>
    <link rel="stylesheet" type="text/css" href="forStyle.css">
</head>
<body>
<header>
<div class="logo">
                    <br><img src="gif1.gif">
                </div>
    <div class="navbar">
                <ul>
                    <li class="active"><a href="Loop.php">BACK</a></li>
                </ul>
            </div>
    </header>
    <div class="title">
<h1>Message Display</h1>
</div>
<div class="form">
<form method="post">
    <label class ="prompt" for="message">Enter a short message: </label>
    <input type="text" id="message" name="message" required><br>
    <label class="prompt" for="count">Enter the number of times to display the message (M): </label>
    <div class ="nom"><input type="number" id="count" name="count" min="1" required></div>
    <button type="submit">Display Message</button>
</form>
</div>

<div class = "phptwo">
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the message and count (M) from the form
    $message = $_POST["message"];
    $M = $_POST["count"];

    // Display the message M times using a while loop
    echo "<h3>Displaying '$message' $M times:</h3>";
    $i = 0;
    while ($i < $M) {
        echo "<p>$message</p>";
        $i++;
    }
}
?>
</div>

</body>
</html>
