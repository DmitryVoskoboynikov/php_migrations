<?php

function array_zip(...$arrays) {
    return array_merge(...array_map(NULL, ...$arrays));
}

$a = array(1, 4, 7);
$b = array(2, 5, 8);
$c = array(3, 6, 9);

var_dump(implode(', ', array_zip($a, $b, $c)));
