<?php

$timeStamp = strtotime('18-12-2020 10:11:12');

if (date('Y-m-d') == date('Y-m-d', $timeStamp)) {
    echo date('H:i', $timeStamp);
} elseif (date('d-m-Y', $timeStamp) == date('d-m-Y', strtotime('yesterday'))) {
    echo 'Yesterday';
} elseif ($timeStamp > strtotime('-1 week')) {
    echo date('D', $timeStamp);
} elseif (date('Y', $timeStamp) == date('Y')) {
    echo date('d M', $timeStamp);
} else {
    echo date('d.m.Y', $timeStamp);
}
