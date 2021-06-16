<?php

$url1 = "http://localhost/coba/index10.php";
header("Refresh: 10; URL=$url1");

$koneksi = mysqli_connect("localhost", "root", "", "coba");

$result = mysqli_query($koneksi, "select * from bus1 where status='1' order by id desc");
$cek = mysqli_num_rows($result);
if ($cek > 0) {
    echo "berhasil";
    $data = mysqli_fetch_row($result);
    var_dump($data);

    $post = [
        'dt' => date("m/d/Y H:i:s"),
        'lat'   => $data[1],
        'lon' => $data[2],
        'dr' => 1111,
        'spd' => 2222,
        'id' => '300abae84b984e3096263c2f7de42506',
    ];

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "http://localhost/neoeta/public/Api/update");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

    //     dt //date
    // lon //longitude
    // lat //latitude
    // dr //direct double
    // spd //kecepatan
    // id //


    // In real life you should use something like:
    // curl_setopt($ch, CURLOPT_POSTFIELDS, 
    //          http_build_query(array('postvar1' => 'value1')));

    // Receive server response ...
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $server_output = curl_exec($ch);

    $id = $data[0];
    if ($server_output == 'sukses') {
        $result = mysqli_query($koneksi, "UPDATE bus1 SET status = '0' where id='$id'");
    }
    curl_close($ch);
} else {
    header("Location: http://localhost/coba/index9.php");
    die();
}
