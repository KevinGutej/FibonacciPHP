<?php
/*multiply each number by 2 and print it from biggest to smallest*/ 

function fibonacci($n) {
    $fibonacciSequence = array();

    if ($n >= 1) {
        $fibonacciSequence[] = 0;
    }
    if ($n >= 2) {
        $fibonacciSequence[] = 1;
    }

    for ($i = 2; $i < $n; $i++) {
        $fibonacciSequence[] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
    }

    return $fibonacciSequence;
}

$numberOfTerms = 10;
$fibonacciSequence = fibonacci($numberOfTerms);

$fibonacciMultiplied = array_map(function ($value) {
    return $value * 2;
}, $fibonacciSequence);

rsort($fibonacciMultiplied);

implode(', ', $fibonacciMultiplied);
?>