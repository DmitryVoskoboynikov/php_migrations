<?php

function swap(&$a, &$b): void
{
    [$a, $b] = [$b, $a];
}

$a = 1;
$b = 2;

var_dump(swap($a, $b), $a, $b);
