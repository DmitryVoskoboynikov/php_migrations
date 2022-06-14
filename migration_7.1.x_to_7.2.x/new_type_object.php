<?php

function test(object $obj) : object
{
    return new SplQueue();
}

var_dump(test(new StdClass()));
