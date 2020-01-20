<?php
$url = "http://data.bmkg.go.id/datamkg/MEWS/DigitalForecast/DigitalForecast-Aceh.xml";
$sUrl = file_get_contents($url, False);
$xml = simplexml_load_string($sUrl);
$xml = json_decode(json_encode($xml), true);
// echo '<pre>' . var_export($xml, true) . '</pre>';
// 0=humidity
// 1=max humadity
// 2=max temperature
// 3=min humidity
// 4=min temperature
// 5=temperature
// 6=weather
// 7=wind direction
// 8=wind speed
//parameter ke-3 daerah
//parameter ke-5
//0-9
//untuk nilai dari temp,suhu, angin, cuaca
//parameter ke-7 (0-12) menentukan waktu 0-3 hari ini, 4-7 besok,8-11 lusa
var_dump($xml["forecast"]["area"][7]["parameter"][7]);
// $waktu = $xml["forecast"]["area"][7]["parameter"][6]["timerange"][0]["@attributes"]["datetime"];
echo "<br><br>";
echo date("d-m-Y H:i", strtotime($waktu));
//echo $xml["forecast"]["area"][7]["parameter"][6]["timerange"][0]["@attributes"]["datetime"];
// echo $xml["forecast"]["area"][7]["parameter"][0]["timerange"][0]["@attributes"]["datetime"];
// echo "<br><br>";
// echo $xml["forecast"]["area"][7]["parameter"][0]["timerange"][0]["value"];
// echo $xml[0];
// for ($i = 0; $i < 9; $i++) {
//     var_dump($xml["forecast"]["area"][7]["parameter"][$i]);
//     echo "<br><br>";
// }
// var_dump($xml["forecast"]["area"][7]["parameter"]);
