<?php

while (true) {
    $command = readline();
    if ($command == 'end')
        break;

    echo $command . ' = ' . strrev($command) . "\n";
}