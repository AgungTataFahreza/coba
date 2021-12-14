<?php

$a = new stdClass();

$a->new_property = 'foo';
$a->new_property2 = 'foo2';
print_r($a);
unset($a->new_property);
print_r($a);
