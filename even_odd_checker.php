<!DOCTYPE html>
<html>
<head>
    <title>Even or Odd Checker</title>
</head>
<body>
<h1>Even or Odd Checker</h1>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $number = $_POST["number"];

    // Check if the number is even or odd
    if ($number % 2 == 0) {
        $result = "even";
    } else {
        $result = "odd";
    }

    echo "<p>The number $number is $result.</p>";
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="number">Enter a Number:</label>
    <input type="number" name="number" required>
    <br>

    <input type="submit" value="Check">
</form>
</body>
</html>
