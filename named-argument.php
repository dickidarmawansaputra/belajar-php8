<?php
function sayHello(string $first, string $middle = "ok", string $last): void
{
    echo "Hello $first $middle $last" . PHP_EOL;
}


sayHello("Dicki", "Darmawan", "Saputra");
// sayHello("Dicki", "Saputra"); // error

sayHello(last: "Saputra", first: "Dicki", middle: "Darmawan");
sayHello(first: "Dicki", last: "Saputra");