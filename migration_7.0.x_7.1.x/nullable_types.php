<?php

function testReturn(): ?string
{
    return 'elePHPant';
}

var_dump(testReturn());

function testReturnNull(): ?string
{
    return null;
}

var_dump(testReturnNull());

function test(?string $name)
{
    var_dump($name);
}

test('elePHPant');
test(null);
test();
