<?php

class ConstDemo
{
    const PUBLIC_CONST_A = 1;
    public const PUBLIC_CONST_B = 2;
    protected const PROTECTED_CONST = 3;
    private const PRIVATE_CONST = 4;
}

var_dump(ConstDemo::PUBLIC_CONST_A);
var_dump(ConstDemo::PUBLIC_CONST_B);
// Fatal Error
var_dump(ConstDemo::PROTECTED_CONST);
// Fatal Error
var_dump(ConstDemo::PRIVATE_CONST);
