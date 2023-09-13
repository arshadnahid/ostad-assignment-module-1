<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
</head>
<body>
    <h1>Temperature Converter</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user input
        $temperature = $_POST["temperature"];
        $conversionType = $_POST["conversionType"];

        // Function to convert from Celsius to Fahrenheit
        function celsiusToFahrenheit($celsius) {
            return ($celsius * 9/5) + 32;
        }

        // Function to convert from Fahrenheit to Celsius
        function fahrenheitToCelsius($fahrenheit) {
            return ($fahrenheit - 32) * 5/9;
        }

        // Perform the conversion based on user selection
        if ($conversionType == "celsiusToFahrenheit") {
            $result = celsiusToFahrenheit($temperature);
            echo "<p>$temperature &deg;C is equal to $result &deg;F</p>";
        } elseif ($conversionType == "fahrenheitToCelsius") {
            $result = fahrenheitToCelsius($temperature);
            echo "<p>$temperature &deg;F is equal to $result &deg;C</p>";
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="temperature">Enter Temperature:</label>
        <input type="number" name="temperature" id="temperature" required>
        <br>

        <label for="conversionType">Select Conversion:</label>
        <select name="conversionType" id="conversionType">
            <option value="celsiusToFahrenheit">Celsius to Fahrenheit</option>
            <option value="fahrenheitToCelsius">Fahrenheit to Celsius</option>
        </select>
        <br>

        <input type="submit" value="Convert">
    </form>
</body>
</html>
