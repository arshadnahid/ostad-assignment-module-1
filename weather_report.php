<!DOCTYPE html>
<html>
<head>
    <title>Weather Report</title>
</head>
<body>
<h1>Weather Report</h1>

<?php
// Define the temperature variable
$temperature = 20; // Change this to the actual temperature in Celsius

// Provide weather information based on temperature

if ($temperature <= 0) {
    echo "<p>It's freezing!</p>";
} elseif ($temperature > 0 && $temperature < 20) {
    echo "<p>It's cool.</p>";
} elseif ($temperature >= 20) {
    echo "<p>It's warm.</p>";
}
?>

<p>The current temperature is <?php echo $temperature; ?> &deg;C.</p>
</body>
</html>
