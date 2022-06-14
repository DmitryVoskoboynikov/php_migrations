<?php

$factor = 10;
$nums = array_map(fn($n) => $n * $factor, [1, 2, 3, 4]);
var_dump($nums);
