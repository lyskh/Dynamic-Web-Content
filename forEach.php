<!DOCTYPE html>
<html>
<head>
    <title>Grocery Items</title>
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
<h1>🛒🍉Grocery Items🧇🧾</h1>
</div>
<div class = "formEach">
<form method="post">
    <label class="container"><input type="checkbox" name="items[]" value="Apple"> Apple
    <span class="checkmark"></span>
    </label><br>
    <label class="container"><input type="checkbox" name="items[]" value="Banana"> Banana
    <span class="checkmark"></span>
    </label><br>
    <label class="container"><input type="checkbox" name="items[]" value="Orange"> Orange
    <span class="checkmark"></span>
    </label><br>
    <label class="container"><input type="checkbox" name="items[]" value="Carrot"> Carrot
    <span class="checkmark"></span>
    </label><br>
    <label class="container"><input type="checkbox" name="items[]" value="Broccoli"> Broccoli
    <span class="checkmark"></span>
    </label><br>
    <button type="submit">Submit</button>
</form>
</div>
<div class = "phptwo">
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['items'])) {
        echo "<h3>Fruits:</h3>";
        echo "<ul>";
        foreach ($_POST['items'] as $item) {
            if ($item === 'Apple' || $item === 'Banana' || $item === 'Orange') {
                echo "<li>$item</li>";
            } 
        }
        echo "</ul>";
    } else {
        echo "<p>No fruits selected.</p>";
    }
}
?>
</div>

</body>
</html>
