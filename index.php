<?php
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


$lenghtOfSeq = 10;
$fibonacciSequence = fibonacci($lenghtOfSeq);

echo "Fibonacci Sequence (first $lenghtOfSeq terms): " . implode(', ', $fibonacciSequence);
?>