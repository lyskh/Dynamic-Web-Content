<!DOCTYPE html>
<html>
<head>
    <title>Numbered List Generator</title>
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
<h1>Numbered List Generator</h1>
</div

<div class="form">
    <form method="post">
        <div class="number">
            <label for="number">Enter a number (N): </label>
            <input type="number" id="number" name="number" min="1" required>
            <button type="submit">Generate List</button>
        </div>  
    </form>
</div>

<div class="php">
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Retrieve the value of N from the form
        $N = $_POST["number"];

        // Display the numbered list
        echo "<h3>Numbered List from 1 to $N:</h3>";
        echo "<ul>";
        for ($i = 1; $i <= $N; $i++) {
            echo "<li>$i</li>, ";
        }
        echo "</ul>";
    }
    ?>
</div>

</body>
</html>
