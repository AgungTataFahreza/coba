<?php
$d = mktime(11, 14, 54, 8, 12, 2014);
$date = date('i', $d);

var_dump($date);
?>
<script>
    var table = [{
            data: 'no',
            name: 'no'
        },
        {
            data: 'class_name',
            name: 'class_name'
        },
        {
            data: 'racer_id',
            name: 'racer_id'
        },
        {
            data: 'name',
            name: 'name'
        },
        {
            data: 'team',
            name: 'team'
        },
        {
            data: 'address',
            name: 'address'
        },
    ];

    console.log(table[0].data);
</script>