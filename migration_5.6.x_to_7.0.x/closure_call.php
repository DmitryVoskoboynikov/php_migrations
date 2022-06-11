<?php

class A {private $x = 1;}

$getX = function() {return $this->x;};
echo $getX->call(new A);
