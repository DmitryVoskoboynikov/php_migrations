<?php

ini_set('display_errors', 1);

class foo {
    function bar() {
        echo 'я не статический';
    }
}

foo::bar();
