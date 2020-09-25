<?php

$ch = curl_init();

// set url 
curl_setopt($ch, CURLOPT_URL, "https://data.bmkg.go.id/datamkg/MEWS/DigitalForecast/DigitalForecast-SumateraUtara.xml");

// return the transfer as a string 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// $output contains the output string 
$output = curl_exec($ch);

// tutup curl 
curl_close($ch);

// menampilkan hasil curl
// var_dump($output);
// die();

$xml = simplexml_load_string('');
$xml = new SimpleXMLElement('https://data.bmkg.go.id/datamkg/MEWS/DigitalForecast/DigitalForecast-SumateraUtara.xml', null, true);
$json = json_encode($xml);
$array = json_decode($json, TRUE);


var_dump($array);
