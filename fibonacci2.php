<?php

function fibonacci($n) {
    if (!is_int($n) || $n <= 0) {
        return "Please enter a positive integer greater than zero.";
    }

    if ($n === 1) {
        return [0];
    }

    $fibonacciSequence = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $fibonacciSequence[] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
    }

    return $fibonacciSequence;
}

function multiplyBy($sequence, $factor) {
    return array_map(function($num) use ($factor) {
        return $num * $factor;
    }, $sequence);
}

function sortArray(&$sequence, $ascending = true) {
    $length = count($sequence);
    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = 0; $j < $length - $i - 1; $j++) {
            if (($ascending && $sequence[$j] > $sequence[$j + 1]) || (!$ascending && $sequence[$j] < $sequence[$j + 1])) {
                $temp = $sequence[$j];
                $sequence[$j] = $sequence[$j + 1];
                $sequence[$j + 1] = $temp;
            }
        }
    }
}

function arrayToString($sequence) {
    return implode(", ", $sequence);
}

function sumOfSequence($sequence) {
    return array_sum($sequence);
}

function filterEven($sequence) {
    return array_filter($sequence, function($num) {
        return $num % 2 === 0;
    });
}

function filterOdd($sequence) {
    return array_filter($sequence, function($num) {
        return $num % 2 !== 0;
    });
}

$numberOfTerms = 10;
$fibonacciSequence = fibonacci($numberOfTerms);

if (is_array($fibonacciSequence)) {
    $fibonacciMultiplied = multiplyBy($fibonacciSequence, 2);
    
    sortArray($fibonacciMultiplied, false);
    
    $sequenceString = arrayToString($fibonacciMultiplied);
    
    $sequenceSum = sumOfSequence($fibonacciMultiplied);
    
    $evenNumbers = arrayToString(filterEven($fibonacciMultiplied));
    $oddNumbers = arrayToString(filterOdd($fibonacciMultiplied));
    
    echo "Fibonacci Sequence: $sequenceString\n";
    echo "Sum of Sequence: $sequenceSum\n";
    echo "Even Numbers: $evenNumbers\n";
    echo "Odd Numbers: $oddNumbers\n";
} else {
    echo $fibonacciSequence;
}

?>
