<?php

$data = [
    [1, 'Tom'],
    [2, 'Fred'],
];

list($id1, $name1) = $data[0];
//var_dump($id1, $name1);

[$id1, $name1] = $data[0];
//var_dump($id1, $name1);

foreach ($data as [$id, $name]) {
    var_dump($id, $name);
}
