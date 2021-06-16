<?php
date_default_timezone_set('Asia/Jakarta');
$start_date = new DateTime('2020-11-18 10:53:51');
$since_start = $start_date->diff(new DateTime());
echo $since_start->days . ' days total<br>';
echo $since_start->y . ' years<br>';
echo $since_start->m . ' months<br>';
echo $since_start->d . ' days<br>';
echo $since_start->h . ' hours<br>';
echo $since_start->i . ' minutes<br>';

// var_dump($stamp);
