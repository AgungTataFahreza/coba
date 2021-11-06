<?php

function fizzBuzz($number)
{
    if ($number % 15 == 0) {
        return "fizzBuzz";
    } elseif ($number % 3 == 0) {
        return "fizz";
    } elseif ($number % 5 == 0) {
        return "buzz";
    } else {
        return $number;
    }
}

for ($i = 0; $i < 100; $i++) {
    echo fizzBuzz($i);
    echo "<br>";
}
