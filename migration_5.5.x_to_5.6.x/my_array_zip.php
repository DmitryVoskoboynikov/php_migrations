<?php

function array_zip(...$arrays) {
    $result = array();

    $num_of_returned_arrays = sizeof($arrays[0]);

    for($i = 0; $i < $num_of_returned_arrays; $i++) 
    {
        foreach ($arrays as $array)
        {
            $result[$i][] = $array[$i];
        }
    }

    return implode(', ', array_merge(...$result));
}

$a = array(1, 5, 9, 13);
$b = array(2, 6, 10, 14);
$c = array(3, 7, 11, 15);
$d = array(4, 8, 12, 16);

var_dump(array_zip($a, $b, $c, $d));
