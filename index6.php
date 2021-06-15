<?php
$date1 = strtotime(date("Y-m-d H:i:s", strtotime('15/06/2021 17:55:33')));
$date2 = strtotime(date('Y-m-d H:i:s'));

echo "last time : " . $date1;
echo "<br>now : " . $date2 . '<br>';

echo $date2 - $date1;
