<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
<h1>Simple Calculator</h1>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];

    // Perform the selected operation
    switch ($operation) {
        case "addition":
            $result = $num1 + $num2;
            break;
        case "subtraction":
            $result = $num1 - $num2;
            break;
        case "multiplication":
            $result = $num1 * $num2;
            break;
        case "division":
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Division by zero is not allowed.";
            }
            break;
        default:
            $result = "Invalid operation selected.";
    }

    echo "<p>Result: $result</p>";
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="num1">Enter Number 1:</label>
    <input type="number" name="num1" required>
    <br>

    <label for="num2">Enter Number 2:</label>
    <input type="number" name="num2" required>
    <br>

    <label for="operation">Select Operation:</label>
    <select name="operation" id="operation">
        <option value="addition">Addition</option>
        <option value="subtraction">Subtraction</option>
        <option value="multiplication">Multiplication</option>
        <option value="division">Division</option>
    </select>
    <br>

    <input type="submit" value="Calculate">
</form>
</body>
</html>
