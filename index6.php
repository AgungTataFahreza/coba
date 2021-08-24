
<?php
$distance = 200; //db
$jarak_baru = 210;
$array_jarak = [1118, 700, 495, 447, 979, 869, 679, 1982, 2045, 925, 723, 913];
$kondisi = 'pergi';
$max_jarak = max($array_jarak);

if ($distance > 50 && $jarak_baru > $max_jarak * 2) {
    if ($kondisi == 'pergi') {
        $kondisi = 'pulang';
    } else {
        $kondisi = 'pergi';
    }
}
