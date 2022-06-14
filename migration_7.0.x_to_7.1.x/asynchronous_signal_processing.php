<?php

pcntl_async_signals(true); // включает асинхронные сигналы

pcntl_signal(SIGHUP,  function($sig) {
    echo "SIGHUP\n";
});

posix_kill(posix_getpid(), SIGHUP);

