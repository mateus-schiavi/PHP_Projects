<?php
function fibonacci($n) {
    $fib = array();
    $fib[0] = 0;
    $fib[1] = 1;

    for ($i=2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }

    return $fib;
}

$n = 10;
$result = fibonacci($n);

foreach($result as $number) {
    echo $number . " ";
}
?>