<?php

$data = [
    ["id" => 1, "name" => 'Tom'],
    ["id" => 2, "name" => 'Fred'],
];

list("id" => $id1, "name" => $name1) = $data[0];
var_dump($id1, $name1);

["id" => $id1, "name" => $name1] = $data[0];
var_dump($id1, $name1);

foreach ($data as list("id" => $id, "name" => $name)) {
    var_dump($id, $name);
}

foreach ($data as ["id" => $id, "name" => $name]) {
    var_dump($id, $name);
}

