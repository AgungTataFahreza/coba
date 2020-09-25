<!-- <script src="jquery.js">
    function toggle() {
        $("#dua").before($("#satu"));
    }
</script> -->
<!doctype html>
<html>

<head>
    <title>alert</title>
</head>

<body>
    <form action="" method="get">
        <input type="text" id="text1" name="text1">
        <input type="submit" name="submit1" value="Simpan 1">
    </form>
    <form action="">
        <input type="text" id="text2" name="text2">
        <button type="submit" name="submit2">encrypt</button>
    </form>
    <form action="">
        <input type="text" id="text3" name="text3">
        <button type="submit" id="submit3" name="submit3">decrypt</button>
    </form>
    <button onclick="hapus()">hapus</button>
    <div id="string"></div>
    <script>
        function hapus() {
            document.getElementById('string').value = null;
            document.getElementById('text1').value = null;
            document.getElementById('text2').value = null;
            document.getElementById('string').value = null;
        }
    </script>
</body>
<?php

// $data = [1, 2, 3];
// var_dump($data);
// echo "<br><br>";
// $data[] = 4;
// var_dump($data);
// echo "<br><br>";
//echo strlen('Vm0wd2QyVkhVWGhUV0docFVtMW9WRll3Wkc5WFJsbDNXa1JTVjAxWGVGWlZNakExVmpGS2RHVkliRmhoTWsweFZtMTRTMk14WkhWaVJtUlhUVEZLVFZac1ZtRldNVnBXVFZWV2FHVnFRVGs9');
if (isset($_GET["submit1"])) {
    $kunci = password_hash($_GET["text1"], PASSWORD_DEFAULT);
    echo "text1 = " . $kunci . "<br>";
    echo "panjangnya = " . strlen($kunci);
} else if (isset($_GET["submit2"])) {
    $a = $_GET["text2"];
    for ($i = 0; $i < 8; $i++) {
        $kuncia = base64_encode($a);
        $a = $kuncia;
    }
    echo "text2 = " . $a . "<br>";
    echo "panjangnya = " . strlen($a);
} else if (isset($_GET["submit3"])) {
    $b = $_GET["text3"];
    for ($i = 0; $i < 8; $i++) {
        $kuncib = base64_decode($b);
        $b = $kuncib;
    }
    echo "text3 = " . $b . "<br>";
    echo "panjangnya = " . strlen($b);
}
//echo date('w');
// echo $_SERVER['REQUEST_URI'];
// echo $_SERVER['QUERY_STRING'];
echo $_SERVER['PHP_SELF'];
?>
<script>
    var a = '1';
    for (var i = 0; i < 8; i++) {
        a = window.btoa(a);
    }
    console.log(a);
</script>

</html>