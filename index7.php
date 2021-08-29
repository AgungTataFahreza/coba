<?php
$array = [0, 1];

try {
    echo $array[2];
} catch (Throwable $e) {
    echo 'error';
}
