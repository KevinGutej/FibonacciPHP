<?php

function fibonacci($n) {
    if ($n <= 0) {
        return "Please enter a positive integer greater than zero.";
    }

    $fibonacciSequence = [0, 1];

    for ($i = 2; $i < $n; $i++) {
        $fibonacciSequence[$i] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
    }

    if ($n == 1) {
        $fibonacciSequence = [0];
    }

    return $fibonacciSequence;
}

function multiplyByTwo($sequence) {
    $multipliedSequence = [];
    for ($i = 0; $i < count($sequence); $i++) {
        $multipliedSequence[$i] = $sequence[$i] * 2;
    }
    return $multipliedSequence;
}

function sortDescending(&$sequence) {
    $length = count($sequence);
    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = 0; $j < $length - $i - 1; $j++) {
            if ($sequence[$j] < $sequence[$j + 1]) {
                $temp = $sequence[$j];
                $sequence[$j] = $sequence[$j + 1];
                $sequence[$j + 1] = $temp;
            }
        }
    }
}

function arrayToString($sequence) {
    $string = "";
    for ($i = 0; $i < count($sequence); $i++) {
        $string .= $sequence[$i];
        if ($i < count($sequence) - 1) {
            $string .= ", ";
        }
    }
    return $string;
}

$numberOfTerms = 10;
$fibonacciSequence = fibonacci($numberOfTerms);

if (is_array($fibonacciSequence)) {
    $fibonacciMultiplied = multiplyByTwo($fibonacciSequence);
    sortDescending($fibonacciMultiplied);
    echo arrayToString($fibonacciMultiplied);
} else {
    echo $fibonacciSequence;
}

?>
