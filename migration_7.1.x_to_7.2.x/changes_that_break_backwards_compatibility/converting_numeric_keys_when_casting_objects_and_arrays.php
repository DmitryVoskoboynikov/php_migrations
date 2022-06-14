<?php

$arr = [0 => 1];
$obj = (object)$arr;

var_dump(
    $obj,
    $obj->{'0'}, // теперь работает
    $obj->{0} // теперь работает
);

$obj = new class {
    public function __construct()
    {
        $this->{0} = 1;
    }
};

$arr = (array)$obj;
var_dump(
    $arr,
    $arr[0], //теперь работает
    $arr['0'] //теперь работает
);
