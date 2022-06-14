<?php

declare(strict_types=1);

interface ITest
{
    public function run(array $input);
}

class Test implements ITest
{
    public function run($input) {
        return $input;
    }
}

echo (new Test())->run('foo'); // display foo, no error
