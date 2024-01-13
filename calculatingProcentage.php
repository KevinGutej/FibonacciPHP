<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percentage Calculator</title>
</head>

<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];

        if (is_numeric($number1) && is_numeric($number2)) {
            $percentage = ($number1 / $number2) * 100;
            echo "<p>{$number1} is {$percentage}% of {$number2}</p>";
        } else {
            echo "<p>Please enter a valid number</p>";
        }
    }
    ?>

    <form method="post">
        <label for="number1">Enter the first number:</label>
        <input type="text" name="number1" required><br>

        <label for="number2">Enter the second number:</label>
        <input type="text" name="number2" required><br>

        <input type="submit" value="Calculate Percentage">
    </form>

</body>

</html>