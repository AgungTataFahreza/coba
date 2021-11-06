<?php

function difference($time2, $time1)
{
    $arr_time2 = explode('.', $time2);
    $arr_time1 = explode('.', $time1);

    // $date1 = strtotime("2018-09-19 22:45:00.123");
    // $date2 = strtotime("2018-09-21 10:44:01.998");

    // Formulate the Difference between two dates
    $diff = abs(strtotime($arr_time2[0]) - strtotime($arr_time1[0]));


    // To get the year divide the resultant date into
    // total seconds in a year (365*60*60*24)
    $years = floor($diff / (365 * 60 * 60 * 24));


    // To get the month, subtract it with years and
    // divide the resultant date into
    // total seconds in a month (30*60*60*24)
    $months = floor(($diff - $years * 365 * 60 * 60 * 24)
        / (30 * 60 * 60 * 24));


    // To get the day, subtract it with years and 
    // months and divide the resultant date into
    // total seconds in a days (60*60*24)
    $days = floor(($diff - $years * 365 * 60 * 60 * 24 -
        $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));


    // To get the hour, subtract it with years, 
    // months & seconds and divide the resultant
    // date into total seconds in a hours (60*60)
    $hours = floor(($diff - $years * 365 * 60 * 60 * 24
        - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24)
        / (60 * 60));

    $hours2 = floor($diff / (60 * 60));
    // echo $hours2;
    // echo "<br>";


    // To get the minutes, subtract it with years,
    // months, seconds and hours and divide the 
    // resultant date into total seconds i.e. 60
    $minutes = floor(($diff - $years * 365 * 60 * 60 * 24
        - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24
        - $hours * 60 * 60) / 60);


    // To get the minutes, subtract it with years,
    // months, seconds, hours and minutes 
    $seconds = floor(($diff
        - $years * 365 * 60 * 60 * 24
        - $months * 30 * 60 * 60 * 24
        - $days * 60 * 60 * 24
        - $hours * 60 * 60
        - $minutes * 60));

    // Print the result
    // printf(
    //     "%d years, %d months, %d days, %d hours, "
    //         . "%d minutes, %d seconds",
    //     $years,
    //     $months,
    //     $days,
    //     $hours,
    //     $minutes,
    //     $seconds
    // );
    $time = pad($hours2) . ':' . pad($minutes) . ':' . pad($seconds);

    $diff_miliseconds = $arr_time2[1] - $arr_time1[1];
    if ($diff_miliseconds < 0) {
        $time = date('H:i:s', strtotime('-1 seconds', strtotime($time)));
        $diff_miliseconds += 1000;
    }

    return $time . '.' . $diff_miliseconds;
}

function amount($time2, $time1)
{
    $arr_time2 = explode('.', $time2);
    $arr_time1 = explode('.', $time1);

    // $date1 = strtotime("2018-09-19 22:45:00.123");
    // $date2 = strtotime("2018-09-21 10:44:01.998");

    // Formulate the Difference between two dates
    $diff = abs(toSeconds($arr_time2[0]) + toSeconds($arr_time1[0]));


    // To get the year divide the resultant date into
    // total seconds in a year (365*60*60*24)
    $years = floor($diff / (365 * 60 * 60 * 24));


    // To get the month, subtract it with years and
    // divide the resultant date into
    // total seconds in a month (30*60*60*24)
    $months = floor(($diff - $years * 365 * 60 * 60 * 24)
        / (30 * 60 * 60 * 24));


    // To get the day, subtract it with years and 
    // months and divide the resultant date into
    // total seconds in a days (60*60*24)
    $days = floor(($diff - $years * 365 * 60 * 60 * 24 -
        $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));


    // To get the hour, subtract it with years, 
    // months & seconds and divide the resultant
    // date into total seconds in a hours (60*60)
    $hours = floor(($diff - $years * 365 * 60 * 60 * 24
        - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24)
        / (60 * 60));

    $hours2 = floor($diff / (60 * 60));
    // echo $hours2;
    // echo "<br>";


    // To get the minutes, subtract it with years,
    // months, seconds and hours and divide the 
    // resultant date into total seconds i.e. 60
    $minutes = floor(($diff - $years * 365 * 60 * 60 * 24
        - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24
        - $hours * 60 * 60) / 60);


    // To get the minutes, subtract it with years,
    // months, seconds, hours and minutes 
    $seconds = floor(($diff
        - $years * 365 * 60 * 60 * 24
        - $months * 30 * 60 * 60 * 24
        - $days * 60 * 60 * 24
        - $hours * 60 * 60
        - $minutes * 60));

    // Print the result
    // printf(
    //     "%d years, %d months, %d days, %d hours, "
    //         . "%d minutes, %d seconds",
    //     $years,
    //     $months,
    //     $days,
    //     $hours,
    //     $minutes,
    //     $seconds
    // );
    // echo $diff;
    // echo "<br>";
    $time = pad($hours2) . ':' . pad($minutes) . ':' . pad($seconds);

    $diff_miliseconds = $arr_time2[1] + $arr_time1[1];
    if ($diff_miliseconds > 1000) {
        $time = date('H:i:s', strtotime('+1 seconds', strtotime($time)));
        $diff_miliseconds -= 1000;
    }

    return $time . '.' . $diff_miliseconds;
}

function amount_array($array)
{
    // $hasil = '00:00:00.000';
    $temp = '';
    for ($i = 0; $i < count($array) - 1; $i++) {
        if ($i == 0) {
            $temp = amount($array[$i], $array[$i + 1]);
        } else {
            $temp = amount($temp, $array[$i + 1]);
        }
    }
    return $temp;
}

echo amount_array([
    '00:13:00.000',
    '00:12:00.000',
    '00:12:00.000'
]);

function toSeconds($time)
{
    // $time = '01:00:10';
    $parsed = date_parse($time);
    $seconds = $parsed['hour'] * 3600 + $parsed['minute'] * 60 + $parsed['second'];

    return $seconds;
}

function pad($number)
{
    return str_pad($number, 2, "0", STR_PAD_LEFT);
}

function check($time, $limit)
{
    $arr_time = explode('.', $time);

    if (toSeconds($arr_time[0]) > $limit * 60) {
        return difference($time, to_time($limit * 60));
    } else {
        return false;
    }
}

function to_time($diff)
{
    $years = floor($diff / (365 * 60 * 60 * 24));

    $months = floor(($diff - $years * 365 * 60 * 60 * 24)
        / (30 * 60 * 60 * 24));

    $days = floor(($diff - $years * 365 * 60 * 60 * 24 -
        $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

    $hours = floor(($diff - $years * 365 * 60 * 60 * 24
        - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24)
        / (60 * 60));

    $hours2 = floor($diff / (60 * 60));

    $minutes = floor(($diff - $years * 365 * 60 * 60 * 24
        - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24
        - $hours * 60 * 60) / 60);

    $seconds = floor(($diff
        - $years * 365 * 60 * 60 * 24
        - $months * 30 * 60 * 60 * 24
        - $days * 60 * 60 * 24
        - $hours * 60 * 60
        - $minutes * 60));

    // Print the result
    return pad($hours2) . ':' . pad($minutes) . ':' . pad($seconds) . '.000';
}
