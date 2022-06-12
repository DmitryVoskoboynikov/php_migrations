<?php 

function iterator(iterable $iter)
{
    foreach ($iter as $val) {
        var_dump($val);
    }
}


$data = [
    'Tom',
    'Fred'
];

iterator($data);
// Generate Fatal Error
iterator('string');
