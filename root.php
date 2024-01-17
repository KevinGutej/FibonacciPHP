<!DOCTYPE html>
<html>
<head>
    <title>Square Root Calculator</title>
</head>
<body>

<h2>Square Root Calculator</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];

    if (is_numeric($number)) {
        $squareRoot = sqrt($number);
        echo "<p>The square root of $number is: $squareRoot</p>";
    } else {
        echo "<p>Please enter a valid number.</p>";
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Enter a number: <input type="text" name="number">
    <input type="submit" value="Calculate">
</form>

</body>
</html>